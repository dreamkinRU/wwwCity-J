<?
	$to = "eco-j@list.ru"; //Почта получателя
//	$to = "dreamkin.dreamkin@gmail.com"; //Почта получателя
	$subject = "Заказ обратного звонка"; //Заголовок сообщения
	$message = "
		<html>
		<head>
			<title>".$subject."</title>
			</head>
			<body>
				<p>Имя: ".$_POST["name"]."</p>
				<p>Телефон: ".$_POST["phone"]."</p>                        
				<p>Сообщение: ".$_POST["message"]."</p>
			</body>
		</html>";
	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
	$headers .= "From: city-j.ru\r\n"; //Наименование и почта отправителя
	mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>