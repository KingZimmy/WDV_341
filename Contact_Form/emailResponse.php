<?php  

    $to = $_POST["email"];  
   
    $subject = "Your form was successfully submitted"; 
    
    $message = "
   
    <html>
        
        <head>   
        </head>
        
        <body>
        
            <h3 style='color:black;'>Thank you! Your form was recieved.</h3>
            
            <div style='background-color:#2596FF; padding:20px; color:black; border-style:solid; border-width:thin; border-color:black;'>
                
                <p>" . submitDate() . "</p>
                    
                <p>
                    Dear " . $_POST['firstName'] . ", 
                </p>
                            
                <p>
                    Thank you for your interest.  This email is confirmation that the information you submitted has been recieved.
                        
                    You entered the following comments:</br></br>
                        
                    <q>" . $_POST['comment'] . "</q> 
                        
                </p>
                    
                <p>
                        
                </p>
                
                <p style='color:black;'>
                    
                    Best Wishes,</br>
                        
                    Mara Mandernach</br>
                        
                    mmandernach@smgtech.biz
                    
                </p>
            
            </div>
       
        </body>
    
    </html>";

    $headers = "From: contact@mmandernach@smgtech.biz" . "\r\n";   

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    

    mail($to,$subject,$message,$headers);                           
  
?>