<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit;
}

// Dummy data for user profiles
$profiles = [
    ["name" => "Edwin Baldemor", "role" => "Owner", "image" => "Images/edwin.jpeg.jpg"],
    ["name" => "Jimmy Neutron", "role" => "Co-Owner", "image" => "Images/Jim.jpeg.jpg"],
    ["name" => "Kyla Rivera", "role" => "Topnotcher but bottom", "image" => "Images/kai.jpeg"],
    ["name" => "Fred", "role" => "Contributor", "image" => "Images/fred.jpeg.jpg"]
];
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
        .profiles {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .profile-card {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .profile-card-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 10px;
            border: 4px solid #f0f0f0;
        }
        .profile-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-card h3 {
            margin: 10px 0 5px;
        }
        .profile-card small {
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
                            <span class="material-icons-sharp"></span>
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
                <h1>Profiles</h1>
                <small>Profile list</small>
            </div>
            
            <div class="page-content">
            
                <div class="profiles">
                    <?php foreach($profiles as $profile): ?>
                        <div class="profile-card">
                            <div class="profile-card-img">
                                <img src="<?php echo $profile['image']; ?>" alt="<?php echo $profile['name']; ?>">
                            </div>
                            <h3><?php echo $profile['name']; ?></h3>
                            <small><?php echo $profile['role']; ?></small>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            
        </main>
        
    </div>
</body>
</html>

<?php
include('scripts.php');
include('footer.php');
?>
