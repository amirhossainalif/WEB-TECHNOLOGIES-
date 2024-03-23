<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: ../Views/login.php");
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Deshboard</title>
    </head>
    <body>
        <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>

            <center><h1>Welcome, <?php echo $user; ?> <h1></center>
            <a href = "../Controllers/logout.php" > Logout </a></br>
        </form>
    </body>
</html>