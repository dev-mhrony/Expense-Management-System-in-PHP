//For Form Validation

const form = document.getElementById("form1")
const username = document.getElementById("user1")
const password = document.getElementById("pass1")

const sendData = (srate, count) => {
    if(srate === count){
      return true;
    }

}
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
const successmsg = () => {
  let formcon = document.getElementsByClassName('form-controller');
  var count = formcon.length -1;
  let flag = false;
  for(var i = 0; i< formcon.length; i++)
  {
    if(formcon[i].className === "form-controller successful")
    {
      var srate = 0+i;  
      flag = sendData(srate,count);  
    }
    else 
    {
      return false;
    }
  }
  return flag;
}
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
const validate = () => {
    const usernameval = username.value.trim()
    const passwordval = password.value.trim()
    /* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
  //validate username
    if(usernameval === "")
    {
      seterrormsg(username, "Username cannot be blank");
    }
    else if(usernameval.length <=2)
    {
      seterrormsg(username, "Minimum length of username: 3 characters")
    }
    else{
      setsuccessmsg(username);
    }
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
  //validate password

    if(passwordval==="")
    {
      seterrormsg(password,"password cannot be blank");
    }
    else
    {
      setsuccessmsg(password);
    }
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
    let resultant = successmsg();
    if(resultant == true)
    return true;
    else
    return false;
}

function seterrormsg(input, msg){
  const formcontrol = input.parentElement;
  const small = formcontrol.querySelector('small');
  small.innerText = msg;
  formcontrol.className = "form-controller mistake";
}
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
function setsuccessmsg(input){
  const formcontrol = input.parentElement;
  formcontrol.className = "form-controller successful"; 
}/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */