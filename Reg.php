<?php
$con=mysqli_connect("localhost","root","","pharm")or die("couldn't connect");
        $Email = $_POST['tema'];
        $Password = $_POST['tpass'];
        $Name = $_POST['tname'];
        $Address = $_POST['tadd'];
        $Phone = $_POST['tph'];
        $Gender= $_POST["gender"];

        $loginsql = "insert into login_tbl(Email,Password) values('$Email','$Password')";
        mysqli_query($con,$loginsql);

        $i = mysqli_insert_id($con);
        $sql="INSERT INTO register_tbl(logid,Name,Address,Gender,Phone) VALUES($i,'$Name','$Address','$Gender',$Phone)";
        // $sql="insert into register_tbl(logid,Name,Address,Gender,Phone) values($i,'$Name','$Address','$Gender,$Phone)";
        if(mysqli_query($con,$sql)){
            header("Location: Login.html");
        }
    mysqli_close($con);
?>