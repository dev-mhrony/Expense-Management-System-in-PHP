<?php 
	include_once "../init.php";

	//User login checker
	if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
	}
	
	include_once 'skeleton.php'; 

	// Create an expense record
	if(isset($_POST['addexpense']))
	{
		$dt = date("Y-m-d H:i:s", strtotime($_POST["dateexpense"]));
		$itemname = $_POST['item'];
		$itemcost = $_POST['costitem'];
		$getFromE->create("expense", array('UserId'=>$_SESSION['UserId'], 'Item' => $itemname, 'Cost'=>$itemcost, 'Date' => $dt));
		echo '<script>
			Swal.fire({
				title: "Done!",
				text: "Records Updated Successfully",
				icon: "success",
				confirmButtonText: "Close"
			})
			</script>';
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
                    <div class="counter" style="height: 60vh; display: flex; align-items: center; justify-content: center;">
                    <form action="" method="post">
								<div>
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Date of Expense:</label><br><br>
									<input class="text-input" type="datetime-local" value="" name="dateexpense" required="true" style="width: 100%; padding-top: 8px; "><br><br>
								</div>
								<div>
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Item:</label><br>
									<input type="text" class="text-input" name="item" value="" required="true" style="width: 100%; padding-top: 10px; "><br><br>
								</div>
								            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
								<div>
									<label style="font-family: 'Source Sans Pro'; font-size: 1.3em; ">Cost of Item:</label><br>
									<input class="text-input" type="text" value="" required="true" name="costitem" onkeypress='validate(event)' style="width: 100%; padding-top: 10px; "><br><br>
								</div>
																
								<div><br>
									<button type="submit" class="pressbutton" name="addexpense">Add</button>
								</div>								
								
								</div>
								
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
    <script src="../static/js/4-Set-Budget.js"></script>