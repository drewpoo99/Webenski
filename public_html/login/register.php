<?php

    session_start();

    require_once "../../private_html/dbconfig.inc.php";
    require_once "../libs/smarty-3.1.33/libs/Smarty.class.php";
    
    $smarty = new Smarty();
    $smarty->template_dir = "../template";
    $smarty->compile_dir = "../libs/smarty-3.1.33/templates_c";

    /* Status Codes
    * -1 - Default State
    * 0 - User added, continue to log in
    * 1 - Email Aready Taken, Try again
    */
    
    $status = "-1";
    if($_POST){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlCheckForDups = "SELECT email FROM User WHERE email = :email";
        $stmt = $pdo->prepare($sqlCheckForDups);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // ... got results ...
            $status = "1";
            $smarty->assign("status", $status);
            $smarty->display('register.tpl');
            
        } else {
          $sqlAddNewUser = "INSERT INTO User (Password, First_Name, Last_Name, Email, username)
          VALUES (:pw, :fn, :ln, :email, :username)";
          $newStmt = $pdo->prepare($sqlAddNewUser);
          $newStmt->bindParam(':fn', $first_name);
          $newStmt->bindParam(':ln', $last_name);
          $newStmt->bindParam(':email', $email);
          $newStmt->bindParam(':username', $username);
          $newStmt->bindParam(':pw', $password);
          $newStmt->execute();

          $status = "0";

          $smarty->assign("status", $status);
          $smarty->display('register.tpl');
          }
    }else{
        $smarty->assign("status", $status);
        $smarty->display('register.tpl');
    }


?>