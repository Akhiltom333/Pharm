<?php
    $email=$_POST["email"];
    $pass=$_POST["pwd"];
    
    $con=mysqli_connect("localhost","root","","pharm")or die("couldn't connect");
    $query="SELECT * FROM login_tbl WHERE Email='$email' and Password='$pass' and Status=1";
    if($result=mysqli_query($con,$query)){
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION["email"]=$email;
            // echo $_SESSION["email"];
            header("Location:Home.php");
        }
        else{
            header("Location:Login.html?errormessage=WRONGPASSWORD");
        }
    }
    else{
        echo "something went wrong";
    }
?>