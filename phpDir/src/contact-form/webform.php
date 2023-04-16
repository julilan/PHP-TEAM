<?php

$form_status = '';


function sanitise_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   

};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Using trim method to remove accidental whitespaces
    $name = sanitise_input($_POST['name']);
    $email = sanitise_input($_POST['email']);
    $subject = sanitise_input($_POST['subject']);
    $message = sanitise_input($_POST['message']);

  


    // Name, email and subject inputs having the "required" attribute makes browser's built-in validation check for empty fields. To make sure email input value is in valid format we need to do additional validation for email.
    
    // Getting domain
    $atPos = mb_strpos($email, '@');
    $domain = mb_substr($email, $atPos + 1);

    // Validating email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_status = "Please enter a valid email address.";
    } elseif (!checkdnsrr($domain . '.', 'MX')) { // checking domain
        $form_status = "Domain $domain is not valid. Please enter a valid email address.";
    } elseif(empty($name)){             
        $form_status = "Error! You didn't enter the name";
    }      //this checks if the field is empty (remove required from input in form)
    elseif(!preg_match("/^[a-zA-z]*$/",$name)){
        $form_status = "Only alphabets are allowed. Please enter your name again";   
    }
    else {
        $form_status = "Thank you, $name. Your message has been successfully sent.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required >
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
            <p>
                <?=$form_status?>
            </p>
        </form>
    </div>
</body>

</html>