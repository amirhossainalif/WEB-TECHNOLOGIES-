<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: ../Views/login.php");
}

$user = $_SESSION['user'];

require_once "../Controllers/database.php";
$sql = "SELECT id, username, pass FROM login ";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Deshboard</title>
    </head>
    <body>
    <form method="post" action= "../Controllers/UpdateDelete.php" novalidate>

            <center><h1>Welcome, <?php echo $user; ?> <h1></center>
            <center><a href = "../Controllers/logout.php" > Logout </a><center></br>

            <table>
                <tr>
                    <th> id </th>
                    <th> username </th>
                    <th> password </th>
                </tr>
                <tr>
                    <?php
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>". $row["id"]. "</td><td>" .'<input type="hidden" name="username" value ="'.$row["username"].'">'. $row["username"]. "</td><td>". $row["pass"]. "</td><td>". '<input type="text" name="password" value =""> '."</td><td>". '<button type="submit" name= "Update" >Update</button>' ."</td><td>".'<button type="submit" name= "Delete" >Delete</button>'."</td></tr>";
                           
                        }
                    }

                    $con->close();
                    ?>
                </tr>
            </table>
        </form>
    </body>
</html>
