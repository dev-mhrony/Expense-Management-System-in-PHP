<?php 
	include_once "../init.php";

	// User login checker
	if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
	}

	include_once 'skeleton.php'; 

	// Deletes expense record
	if(isset($_POST['delrec']))
	{
		$getFromE->delexp($_POST['ID']);
		echo "<script>
				Swal.fire({
					title: 'Done!',
					text: 'Record deleted successfully',
					icon: 'success',
					confirmButtonText: 'Close'
				})
				</script>";
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
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                        
                        <i class="fas fa-ellipsis-h"></i>
                        <h3 style="font-family:'Source Sans Pro'; font-size: 1.5em;">
                            Expenses
                        </h3>
                   </div>
                   <div class="card-content">
                   <table>
					            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
							<thead>
								<tr>
									<th>#</th>
									<th>Item</th>
									<th>Cost</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
								<?php 
										$totexp = $getFromE->allexp($_SESSION['UserId']);
										if($totexp !== NULL)
										{
											$len = count($totexp);
											for ($x = 1; $x <= $len; $x++) {
											echo "<tr>
												<td>".$x."</td>
												<td>".$totexp[$x-1]->Item."</td>
												<td>"."$ ".$totexp[$x-1]->Cost."</td>
												<td>".date("d-m-Y",strtotime($totexp[$x-1]->Date))."</td>	
												<td><form style='margin-block-end: 0;' action='' method='post'><input style='display:none;' name='ID' value=".$totexp[$x-1]->ID."></input><button type='submit' name='delrec' class='btn btn-default' style='background:none; color:#8f8f8f; font-size:1em;'>
												<i class='far fa-trash-alt' style='color:red;'></i></button></form></td>
											</tr>";	
											}
										}
									?>
							</tbody>
						</table>
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