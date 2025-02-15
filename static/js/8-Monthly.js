const form = document.getElementById("mthform")
const from = document.getElementById("mthfrom")
const to = document.getElementById("mthto")


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
  let formcon = document.getElementsByClassName('mthcontrol');
  var count = formcon.length -1;
  console.log(count);
  let flag = false;
  for(var i = 0; i< formcon.length; i++)
  {
    if(formcon[i].className === "mthcontrol success")
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
    const x1 = new Date(from.value)
    const x2 = new Date(to.value)

  if(x1>x2)
  {
    seterrormsg(to,"Date Range Invalid");
  }
  else
  {
    setsuccessmsg(to);
    setsuccessmsg(from);
  }

    let yy = successmsg();
    if(yy == true)
    return true;
    else
    return false;
}/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */

function seterrormsg(input, msg){
  const f1 = input.parentElement;
  const small = f1.querySelector('small');
  small.innerText = msg;
  f1.className = "mthcontrol error";
}/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */

function setsuccessmsg(input){
  const formcontrol = input.parentElement;
  formcontrol.className = "mthcontrol success"; 
}/* <!-- 
- Author Name: MH RONY.
- GigHub Link: https://github.com/dev-mhrony
- Facebook Link:https://www.facebook.com/dev.mhrony
- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
- for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
--> */