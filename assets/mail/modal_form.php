<?php 
require_once('PHPMailer.php');
require_once('Exception.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
?>
<?php
if(isset($_POST)) {
    
        $bodytext = '
        <h1>Форма с заказом услуги</h1> 
        <p>Имя: '. $_POST['name'].'</p>
        <p>Телефон: '. $_POST['phone'].'</p>
        <p>Название услуги: '. $_POST['serviceName'].'</p>
        <p>Стоимость: '. $_POST['servicePrice'].'</p>';
    
        $email = new PHPMailer();
        $email->SetFrom('noreply@mynewtv.com');
        $email->isHTML(true); 
        $email->CharSet = 'UTF-8';
        $email->Encoding = 'base64';
        $email->Subject   = 'МоеНовоеТВ | Форма с заказом услуги';
        $email->Body      = $bodytext;
      	$email->AddAddress( 'san1295@tut.by' );
      	
        if( $email->Send()){
        	echo 'done';
        } else {
        	echo 'error';
        }
}
