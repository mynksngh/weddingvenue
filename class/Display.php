<?php
include 'MyClassConfig.php';
class Display
{
    

    function login_user($username , $password){
            echo $username ;
            echo $password;
            
            if(isset($username) && !empty($username)){
                    $uname=mysql_real_escape_string($username);
               }else{ 
                    $message[]='Please enter username';
               }

               if(isset($password) && !empty($password)){
                    $password=mysql_real_escape_string($password);
               }else{
                    $message[]='Please enter password';
               }

               $countError=count(@$message);
               if($countError > 0){
                    for($i=0;$i<$countError;$i++){
                        echo ucwords($message[$i]).'<br/><br/>';
                    }
               }else{
                    $query = "SELECT name FROM auth_user WHERE auth_user_email = '$uname' AND auth_user_password = '$password'";// AND password = $userPass";

                    $result = mysqli_query($query);

                    // *** Error checking, what if !$result? eg query is broken

                  //  $checkUser = mysqli_fetch_array($result);
                    $checkUser=  mysqli_affected_rows($result);
                    if($checkUser > 0){
                        $_SESSION['LOGIN_STATUS']=true;
                        $_SESSION['UNAME']=$uname;
                        echo 'correct';
                   }else{
                        echo ucwords('please enter correct user details');
                   }
               }

    }
}
