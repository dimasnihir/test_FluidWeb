<?php





class Controller_redirect extends Controller
{

	function action_redirect($token)
	{

		$db = new Database();
		

		$ip = $_SERVER['REMOTE_ADDR'];
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$db->add_item_in_story($token, $user_agent, $ip);

		if ($db->time_out($token)) {

			$db->del_token_by_token($token);
			
			Route::ErrorPage404();

				

		} else {
				

			$long_url = $db->get_long_url_by_token($token);

			if(!empty($long_url)){
				header('Location: ' . $long_url);
			} else{
				
				Route::ErrorPage404();
			}
			
		}
	}
}
