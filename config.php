<?php
    $con = new mysqli("localhost","root","","qfms");

    if ($con->connect_error)
    {
        echo"connetion failed !".$con->connect_error;
    }
    // else
    // {
    //     echo "connection ssuccessful ";
    // }
?>