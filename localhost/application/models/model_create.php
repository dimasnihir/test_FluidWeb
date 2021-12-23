<?php


class Model_create extends Model
{
	function get_data($long_url)
	{	
		$db = new Database();
		
		//Проверяем есть ли привязанный токен к url
		//Обеспечиваем уникальность токена
		if ($db->if_url_in_db($long_url)){
			
			

			$token = $db->get_token_by_long_url($long_url);

			$db->update_token($token);

			return 'http://'.$_SERVER['HTTP_HOST'].'/'.$token;
		}else
		{
			$token = bin2hex(random_bytes(3));
			while($db->if_token_in_db($token))
			{
				$token = bin2hex(random_bytes(3));
			}

			$ip = $_SERVER['REMOTE_ADDR'];

			$db->add_short_url($long_url, $token, $ip);

		}
		// Здесь мы просто сэмулируем реальные данные.
	

		// return 'http://'.$_SERVER['HTTP_HOST'].'/redirect/'.$token; - Первая версия 
		return 'http://'.$_SERVER['HTTP_HOST'].'/'.$token;

		
	}

}
