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
    }elseif ($action == 'addPosition') {
        $spotName = $_POST['spotName'];
        $logged = $conn->query("INSERT INTO posirtion (spotname)VALUE('$spotName')");
        if($logged){
            echo json_encode([
                'msg'=>'logged successfully'
            ]);
        }else{
            echo json_encode([
                'msg'=>'logging error'
            ]);
        }
    }elseif ($action == 'castVote') {
        $position = $_POST['position'];
        $voter = $_POST['voter'];
        $contestant = $_POST['contestant'];
        $voted = $conn->query("INSERT INTO votes (votefor,voter,position)VALUE('$contestant','$voter','$position')");
        if($voted){
            $users = $query->fetch_assoc();
            echo json_encode([
                'msg'=>'right',
                'users' => $users['id']
            ]);
        }else{
            echo json_encode([
                'msg'=>'wrong'
            ]);
        }
    }elseif ($action == 'checkreg') {
        $res = $_POST['res'];
        $query = $conn->query("SELECT * FROM users WHERE reg='$res'");
        if($query->num_rows == 1){
            $users = $query->fetch_assoc();
            echo json_encode([
                'msg'=>'right',
                'users' => $users['id']
            ]);
        }else{
            echo json_encode([
                'msg'=>'wrong'
            ]);
        }
    }elseif ($action == 'logReceipt') {
        $studentName = $_POST['studentName'];
        $logdate = $_POST['logdate'];
        $studentReceiptId = $_POST['studentReceiptId'];
        $logged = $conn->query("INSERT INTO receiptlog (fullname,receiptdate,receiptNumber)VALUE('$studentName','$logdate','$studentReceiptId')");
        if($logged){
            echo json_encode([
                'msg'=>'logged successfully'
            ]);
        }else{
            echo json_encode([
                'msg'=>'logging error'
            ]);
        }
    }elseif ($action == 'regcont') {
        $getreg = $_POST['surName'];
        $position = $_POST['position'];
        $level = $_POST['level'];
        $logged = $conn->query("INSERT INTO contestants (userid,position,level)VALUE('$getreg','$position','$level')");
        if($logged){
            echo json_encode([
                'msg'=>'logged successfully'
            ]);
        }else{
            echo json_encode([
                'msg'=>'logging error'
            ]);
        }
        
    }elseif ($action == 'startElection') {
        // timeerh 	timeState 	yr 	timeerm 	timeers
        $duration = $_POST['duration'];
        $hour= $duration/60;
        $logged = $conn->query("INSERT INTO votep (timeerh,timeState)VALUE('$hour','1')");
        if($logged){
            echo json_encode([
                'msg'=>'logged successfully'
            ]);
        }else{
            echo json_encode([
                'msg'=>'logging error'
            ]);
        }
        
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