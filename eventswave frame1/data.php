<?php 
$connection = mysqli_connect("localhost","root","","event") or die("Error " . mysqli_error($connection));

$sql = "SELECT comment_type , COUNT(comment_type)
FROM        comments
GROUP BY    comment_type";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $orgname = $row['comment_type'];
    $count = $row['COUNT(comment_type)'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $orgname), array('v'=>(int)$count)) );
}
$data = json_encode($array);
echo $data;
?>