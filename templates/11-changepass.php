<?php 
    include_once "../init.php";

    // User login check
    if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }

    include_once 'skeleton.php'; 

    // Password validation and change
    if(isset($_POST['changepwd']))
    {

        $old_pass_hash = $getFromU->userData($_SESSION['UserId'])->Password;
        $confirmpass = md5($_POST['oldpass']);
        function function_alert($message) {   
            echo "<script>
            Swal.fire({
                title: '',
                text: '$message',
                icon: '',
                confirmButtonText: 'Okay!'
            })
            </script>";
        } 
        if($confirmpass === $old_pass_hash)
        {
            $getFromU->update('user',$_SESSION['UserId'], array('Password' => md5($_POST['newpass'])));
            function_alert("Password Updated Successfully");
        }
        else
        {
            function_alert("Could Not Change Password");
        }
    }

?>

<div class="wrapper">
                <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
        <div class="marq" style="padding: 5px;border-radius: 3px;margin: 7px;font-size: 15px;background: white;box-shadow: 2px 2px 7px lightgreen;" >
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> is the sole owner of this script. It is not suitable for personal use. And releasing it in demo version. Besides, it is being provided for free only from <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>. For any of your problems contact us on <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> facebook group / page or message <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> on facebook. Thanks for staying with <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>.</marquee>
        </div>
                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12" >
                <div class="card">
                    <div class="counter" style="height: 60vh; display: flex; align-items: center; justify-content: center;">
                    <form action="" method="post" onsubmit="return validate()" id="form">
								            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
								<div class="formcontrol">
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Current Password:</label><br>
									<input type="password" class="text-input" name="oldpass" id="oldpass" value="" required="true" style="padding-top: 10px; "><br>
                                    <small></small>
                                </div>
                                            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                                <div class="formcontrol">
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">New Password:</label><br>
									<input type="password" class="text-input" name="newpass" id="newpass" value="" required="true" style="padding-top: 10px; "><br>
                                    <small></small>
                                </div>
                                            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                                <div class="formcontrol">
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Re-Type Password:</label><br>
									<input type="password" class="text-input" name="cnewpass" id="cpass" value="" required="true" style="padding-top: 10px; "><br>
                                    <small></small>
                                </div>
									            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->							
								<div><br>
									<button type="submit" class="pressbutton" name="changepwd">Change Password</button>
								</div>								
								
								</div>
								            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
							</form>
                    </div>
                </div>
            </div>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <div style="text-align: center;padding: 20px;" >
                Copyright by <a style="text-decoration: none;" href="https://www.youtube.com/@codecampbdofficial" target="_blank" rel="noopener noreferrer">Code Camp BD</a>
            </div>
        </div>
    </div>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
    <script src="../static/js/11-changepass.js"></script>
    <link rel="stylesheet" src="../static/css/11-changepass.css">