<?php 
    session_start();
    include('server.php');
    $error = array();

    if (isset($_POST['reg_user'])) {
        $First_name = mysqli_real_escape_string($conn, $_POST['First_name']);
        $Member_user = mysqli_real_escape_string($conn, $_POST['Member_user']);
        $Member_pass = mysqli_real_escape_string($conn, $_POST['Member_pass']);
        $Confirm_pass = mysqli_real_escape_string($conn, $_POST['Confirm_pass']);

        if (empty($First_name)) {
            array_push($errors,'username not specified');
        }
        if (empty($Member_user)) {
            array_push($errors,'membername not specified');
        }
        if (empty($Member_pass)) {
            array_push($errors,'password not specified');
        }
        if ($Member_pass != $Confirm_pass){
            array_push($errors,"password not matches");
        }

        $user_check_query = "SELECT * FROM member where Member_user = '$Member_user' or Member_pass = '$Member_pass' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['Member_user'] === $Member_user){
                array_push($errors,"Username already in use");
            }
            if($result['Member_pass'] === $Member_pass){
                array_push($errors, "password already in use");
            }

            if (count($errors) == 0){
                $password == md5($Member_pass);

                $sql = "INSERT INTO member (First_name ,Member_user,Member_pass ) VALUES ('$First_name','$Member_user', '$Member_pass')";
                mysqli_query($conn,$sql);

                $_SESSION['Member_name'] = $Member_name;
                $_SESSION['success'] = "Now you are connected";
                header("Location: login.php");
            }
        }
    }
?>