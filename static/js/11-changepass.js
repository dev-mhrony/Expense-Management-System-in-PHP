const form = document.getElementById("form")
const oldpassword = document.getElementById("oldpass")
const newpassword = document.getElementById("newpass")
const confirmpassword = document.getElementById("cpass")

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
  let formcon = document.getElementsByClassName('formcontrol');
  var count = formcon.length -1;
  let flag = false;
  for(var i = 0; i< formcon.length; i++)
  {
    if(formcon[i].className === "formcontrol success")
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
    const oldpasswordval = oldpassword.value.trim()
    const newpasswordval = newpassword.value.trim()
    const cpasswordval = confirmpassword.value.trim()

    
  //validate old password
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
  if(oldpasswordval==="")
  {
    seterrormsg(oldpassword,"password cannot be blank");
  }
  else
  {
    setsuccessmsg(oldpassword);
  }
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
  //validate new password
  if(newpasswordval==="")
    {
      seterrormsg(newpassword,"password cannot be blank");
    }
    else if(newpasswordval.length < 6)
    {
      seterrormsg(newpassword,"password must be minimum 6 characters long");
    }
    else if(newpasswordval.length > 30)
    {
      seterrormsg(newpassword,"password must be maximum 30 characters long");
    }
    else
    {
      setsuccessmsg(newpassword);
    }
/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */
  //validate cpassword
    if(cpasswordval === "")
    {
      seterrormsg(confirmpassword, `password cannot be blank`)
    }
    else if(newpasswordval!==cpasswordval)
    {
      seterrormsg(confirmpassword,"The two passwords do not match")
    }
    else
    {
      setsuccessmsg(confirmpassword);
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
  formcontrol.className = "formcontrol error";
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
  formcontrol.className = "formcontrol success"; 
}/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */