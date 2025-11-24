<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | cusotmer-register</title>
    <link rel="stylesheet" href="css/customer-register.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
    <header>
       <?php include "./header.php"?>
    </header>


    <main>
        <form action="customer-register.php" method="post">
            <div class="customer-register-container">
                <div class="customer-register-details">
                    <h2>Fill all your details</h2>
                    <div class="customer-register-details-txtbox">
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="First Name" name="rufname">
                            <input type="text" placeholder="Last Name" name="rulname">
                        </div>
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="NIC" name="runic">
                            <input type="text" placeholder="Email" name="ruemail">
                        </div>
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="Phone Number 1" name="rupnum">
                            <!-- <input type="text" placeholder="Phone Number 2" name="rupnum[]"> -->
                            <!-- <input type="text" placeholder="Vehicle Registration Number"> -->
                        </div>
                        <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="Vehicle Registration Number">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="customer-register-login">
                    <h2>Login Details</h2>
                    <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="Password" name="rupw">
                        <input type="text" placeholder="Confirm Password" name="rucpw"> 
                    </div>
                    <div class="customer-register-btn">
                        <button type="submit">Register Now</button>
                    </div>
                    

                </div>
            </div>
        </form>
        

        
        
      
    </main>

    <footer>
        <?php include "./footer.php"?>
    </footer>
    
    
</body>
</html>

<?php
    require 'config.php';
    $fname =$_POST["rufname"];
    $lname =$_POST["rulname"];
    $nic =$_POST ["runic"];
    $emamil =$_POST["ruemail"];
    $pw =$_POST["rupw"];
    $cpw =$_POST["rucpw"];
    $phonenumbers = $_POST["rupnum"];

    $sql ="INSERT INTO registered_user VALUES('','$nic','$fname','$lname','$emamil','$pw')";
    

        if($pw ==$cpw)
        {
            if($con->query($sql))
            {
                $getuserid = $con->query("SELECT RID FROM registered_user WHERE NIC ='$nic'" );
                $row = $getuserid->fetch_assoc();
                $userid = $row['RID'];
                $phsql =" INSERT INTO reg_user_phone VALUES ('$userid','$phonenumbers') ";
                if($con->query($phsql))
                {
                    echo "done";
                }
                else
                {
                    echo"Error".$con->error;
                }
            }
            else
            {
                echo"Error".$con->error;
            }
            
            
        }
        else 
        {
            echo "Passwords do not match.";
        }
        
        


        $con ->close();
?>