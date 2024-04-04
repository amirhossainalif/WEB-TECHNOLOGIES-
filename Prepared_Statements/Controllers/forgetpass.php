<?php
session_start();

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $isValid = true;
    $username = $_POST['user'];
    $UsernameErrMsg = "";
    $Password = $_POST['Password'];
    $PasswordErrMsg = "";
    $CPassword = $_POST['CPassword'];
    $CPasswordErrMsg = "";

    if(empty($username))
    {
        $_SESSION['UsernameErrMsg'] = "Username is empty";
        $isValid = false;
    }
    else{
        $_SESSION['UsernameErrMsg'] = "";
    }

    if(empty($Password))
    {
        $_SESSION['PasswordErrMsg'] = "Password is empty";
        $isValid = false;
    }
    else{
        //$_SESSION['PasswordErrMsg'] = "";
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $Password))
        {
            $_SESSION['PasswordErrMsg'] = " use minimum 1 special character, 1 upper, 1 lower character, number";
            header("Location: ../Views/Forget.php");
            $isValid = false;
        }
        else{
            $_SESSION['Password'] = $Password;
            $_SESSION['PasswordErrMsg'] = "";
        }
    }

    if(empty($CPassword))
    {
        $_SESSION['CPasswordErrMsg'] = "Confirm Password is empty";
        $isValid = false;
    }
    else{
        //$_SESSION['CPasswordErrMsg'] = "";
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $CPassword))
        {
            $_SESSION['CPasswordErrMsg'] = " use minimum 1 special character, 1 upper, 1 lower character, number";
            header("Location: ../Views/Forget.php");
            $isValid = false;
        }
        else{
            $_SESSION['CPassword'] = $CPassword;
            $_SESSION['CPasswordErrMsg'] = "";
        }
    }

    if($isValid === true)
    {
        if(!empty($username) && !empty($Password) && !empty($CPassword))
        {
            if($Password===$CPassword)
            {
                require_once "database.php";
                $sql = "SELECT * FROM login where username = '$username'";
                $result = mysqli_query($con, $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount>0)
                {
                    $sql = $con -> prepare("UPDATE login SET pass = ? WHERE  username = ?");
                    $sql -> bind_param("ss", $Password, $username);
                    if($sql->execute())
                    {
                        echo "Password Reset Successful";
                        $sql->close();
                        $con->close();
                        $_SESSION['PasswordErrMsg'] ="";
                        $_SESSION['UsernameErrMsg'] = "";
                        header("Location: ../Views/login.php");
                        exit();
                    }
                }
                else{
                    
                    header("Location: ../Views/Forget.php");
                    $_SESSION['UsernameErrMsg'] = "invalid username";
                }
            }
            else{
                header("Location: ../Views/Forget.php");
                $_SESSION['CPasswordErrMsg'] = "password doesn't match";
            }
            
        }
        else{
            header("Location: ../Views/Forget.php");
            $_SESSION['CPasswordErrMsg'] = "Required all the fields";
        }
    }
    else{
        header("Location: ../Views/Forget.php");
    }

}
else{
    echo "Invalid Request";
}
?>