<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <!--form action = "Reg.php" method = "POST" novalidate-->
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
                                    echo $fname  = $_POST['fname']; 
                                ?>
                                <br><br> </td>
                            </tr>
                
                            <tr>
                                <th> Last Name <br><br> </th>
                                <td> 
                                <?php 
                                 echo $lname  = $_POST['lname'];  
                                ?>
                                <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Gender <br><br> </th>
                                <td> 
                                <?php 
                                 echo $Gender  = $_POST['Gender'];  
                                ?> <br><br>  </td>
                            </tr>
            
                            <tr>
                                <th> Father's Name <br><br> </th>
                                <td> 
                                <?php 
                                 echo $fnam  = $_POST['fnam'];  
                                ?> <br><br>  </td>
                            </tr>
            
                            <tr>
                                <th> Mother's Name <br><br> </th>
                                <td> 
                                <?php 
                                 echo $mnam  = $_POST['mnam'];  
                                ?>  <br><br>  </td>
                            </tr>
            
                            <tr>
                                <th> Blood Group <br><br> </th>
                                <td> 
                                <?php 
                                 echo $Blood = $_POST['Blood'];  
                                ?>
                                <br><br> 
                                </td>
                            </tr>
            
                            <tr>
                                <th> Religion <br><br> </th>
                                <td> 
                                <?php 
                                 echo $Religion = $_POST['Religion']; 
                                ?>
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
                                 echo $email = $_POST['email']; 
                                ?> <br><br>  </td>
                            </tr>
            
                            <tr>
                                <th> Phone/Mobile <br><br> </th>
                                <td> 
                                <?php 
                                 echo $number = $_POST['pnumber']; 
                                ?> <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Website <br><br> </th>
                                <td> 
                                <?php 
                                 echo $web = $_POST['web']; 
                                ?> <br><br>  </td>
                            </tr>
            
                            <tr>
                                <th> Address </th>
                                <td>
                                    <fieldset>
                                        <legend>Permanent Address</legend>
                                        <table style="width: 50%;">
                                            <tr> 
                                                <!--td>
                                                    <?php 
                                                       // echo $Country = $_POST['Country']; 
                                                        //echo $State = $_POST['State'];
                                                    ?>
                                                </td-->
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php 
                                                        $txt = "-" ;
                                                        $st =" ";
                                                        echo $message = $_POST['message']; 
                                                        echo $st;
                                                        echo $State = $_POST['State'];
                                                        echo $txt;
                                                        echo  $number = $_POST['number'];
                                                        echo $st;
                                                        echo $Country = $_POST['Country'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!--td>
                                                    <?php 
                                                        //echo  $number = $_POST['number'];
                                                    ?>
                                                    <br></td-->
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
                                        echo  $text = $_POST['text'];
                                    ?> 
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Password <br><br> </th>
                                <td> 
                                    <?php 
                                        echo  $Password = $_POST['Password'];
                                    ?> 
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Confirm Password <br><br> </th>
                                <td> 
                                    <?php 
                                        echo $CPassword = $_POST['CPassword'];
                                    ?>  <br><br>  </td>
                            </tr>
                        </table>
                    </fieldset><br><br>
                    <input type="submit" value="Registration">
                </td>
                
                    
                
            </tr>
    
            

        </table>
        <!--/form-->

        

            
    </body>
</html>



