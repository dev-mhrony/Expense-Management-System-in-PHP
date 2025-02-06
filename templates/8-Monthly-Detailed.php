<?php 
	include_once "../init.php";
	if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
    }
	include_once 'skeleton.php'; 	
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
			            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                        <h4 style="font-family:'Source Sans Pro'; font-size: 1.3em; text-align: center">Expenses incurred between <?php echo date('F, Y', strtotime($_POST['mthfrom'])); ?> and <?php echo date('F, Y', strtotime($_POST['mthto'])); ?></h4>    
                   </div>
				               <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                   <div class="card-content">
                   <table>
							<thead>
								<tr>
									<th>#</th>
									<th>Item</th>
									<th>Cost</th>
									<th>Month</th>
								</tr>
							</thead>
							            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
							<tbody id="chart-facilitate1">
								<?php 
									$_POST['mthto'] = $_POST['mthto']."-01";
									$_POST['mthfrom'] = $_POST['mthfrom']."-01";

									$mthexp = $getFromE->mthwise($_SESSION['UserId'],$_POST['mthfrom'],$_POST['mthto']);
									if($mthexp !== NULL)
									{
										$len = count($mthexp);
										for ($x = 1; $x <= $len; $x++) {
										echo "<tr>
											<td>".$x."</td>
											<td>".$mthexp[$x-1]->Item."</td>
											<td>"."$ ".$mthexp[$x-1]->Cost."</td>
											<td>".date("d-m-Y",strtotime($mthexp[$x-1]->Date))."</td>
										</tr>";	
									  }
									}
								?>
                                
							</tbody>
						</table>
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
		   <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Expense Graph
                        </h3>
						<div class="card-content">
							<canvas id="myChart1" ></canvas>
						</div>
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
<script src="../static/js/8-Monthly-Detailed.js"></script>

