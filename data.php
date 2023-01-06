<?php 
$connection = mysqli_connect("localhost","root","","eventswave") or die("Error " . mysqli_error($connection));

$sql = "SELECT  USER_ID,(POSTS)
FROM        users
GROUP BY    POSTS";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $orgname = $row['USER_ID'];
    $count = $row['POSTS'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $orgname), array('v'=>(int)$count)) );
}
$data = json_encode($array);
echo $data;
?>