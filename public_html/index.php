<?php

    session_start();

    require_once "../private_html/dbconfig.inc.php";
    require_once "./libs/smarty-3.1.33/libs/Smarty.class.php";
    
    $smarty = new Smarty();
    $smarty->template_dir = "./template";
    $smarty->compile_dir = "./libs/smarty-3.1.33/templates_c";

    /* Status Codes
    * 0 - No Issues
    * 1 - Email Not Found
    * 2 - Bad Email/Password combo
    */
    $status = "0";
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        $postPassword = $_POST['password'];

        $sqlGetUser = "SELECT * FROM User WHERE Email = :email";
        $stmt = $pdo->prepare($sqlGetUser);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // ... got results ...
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if($postPassword != $row["Password"]){
                    $status = "2";
                }
                else{        
                    $_SESSION["user_id"] = $row['User_OID'];
                    header("Location: profile/profile.php");
                }
                
    
            }
        } else {
            $status = "1";
          }
          $smarty->assign("status", $status);
          $smarty->display("login.tpl");
       

    }else{
        $smarty->assign("status", $status);
        $smarty->display("login.tpl");
    }
    
?>