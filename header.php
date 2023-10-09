gu<?php
    // $page = $_SERVER['PHP_SELF'];
    // $sec = "10";
    include('login.php'); // Includes Login Script
    if (!isset($_SESSION['login_user'])) {
        header("location: index.php"); // Redirecting To Profile Page
    } else {
        include 'session.php';
    }
    include 'config.php';


    ?>
<?php

// include 'config.php';
$t_date = date("Y-m-d");
$month = date("m");
$year = date("y");
if ($month == 1) {
    $month = 'January';
} elseif ($month == 2) {
    $month = 'February';
} elseif ($month == 3) {
    $month = 'March';
} elseif ($month == 4) {
    $month = 'April';
} elseif ($month == 5) {
    $month = 'May';
} elseif ($month == 6) {
    $month = 'June';
} elseif ($month == 7) {
    $month = 'July';
} elseif ($month == 8) {
    $month = 'Augest';
} elseif ($month == 9) {
    $month = 'September';
} elseif ($month == 10) {
    $month = 'October';
} elseif ($month == 11) {
    $month = 'November';
} elseif ($month == 12) {
    $month = 'December';
} ?>

<!DOCTYPE html>
<html lang="en">
<?php




$sql = "SELECT * FROM admin where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $role = $row['role'];
        $hotel = $row['hotel_name'];
    }
}

$t_balance = 0;
$sql = "SELECT * FROM statement where ((status='Earning')&&(hotel_name='$hotel')) order by id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $t_balance += $row['ammount'];
    }
}

$t_expense = 0;
$sql = "SELECT * FROM expences where ((expense_date='$t_date')&&(hotel_name='$hotel')&&(expense_date='$t_date'))";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $t_expense += $row['expense_ammount'];
    }
}

$m_expense = 0;
$sql = "SELECT * FROM expences where ((month='$month')&&(hotel_name='$hotel')&&(expense_date='$t_date'))";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $m_expense += $row['expense_ammount'];
    }
}

$t_checkin = 0;
$sql = "SELECT * FROM reservation where ((checkin_date='$t_date')&&(statuss='CHECKEDIN'))";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $t_checkin++;
    }
}


$t_reservation = 0;
$sql = "SELECT * FROM reservation where ((reservation_date='$t_date')&&(statuss='Reserved'))";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $t_reservation++;
    }
}



?>



<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>H M S | SKD Amar Bari</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/prism/prism.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/chocolat/dist/css/chocolat.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='fabicon.png' style="width: 100%;" />
</head>

<body style="background-image:url(assets/img/banner/index.jpeg); background-repeat: no-repeat; background-size: 1366px 1100px; background-attachment: fixed; background-size: cover;">
    <!--<div class="loader"></div>-->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
        </div>
        </li>
        </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">

            <?php if ($role == 'admin') { ?>
                <aside id="sidebar-wrapper">

                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a href="/"> <img alt="image" src="new_dashboard_logo.png" style="width: 50%;margin-top: 15px;margin-left: -2rem;" class="header-logo" />
                                </a>
                            </div>
                        </div>

                    </div>

                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="info"></i><span>Room Information</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="room_add.php">Add</a></li>
                                <li><a class="nav-link" href="manage_rooms.php?status=All">Manage</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="refresh-ccw"></i><span>Reservation</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="reservation_add.php">Add</a></li>
                                <li><a class="nav-link" href="manage_reservations.php?stage=All">Manage</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="check-circle"></i><span>Checkin</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="add_checkin.php">Add</a></li>
                                <li><a class="nav-link" href="check_in_list.php?stage=All">Manage</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="check_out_list.php" class="nav-link"><i data-feather="briefcase"></i><span>Check Out List</span></a>
                        </li>
                        
                        <li class="dropdown">
                            <a href="kitchen.php" class="nav-link"><i data-feather="briefcase"></i><span>Store</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="guest_directory.php" class="nav-link"><i data-feather="briefcase"></i><span>Guest Directory</span></a>
                        </li>



                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Front Desk</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="manage_reservations.php?stage=All">Reservation List</a></li>
                                <li><a class="nav-link" href="manage_rooms.php?status=All">All Room List</a></li>
                                <li><a class="nav-link" href="manage_rooms.php?status=Available">Free Room Info</a></li>
                                <li><a class="nav-link" href="check_in_list.php?stage=All">Check In List</a></li>
                                <li><a class="nav-link" href="check_out_list.php">Check Out List</a></li>
                                <li><a class="nav-link" href="swimingpool.php">Swimming Pool</a></li>
                                <!--<li><a class="nav-link" href="kitchen.php">Kitchen</a></li>-->

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Accounts</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="room_wise_collection.php">Room Wise Collection</a></li>
                                <li><a class="nav-link" href="statement.php?stage=Month">Monthly Statement</a></li>
                                <li><a class="nav-link" href="statement.php?stage=Year">Yearly Statement</a></li>
                                <li><a class="nav-link" href="voucher_list.php">Cupon List</a></li>
                                <li><a class="nav-link" href="expense_list.php?stage=All">Expense List</a></li>
                                <li><a class="nav-link" href="bank_opening_balance.php">Bank Opening Balance</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>HR Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="employee_list.php?status=active">Active Employee List</a></li>
                                <li><a class="nav-link" href="employee_list.php?status=inactive">Inactive Employee List</a></li>
                                <li><a class="nav-link" href="create_employees.php">Add Employee</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="coffee"></i><span>Restaurent</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="add_food_menu.php">Add Food Menu</a></li>
                                <li><a class="nav-link" href="food_menu_list.php">Food Menu List</a></li>
                                <!--<li><a class="nav-link" href="food_order.php">Create Order</a></li>-->
                                <li><a class="nav-link" href="check_in_list.php">Order List</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="check-circle"></i><span>Laundry Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="room_list.php?status=all">Laundry Management</a></li>
                                <!--<li><a class="nav-link" href="laundry_management.php"></a></li>-->

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="check-circle"></i><span>Stock Of Aminities</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="create_aminities.php">Add Aminities</a></li>
                                <li><a class="nav-link" href="aminities_stock-list.php">Amininties Stock List</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=all" class="nav-link"><i data-feather="monitor"></i><span>All Room Information</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=cleaning" class="nav-link"><i data-feather="monitor"></i><span>Room Cleaning List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>Reports</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Guest History</a></li>
                                <li><a class="nav-link" href="#">Accounts Statement</a></li>

                            </ul>
                        </li>

                    </ul>
                </aside>
            <?php } ?>
            <?php if ($role == 'Front Desk Office') { ?>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="logo.jpeg" class="header-logo" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>

                        <li class="dropdown">
                            <a href="manage_reservations.php?stage=All" class="nav-link"><i data-feather="monitor"></i><span>Reservation List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=all" class="nav-link"><i data-feather="monitor"></i><span>All Room List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=available" class="nav-link"><i data-feather="monitor"></i><span>Free Room Info</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=available" class="nav-link"><i data-feather="monitor"></i><span>Guest Directory</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="check_in_list.php" class="nav-link"><i data-feather="monitor"></i><span>Check In List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="check_out_list.php" class="nav-link"><i data-feather="monitor"></i><span>Check Out List</span></a>
                        </li>
                        
                         <li class="dropdown">
                            <a href="swimingpool.php" class="nav-link"><i data-feather="monitor"></i><span>Swiming Pool</span></a>
                        </li>



                    </ul>
                </aside>
            <?php } ?>
            <?php if ($role == 'Account Management') { ?>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="logo.jpeg" class="header-logo" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>

                        <li class="dropdown">
                            <a href="room_wise_collection.php" class="nav-link"><i data-feather="monitor"></i><span>Room Wise Collection</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="statement.php?stage=Month" class="nav-link"><i data-feather="monitor"></i><span>Monthly Statement</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="statement.php?stage=Year" class="nav-link"><i data-feather="monitor"></i><span>Yearly Statement</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="voucher_list.php" class="nav-link"><i data-feather="monitor"></i><span>Cupon List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="expense_list.php?stage=All" class="nav-link"><i data-feather="monitor"></i><span>Expense List</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="expense_list.php?stage=All" class="nav-link"><i data-feather="monitor"></i><span>Bank Opening Balance</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="bank_opening_balance.php" class="nav-link"><i data-feather="monitor"></i><span>Expense List</span></a>
                        </li>

                    </ul>
                </aside>
            <?php } ?>

            <?php if ($role == 'HR Management') { ?>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="logo.jpeg" class="header-logo" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>

                        <li class="dropdown">
                            <a href="manage_reservations.php" class="nav-link"><i data-feather="monitor"></i><span>Active Employee List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=all" class="nav-link"><i data-feather="monitor"></i><span>Inactive Employee List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=available" class="nav-link"><i data-feather="monitor"></i><span>Add Employee</span></a>
                        </li>
                    </ul>
                </aside>
            <?php } ?>

  <?php if ($role == 'Restaurent Management') { ?>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                                  <a href="/"> <img alt="image" src="logo.jpeg" class="header-logo" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>

                        <li class="dropdown">
                            <a href="add_food_menu.php" class="nav-link"><i data-feather="monitor"></i><span>Add Food Menu</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="food_menu_list.php" class="nav-link"><i data-feather="monitor"></i><span>Food Menu List</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="check_in_list.php" class="nav-link"><i data-feather="monitor"></i><span>Order List</span></a>
                        </li>
                    </ul>
                </aside>
            <?php } ?>
            
            <?php if ($role == 'Room Service') { ?>
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                                  <a href="/"> <img alt="image" src="logo.jpeg" class="header-logo" />
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
<li><a class="nav-link" href=""></a></li>
                        <li class="dropdown">
                            <a href="room_list.php?status=all" class="nav-link"><i data-feather="monitor"></i><span>Laundry Management</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="manage_rooms.php?status=cleaning" class="nav-link"><i data-feather="monitor"></i><span>Room Cleaning</span></a>
                        </li>

                    </ul>
                </aside>
            <?php } ?>
            
            
            
        </div>
        <!-- Main Content -->
        <div class="main-content">