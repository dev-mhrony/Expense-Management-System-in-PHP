<?php 
    include_once "../init.php";
    if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }
    include_once 'skeleton.php'; 


    if(isset($_POST['enterbudget']))
    {
        echo '<script>
        Swal.fire({
            title: "Done!",
            text: "Records Updated Successfully",
            icon: "success",
            confirmButtonText: "Close"
          })
        </script>';

        $user_id = $_SESSION['UserId'];
        $budget = $_POST['budget'];
        
        $curr_budget = $getFromB->checkbudget($user_id);

        if($curr_budget == NULL)
        {
            $getFromB->setbudget($user_id,$budget);
        }
        else
        {
            $getFromB->updatebudget($user_id, $budget);
        }
        
    }
?>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
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
                    <div class="counter"  style="height: 40vh; display: flex; align-items: center; justify-content: center;">
                        <form action="" method="post"> 
                                <p style="font-size: 1.4em; color:black; font-family:'Source Sans Pro'">
                                    Enter your budget for this month:
                                </p><br>
                                <input type='text' name="budget" onkeypress='validate(event)' class="text-input" style="color:black;font-size: 1.2em;;background: rgba(0,0,0,0);text-align: center; border: none; outline: none; border-bottom: 2px solid black;" required/><br><br><br>
                                <button type="submit" name="enterbudget" class="pressbutton">Submit</button>
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
        </div>
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
    <script src="../static/js/4-Set-Budget.js"></script>

