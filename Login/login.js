var form = document.getElementById("form");
var user = document.getElementById("user");
var email = document.getElementById("email");
var pwd = document.getElementById("pwd");
var pwd2 = document.getElementById("pwd2");
var country = document.getElementById("country");
var msg = document.getElementById("msg");


function checkAll(e){
	e.preventDefault()
	if (user.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "User is required.";
      return;
    }
    if (email.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "Email is required.";
      return;
    }
    if (pwd.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "Password is required.";
      return;
    }
    if (pwd2.value === ""){
	  msg.style.display="block";
      msg.innerHTML = "Password confirmation is required.";
      return;
    }
    msg.style.display="block";
    msg.innerHTML = "Login Success.";
    return;
}
form.addEventListener("submit",checkAll);