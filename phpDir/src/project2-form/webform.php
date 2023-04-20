<?php
$nameErr=$emailErr=$subjectErr=$messageErr='';
$name=$email=$subject=$message=$success='';

function testInput($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["name"])) {
        $nameErr="Name is required";
    }
    else {
        $name=testInput($_POST["name"]);
        // Allowing international letters with the property '\p{L}' that matches any Unicode letter character
        if (!preg_match("/^[\p{L}\s\-']+$/u",$name)) {
            $nameErr = "Invalid name. Only letters, spaces, hyphens, and apostrophes are allowed.";
        }        
    }

    if(empty($_POST["email"])) {
        $emailErr="Email is required";
    }
    else {
        $email=testInput($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr="Invalid email format. The email format must be in john@example.com.";
        }
    }

    if(empty($_POST["subject"])) {
        $subjectErr="Subject is required. Please include subject for your message.";
    }
    else {
        $subject=testInput($_POST["subject"]);
    }

    if(empty($_POST["message"])) {
        $message='';
    }
    else {
        $message=testInput($_POST["message"]);
    }

    if($nameErr=='' and $emailErr=='' and $subjectErr=='') {
        $success="Form validation successfull.";
        $name=$email=$subject=$message='';
    }

}

?>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head> -->
<?php include '../header.php'; ?>


<body>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" value="<?php echo $name; ?>">
                <span class="error"><?php echo $nameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3"
                value="<?php echo $subject; ?>">
                <span class="error"><?php echo $subjectErr; ?></span>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"><?php echo $message; ?></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
            <div class="success"><?php echo $success; ?></div>
        </form>
        
    </div>
</body>

</html>