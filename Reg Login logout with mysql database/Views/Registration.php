<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        header("Location: ../Model/Deshboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form method="post" action= "../Controllers/reg.php" novalidate>
        <!--p>Last Modified: <!-?php echo isset($_COOKIE['lastModified']) ? $_COOKIE['lastModified'] : ""; ?></p-->
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>General Information</legend> <br/>
                        <table>
            
                            <tr>
                                <th> First Name :<br><br></th>
                                <td> <input type="text" id="fname" name="fname" value="<?php echo isset($_SESSION['Firstname']) ? $_SESSION['Firstname'] : ""; ?>">
                                <?php
                                echo isset($_SESSION['FirstnameErrMsg']) ? $_SESSION['FirstnameErrMsg'] : "";    
                                ?>
                                <br><br> </td>
                            </tr>
                
                            <tr>
                                <th> Last Name :<br><br> </th>
                                <td> <input type="text" id="lname" name="lname" value="<?php echo isset($_SESSION['Lastname']) ? $_SESSION['Lastname'] : ""; ?>">
                                <?php 
                                 echo isset($_SESSION['LastnameErrMsg']) ? $_SESSION['LastnameErrMsg'] : "";
                                ?>
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Gender :<br><br> </th>
                                <td> <input type="radio" id="Male" name="Gender" value="Male" <?php echo isset($_SESSION['Gender']) && $_SESSION['Gender'] === 'Male' ? 'checked' : ''; ?>>
                                    <label for = "Male">Male</label>
                                    <input type="radio" id="Female" name="Gender" value="Female" <?php echo isset($_SESSION['Gender']) && $_SESSION['Gender'] === 'Female' ? 'checked' : ''; ?>> 
                                    <label for = "Female" > Female </label>
                                <?php 
                                 echo isset($_SESSION['GenderErrMsg']) ? $_SESSION['GenderErrMsg'] : "";
                                ?>
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Father's Name :<br><br> </th>
                                <td> <input type="text" id="fnam" name="fnam" value="<?php echo isset($_SESSION['Fathername']) ? $_SESSION['Fathername'] : ""; ?>">
                                <?php 
                                 echo isset($_SESSION['FathernameErrMsg']) ? $_SESSION['FathernameErrMsg'] : ""; 
                                 ?>
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Mother's Name :<br><br> </th>
                                <td> <input type="text" id="mnam" name="mnam" value="<?php echo isset($_SESSION['Mothername']) ? $_SESSION['Mothername'] : ""; ?>">
                                <?php 
                                 echo isset($_SESSION['MothernameErrMsg']) ? $_SESSION['MothernameErrMsg'] : ""; 
                                 ?>
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Blood Group <br><br> </th>
                                <td> <select id ="Blood" name="Blood">
                                    <option value=""></option>
                                    <option value="A+" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'A+' ? 'selected' : ''; ?> >A+</option>
                                    <option value="B+" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'B+' ? 'selected' : ''; ?> >B+</option>
                                    <option value="AB+" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'AB+' ? 'selected' : ''; ?> >AB+</option>
                                    <option value="O+" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'O+' ? 'selected' : ''; ?> >O+</option>
                                    <option value="A-" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'A-' ? 'selected' : ''; ?> >A-</option>
                                    <option value="B-" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'B-' ? 'selected' : ''; ?> >B-</option>
                                    <option value="AB-" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'AB-' ? 'selected' : ''; ?> >AB-</option>
                                    <option value="O-" <?php echo isset($_SESSION['Blood']) && $_SESSION['Blood'] === 'O-' ? 'selected' : ''; ?> >O-</option>
                                </select>
                                <?php 
                                 echo isset($_SESSION['BloodErrMsg']) ? $_SESSION['BloodErrMsg'] : "";
                                 ?>
                                 <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Religion <br><br> </th>
                                <td> <select id ="Religion" name="Religion">
                                    <option value=""></option>
                                    <option value="Islam" <?php echo isset($_SESSION['Religion']) && $_SESSION['Religion'] === 'Islam' ? 'selected' : ''; ?> >Islam</option>
                                    <option value="Hindu" <?php echo isset($_SESSION['Religion']) && $_SESSION['Religion'] === 'Hindu' ? 'selected' : ''; ?> >Hindu</option>
                                    <option value="Christan" <?php echo isset($_SESSION['Religion']) && $_SESSION['Religion'] === 'Christan' ? 'selected' : ''; ?> >Christan</option>
                                    <option value="Buddhism" <?php echo isset($_SESSION['Religion']) && $_SESSION['Religion'] === 'Buddhism' ? 'selected' : ''; ?> >Buddhism</option>
                                </select>
                                <?php 
                                echo isset($_SESSION['ReligionErrMsg']) ? $_SESSION['ReligionErrMsg'] : "";
                                 ?>
                                <br><br> 
                                </td>
                            </tr>
                        
                        </table>
                        
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Contact Information</legend>
                        <table>
                            <tr>
                                <th> Email :<br><br> </th>
                                <td> <input type="text" id="email" name="email" placeholder = "example@xyz.com" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ""; ?>"> 
                                <?php 
                                 echo isset($_SESSION['EmailErrMsg']) ? $_SESSION['EmailErrMsg'] : "";
                                 ?>
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Phone/Mobile :<br><br> </th>
                                <td> <input type="tel" id="phone" name="phone" placeholder="+880 XXXX-XXXXXX" pattern="[+880] {4} [1] {1} [0-9] {3}-[0-9] {6}" required value = "<?php echo isset($_SESSION['Phone']) ? $_SESSION['Phone'] : ""; ?>">
                                <?php 
                                 echo isset($_SESSION['PhoneErrMsg']) ? $_SESSION['PhoneErrMsg'] : "";
                                 ?>
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Website :<br><br> </th>
                                <td> <input type="text" name="web" value="<?php echo isset($_SESSION['Web']) ? $_SESSION['Web'] : ""; ?>">
                                <?php 
                                 echo isset($_SESSION['WebErrMsg']) ? $_SESSION['WebErrMsg'] : ""; 
                                 ?>
                                 <br><br> </td>
                              
                            </tr>
            
                            <tr>
                                <th> Address </th>
                                <td>
                                    <fieldset>
                                        <legend>Permanent Address</legend>
                                        <table>
                                            <tr> 
                                                <td><select id ="Country" name="Country">
                                                            <option value=""></option>
                                                            <option value="Bangladesh" <?php echo isset($_SESSION['Country']) && $_SESSION['Country'] === 'Bangladesh' ? 'selected' : ''; ?> >Bangladesh</option>
                                                            <option value="china" <?php echo isset($_SESSION['Country']) && $_SESSION['Country'] === 'china' ? 'selected' : ''; ?> >China</option>
                                                            <option value="America" <?php echo isset($_SESSION['Country']) && $_SESSION['Country'] === 'America' ? 'selected' : ''; ?> >America</option>
                                                            <option value="Canada" <?php echo isset($_SESSION['Country']) && $_SESSION['Country'] === 'Canada' ? 'selected' : ''; ?> >Canada</option>
                                                        </select>

                                                        <select id ="State" name="State">
                                                            <option value=""></option>
                                                            <option value="Dhaka" <?php echo isset($_SESSION['State']) && $_SESSION['State'] === 'Dhaka' ? 'selected' : ''; ?> >Dhaka</option>
                                                            <option value="Chittagong" <?php echo isset($_SESSION['State']) && $_SESSION['State'] === 'Chittagong' ? 'selected' : ''; ?> >Chittagong</option>
                                                            <option value="Khulna" <?php echo isset($_SESSION['State']) && $_SESSION['State'] === 'Khulna' ? 'selected' : ''; ?> >Khulna</option>
                                                            <option value="Rajshahi" <?php echo isset($_SESSION['State']) && $_SESSION['State'] === 'Rajshahi' ? 'selected' : ''; ?> >Rajshahi</option>
                                                        </select>
                                                    <?php 
                                                        echo isset($_SESSION['CountryErrMsg']) ? $_SESSION['CountryErrMsg'] : "";
                                                        echo isset($_SESSION['StateErrMsg']) ? $_SESSION['StateErrMsg'] : "";
                                                    ?>
                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><textarea name="message" rows="10" cols="30" placeholder="Road/street/city"> <?php echo isset($_SESSION['Msg']) ? $_SESSION['Msg'] : ""; ?> </textarea>
                                                <?php 
                                                echo isset($_SESSION['MsgErrMsg']) ? $_SESSION['MsgErrMsg'] : "";
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" id="number" name="number" placeholder="post code" value = "<?php echo isset($_SESSION['Post']) ? $_SESSION['Post'] : ""; ?>">
                                                    <?php 
                                                        echo isset($_SESSION['PostErrMsg']) ? $_SESSION['PostErrMsg'] : "";
                                                    ?>
                                                    <br></td>
                                            </tr>
                                        </table>
                                        
                                    </fieldset>
                                    
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Account Information</legend>
                        <table>
                            <tr>
                                <th> Username <br><br> </th>
                                <td> <input type="text" id="text" name="text" value = "<?php echo isset($_SESSION['Username']) ? $_SESSION['Username'] : ""; ?> ">
                                    <?php 
                                        echo isset($_SESSION['UsernameErrMsg']) ? $_SESSION['UsernameErrMsg'] : "";
                                    ?> 
                               
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Password <br><br> </th>
                                <td> <input type="password" id="Password" name="Password" >
                                    <?php
                                        echo isset($_SESSION['PasswordErrMsg']) ? $_SESSION['PasswordErrMsg'] : ""; 
                                    ?> 
                         
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Confirm Password <br><br> </th>
                                <td> <input type="password" id="CPassword" name="CPassword" >
                                    <?php 
                                        echo isset($_SESSION['CPasswordErrMsg']) ? $_SESSION['CPasswordErrMsg'] : "";
                                    ?>  <br><br>  </td>
                                      
                            </tr>
                        </table>
                    </fieldset><br><br>
             
                    <?php
                    if(!empty($_POST['Password']) && !empty($_POST['CPassword']))
                    {
                        if($_POST['Password']==$_POST['CPassword'])
                        {
                            echo "Registration successful";
                        }
                        else{
                            echo '<button type="submit" name = "Save" >Registration</button>';
                            echo "Password not matched";
                        }
                    }
                    else{
                        echo '<button type="submit" name= "Save" >Registration</button>';
                    }
                        
                    ?>
                    <br><br>
                    <a href = "login.php" > Already Created! </a></br>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>


