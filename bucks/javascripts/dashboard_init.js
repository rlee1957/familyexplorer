// JavaScript Document
var id = document.getElementById("member_id");
var verify1 = document.getElementById("verify1");
var verify2 = document.getElementById("verify2");
var verify3 = document.getElementById("verify3");
var verify4 = document.getElementById("verify4");
var id1 = document.getElementById("id1");
var id2 = document.getElementById("id2");
var id3 = document.getElementById("id3");
var id4 = document.getElementById("id4");
var post1 = document.getElementById("post1");
var post2 = document.getElementById("post2");
var post3 = document.getElementById("post3");
var post4 = document.getElementById("post4");
var status1 = document.getElementById("status1");
var status2 = document.getElementById("status2");
var status3 = document.getElementById("status3");
var status4 = document.getElementById("status4");

var pay_received = document.getElementById("payment_received");
var payor_address = document.getElementById("payment_member_address");
var payor_address_inst = document.getElementById("payment_member_address_inst");
var received_member_id = document.getElementById("received_member_id");
var received_member_id_inst = document.getElementById("received_member_id_inst");
var verify_action = document.getElementById("verify_action");

var bCheck_recieved_member = document.getElementById("bCheck_recieved_member");
var bSave_received_member = document.getElementById("bSave_received_member");
var bCheck_recieved_member_inst = document.getElementById("bCheck_recieved_member_inst");
var bSave_received_member_inst = document.getElementById("bSave_received_member_inst");
var hasProfileChanged = false;

var checkType = "";

eval(verify_action.value);
my_profile()