<?php




class Model_redirect extends Model
{
	
	function get_data($token)
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		$token = bin2hex(random_bytes(3));
		$ip = $_SERVER['REMOTE_ADDR'];

		$db = new Database();
		
		$db->get_long_url_by_token($token);
        


		return $db->get_long_url_by_token($token);;

		
	}

}
?>