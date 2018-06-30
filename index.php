<?php
	
	/*
	
	тут очень много страшного пхп кода 
	
	*/
	
	
	
	

	if($_POST) {
		$subject = "Поступила заявка с lactomarin.kz многостраничника";
		$to = "aleksphesspro@gmail.com"; 
		$from = "webmaster@test.com";
		$message = "<p> Здесь текст </p>";
        
        $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: webmaster@test.com \r\n";
		if(mail($to, $subject, $message, $headers))
		{
			$array = [
				'answer' => true,
				'text'	=> 'text'
			];
		}
		else
		{
			$array = [
				'answer' => false,
				'text'	=> 'text'
			];
		}
			
	}
	echo json_encode($array);
?>