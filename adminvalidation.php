<?php 
            session_start();
            

            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con,'electronics');
            $name = $_POST['user'];
            $pass = $_POST['password'];

            $s = " SELECT * FROM admin WHERE name = '$name' AND password = '$pass' ";

            $result = mysqli_query($con,$s);

            $num = mysqli_num_rows($result);

            if($num == 1)
            {
                $_SESSION['username'] = $name;
               header('location:admincontrol.php');
            }
            else{
                $_SESSION['username'] = $name;
                header('location:adminlogin.php');
                 
            }
?>