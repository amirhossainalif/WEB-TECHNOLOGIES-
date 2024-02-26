<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <!--span class="error"></span-->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table style="width: 100%;">
            <tr>
                <td>
                    <fieldset>
                        <legend>General Information</legend> <br/>
                        <table style="width:25%;">
            
                            <tr>
                                <th> First Name <br><br></th>
                                <td> 
                                <?php
                                
                                if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["fname"]))
                                {
                                    $f_name = '<input type="text" id="fname" name="fname" value="">';
                                    echo $f_name;
                                    echo $firstnam = "First Name is empty";
                                    //<input type="text" id="fname" name="fname" value="">
                                    //$fn = t_in($_POST["fname"]);
                                    
                                }
                                else{
                                    echo $fname  = $_POST['fname'];
                                }
                                }
                                     
                                ?>
                                
                                  <!--input type="text" id="fname" name="fname" value=""--> 
                                <!--?php echo $firstnam = "First name is empty"; ?--> 
                                <br><br> </td>
                            </tr>
                
                            <tr>
                                <th> Last Name <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["lname"]))
                                {
                                    $fi_name = '<input type="text" id="lname" name="lname" value="">';
                                    echo $fi_name;
                                    echo $firstnam = "Last name is empty";
                                    
                                }
                                else{
                                    echo $lname  = $_POST['lname'];
                                }
                                }
                                     
                                ?>
                                  <!--input type="text" id="lname" name="lname" value=""--> 
                                <!--?php echo $firstnam = "Last name is empty"; ?--> 
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Gender <br><br> </th>
                                <td> 
                                <?php 
                                  

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["Gender"]))
                                {
                                    $g ='<input type="radio" id="Male" name="Gender" value="Male">
                                    <label for = "Male">Male</label>
                                    <input type="radio" id="Female" name="Gender" value="Female"> 
                                    <label for = "Female" > Female </label><br><br>';
                                    echo $g;
                                    echo $firstnam = "Gender is empty";
                                    
                                }
                                else{
                                    echo $Gender  = $_POST['Gender']; 
                                }
                                }
                                     
                                ?>
                                   <!--input type="radio" id="Male" name="Gender" value="Male">
                                 <label for = "Male">Male</label>
                                 <input type="radio" id="Female" name="Gender" value="Female"> 
                                 <label for = "Female" > Female </label> <br><br-->  
                                <!--?php echo $firstnam = "Gender is empty"; ?--> 
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Father's Name <br><br> </th>
                                <td> 
                                <?php 
                                  

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["fnam"]))
                                 {
                                    echo $fa_n = '<input type="text" id="fnam" name="fnam" value="">';
                                    echo $firstnam = "Father's name is empty";
                                     
                                 }
                                 else{
                                    echo $fnam  = $_POST['fnam']; 
                                 }
                                 }
                                      
                                 ?>
                                   <!--input type="text" id="fnam" name="fnam" value=""--> 
                                 <!--?php echo $firstnam = "Father's name is empty"; ?--> 
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Mother's Name <br><br> </th>
                                <td> 
                                <?php 
                                  
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["mnam"]))
                                 {
                                    echo $mo_n = '<input type="text" id="mnam" name="mnam" value="">';
                                    echo $firstnam = "Mother's name is empty";
                                     
                                 }
                                 else{
                                    echo $mnam  = $_POST['mnam']; 
                                 }
                                 }
                                      
                                 ?>
                                   <!--input type="text" id="mnam" name="mnam" value=""--> 
                                 <!--?php echo $firstnam = "Mother's name is empty"; ?--> 
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Blood Group <br><br> </th>
                                <td> 
                                <?php 
                                  
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["Blood"]))
                                 {
                                    echo $B = '<select id ="Blood" name="Blood">
                                    <option value=""></option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                </select><br><br>';
                                    echo $firstnam = "Blood group is empty";
                                     
                                 }
                                 else{
                                    echo $Blood = $_POST['Blood'];
                                 }
                                 }
                                      
                                 ?>
                                 <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Religion <br><br> </th>
                                <td> 
                                <?php 

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["Religion"]))
                                 {
                                    echo $Re = '<select id ="Religion" name="Religion">
                                    <option value=""></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christan">Christan</option>
                                    <option value="Buddhism">Buddhism</option>
                                </select><br><br>';
                                    echo $firstnam = " Religion is empty";
                                     
                                 }
                                 else{
                                    echo $Religion = $_POST['Religion']; 
                                 }
                                 }
                                      
                                 ?>
                                   <!--label for="Religion"></label> 
                                    <select id ="Religion" name="Religion">
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christan">Christan</option>
                                        <option value="Buddhism">Buddhism</option>
                                    </select><br><br-->
                                 <!--?php echo $firstnam = "Religion is empty"; ?--> 
                               
                                
                                <br><br> 
                                </td>
                            </tr>
                        
                        </table>
                        
                    </fieldset>
                </td>
            <!--/tr>
            
            <tr-->
                <td>
                    <fieldset>
                        <legend>Contact Information</legend>
                        <table style="width: 25%;">
                            <tr>
                                <th> Email <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["email"]))
                                 {
                                    echo $mail = '<input type="text" id="email" name="email" > ';

                                    echo $firstnam = " email is empty";
                                     
                                 }
                                 else{
                                     $email = $_POST['email'];
                                    
                                    // check if e-mail address is well-formed
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        //echo empty($_POST["email"]);
                                        echo $mail = '<input type="text" id="email" name="email" > ';
                                        echo $emailErr = " Invalid email format";
                                    }else{
                                        echo $email = $_POST['email'];
                                    }
                                 }
                                 }
                                      
                                 ?>
                                   <!--input type="email" id="email" name="email" --> 
                                 <!--?php echo $firstnam = "Email is empty"; ?--> 
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Phone/Mobile <br><br> </th>
                                <td> 
                                <?php 
                                 

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["pnumber"]))
                                 {
                                    //echo $phn = '<input type="tel" id="phone" name="phone" placeholder="+880 XXXX-XXXXXX" pattern="[+880] {4} [1] {1} [0-9] {3}-[0-9] {6}" required>';
                                    
                                    echo $phn = '<input type="text" id="pnumber" name="pnumber" placeholder="+880 XXXX-XXXXXX">';
                                    echo $firstnam = " phone number is empty";
                                     
                                 }
                                 else{
                                    $number = $_POST['pnumber']; 

                                    if (!preg_match("/^([+880]{4}[1]{1}[0-9]{3}[-][0-9]{6})$/",$number)) {
                                        echo $phn = '<input type="text" id="pnumber" name="pnumber" placeholder="+880 XXXX-XXXXXX">';
                                        echo $num = " Invalid number";
                                      }
                                      else{
                                        echo $number;
                                      }
                                 }
                                 }
                                      
                                 ?>
                                    <!--input type="text" id="pnumber" name="pnumber" --> 
                                 <!--?php echo $firstnam = "pnumber is empty"; ?--> 
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Website <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["web"]))
                                 {
                                    //echo $w = '<input type="url" name="web" value="">';

                                    echo $w = '<input type="text" name="web" value="">';
                                    echo $firstnam = "Website is empty";
                                     
                                 }
                                 else{
                                     $web = $_POST['web']; 

                                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
                                        echo $w = '<input type="text" name="web" value="">';
                                        echo $websiteErr = "Invalid URL";
                                      }
                                      else{
                                        echo $web;
                                      }
                                 }
                                 }
                                      
                                 ?>
                                    <!--input type="text" name="web" value=""--> 
                                 <!--?php echo $firstnam = "Website is empty"; ?--> 
                                 <br><br> </td>
                              
                            </tr>
            
                            <tr>
                                <th> Address </th>
                                <td>
                                    <fieldset>
                                        <legend>Permanent Address</legend>
                                        <table style="width: 50%;">
                                            <tr> 
                                                <td>
                                                    <?php 
                                                       // echo $Country = $_POST['Country']; 
                                                        //echo $State = $_POST['State'];
                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["Country"]))
                                                        {
                                                            echo $C = '<select id ="Country" name="Country">
                                                            <option value=""></option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="china">China</option>
                                                            <option value="America">America</option>
                                                            <option value="Canada">Canada</option>
                                                        </select>';
                                                            echo $firstnam = "Country is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $Country = $_POST['Country']; 
                                                        }

                                                        if(empty($_POST["State"]))
                                                        {
                                                            echo $s = '<select id ="State" name="State">
                                                            <option value=""></option>
                                                            <option value="Dhaka">Dhaka</option>
                                                            <option value="Chittagong">Chittagong</option>
                                                            <option value="Khulna">Khulna</option>
                                                            <option value="Rajshahi">Rajshahi</option>
                                                        </select>';
                                                            echo $firstnam12 = "State is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $State = $_POST['State'];
                                                        } 
                                                        }
                                                    ?>
                                                
                                                    <!--select id ="Country" name="Country">
                                                        <option value=""></option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="china">China</option>
                                                        <option value="America">America</option>
                                                        <option value="Canada">Canada</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id ="State" name="State">
                                                        <option value=""></option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                    </select-->

                                                    <!--?php echo $firstnam = "Country is empty";
                                                      $firstnam12 = "State is empty";  
                                                      ?-->

                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php 
                                                        $txt = "-" ;
                                                        $st =" ";
                                                        //echo $message = $_POST['message']; 
                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["message"]))
                                                        {
                                                            echo $M = '<textarea name="message" rows="10" cols="30" placeholder="Road/street/city"></textarea>';
                                                            echo $firstnam = "message is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $message = $_POST['message']; 
                                                        }
                                                        }
                                                             
                                                         
                                                        //echo $st;
                                                        //echo $State = $_POST['State'];
                                                       // echo $txt;
                                                        //echo  $number = $_POST['number'];
                                                       // echo $st;
                                                       // echo $Country = $_POST['Country'];
                                                    ?>
                                                    <!--textarea name="message" rows="10" cols="30">Road/street/city</textarea-->
                                                    <!--?php echo $firstnam = "message is empty";  ?-->
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php 
                                                        //echo  $number = $_POST['number'];

                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["number"]))
                                                        {
                                                            echo $n = '<input type="number" id="number" name="number" placeholder="post code">';
                                                            echo $firstnam = "Post code is empty";
                                                            
                                                        }
                                                        else{
                                                            echo  $number = $_POST['number']; 
                                                        }
                                                        }
                                                         
                                                    ?>
                                                    <!--input type="number" id="number" name="number" placeholder="post code"-->
                                                    <!--?php echo $firstnam = "Post code is empty"; ?-->
                                                    <br></td>
                                            </tr>
                                        </table>
                                        
                                    </fieldset>
                                    
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            <!--/tr>
    
            
            <tr-->
                <td>
                    <fieldset>
                        <legend>Account Information</legend>
                        <table style="width: 25%;">
                            <tr>
                                <th> Username <br><br> </th>
                                <td> 
                                    <?php 
                                       // echo  $text = $_POST['text'];

                                        
                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            if(empty($_POST["text"]))
                                        {
                                            echo $T = '<input type="text" id="text" name="text" >';
                                            echo $firstnam = "Username is empty";
                                            
                                        }
                                        else{
                                             $text = $_POST['text'];

                                            if  (strlen($text)<5)
                                            {
                                                if(!preg_match("/^[a-z0-9-' ]*$/",$text))
                                                {
                                                    echo $T = '<input type="text" id="text" name="text" >';
                                                    echo $userErr = " use lower letter";
                                                }
                                                else{
                                                    echo $T = '<input type="text" id="text" name="text" >';
                                                    echo $userErr = " Minimum 5 characters";
                                                }
                                                
                                              }
                                              else{
                                                echo $text;
                                              }
                                        }
                                        }
                                        
                                    ?> 
                                    <!--input type="text" id="text" name="text" -->
                                    <!--?php  echo $firstnam = "Username is empty"; ?-->
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Password <br><br> </th>
                                <td> 
                                    <?php 
                                        

                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            
                                            if(empty($_POST["Password"]))
                                            {
                                                echo $P = '<input type="password" id="Password" name="Password" >';
                                                echo $firstnam = "Password is empty";
                                            
                                            }
                                             else{
                                                    $Password = $_POST['Password'];

                                                    //if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web))
                                                    //if(!preg_match("/^[a-z0-9-' ]*$/",$text))
                                                    //if (!preg_match("/^([+880]{4}[1]{1}[0-9]{3}[-][0-9]{6})$/",$number))

                                                    //if  (!strlen($Password)<8)
                                                    //if (!strlen($Password) >= 8 && !preg_match('/[A-Z]/', $Password) && !preg_match('/[a-z]/', $Password) && !preg_match('/[0-9]/', $Password))
                                                    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $Password))
                                                    {                                   //#[0-9]+#...
                                                            //if (!preg_match("/[0-9]/",$Password)) {
                                                                echo $P1 = '<input type="password" id="Password" name="Password" >';
                                                                echo $num1 = " use minimum 1 special character, 1 upper, 1 lower character, number";
                                                            
                                                                    /*if (!preg_match("/[a-z]/",$Password)) {
                                                                        echo $P2 = '<input type="password" id="Password" name="Password" >';
                                                                        echo $num2 = " use minimum 1 special character, 1 upper, 1 lower character, number";
                                                            
                                                                            if (!preg_match("/[A-Z]/",$Password)) {
                                                                                echo $P3 = '<input type="password" id="Password" name="Password" >';
                                                                                echo $num3 = " use minimum 1 special character, 1 upper, 1 lower character, number";
                                                            
                                                                                    if (!preg_match("#[!@#$%^&*()-_=+{};:,<.>]+#",$Password)) {
                                                                                        echo $P4 = '<input type="password" id="Password" name="Password" >';
                                                                                        echo $num4 = " use minimum 1 special character, 1 upper, 1 lower character, number";
                                                                                    }
                                                                                    else{
                                                                                        echo $P5 = '<input type="password" id="Password" name="Password" >';
                                                                                        echo $userErr4 = " use minimum 1 special character";
                                                                                        }
                                                                                }
                                                                                /*else{
                                                                                    echo $P6 = '<input type="password" id="Password" name="Password" >';
                                                                                    echo $userErr3 = " use minimum 1 upper character";
                                                                                }
                                                                        }
                                                                        /*else{
                                                                            echo $P7 = '<input type="password" id="Password" name="Password" >';
                                                                            echo $userErr2 = " use minimum 1 lower character";
                                                                        }
                                                            }
                                                            /*else{
                                                                    echo $P8 = '<input type="password" id="Password" name="Password" >';
                                                                    echo $userErr1 = " use minimum a number character";
                                                                }*/

                                                    }
                                                    else{
                                                        //echo $P9 = '<input type="password" id="Password" name="Password" >';
                                                        //echo $userErr = " Minimum 8 characters";
                                                        echo $Password;
                                                    }
                                                
                                                }
                                        }
                                        /*else{
                                                echo $Password;
                                            }*/
                                        

                                        
                                        
                                    ?> 
                                    <!--input type="password" id="Password" name="Password" -->
                                    <!--?php  echo $firstnam = "Password is empty"; ?-->
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Confirm Password <br><br> </th>
                                <td> 
                                    <?php 
                                        

                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            if(empty($_POST["CPassword"]))
                                        {
                                            echo $CP = '<input type="password" id="CPassword" name="CPassword" >'; 
                                            echo $firstnam = "Confirm Password is empty";
                                            
                                        }
                                        else{
                                              $CPassword = $_POST['CPassword'];

                                             if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $CPassword))
                                             {
                                                    echo $P1 = '<input type="password" id="CPassword" name="CPassword" >';
                                                    echo $num1 = " use minimum 1 special character, 1 upper, 1 lower character, number";
                                                 
                                               }
                                               else{
                                                 echo $CPassword;
                                               }
                                        }
                                        }
                                        
                                    ?> 
                                    <!--input type="password" id="CPassword" name="CPassword" --> <br><br>  </td>
                                        <!--?php echo $firstnam = "Confirm Password is empty"; ?-->
                            </tr>
                        </table>
                    </fieldset><br><br>
                    <!--span class="error"></span-->
                    <?php
                        if($_POST['Password']==$_POST['CPassword'])
                        {
                            
                            echo $in = '<input type="submit" value="Registration">';
                            echo $pro = "Password matched";
                        }
                        else{
                            echo $in = '<input type="submit" value="Registration">';
                            echo $pro = "Password not matched";
                        }
                    ?>
                    <!--input type="submit" value="Registration"-->
                </td>
                
                    
                
            </tr>
    
            

        </table>
        </form>
<?php
       //function t_in($data)
       //{
        //$data = trim($data);
        //$data = stripslashes($data);
        //$data = htmlspecialchars($data);
        //return $data;
       //}
       ?>
            
    </body>
</html>


