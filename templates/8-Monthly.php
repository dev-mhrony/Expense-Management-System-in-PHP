<?php  
    include_once "../init.php";
    if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }

    if(isset($_POST['datewise']))
    {
        header("Location: 8-Monthly-Detailed.php");
    }
    include_once 'skeleton.php'; 	
?>

<div class="wrapper">
    <div class="marq" style="padding: 5px;border-radius: 3px;margin: 7px;font-size: 15px;background: white;box-shadow: 2px 2px 7px lightgreen;" >
        <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> is the sole owner of this script. It is not suitable for personal use. And releasing it in demo version. Besides, it is being provided for free only from <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>. For any of your problems contact us on <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> facebook group / page or message <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> on facebook. Thanks for staying with <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>.</marquee>
    </div>
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
                <form action="8-Monthly-Detailed.php" method="post" id="mthform" onsubmit = "return validate()">
                    <h1 style="display: block; font-family: 'Source Sans Pro'">Monthwise Expense Report</h1>
                        <div class = "mthcontrol">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">From:</label><br>
                            <input class="text-input" type="month" id='mthfrom' value="" name="mthfrom" required="true" style="width: 100%; padding-top: 8px; "><br><br><br>
                            <small></small>
                        </div>
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                        <div class = "mthcontrol">
                            <label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">To:</label><br>
                            <input class="text-input" type="month" id="mthto" value="" name="mthto" required="true" style="width: 100%; padding-top: 8px; "><br><br>
                            <small style="font-family: 'Source Sans Pro'; font-size:1.01em;"></small>        
                        </div>									
                        <div><br>
                        <button type="submit" class="pressbutton" name="mthsubmit">Submit</button>
                        </div>								                            
                </form>
                            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
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
<script src="../static/js/8-Monthly.js"></script>