<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <!--head>
        <titel>Reset Password</titel>
    </head-->
    <body>
        <form method="post" action="../Controllers/forgetpass.php" novalidate>
        <fieldset>
                <legend>Reset Password</legend><br>
        <table>
                <tr>
                    <th> Username :<br><br></th>
                    <td> <input type="text" id="user" name="user">
                        <?php
                            echo isset($_SESSION['UsernameErrMsg']) ? $_SESSION['UsernameErrMsg'] : "";    
                        ?>
                    <br><br></td>
                </tr>
                <tr>
                    <th> Password :<br><br></th>
                    <td> <input type="password" id="Password" name="Password">
                        <?php
                            echo isset($_SESSION['PasswordErrMsg']) ? $_SESSION['PasswordErrMsg'] : "";    
                        ?>
                    <br><br></td>
                </tr>
                <tr>
                    <th> Confirm Password :<br><br></th>
                    <td> <input type="password" id="CPassword" name="CPassword">
                        <?php
                            echo isset($_SESSION['CPasswordErrMsg']) ? $_SESSION['CPasswordErrMsg'] : "";    
                        ?>
                    <br><br></td>
                </tr>
                <tr>
                    <td> <!--button type="submit" name="submit">Change Password</button-->  
                    <?php
                    if(!empty($_POST['Password']) && !empty($_POST['CPassword']))
                    {
                        if($_POST['Password']==$_POST['CPassword'])
                        {
                            echo "Password reset successful";
                        }
                        else{
                            echo '<button type="submit" name = "Save" >Change Password</button>';
                            echo "Password not matched";
                        }
                    }
                    else{
                        echo '<button type="submit" name= "Save" >Change Password</button>';
                    }
                        
                    ?>
                    </td>
                </tr>
        </table>
        <br>  
        <a href = "login.php" > LogIN </a></br>
        </form>
    </body>  
</html>