<?php
date_default_timezone_set('Etc/UTC');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

function sendMail($userMail, $token)
{
    //PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
    //From email address and name

    //Enable SMTP debugging.
    // $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name   
    $mail->SMTPDebug = 3;
    $mail->CharSet =  "utf-8";               

    //Set this to true if SMTP host requires authentication to send email
    $mail->Host = 'smtp.sendgrid.net';
    $mail->Port = 25;

    //Provide username and password     
    $mail->SMTPAuth = true;

    $mail->Username = "apikey";
    $mail->Password = "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";
    //If SMTP requires TLS encryption then set it
    // $mail->SMTPSecure = "ssl";   

    //Set TCP port to connect to


    $mail->From = "soporte@eventosenel.pe";
    $mail->FromName = "CONECTADOS ENEL";

    $mail->addAddress($userMail, "Recepient Name");
    // $mail->addCC('alonso@cuborojo.pe');              

    $mail->isHTML(true);

    $mail->Subject = "¡Registro exitoso! Link de acceso al evento CONECTADOS";
    $mail->Body = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        
                        <head>
                        
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
                        <title>Demystifying Email Design</title>
                        
                        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        
                        </head>

                        <body style="margin: 0; padding: 0;">

                    <table style="width: 100%;text-align: center;">
                    <!--Logo-->
                    <tr>
                        <td colspan="2" style="height:90px;text-align:center;">
                        <img src="https://i.ibb.co/f2mLdsz/header-mail.png" alt="" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="height:90px;text-align:center;">
                            <br><br>
                            <img width="85px" height="auto" src="https://i.ibb.co/9GG5jx5/success.png" alt="" />
                            
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                        <p style="font-size: 20px;
                        font-weight: bold;">
                        ¡Tu registro ha sido exitoso!
                        </p>
                        </td>
                    </tr>

                    <tr style="text-align:center;">
                        <td  colspan="2" style="width:100%padding:20px;">
                        <p>
                            <a style="    
                            color: white;
                            text-decoration: none;
                            width: 100%;
                            background: #0555fa;
                            padding: 10px 10%;
                            vertical-align: super;" href="https://eventosenel.pe/view/home.php?token='.$token.'&mail='.$userMail.'">
                            Ingresa al evento aquí 
                            </a>
                        </p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                        <p>
                        Si tienes algún inconveniente o requieres ayuda, escríbenos a:<br>
                        soporte@eventosenel.pe
                        </p>
                        </td>
                    </tr>
                    
                    </table>
                    
                    </body>

                        
            </html>
                ';
    $mail->AltBody = "This is the plain text version of the email content";

    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}


function sendMailToken($userMail)
{
    //PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
    //From email address and name

    //Enable SMTP debugging.
    // $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                  

    //Set this to true if SMTP host requires authentication to send email
    $mail->Host = 'smtp.sendgrid.net';
    $mail->Port = 25;

    //Provide username and password     
    $mail->SMTPAuth = true;

    $mail->Username = "apikey";
    $mail->Password = "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";
    //If SMTP requires TLS encryption then set it
    // $mail->SMTPSecure = "ssl";   

    //Set TCP port to connect to


    $mail->From = "soporte@eventosenel.pe";
    $mail->FromName = "CONECTADOS ENEL";

    $mail->addAddress($userMail, "Recepient Name");
    // $mail->addCC('alonso@cuborojo.pe');              

    $mail->isHTML(true);

    $mail->Subject = utf8_decode("Excediste la cantidad de sesiones");
    $mail->Body = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        
                        <head>
                        
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
                        <title>Demystifying Email Design</title>
                        
                        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        
                        </head>

                        <body style="margin: 0; padding: 0;">

                    <table style="width: 100%;text-align: center;">
                    <!--Logo-->
                    <tr>
                        <td colspan="2" style="height:90px;text-align:center;">
                        <img src="https://i.ibb.co/f2mLdsz/header-mail.png" alt="" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                        <h2 style="margin-bottom:0px;color:#0555FA;">INFORMACIÓN</h2>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                        <p>
                        Maximo se podra tener 2 sesiones por usuario
                        </p>
                        </td>
                    </tr>
                    
                    </table>
                    
                    </body>

                        
            </html>
                ';
    $mail->AltBody = "This is the plain text version of the email content";

    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
