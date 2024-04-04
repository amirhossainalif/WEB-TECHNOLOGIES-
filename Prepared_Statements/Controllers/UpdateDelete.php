<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $user = $_POST['username'];
    //$Password = $_POST['password'];
    require_once "../Controllers/database.php";

    if (isset($_POST['Update'])) 
    {
        if (isset($_POST['password'])) 
        {
            $Password = $_POST['password'];

            if(!empty($Password))
            {
                $sql = "SELECT * FROM login where username = '$user'";
                $result = mysqli_query($con, $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount>0)
                {
                
                    $stmt = $con -> prepare("UPDATE login SET pass = ? WHERE  username = ?");
                    $stmt -> bind_param("ss", $Password, $user);
                    if($stmt->execute())
                    {
                        $stmt->close();
                        $con->close();
                        header("Location: ../Model/Deshboard.php");
                        exit();
                    }
                }
            }
            else{echo "pass empty";}
        }else{echo "pass error";}
        
        
    } 
    elseif (isset($_POST['Delete'])) 
    {
        $stmt = $con ->prepare("DELETE FROM `login` WHERE username = ?") ;
        $stmt -> bind_param("s", $user);
        if($stmt->execute())
        {
            $stmt->close();
            $con->close();
            header("Location: ../Model/Deshboard.php");
            exit();
        }
    }
}
?>
