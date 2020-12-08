<?php 
  $chatUser = $_POST['chatUser'];
  // echo $chatUser;
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
<head>
    <meta charset="UTF-8">
    <title>B2B Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- include jquery and socket IO -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js" integrity="sha256-yr4fRk/GU1ehYJPAs8P4JlTgu0Hdsp4ZKrx8bDEDC3I=" crossorigin="anonymous"></script> -->

</head>
<body>

  <!-- sending message to someone new -->
  <!-- <form onsubmit="return messageToNewUser()">
    <input id="newUserName" placeholder="Enter user name">
    <input type="submit">
  </form> -->


  <div class="message_container">
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <!-- <h4>Recent</h4> -->
              <!-- creating form to enter usernmae -->
              <!-- Enter your name -->
              <form id="loadChat" onsubmit="return enterName()">
                <input type="hidden" id="name" placeholder="Enter name" value="<?php echo $chatUser ?>">
                <input type="submit" id="subButton" value="Connect" style="background-color: blue; color: white; width: 100px; height: 48px; border-radius: 30px; border: none;" onclick="changeContent()">
              </form>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <!-- <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div> -->  
                <div class="chat_ib">
                <table id="users" class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col"> Enquiry ID</th>
                      <th scope="col"> User</th>
                  </tr>
                  </thead>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="mesgs">
          <div class="headind_srch1">
            <div class="recent_heading">
              <!-- <h4>Recent</h4> -->
              <!-- creating form to enter usernmae -->
              <!-- Enter your name -->
              <input type='submit' id='placeOrder' data-role='closeEnquiry' value="Place order" style="background-color: orange; color: white; width: 100px; height: 48px; border-radius: 30px; border: none; margin-left: 400px;">
              </form>
            </div>
          </div>
          <div class="msg_history">
            <div class="incoming_msg">
                <div class="received_msg">
                <div class="received_withd_msg">
                <table id="messages" class="table table-striped"></table>
              </div>
            </div>
          </div>
        </div>
        <div class="type_msg">
          <div class="input_msg_write">
          <form onsubmit="return sendMessage()">
            <div class="row">
              <div class="col-md-9">
                <input id="message" placeholder="       Enter message" style="border-radius: 30px;">
              </div>
              <div class="col-md-3">
               <input type="submit" value="Send" style="background-color: blue; color: white; border-radius: 30px;">
              </div>
            </div>
          </form>  
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
  // creating io instance
  var io = io("http://localhost:3000");

  var receiver = "";
  var sender = "";
  var enq_id = "";
  
  function changeContent(){
    $("#subButton").val("Connected");
    $("#subButton").css({'background-color':"#7CFC00"});
  }

  function enterName(){
    // get user name
    var name = document.getElementById("name").value;
    // console.log(name);
    // send it to server
    io.emit("user_connected", name);

    // save sender name
    sender = name;
    var user_type = ""
    // fetching user form past and their chats
    $.ajax({
      url : "http://localhost:3000/get_user",
      method: "POST",
      data: {username:name},
      success: function(response){
        //console.log("response: ",response);
        var contact = JSON.parse(response);
        // console.log("from php file: ", contact);
        // console.log(contact[contact.length-1]['user_type']);

        var users = "";
        var id = "";

        if(contact[contact.length-1]['user_type'] === 'receiver'){
          // console.log("yeah");
          for (var a = 0; a < contact.length-1; a++){
            enq_id = contact[a].enquiry_id;
            users += "<tr><td id='xyz'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this.innerHTMl);' style='border-left: none !important; border-right: none !important;'>"+ contact[a].receiver + "<td></tr>";
          }
        } else{
          for (var a = 0; a < contact.length-1; a++){
            enq_id = contact[a].enquiry_id;
            users += "<tr><td id='xyz'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this.innerHTML);' style='border-left: none !important; border-right: none !important; padding-left: 0px'>"+ contact[a].sender  +"</td></tr>";
          }
          console.log("fish");
        }

      document.getElementById("subButton").disabled = true; 
      // appending to list above
      document.getElementById("users").innerHTML += users;
      }
    });

    // prevent the form from submitting
    return false;
    }

    // listen from server
    io.on("user_connected", function(username){
      //console.log("from php",username);

      var users = "";
      users += "<tr><td onclick='onUserSelected(this.innerHTML);'>" + username + "</td></tr>"; 

      // appending to list above
      document.getElementById("users").innerHTML += users;
    });

    $('input[data-role=closeEnquiry]').click(function(){
        var closeEnquiry = $(this).attr("id");
        //console.log(closeEnquiry);

      $.post('php_form/update_enquiry.php',{enquiry_id: closeEnquiry}, function(){
        alert('Order Placed');
        location.reload();
      })

    })

    function onUserSelected(username){
      //console.log(username);
      receiver = username;

      $('#users tbody tr').click(function(){
        var tableData = $(this).children("td").map(function(){
          return $(this).text();
        })
        enq_id = tableData[0];
        
        //alert(enq_id);
      });
      //document.getElementById("placeOrder").value = enq_id;
      $('input[data-role=closeEnquiry]').attr('id',enq_id);

      // calling ajax to load messages
      $.ajax({
        url: "http://localhost:3000/get_messages",
        method: "POST",
        data:{
          sender: sender,
          receiver: receiver,
          enquiry_id: enq_id
        },
        success: function(response){
          //console.log(response);

          var messages = JSON.parse(response);
          var html = "";

          for (var a = 0; a < messages.length; a++){
            html += "<tr><td onclick='onUserSelected(this.innerHTML);'>"+ messages[a].sender +" says: "+ messages[a].message_body +"</td></tr>";
          }

          //append in list
          document.getElementById("messages").innerHTML = html;

        }
      });
    }
    
    function sendMessage(){
      //get message
      var message = document.getElementById("message").value;

      //alert(enq_id);

      // send message to server
      io.emit("send_message", {
        sender: sender,
        receiver: receiver,
        message: message,
        enquiry_id: enq_id
      });

      var html = "";
      html += "<tr><td onclick='onUserSelected(this.innerHTML);'>You said:" + message +"</td></tr>";
      document.getElementById("messages").innerHTML += html;
      $('#message').val("");
      return false;
      
    }

    //listen from server for message
    io.on("new_message", function(data){
      // console.log(data);

      //display message in list
      var html = "";
      html += "<tr><td onclick='onUserSelected(this.innerHTML);'>"+ data.sender +" says: "+ data.message +"</td></tr>";

      // appending the messages
      document.getElementById("messages").innerHTML += html;
    });

    function messageToNewUser(){
      var newUser = document.getElementById("newUserName").value;
      var message = document.getElementById("message").value;
      var sender = document.getElementById("name").value;

      // console.log(newUser);
      // console.log(sender);
      // console.log(message);

      // receiver = newuser;
      io.emit("message_new_user", {
        sender : sender,
        receiver : newUser,
        message : message
      });

      var html = "";
      html += "<tr><td onclick='onUserSelected(this.innerHTML);'>You said:" + message +"</td></tr>";
      document.getElementById("messages").innerHTML += html;
      return false;
      
    }

</script>
   
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
</html>