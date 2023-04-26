<?php

	// bot
	// https://api.telegram.org/bot1252975811:AAEdiqS2l5vN7r6cULWGDF8VNf7QgRowrQQ/getUpdates
		
	$token = "1252975811:AAEdiqS2l5vN7r6cULWGDF8VNf7QgRowrQQ";
	$chat_id = "-534316451";

	if(isset($_GET['mess'])) {
		$name  = strip_tags($_POST['name']);
		$phone = strip_tags($_POST['phone']);
		$phone = substr_replace($phone, '', 0, 1);
		$phone = substr_replace($phone, '8', 0, 1);

		$arr = array(
			'Типі: '			=> 'Консультация 1',
			'Аты-жөні: '	=> $name,
			'Телефон: ' 	=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}


	if(isset($_GET['test1'])) {

		$fl2 = strip_tags($_POST['fl2']);
		$fl3 = strip_tags($_POST['fl3']);
		$nl12 = strip_tags($_POST['nl12']);

		$name  = strip_tags($_POST['name']);
		$phone = strip_tags($_POST['phone']);
		$phone = substr_replace($phone, '', 0, 1);
		$phone = substr_replace($phone, '8', 0, 1);

		$arr = array(
			'Типі: '												=> 'Тест №1',
			'Как вы думайте какой сайт вам нужен: ' 	=> $fl2,
			'У вас ранее был сайт: ' 						=> $fl3,
			'Нужны ли дополнительные услуги: ' 			=> $nl12,
			'Аты-жөні: '										=> $name,
			'Телефон: ' 										=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}