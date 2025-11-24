<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Mechanic-register</title>
    <link rel="stylesheet" href="css/mechanic-register.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
    <header>
        <?php include "./header.php" ?>
    </header>


    <main>
        <form action="mechanic-register.php" method="post">
            <div class="customer-register-container">
                
                <div class="customer-register-details">
                    <h2>Fill all your details</h2>
                    <div class="customer-register-details-txtbox">
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="First Name" id="fname" name="mfname">
                            <input type="text" placeholder="Last Name" id="lname" name="mlname">
                        </div>
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="NIC" id="nic" name="mnic">
                            <input type="text" placeholder="Email" id="email" name="memail">
                        </div>
                        <div class="customer-register-details-txtbox-line">
                            <input type="text" placeholder="Phone Number" id="pnum" name="mpnum">
                            <input type="date" placeholder="Date of Birth" name="mdob">
                        </div>
                    </div>
                </div>
                <hr>
                
                <div class="mechanic-register-location">
                    <div class="mechanic-register-location-select">
                        <select name="mlocation" id="mlocation">
                                                    <option selected>Select District</option>
                                                    <option value="Ampara">Ampara</option>
                                                    <option value="Anuradhapura">Anuradhapura</option>
                                                    <option value="Badulla">Badulla</option>
                                                    <option value="Batticaloa">Batticaloa</option>
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Galle">Galle</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Hambantota">Hambantota</option>
                                                    <option value="Jaffna">Jaffna</option>
                                                    <option value="Kalutara	">Kalutara	</option>
                                                    <option value="Kandy">Kandy</option>
                                                    <option value="Kegalla">Kegalla</option>
                                                    <option value="Kilinochchi">Kilinochchi</option>
                                                    <option value="Kurunegala">Kurunegala</option>
                                                    <option value="Mannar">Mannar</option>
                                                    <option value="Matale">Matale</option>
                                                    <option value="Matara">Matara</option>
                                                    <option value="Moneragala">Moneragala</option>
                                                    <option value="Mullaitivu">Mullaitivu</option>
                                                    <option value="Nuwareliya">Nuwar Eliya</option>
                                                    <option value="Polonnaruwa">Ampara</option>
                                                    <option value="Puttalam">Puttalam</option>
                                                    <option value="Rathnapura">Rathnapura</option>
                                                    <option value="Trincomalee">AmpaTrincomaleera</option>
                                                    <option value="Vavuniya">Vavuniya</option>
                                                    
                            </select>
                    </div>
                    
                </div>

                <div class="customer-register-payment">
                    <div >
                        <h2>Add Payment detailes</h2>
                    </div>
                    <div class="customer-register-payment-inputs" >
                        <select name="mbank" id="bank">
                            <option selected>Select Bank</option>
                                                <option value="Amana-Bank">Amana Bank</option>
                                                <option value="Bank-of-Ceylon">Bank of Ceylon</option>
                                                <option value="Bank-of-China">Bank of China</option>
                                                <option value="Cargills-Bank">Cargills Bank</option>
                                                <option value="Citibank">Citibank</option>
                                                <option value="Commercial-Bank-of-Ceylon">Commercial Bank of Ceylon</option>
                                                <option value="Deutsche-Bank">Deutsche Bank</option>
                                                <option value="DFCC-Bank">DFCC Bank</option>
                                                <option value="Habib-Bank">Habib Bank</option>
                                                <option value="Hatton-National-Bank">Hatton National Bank</option>
                                                <option value="Indian-Bank">Indian Bank</option>
                                                <option value="Indian-Overseas-Bank">Indian Overseas Bank</option>
                                                <option value="MCB-Bank">MCB Bank</option>
                                                <option value="National-Development-Bank">National Development Bank</option>
                                                <option value="Nations-Trust-Bank">Nations Trust Bank</option>
                                                <option value="Pan-Asia-Bank">Pan Asia Bank</option>
                                                <option value="People's-Bank">People's Bank</option>
                                                <option value="Public-Bank-Berhad">Public Bank Berhad</option>
                                                <option value="Sampath-Bank">Sampath Bank</option>
                                                <option value="Seylan-Bank">Seylan Bank</option>
                                                <option value="Standard-Chartered-Bank">Standard Chartered Bank</option>
                                                <option value="State Bank-of-India">State Bank of India</option>
                                                <option value="Union-Bank-of-Colombo">Union Bank of Colombo</option>
                        </select>
                        <input type="text" placeholder="Branch" id="branch" name="mbranch">
                        <input type="text" placeholder="Account Number" id="accno" name="maccno">
                    </div>
                </div>
                <hr>

                <div class="customer-register-login">
                    <h2>Login Details</h2>
                    <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="Password" id="pwd" name="mpwd">
                        <input type="text" placeholder="Confirm Password" id="cpwd" name="mcpwd"> 
                    </div>
                    <div class="customer-register-btn">
                        <button type="submit">Register Now</button>
                    </div>
                </div>
                
            </div>
        </form>
        

        
        
      
    </main>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
    
    
</body>
</html>


<?php
    require 'config.php';
    $mfname =$_POST["mfname"];
    $mlname =$_POST["mlname"];
    $mnic =$_POST["mnic"];
    $memail=$_POST["memail"];
    $mpnum =$_POST["mpnum"];
    $mdob =$_POST["mdob"];
    $mlocation=$_POST["mlocation"];
    $mbank =$_POST["mbank"];
    $mbranch=$_POST["mbranch"];
    $maccno=$_POST["maccno"];
    $mpwd =$_POST["mpwd"];
    $mcpwd =$_POST["mcpwd"];

    $msql="INSERT INTO mechanic VALUES ('','$mfname','$mlname','$mdob','$mnic','$memail','$mlocation','$mpwd')";
    if($mpwd==$mcpwd)
    {
        if($con->query($msql))
        {
            $getmid=$con->query("SELECT MID FROM mechanic WHERE NIC='$mnic'");
            $row =$getmid->fetch_assoc();
            $mid=$row['MID'];
            $mpsql="INSERT INTO mechanic_phone VALUES ('$mid','$mpnum')";
            if($con->query($mpsql))
            {
                echo "done";
            }
            else 
            {
                echo"Error".$con->error;
            }
            $mpaysql="INSERT INTO payment_details (ACC_NO, Bank, Branch, MID) VALUES ('$maccno','$mbank','$mbranch','$mid')";
            if($con->query($mpaysql))
            {
                echo "payment details added";
            }
            else
            {
                echo "payment details adding error";
            }
        }
    }



    $con ->close();
?>