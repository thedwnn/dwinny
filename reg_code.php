<?php
session_start();
include("dbconnect.php");


if(isset($_POST["register"])){
    $fname = trim($_POST['fname']);
    $mname = trim($_POST['mname']);
    $sname = trim($_POST['sname']);
    $email = trim($_POST['email']);
    $password = $_POST['pswd'];
    $password2 = $_POST['cpswd'];




    $name = $fname. ', ' .$mname. ' ' . $sname;
    $status = "user";
   


    $verify_token = md5(rand());




    if(empty($fname) ) {
        $_SESSION['status2'] = "First Name is required!";
        header("Location: register.php");
        exit(0);
    } else if(empty($mname)) {
        $_SESSION['status2'] = "Middle Name is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($sname)) {
        $_SESSION['status2'] = "surname is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($email)) {
        $_SESSION['status2'] = "Email is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($password)) {
        $_SESSION['status2'] = "Password is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($password2)) {
        $_SESSION['status2'] = "Password2 is required!";
        header("Location: register.php");
        exit(0);
    }
     else {
        if($password != $password2){
            $_SESSION['status2'] = "Password do not match!";
            header("Location: register.php");
            exit(0);
        }
        else {
            $check_email_query = "SELECT email FROM users WHERE email=? LIMIT 1";
            $stmt = $conn->prepare($check_email_query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();




            if($result->num_rows > 0) {
                $_SESSION['status2'] = "Email already exists!";
                header("Location: register.php");
                exit(0);
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $insert_query = "INSERT INTO users (name, status, email, password, verify_token) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($insert_query);
                $stmt->bind_param("sssss", $name, $status, $email, $hashed_password, $verify_token);




                if($stmt->execute()) {
                   
                        $_SESSION['status1'] = "Registration successful!";
                   
                    header("Location: register.php");
                    exit(0);
                } else {
                    $_SESSION['status2'] = "Registration failed";
                    header("Location: register.php");
                    exit(0);
                }
            }
        }
    }




}
