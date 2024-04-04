<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location: ../Model/Deshboard.php");
    exit();
}
else{
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <!--head>
        <titel>Login</titel>
    </head-->
    <body>
        <form method="post" action="../Controllers/Login.php" novalidate>
        <fieldset>
                <legend>LOGIN</legend><br>
        <table>
                <tr>
                    <th> Username : <br><br></th>
                    <td> <input type="text" id="user" name="user">
                        <?php
                            echo isset($_SESSION['UsernameErrMsg']) ? $_SESSION['UsernameErrMsg'] : "";    
                        ?>
                    <br><br></td>
                </tr>
                <tr>
                    <th> Password : <br><br></th>
                    <td> <input type="password" id="Password" name="Password">
                        <?php
                            echo isset($_SESSION['PasswordErrMsg']) ? $_SESSION['PasswordErrMsg'] : "";    
                        ?>
                    <br><br></td>
                </tr>
                <tr>
                    <td> <button type="submit" name="submit">Login</button>  </td>
                </tr>
        </table>
        <br>  
        <a href = "Forget.php" > Forget Passwod! </a></br>
        </form>
    </body>  
</html>
