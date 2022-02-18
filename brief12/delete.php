<?php 
include("connect.php");
$m = $_GET['matricule'];
if(isset($m)){
    $q = "DELETE FROM employe WHERE Matricule='$m'";
    $result = mysqli_query($conn, $q);
    
    if($result){
        header('location:index.php');
    }
}
?>