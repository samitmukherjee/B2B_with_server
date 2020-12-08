//creating express instace
var express = require("express");
var app = express();

//creating http instance
var http = require("http").createServer(app);

// creating socket io instance
var io = require("socket.io")(http);

// creating body parser instance
var bodyParser = require("body-parser");

// enable URL encoded for POST requests
app.use(bodyParser.urlencoded({
    extended: true
}));

// creating mysql instance
var mysql = require("mysql");

// connecting with database
var connection = mysql.createConnection({
    // "host" : "localhost",
    // "user" : "root",
    // "password" : "1234",
    // "database" : "b2b_updated_with_admin_2"

    // //AWS
    // "host":  "localhost:3306",
    // "user":  "marketplace",
    // "password":  "marketplace!@#$%",
    // "database":  "manasch4_b2b_updated_with_admin"

    // manas server
    // "host" : "localhost:3306",
    // "user" : "manasch4_manas40",
    // "password" : "Shivam@123",
    // "database" : "manasch4_b2b_updated_with_admin"

    // Manas Localhost
    "host" : "localhost",
    "user" : "root",
    "password" : "",
    "database" : "b2b_updated_with_admin_2"
})

// connect
connection.connect(function(error){
    // show error if any
});

// enabling headers required for POST request
app.use(function (request, result, next){
    result.setHeader("Access-Control-Allow-Origin", "*");
    next();
});

app.post("/get_user", function(request, result){
    var checking = request.body.exists;
    // console.log(checking);  
    
    if(checking == 1){
        connection.query("SELECT DISTINCT enquiry_details.enquiry_id, enquiry_details.product_quantity, enquiry_details.product_unit, product_details.product_name, message_details.sender, message_details.receiver, business_executive.executive_first_name, business_executive.executive_last_name, business_executive.profile_picture, business_details.legal_name FROM enquiry_details, message_details, user_details, business_executive, product_details, business_details WHERE enquiry_details.product_id = product_details.product_id AND enquiry_details.enquiry_id = message_details.enquiry_id AND enquiry_details.business_id = business_details.business_id AND enquiry_details.business_id = business_executive.business_id AND enquiry_details.enquiry_status = 0 AND receiver = '"+ request.body.username +"'", function(error, contact1){
            contact1[contact1.length] = {"user_type":"buyer"};
            // console.log("if");
            // console.log("from js file",contact1)
            result.send(JSON.stringify(contact1));
        });
    }else{
        // console.log(request.body.username);
        connection.query("SELECT DISTINCT enquiry_details.enquiry_id, enquiry_details.product_quantity, enquiry_details.product_unit, product_details.product_name, message_details.sender, message_details.receiver, user_details.first_name, user_details.last_name, user_details.user_profile_picture FROM enquiry_details, message_details, user_details, product_details WHERE enquiry_details.enquiry_id = message_details.enquiry_id AND enquiry_details.user_id = user_details.user_id AND enquiry_details.product_id = product_details.product_id AND enquiry_details.enquiry_status = '0' AND receiver = '"+ request.body.username +"'", function(error, contact1){
            contact1[contact1.length] = {"user_type":"executive"};
            // console.log("user list from js file",contact1)

            // console.log("else");
            result.send(JSON.stringify(contact1));
        });
    }
    // SELECT DISTINCT enquiry_details.enquiry_id, message_details.sender, message_details.receiver FROM message_details INNER JOIN enquiry_details on message_details.enquiry_id = enquiry_details.enquiry_id WHERE enquiry_details.enquiry_status = '0' AND receiver = '"+ request.body.username +"'
    // console.log(request.body.exists);

})

// creating api to fetch all messages
app.post("/get_messages", function(request, result){
    console.log(request.body.enquiry_id);
    console.log(request.body.sender);
    console.log(request.body.receiver);

    var checking = request.body.exists;
    // console.log(request);

    // if(checking == 1){

    // }else{
        // console.log('0');
        connection.query("SELECT * FROM message_details WHERE enquiry_id = '"+ request.body.enquiry_id +"' AND (sender = '"+ request.body.sender +"' AND receiver = '" + 
        request.body.receiver + "' OR  sender = '"+ request.body.receiver +"' AND receiver = '" + request.body.sender + "')", function(error,messages){
        // response will be JSON
        //console.log(messages);
        result.send(JSON.stringify(messages));
        });
    // }
   
});


var users = [];

io.on("connection", function(socket){
    console.log("user connected", socket.id);

    //attaching incoming listener for new user
    socket.on("user_connected", function(username){
        // console.log(username);
        // save in array
        // assigning socketid to users
        users[username] = socket.id;
        //console.log(users[username] = socket.id);

        //notify to current user the contacts
        //io.emit("user_connected", username);

    });

    // listen form client
    socket.on("send_message", function(data){
        console.log(data.receiver);
        console.log(data.sender);
        var enquiry_id = data.enquiry_id;
        // send data to receiver
        // get the scoket id of receiver
        var socketId = users[data.receiver];
        
        // send message to receiver 
        io.to(socketId).emit("new_message", data);

        // saving message in database
        connection.query("INSERT INTO message_details (sender, receiver, message_body, enquiry_id) VALUES ('"+ data.sender +"','"+ data.receiver +"','"+ data.message +"','"+ data.enquiry_id +"')", function(error, result){

        });
    });

    // listen from client for new user
    socket.on("message_new_user", function(data){
        // console.log("sender: "+ data.sender +" receiver: "+ data.receiver +" message: "+data.message);
        // storing message in database for user to fetch when he logs in 
        connection.query("INSERT INTO message_details (sender, receiver, message_body, enquiry_id) VALUES ('"+ data.sender +"','"+ data.receiver +"','"+ data.message +"','"+ data.enquiry_id +"')", function(error, result){

        });
    });
    
});

//  starting the server
http.listen(3000, function(){
    console.log("Server up and running");
});

