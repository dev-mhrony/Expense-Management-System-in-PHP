<?php 
	include_once '../init.php'; 

	// User login check
	if ($getFromU->loggedIn() === false) {
        header('Location: ../index.php');
	}

	include_once 'skeleton.php';
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
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                        <!-- <i class="fas fa-ellipsis-h"></i> -->
                        <h4 style="font-family:'Source Sans Pro'; font-size: 1.3em; text-align: center">Expenses incurred between <?php echo date("d-m-Y",strtotime($_POST['dtfrom'])) ?> and <?php echo date("d-m-Y",strtotime($_POST['dtto'])) ?></h4>    

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
									<th>Desc.</th>
									<th>Cost</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody id="chart-facilitate">
								<?php

									$dtexp = $getFromE->dtwise($_SESSION['UserId'],$_POST['dtfrom'],$_POST['dtto']);
									if($dtexp !== NULL)
									{
										$len = count($dtexp);
										for ($x = 1; $x <= $len; $x++) {
										echo "<tr>
											<td>".$x."</td>
											<td>".$dtexp[$x-1]->Item."</td>
											<td>"."$ ".$dtexp[$x-1]->Cost."</td>
											<td>".date("d-m-Y",strtotime($dtexp[$x-1]->Date))."</td>
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
							<canvas id="myChart" ></canvas>
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
<script src="../static/js/7-Datewise-Detailed.js"></script>
