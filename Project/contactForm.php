<?php
    //Message Vars
    $msg = '';
    $msgClass = '';

    //Check for Submit

    if(filter_has_var(INPUT_POST,'submit')){
        //get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message =  htmlspecialchars($_POST['message']);

        //check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //passed
            //Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'Plase use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //passed
                //Recipient Email
                $toEmail ='';   // the email address where you want this to go (to diko s hosting i server)
                $subject = 'Contact Request From'. $name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                        
                //Email Headers
                $headers = "MINE-Version : 1.0". "\r\n";
                $headers .="Content-Type:text/html;charset =UTF-8" . "\r\n";

                //Additional headers
                $headers .= "Form: ".$name. "<".$email. ">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //email Sent
                    $msg = 'Your email  has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email not sent';
                    $msgClass = 'alert-danger';
                }
            }

        } else {
            //failed
            $msg = 'Plase fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--logo icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact Us</title>
</head>
<body>
    
    <!-- Nav bar-->
    <?php include 'includes/navbar.php'; ?>

    <div class= "container bg">
        <h2>Contact Us</h2><br>
        <?php if($msg != ''): ?>
            <div class = "alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <div class= "form-group">
                <label for="">Name</label>
                <input type="text" name = "name" class = "form-control" value = "<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class= "form-group">
                <label for="">Email</label>
                <input type="text" name = "email" class = "form-control" value = "<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class= "form-group">
                <label for="">Message</label>
                <textarea name="message" class = "form-control" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type = "submit" name= "submit" class= "btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>