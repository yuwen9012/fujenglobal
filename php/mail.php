<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "mail/Exception.php";
include "mail/PHPMailer.php";
include "mail/SMTP.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'fujenglobal@gmail.com'; 
        $mail->Password   = 'zcqvxuzerhtvrbch'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //TLS加密
        $mail->Port       = 587;

        // 設置收件人
        $recipients = [];
        if (isset($_POST['program']) && is_array($_POST['program'])) {
            foreach ($_POST['program'] as $program) {
                switch ($program) {
                    case 'Degree Student':
                        $recipients[] = '048253@mail.fju.edu.tw';
                        break;
                    case 'Exchange Student':
                        $recipients[] = '089634@mail.fju.edu.tw';
                        break;
                    case 'Study Abroad':
                        $recipients[] = 'oiesa@mail.fju.edu.tw';
                        break;
                    case 'Mandarin Chinese Learning':
                        $recipients[] = '056043@mail.fju.edu.tw';
                        break;
                }
            }
        }

        // 默認郵箱(以防萬一)
        if (empty($recipients)) {
            $recipients[] = 'fujenglobal@gmail.com';
        }

        $mail->setFrom('fujenglobal@gmail.com');
        
        // 添加所有收件人
        foreach ($recipients as $recipient) {
            $mail->addAddress($recipient);
        }

        // 郵件內容
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = '入學網-聯絡我們';
        $mail->Body    = "
            <p style='color: #000000;'><strong>Name:</strong> {$_POST['firstName']} {$_POST['lastName']}</p>
            <p style='color: #000000;'><strong>Region:</strong> {$_POST['region']}</p>
            <p style='color: #000000;'><strong>Nationality:</strong> {$_POST['nationality']}</p>
            <p style='color: #000000;'><strong>Email:</strong> {$_POST['email']}</p>
            <p style='color: #000000;'><strong>Phone:</strong> {$_POST['phone']}</p>
            <p style='color: #000000;'><strong>Programs Interested:</strong> " . implode(', ', $_POST['program']) . "</p>
            <p style='color: #000000;'><strong>Categories:</strong> " . implode(', ', $_POST['category']) . "</p>
            <p style='color: #000000;'><strong>Enquiry Details:</strong> {$_POST['enquiryDetails']}</p>
        ";


        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>