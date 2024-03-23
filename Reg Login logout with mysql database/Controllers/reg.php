<?php
session_start();

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $isValid = true;
    $Firstname =  $_POST['fname'];
    $FirstnameErrMsg = "";
    $Lastname = $_POST['lname'];
    $LastnameErrMsg = "";
    $Gender = $_POST['Gender'];
    $GenderErrMsg = "";
    $Fathername = $_POST['fnam'];
    $FathernameErrMsg = "";
    $Mothername = $_POST['mnam'];
    $MothernameErrMsg = "";
    $Blood = $_POST["Blood"];
    $BloodErrMsg = "";
    $Religion = $_POST["Religion"];
    $ReligionErrMsg = "";
    $Email = $_POST["email"];
    $EmailErrMsg = "";
    $Phone = $_POST["phone"];
    $PhoneErrMsg = "";
    $Web = $_POST["web"];
    $WebErrMsg = "";
    $Country = $_POST['Country']; 
    $CountryErrMsg = "";
    $State = $_POST['State'];
    $StateErrMsg = "";
    $MsgAdd = $_POST['message'] . ", " . $_POST['State'] . "-" . $_POST['number'] . ", " . $_POST['Country'];
    $Msg = $_POST['message'];
    $MsgErrMsg = "";
    $Post = $_POST['number'];
    $PostErrMsg = "";
    $Username = $_POST['text'];
    $UsernameErrMsg = "";
    $Password = $_POST["Password"];
    $PasswordErrMsg = "";
    $CPassword = $_POST["CPassword"];
    $CPasswordErrMsg = "";

    if(empty($Firstname))
    {
        $_SESSION['FirstnameErrMsg'] = "First Name is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Firstname'] = $Firstname;
        $_SESSION['FirstnameErrMsg'] = "";
    }

    if(empty($Lastname))
    {
        $_SESSION['LastnameErrMsg'] = "Last Name is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Lastname'] = $Lastname;
        $_SESSION['LastnameErrMsg'] = "";
    }

    if(empty($Gender))
    {
        $_SESSION['GenderErrMsg'] = "Gender is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Gender'] = $Gender;
        $_SESSION['GenderErrMsg'] = "";
    }

    if(empty($Fathername))
    {
        $_SESSION['FathernameErrMsg'] = "Father's name is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Fathername'] = $Fathername;
        $_SESSION['FathernameErrMsg'] = "";
    }

    if(empty($Mothername))
    {
        $_SESSION['MothernameErrMsg'] = "Mother's name is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Mothername'] = $Mothername;
        $_SESSION['MothernameErrMsg'] = "";
    }

    if(empty($Blood))
    {
        $_SESSION['BloodErrMsg'] = "Blood is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Blood'] = $Blood;
        $_SESSION['BloodErrMsg'] = "";
    }

    if(empty($Religion))
    {
        $_SESSION['ReligionErrMsg'] = "Religion is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Religion'] = $Religion;
        $_SESSION['ReligionErrMsg'] = "";
    }

    if(empty($Email))
    {
        $_SESSION['EmailErrMsg'] = "Email is empty";
        $isValid = false;
    }
    else{
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['EmailErrMsg'] = " Invalid email format";
            $isValid = false;
        }
        else{
            $_SESSION['Email'] = $Email;
            $_SESSION['EmailErrMsg'] = "";
        }
    }

    if(empty($Phone))
    {
        $_SESSION['PhoneErrMsg'] = "Phone is empty";
        $isValid = false;
    }
    else{
        if (!preg_match("/^([+880]{4}[1]{1}[0-9]{3}[-][0-9]{6})$/",$Phone))
        {
            $_SESSION['PhoneErrMsg'] = " Invalid number";
            $isValid = false;
        }
        else{
            $_SESSION['Phone'] = $Phone;
            $_SESSION['PhoneErrMsg'] = "";
        }
    }

    if(empty($Web))
    {
        $_SESSION['WebErrMsg'] = "Website is empty";
        $isValid = false;
    }
    else{
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$Web)) 
        {
            $_SESSION['WebErrMsg'] = " Invalid URL";
            $isValid = false;
        }
        else{
            $_SESSION['Web'] = $Web;
            $_SESSION['WebErrMsg'] = "";
        }
    }

    if(empty($Country))
    {
        $_SESSION['CountryErrMsg'] = "Country is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Country'] = $Country;
        $_SESSION['CountryErrMsg'] = "";
    }

    if(empty($State))
    {
        $_SESSION['StateErrMsg'] = "State is empty";
        $isValid = false;
    }
    else{
        $_SESSION['State'] = $State;
        $_SESSION['StateErrMsg'] = "";
    }

    if(empty($Msg))
    {
        $_SESSION['MsgErrMsg'] = "Address is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Msg'] = $Msg;
        $_SESSION['MsgErrMsg'] = "";
    }

    if(empty($Post))
    {
        $_SESSION['PostErrMsg'] = "Post Code is empty";
        $isValid = false;
    }
    else{
        $_SESSION['Post'] = $Post;
        $_SESSION['PostErrMsg'] = "";
    }

    if(empty($Username))
    {
        $_SESSION['UsernameErrMsg'] = "Username is empty";
        $isValid = false;
    }
    else{
        if (strlen($Username)<5)
        {
            if(!preg_match("/^[a-z0-9-' ]*$/",$Username))
            {
                $_SESSION['UsernameErrMsg'] = " use lower letter";
                $isValid = false;
            }
            else{
                $_SESSION['UsernameErrMsg'] = " Minimum 5 characters";
                $isValid = false;
            }
        }
        else{
            $_SESSION['Username'] = $Username;
            $_SESSION['UsernameErrMsg'] = "";
        }
    }

    if(empty($Password))
    {
        $_SESSION['PasswordErrMsg'] = "Password is empty";
        $isValid = false;
    }
    else{
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $Password))
        {
            $_SESSION['PasswordErrMsg'] = " use minimum 1 special character, 1 upper, 1 lower character, number";
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
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $CPassword))
        {
            $_SESSION['CPasswordErrMsg'] = " use minimum 1 special character, 1 upper, 1 lower character, number";
            $isValid = false;
        }
        else{
            $_SESSION['CPassword'] = $CPassword;
            $_SESSION['CPasswordErrMsg'] = "";
        }
    }

    $errors = array();

    if($isValid === true){
        //header("Location: ../Views/Registration.php");

        /*if(isset($_Post["Save"]))
        {*/
            if(!empty($Firstname) && !empty($Lastname) && !empty($Gender) && !empty($Fathername) && !empty($Mothername) && !empty($Blood) && !empty($Religion) && !empty($Email) && !empty($Phone) && !empty($Web) && !empty($Country) && !empty($State) && !empty($Msg) && !empty($Post) && !empty($Username) && !empty($Password) && !empty($CPassword))
            {
                if($Password===$CPassword)
                {
                    require_once "database.php";
                $sql = "SELECT * FROM reg WHERE Email = '$Email'";
                $result = mysqli_query($con, $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount>0)
                {
                    array_push($errors, "Email already exists");
                }
                if(count($errors)>0)
                {
                    foreach($errors as $error)
                    {
                        echo $error;
                    }
                }
                else
                {
                    $sql1 = "INSERT INTO reg (First_name, Last_name, Gender, Father_name, Mother_name, Blood_group, Religion, Email, Phone, Website, address,  username) VALUES ('$Firstname', '$Lastname', '$Gender', '$Fathername', '$Mothername', '$Blood', '$Religion', '$Email', '$Phone', '$Web', '$MsgAdd', '$Username')";
                    $sql2 = "INSERT INTO login (username, password) VALUES ('$Username','$Password')";
                    $stmt = mysqli_stmt_init($con);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql1);
                    if($prepareStmt)
                    {
                        
                            //mysqli_stmt_bind_param($stmt,"");
                            mysqli_stmt_execute($stmt);
                            
                            $prepareStmt1 = mysqli_stmt_prepare($stmt, $sql2);
                            if($prepareStmt1)
                            {
                                mysqli_stmt_execute($stmt);
                                echo "successfully registered";
                                $con->close();
                                $_SESSION['CPasswordErrMsg'] = "";
                                session_destroy();
                                header("Location: ../Views/login.php");
                                exit();
                            }
                        
                    }
                    else{
                        die("Something went wrong");
                    }
                }
                }
                else{
                    $_SESSION['CPasswordErrMsg'] = "password doesn't match";
                }
            }
            else{
                $_SESSION['CPasswordErrMsg'] = "Please fill all the fields";
            }
        /*}
        else{
            echo "error";
        }*/
    }
    else{
        header("Location: ../Views/Registration.php");
    }
}
else{
    echo "Invalid Request";
}
?>