<?php 
    include_once 'backend/connect.php';
    session_start();
    if(!isset($_SESSION['active_user_id'])){
        header('location:index.html');
    };
    $user_id=$_SESSION['active_user_id'];
    $query_my_data = $conn->query("SELECT * FROM users WHERE sn='$user_id'");
    $my_data= $query_my_data->fetch_array();
?>