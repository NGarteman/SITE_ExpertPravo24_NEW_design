<?
if((isset($_POST['min'])&&$_POST['min']!="")&&(isset($_POST['max'])&&$_POST['max']!="")){ 
        $to = 'expertpravo24@gmail.com'; 
        $subject = 'Заявка с ОСНОВНОГО';
        $message = '
                <html>

                    <body>
                        <p>Имя - '.$_POST['name'].' </p>
                        <p>Телефон - '.$_POST['phone'].' </p>
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: info@prodychet.ru \r\n"; 
        mail($to, $subject, $message, $headers); 
        echo 'true';
} else {  
    echo 'false';
}
?>