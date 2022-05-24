<?php
    $con=mysqli_connect('localhost','root');

    if($con){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con,'pizza');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $query="INSERT INTO user (name,email,number) VALUES ('$name','$email','$number')";

    mysqli_query($con,$query);
    header('location:menu.php');

?>