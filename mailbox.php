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
        table {
            width:400%;
            border-collapse: collapse;
        }
        th, td {
            padding:100px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #000000;
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
                <h1>Mailbox</h1>
                <small>mailbox</small>
            </div>
            
            <div class="page-content">
                <div class="analytics">
                    <div class="card">
                        <div class="card-head">
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sender</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jimmy Neutron</td>
                                        <td>Meeting Agenda</td>
                                        <td>2024-05-22</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kim Jisoo</td>
                                        <td>Project Update</td>
                                        <td>2024-05-21</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sarah Connor</td>
                                        <td>Product Launch Details</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fred</td>
                                        <td>Proposal</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Flora Ante</td>
                                        <td>Slay</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>

                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
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