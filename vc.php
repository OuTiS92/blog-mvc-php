<?php 
//mysqli_connect();
$vc=$_GET['vc'];
$sql="update user_tbl set status='1',vc='' where vs='$vc'";
?>