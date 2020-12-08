<?php 
  include("./php_form/config.php");
  // $chatUser = $_POST['chatUser'];
  
  // $sql = "SELECT * FROM user_details WHERE user_email_id = '$chatUser' ";
  // // echo $sql;
  // $res = mysqli_query($conn,$sql);
  $exists = 0;
  if(isset($_POST['chatUser'])){
    $exists = 1;
    $chatUser = $_POST['chatUser'];
  }else{
    $exists = 0;
    $chatUser = $_POST['chatBusiness'];

    $query_check_for_executive = "SELECT * FROM business_executive WHERE executive_email_id = '$chatUser' ";
    $result_check_for_executive = mysqli_query($conn, $query_check_for_executive);

    // echo $query_check_for_executive;

    

    if(mysqli_num_rows($result_check_for_executive) > 0){
      $row_check_for_executive = mysqli_fetch_assoc($result_check_for_executive);
      $exists = 2;
      $business_id = $row_check_for_executive['business_id'];

      $query_get_business_email = "SELECT business_email_id FROM business_details WHERE business_id = '$business_id' ";
      $result_get_business_email = mysqli_query($conn, $query_get_business_email);

      $row_get_business_email = mysqli_fetch_assoc($result_get_business_email);

      $chatUser = $row_get_business_email['business_email_id'];
    }


  }
  // echo $chatUser;
  // echo $chatBusiness;
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
    <style>
      img{ max-width:100%; height: 45px; border-radius: 50px;}
      
      .chat_ib h5{ font-size:15px; color:#464646;}
      .chat_ib h5 span{ font-size:13px; float:right;}
      .chat_ib p{ font-size:14px; color:#989898; margin:auto}
      .chat_img {
        float: left; width: 11%;
      }
      .chat_ib {
        width: 100%;
        cursor: pointer;
      }

      /* .combine {
        margin: 5px 10px;
        border-bottom: 1px solid #c4c4c4;
      } */

      .chat_people{ overflow:hidden; clear:both; border-bottom: 1px solid #c4c4c4;}
      .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
      }
      .inbox_chat { height: 550px; overflow-y: scroll;}

    </style>
</head>
<body>

  <!-- sending message to someone new -->
  <!-- <form onsubmit="return messageToNewUser()">
    <input id="newUserName" placeholder="Enter user name">
    <input type="submit">
  </form> -->


  <div class="message_container" style="width: 70%;">
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
                <input type="submit" id="subButton" value="Connect" style="background-color: #EBEBEB; color: #000; width: 100px; height: 48px; border-radius: 30px; border: none;" onclick="changeContent()">
              </form>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_ib">
                <table id="users" class="table table-striped">
                  <thead>
                    <tr>
                      
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
              <input id='exists' type="hidden" value="<?php echo $exists ?>">
              <input type='submit' id='placeOrder' data-role='closeEnquiry' value="Place order" style="background-color: #05728F; color: white; width: 100px; height: 48px; border-radius: 30px; border: none; margin-left: 480px;">
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
        <div class="type_msg" style="margin-top: 3%;">
          <div class="input_msg_write">
          <form onsubmit="return sendMessage()">
            <div class="row">
              <div class="col-md-9" style="padding-left: 30px;">
                <input id="message" placeholder="Enter message" style="border-radius: 30px; padding-left: 30px;" autocomplete="OFF">
              </div>
              <div class="col-md-3" style="padding-right: 30px;">
               <input type="submit" value="Send" style="background-color: #05728F; color: white; border-radius: 30px;">
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
  var exists = "";
  
  function changeContent(){
    $("#subButton").val("Connected");
    $("#subButton").css({'background-color' : "#05728F", 'color' : '#fff'});
  }

  function enterName(){
    // get user name
    var name = document.getElementById("name").value;
    // alert(name);
    // send it to server
    io.emit("user_connected", name);

    // getting user type
    var exists = document.getElementById('exists').value;
    // alert(exists);

    // save sender name
    sender = name;
    var user_type = ""
    // fetching user form past and their chats
    $.ajax({
      url : "http://localhost:3000/get_user",
      method: "POST",
      data: {username:name, exists:exists},
      success: function(response){
        //console.log("response: ",response);
        var contact = JSON.parse(response);
        // console.log("from php file: ", contact);
        // console.log(contact[contact.length-1]['user_type']);

        var users = "";
        var id = "";

        if(contact[contact.length-1]['user_type'] === 'executive'){
          // console.log("yeah");
          for (var a = 0; a < contact.length-1; a++){
            enq_id = contact[a].enquiry_id;
            // users += "<tr><td id='xyz'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this);' style='border-left: none !important; border-right: none !important;'>"+ contact[a].sender + "<td></tr>";
            // users += "<div class='chat_people'><div class='chat_img'><img src='"+ contact[a].user_profile_picture +"'></div><div class='chat_ib'><h5 onclick='onUserSelected(this);' style='padding-left: 60px; padding-top: 5px;'>"+ contact[a].sender +"</h5><p id='xyz' style='padding-left: 60px;'>"+ contact[a].enquiry_id +" - "+ contact[a].product_quantity +" x "+ contact[a].product_unit +", "+ contact[a].product_name +"</p></div></div>"
            users += "<tr><td id='xyz' style='vertical-align: middle; font-weight: bold;'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this);' style='vertical-align: middle; font-weight: bold;'>"+ contact[a].sender + "</td><td style='text-align: center; vertical-align: middle;'><div><img src='"+ contact[a].user_profile_picture +"'></div>"+ contact[a].first_name +" "+ contact[a].last_name +"</td><td style='text-align:center; vertical-align: middle;'>"+ contact[a].product_quantity +" x "+ contact[a].product_unit +", "+ contact[a].product_name +"</td></tr>";
          }
        } else{
          for (var a = 0; a < contact.length-1; a++){
            enq_id = contact[a].enquiry_id;
            // users += "<tr><td id='xyz'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this);' style='border-left: none !important; border-right: none !important; padding-left: 0px'>"+ contact[a].sender +"</td></tr>";
            // users += "<div class='chat_people'><div class='chat_img'><img src='"+ contact[a].user_profile_picture +"'></div><div class='chat_ib'><h5 onclick='onUserSelected(this);' style='padding-left: 60px; padding-top: 5px;'>"+ contact[a].sender +"</h5><p id='xyz' style='padding-left: 60px;>"+ contact[a].enquiry_id +" - "+ contact[a].product_quantity +" x "+ contact[a].product_unit +", "+ contact[a].product_name +"</p></div></div>"
            users += "<tr><td id='xyz' style='vertical-align: middle;'>"+ contact[a].enquiry_id +"</td><td onclick='onUserSelected(this);' style='vertical-align: middle;'>"+ contact[a].sender + "</td><td style='text-align: center; vertical-align: middle;'><div><img src='"+ contact[a].user_profile_picture +"'></div>"+ contact[a].executive_first_name +" "+ contact[a].executive_last_name +" <br> "+ contact[a].legal_name +"</td><td style='text-align:center; vertical-align: middle;'>"+ contact[a].product_quantity +" x "+ contact[a].product_unit +", "+ contact[a].product_name +"</td></tr>";
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
    // io.on("user_connected", function(username){
    //   //console.log("from php",username);

    //   var users = "";
    //   users += "<tr><td onclick='onUserSelected(this.innerHTML);'>" + username + "</td></tr>"; 

    //   // appending to list above
    //   document.getElementById("users").innerHTML += users;
    // });

    $('input[data-role=closeEnquiry]').click(function(){
        var closeEnquiry = $(this).attr("id");
        //console.log(closeEnquiry);

      $.post('php_form/update_enquiry.php',{enquiry_id: closeEnquiry}, function(){
        alert('Order Placed');
        location.reload();
      })

    })

    function onUserSelected(e){
      // alert(JSON.stringify(e));
      // alert(e.innerHTML);
      receiver = e.innerHTML;

      $('#users tbody tr').click(function(){
        var tableData = $(this).children("td").map(function(){
          return $(this).text();
        })
        enq_id = tableData[0];
        
        // alert(enq_id);
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
          enquiry_id: enq_id,
          exists:exists
        },
        success: function(response){
          //console.log(response);

          var messages = JSON.parse(response);
          var html = "";
          var user = $('#name').attr("value");
          for (var a = 0; a < messages.length; a++){
            if(messages[a].sender == user){
              html += "<tr style='float: right; width: 60%; background-color: #05728F; color: #fff; margin: 4px; border-radius: 4px;'><td onclick='onUserSelected(this.innerHTML);'>"+ messages[a].message_body +"</td></tr>";
            }else{
              html += "<tr style='float: left;width: 60%; background-color: #EBEBEB; margin: 4px; border-radius: 4px;'><td onclick='onUserSelected(this.innerHTML);'>"+ messages[a].message_body +"</td></tr>";
              //html += "<tr style='float: left;width: 60%; background-color: #EBEBEB; margin: 4px; border-radius: 4px;'><td onclick='onUserSelected(this.innerHTML);'>"+ messages[a].message_body +"</td></tr>";
            }
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
      html += "<tr style='float: right; width: 60%; background-color: #05728F; color: #fff; margin: 4px; border-radius: 4px;'><td onclick='onUserSelected(this.innerHTML);'>You said:" + message +"</td></tr>";
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