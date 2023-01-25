<?php 
   	include("connection1.php");

    if(isset($_GET['deleteid'])) {
        $club_id=$_GET['deleteid'];

        $sql = "delete from `clubs` where club_id=$club_id";
        $result = mysqli_query($con,$sql);
        if($result){
            // echo "Deleted successfull";
            header('location:clublist.php');
        }else {
            die("failed to connect!");
        }
    }
?>