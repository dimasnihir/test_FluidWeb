<?php

class Route
{

	static function start()
	{

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if (!empty($routes[1])) {



			switch ($routes[1]) {
				case 'administrator':
					$controller_name = 'controller_administrator';
					$model_name = 'Model_administrator';
					$action_name = 'action_index';

					break;
				case 'create':
					$controller_name = 'controller_create';
					$model_name = 'Model_create';
					$action_name = 'action_index';

					break;
				case '404':
					$controller_name = 'controller_404';
					$action_name = 'action_index';
					break;

				default:
					$controller_name = 'controller_redirect';
					$model_name = 'Model_redirect';
					$action_name = 'action_redirect';

					break;
			}
			
		} else{
			$controller_name = 'controller_create';
			$model_name = 'Model_create';
			$action_name = 'action_index';
		}



		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name) . '.php';
		$controller_path = "application/controllers/" . $controller_file;
		if (file_exists($controller_path)) {
			include "application/controllers/" . $controller_file;
		} else {

			// Route::ErrorPage404();
		}



		// подцепляем файл с классом модели
		$model_file = strtolower($model_name) . '.php';
		$model_path = "application/models/" . $model_file;
		if (file_exists($model_path)) {

			include "application/models/" . $model_file;
		}



		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;



		if (method_exists($controller, $action)) {

			if ($action == 'action_redirect') {
				$controller->$action($routes[1]);
			} else {
				$controller->$action();
			}
		} else {

			// Route::ErrorPage404();
		}
	}

	function ErrorPage404()
	{
		$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:' . $host . '404');
	}
}
