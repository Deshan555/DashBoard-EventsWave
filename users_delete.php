<?php 
   	include("connection1.php");

    if(isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

        $sql = "delete from `Users` where User_ID=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            // echo "Deleted successfull";
            header('location:userlist.php');
        }else {
            die("failed to connect!");
        }
    }
?>