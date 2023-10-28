<?php 
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['login_user'])){
        $Member_user = mysqli_real_escape_string($conn,$_post['Member_user']); 
        $Member_pass = mysqli_real_escape_string($conn,$_post['Member_pass']); 

        if (empty($Member_user)){
            array_push($errors,"Username is required");
        }

        if (empty($Member_pass)){
            array_push($errors,"Password is required");
        }

        if (count($errors) == 0){
            $Member_pass = md5($Member_pass);
            $query = "select * from member where Member_user = '$Member_user' and Member_pass = '$Member_pass' ";
            $result = mysql_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['member_user'] = $Member_user;
                $_SESSION['success'] = 'Now you logged in successfully';
                header("Location:index.php");
            }else {
                array_push($_errors,"Wrong username or password");   
                $_SESSION['error'] ="Wrong username or password";
            }
        }
    }