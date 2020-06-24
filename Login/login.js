var form = document.getElementById("form");
var user = document.getElementById("user");
var email = document.getElementById("email");
var pwd = document.getElementById("pwd");
var pwd2 = document.getElementById("pwd2");
var country = document.getElementById("country");
var msg = document.getElementById("msg");


function checkAll(){
	if (user.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "User is required.";
      return false;
    }
    if (pwd.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "Password is required.";
      return false;
    }
    if (pwd2.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "Password confirmation is required.";
      return false;
    }
    msg.style.display="block";
    msg.innerHTML = "Login Success.";
    return true;
}