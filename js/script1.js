 function validateForm(){
      
      var email = document.forms["signinForm"]["email"].value;
      var emailErr = document.getElementById("emailErr");
      var pwdErr = document.getElementById("pwdErr");
      emailErr.innerHTML = "";
      pwdErr.innerHTML = "";
      if(email.length < 3){
        emailErr.innerHTML = "length needs to be more than 3";
        return false;
      }
      alert("Signin successful");
      //alert(document.getElementById("login-nav").innerHTML);
      document.getElementById("login-nav").innerHTML = "<li>Logged in</li>";
      emailErr.innerHTML = "";
      pwdErr.innerHTML = "";
      return true;
      
      
}