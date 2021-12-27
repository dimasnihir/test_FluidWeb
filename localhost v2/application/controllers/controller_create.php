<?php

class Controller_Create extends Controller
{

	function __construct()
	{
		$this->model = new Model_create();
		$this->view = new View();
		
	}
	function action_index()
	{
		

		if (isset($_POST['url'])) {
			$qwerty['url'] = $_POST['url'];

			if(filter_var($qwerty['url'], FILTER_VALIDATE_URL)){
				$qwerty['url'] = $this->model->get_data($qwerty['url']);
			}else
			{
				$qwerty['url'] = 'Invalid URL!';
			}

			
		}
		$this->view->generate('create_view.php', 'template_view.php', $qwerty);
		
		
	}
}
