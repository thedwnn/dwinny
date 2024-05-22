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
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 20px;
            margin-top: 20px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .image-label {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px;
            text-align: center;
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
                <h1>Projects Gallery</h1>
                <small>View our projects</small>
            </div>
            
            <div class="gallery">
                <div class="gallery-item">
                    <img src="Images/gen1.jpg" alt="Image 1">
                    <div class="image-label">Project 1</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen2.jpeg" alt="Image 2">
                    <div class="image-label">Project 2</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen3.jpeg" alt="Image 3">
                    <div class="image-label">Project 3</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen4.jpeg" alt="Image 4">
                    <div class="image-label">Project 4</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen5.jpeg" alt="Image 5">
                    <div class="image-label">Project 5</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen6.webp" alt="Image 6">
                    <div class="image-label">Project 6</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen7.jpg" alt="Image 7">
                    <div class="image-label">Project 7</div>
                </div>
                <div class="gallery-item">
                    <img src="Images/gen8.jpg" alt="Image 8">
                    <div class="image-label">Project 8</div>
                </div>
                <!-- Add more images as needed -->
            </div>
            
        </main>
        
    </div>
</body>
</html>

<?php
include('scripts.php');
include('footer.php');
?>