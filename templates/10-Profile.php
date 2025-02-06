<?php 
    include_once "../init.php";

    // User login check
    if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }

    include_once 'skeleton.php'; 	

    // Gathering all user data
    $userobj = $getFromU->userData($_SESSION['UserId']);
    $fullname = $userobj->Full_Name;
    $usr_name = $userobj->Username;
    $emailid = $userobj->Email;
    $JoinDate = $userobj->RegDate;
    $picture = $userobj->Photo;
    

?>      

<div class="wrapper">
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
                <div class="counter" style="display: flex; align-items: center; justify-content: center;">
                            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                <form action="">
                    <h1 style="font-family: 'Source Sans Pro'">Profile</h1>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                    <div>
                        <img style="width:100px; height:100px; object-fit: cover; border-radius: 50%;" src=<?php echo '"'.$picture.'"' ?> alt="">
                    </div>
                    <div>
                        <p>Full Name:</p>
                        <input type="text" class="text-input"  style="width: 100%;" value=<?php echo '"'.$fullname.'"' ?>  readonly><br>
                    </div>
                    <div>
                        <p>User Name:</p>
                        <input type="text" class="text-input"  style="width: 100%;" value=<?php echo '"'.$usr_name.'"' ?> readonly><br>
                    </div>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                    <div>
                        <p>Email Id:</p>
                        <input type="email " style="width: 100%;" class="text-input" value=<?php echo '"'.$emailid.'"' ?> readonly><br>
                    </div>

                    <div>
                        <p>Registration Date:</p>
                        <input type="datetime" class="text-input" style="width: 100%; font-size: 1.1em; padding-left: 45px;" value=<?php echo '"'.$JoinDate.'"' ?> readonly><br>
                    </div>
                    <br>
                                     <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->                           
                    <div><br>
                        <a href="11-changepass.php"><button type="button" class="pressbutton" name="submit">Change Password</button></a>
                    </div>								
                    
                </form>
                </div>
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
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
    <script src="../static/js/10-Profile.js"></script>