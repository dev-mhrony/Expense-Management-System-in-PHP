<?php
    include_once "../init.php";
    
    $pic = $getFromU->Photofetch($_SESSION['UserId']);
    $pic = '"'. $pic . '"';
?>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/images/expenseic.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
                <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="../static/css/skeleton.css">
    <link rel="stylesheet" href="../static/css/11-changepass.css">
    <link rel="stylesheet" href="../static/css/7-Datewise.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/css/yearpicker.css">
    <link rel="stylesheet" href="../static/css/6-Manage-Expenses.css">
    <script src="../static/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../static/js/yearpicker.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
    <title>Expense Management - Code Camp BD</title>
    
</head>
            <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
<body class="overlay-scrollbar sidebar-expand">
    <!-- Navbar -->
    <div class="navbar">
        <!-- nav-left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class='nav-link'>
                    <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="nav-item">
                <img src="../static/images/expenseic.png" alt="" class="logo">
            </li>
        </ul>

        <!-- end nav left  -->
        <h1 class="navbar-text">Expense Management System - Code Camp BD</h1>
        <!-- nav right  -->
        <ul class="navbar-nav nav-right">
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" onclick = "switchTheme()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </a>
            </li> -->
            <li class="nav-item">
                <div class="avt dropdown">
                    <img src=<?php echo $pic ?> alt="" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                        <li class="dropdown-menu-item">
                            <a href="10-Profile.php" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                        <li class="dropdown-menu-item">
                            <a href="https://github.com/dev-mhrony?tab=repositories" target="_blank" class="dropdown-menu-link">
                                <div>
                                <i class="fa fa-cube" aria-hidden="true"></i>
                                </div>
                                <span>More Projects</span>
                            </a>
                        </li>
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                        <li class="dropdown-menu-item">
                            <a href="logout.php" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                                    <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
                    </ul>
                </div>
            </li>   
        </ul>
    </div>
    <!-- end navbar -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item">
                <a href="3-Dashboard.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item">
                <a href="4-Set-Budget.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-coins"></i>
                    </div>
                    <span>
                        Set Budget 
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" id="Expense" onclick="open1()">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fa fa-plus-circle"></i>
                    </div>
                    <span>
                        Expenses
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" style="display: none;">
                <a href="5-Add-Expenses.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Add Expenses
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" style="display: none">
                <a href="6-Manage-Expense.php" class="sidebar-nav-link" style="display: none">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Manage Expenses
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" id="ER" onclick="open2()">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <span>
                        Expense Report
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" style="display:none;">
                <a href="7-Datewise.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <span>
                        Datewise Report
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" style="display: none;">
                <a href="8-Monthly.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-week"></i>
                    </div>
                    <span>
                        Monthly Report
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item" style="display:none;">
                <a href="9-Yearly.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar"></i>
                    </div>
                    <span>
                        Yearly Report
                    </span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item">
                <a href="https://youtube.com/playlist?list=PLwC8LFb2Ws3K0SBdiBJjyvGpqHnEyiRK6&si=7QVdrzL4yFdeFlaj" target="_blank" class="sidebar-nav-link">
                    <div>
                        <i class="fa fa-cube" aria-hidden="true"></i>
                    </div>
                    <span>More Projects</span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
            <li class="sidebar-nav-item">
                <a href="https://www.facebook.com/CodeCampBdofficial" target="_blank" class="sidebar-nav-link">
                    <div>
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </div>
                    <span>Need Help?</span>
                </a>
            </li>
                        <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
        </ul>
    </div>
    <!-- end sidebar-->
    <!-- Main Content -->
    <!-- end main content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="../static/js/skeleton.js"></script>
                <!-- 
            - Author Name: MH RONY.
            - GigHub Link: https://github.com/dev-mhrony
            - Facebook Link:https://www.facebook.com/dev.mhrony
            - Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
            - for any PHP, Laravel, Python, Dart, Flutter work contact me at codecampbdofficial@gmail.com
            -->
</body>