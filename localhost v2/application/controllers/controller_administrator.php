<?php

class Controller_administrator extends Controller
{

	function __construct()
	{
		$this->model = new Model_administrator();
		$this->view = new View();
	}

	function action_index()
	{
		$db = new Database();

		if (isset($_POST['btn_delete'])) {
			$token_del = $_POST['btn_delete'];
			
			$db->del_token_by_token($token_del);

			
		}

		$db->del_tokens_by_date();
		

        $urls = $db->get_activ_url();


		$this->view->generate('administrator_view.php', 'template_view.php',$urls);
	}
}
