<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>DVDWIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .browse {
            display: flex;
            align-items: center;
        }
        .record-search {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-right: 10px;
        }
        .header-menu {
            display: flex;
            align-items: center;
        }
        .header-menu label {
            margin-right: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>D<span>VD</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(Images/logonew.jpg)"></div>
                <h4>DVDWIN</h4>
                <small>Developer</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php">
                            <span class="las la-user-alt"></span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox.php">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                        <a href="projects.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Projects</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="logout">
                            <span class="material-icons-sharp">
                            <small>Logout</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <div class="browse">
                        <input type="search" placeholder="Search" class="record-search">
                        <label for="">
                            <span class="las la-search"></span>
                        </label>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">
                <div class="container">
    <div class="card">
        <div class="card-head">
            <h2>107,200</h2>
            <span class="las la-user-friends"></span>
        </div>
        <div class="card-progress">
            <small>User activity this month</small>
            <div class="card-indicator">
                <div class="indicator one" style="width: 60%"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-head">
            <h2>340,230</h2>
            <span class="las la-eye"></span>
        </div>
        <div class="card-progress">
            <small>Page views</small>
            <div class="card-indicator">
                <div class="indicator two" style="width: 80%"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-head">
            <h2>$653,200</h2>
            <span class="las la-shopping-cart"></span>
        </div>
        <div class="card-progress">
            <small>Monthly revenue growth</small>
            <div class="card-indicator">
                <div class="indicator three" style="width: 65%"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-head">
            <h2>47,500</h2>
            <span class="las la-envelope"></span>
        </div>
        <div class="card-progress">
            <small>New E-mails received</small>
            <div class="card-indicator">
                <div class="indicator four" style="width: 90%"></div>
            </div>
        </div>
    </div>
</div>


                    <canvas id="myChart" width="250" height="100"></canvas>
                </div>
            </div>
            
        </main>
        
    </div>
</body>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: '# of Clients',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)'
                ],
                borderColor: [
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>