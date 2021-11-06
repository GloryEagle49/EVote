<?php
    session_start();
    include_once 'connect.php';
    $action=$_POST['action'];
    if($action == 'login'){
        $user =$_POST['user'];
        $pwd =md5($_POST['pwd']);
        login($user,$pwd,$conn);
    }elseif ($action == 'register') {
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $mail =$_POST['email'];
        $phone =$_POST['phone'];
        $department =$_POST['department'];
        $level =$_POST['level'];
        $pwd = md5($_POST['pwd']);
        $query = $conn->query("SELECT * FROM users WHERE (email='$mail' OR phone='$phone') AND pwd='$pwd'");
        if($query->num_rows < 1){
            $register = $conn->query("INSERT INTO users (lastname,firstname,pwd,email,phone,dept,level)VALUE('$lastname','$firstname','$pwd','$mail','$phone','$department','$level')");
            if($register){
                login($mail,$pwd,$conn);
            }
        }else{
            echo 'Email already Exists';
        }
    }elseif ($action == 'logout') {
        session_destroy();
        echo json_encode([
            'msg'=>'logout'
        ]);
    }else{

    }


    function login($log,$pwd,$conn){
        $query = $conn->query("SELECT * FROM users WHERE (phone='$log' OR email='$log' OR reg='$log') AND pwd='$pwd'");
        if($query->num_rows == 1){
            $users = $query->fetch_assoc();
            $_SESSION['active_user_id'] = $users['id'];
            echo json_encode([
                'msg'=>'login',
                'users' => $users
            ]);
        }else{
            echo json_encode([
                'msg'=>'Login Details are Incorrect'
            ]);
        }
    }
?>