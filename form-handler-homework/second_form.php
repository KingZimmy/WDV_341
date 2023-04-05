<?php



if(isset($_POST) && isset($_POST['button'])) {
    $secret_key = '6Lej71wlAAAAAHdcWRx8ZCONx-MFKHUgwTUxOZ1k';
    $token = $_POST['captchaToken'];
    $ip = $_SERVER['REMOTE_ADDR'];
   

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$token.'&remoteip='.$ip;

    $request = file_get_contents($url);
    $reponse = json_decode($request);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body {
        height: 100vh;
        background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
        background-repeat: no-repeat;
        font-family: 'Cambria', 'Cochin', Georgia, Times, 'Times New Roman', serif;
    }
    
    h1 {
        background: transparent;
        text-shadow: 4px 3px 0px #7A7A7A;
        color: white; 
    }

    .mainBody {
        height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #contactForm {
        color: white;
        display: flex;
        flex-direction: column;
        background-color: rgb(63,94,251);
        padding: .75rem;
        border-radius: 5px;
        width: 300px;
    }

    #contactForm  label{
        margin: 2px 0px;
        text-transform: uppercase;
    }

    .inputStyle {
        border-radius: 5px;
        border: 1px solid black;
        padding: 5px;
    }

    .miscInput {
        resize: none;
    }

    .submit {
        margin-top: 10px;
        text-transform: uppercase;
    }

</style>

    <script>
        function fillReasons() {
            let reasons = ["Complaint", "Internship", "Question", "Collaborate"]
            contactReasons = document.querySelector(".contactReasons")

            console.log("Here")
            reasons.forEach(elem => {
                console.log(elem)
                newOp = document.createElement("option")
                newOp.innerHTML = elem
                contactReasons.appendChild(newOp)
            })
        }
    </script>

<script src="https://www.google.com/recaptcha/api.js?render=6Lej71wlAAAAAHdcWRx8ZCONx-MFKHUgwTUxOZ1k"></script>

<script>
    function setUpToken() {
        grecaptcha.ready(function() {
        grecaptcha.execute('6Lej71wlAAAAAHdcWRx8ZCONx-MFKHUgwTUxOZ1k', {action: 'submit'}).then(function(token) {
            document.querySelector('#captchaToken').value = token
            });
        });
    }

</script>

</head>
<body onload="fillReasons(), setUpToken()">


<div class="mainBody">
        <h1>Contact Form</h1>
        <form action="recaptcha.php" method="post" id="contactForm">
        

            <input type="hidden" name="captchaToken" id="captchaToken">
            <label for="firstName">Name</label>
            <input type="text" name="firstName" class="inputStyle" required>
            
            <label for="email">Email</label>
            <input type="text" name="email" class="inputStyle" required>

            <label for="reasonForContact">Reason for Contact</label>
            <select name="contactReasons" class="contactReasons inputStyle" name="reasonForContact" required></select>

            <label for="comments">Comments</label>
            <textarea name="comments" cols="30" rows="7" class="miscInput inputStyle"></textarea>

            <div class="g-recaptcha" data-sitekey="6Lej71wlAAAAAPv6j10oUYydJ3MAnSkE-9haMORC"></div>

            <input type="submit" name="button" value="submit" class="submit inputStyle">
        </form>

    </div>   


</body>
</html>
