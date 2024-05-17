<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "dontreply899@gmail.com"; //enter you email address
        $mail->Password = 'enburtxqcrmrusqu'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("samdtark45@gmail.com"); //enter you email address
        $mail->Subject = ("$email ($subject)");
        $mail->Body = ("$phone $body" );

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        // header("Location: ../pages/contactsent.php#myform"); // Change "success.php" to your desired success page
        echo "Your message has been sent! ";

 

        // exit(json_encode(array("Email successfully sent")));
    }
?>
<script>
    setTimeout(() => {
            window.close();
        }, 3000);
</script>