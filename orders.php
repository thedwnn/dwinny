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
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            margin-top: 20px;
        }
        .service-item {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .service-item i {
            font-size: 30px;
            color: #007bff;
            margin-bottom: 10px;
        }
        .service-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .service-item p {
            font-size: 14px;
            color: #666;
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
                        <a href="dashboard.php" class="active">
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
                        <a href="orders.php">
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
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            
            <div class="page-header">
                <h1>Order & Check out our Services Offered</h1>
                <small>Check out our services</small>
            </div>
            
            <div class="services">
                <div class="service-item">
                    <i class="las la-code"></i>
                    <h3>Web Development</h3>
                    <p>We offer professional web development services to create modern and responsive websites.</p>
                </div>
                <div class="service-item">
                    <i class="las la-mobile-alt"></i>
                    <h3>Game Development</h3>
                    <p>Our team specializes in developing high-quality games.</p>
                </div>
                <div class="service-item">
                    <i class="las la-database"></i>
                    <h3>Database Management</h3>
                    <p>We provide efficient database management solutions to ensure secure and optimized data storage.</p>
                </div>
                <div class="service-item">
                    <i class="las la-chart-line"></i>
                    <h3>Digital Marketing</h3>
                    <p>Our digital marketing services help businesses reach their target audience and increase online visibility.</p>
                </div>
                <!-- Add more service items as needed -->
            </div>
            
        </main>
        
    </div>
</body>
</html>

<?php
include('scripts.php');
include('footer.php');
?>