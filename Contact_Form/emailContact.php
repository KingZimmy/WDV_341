<?php

    $tableList = "";                        
    
    foreach($_POST as $key => $value)  {
        $tableList .= $key . ": ";		    
        $tableList .= $value . "</br>";	                                       
    }

    $to = "mmandernach@smgtech.biz";    
    
    $subject = "You have recieved a contact request";     
    
    $message = submitDate() . 
        "Hello Mara,</br> You have a new contact form request. Information collected : </br>"
        . $tableList . "</br> Please respond to the contact with 48 hours.  Thank you. </br></br> 
        From, </br> contact@mmandernach@smgtech.biz";
    
    $headers = "From: contact@mmandernach@smgtech.biz" . "\r\n";   

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    

    mail($to,$subject,$message,$headers); 
  
?>