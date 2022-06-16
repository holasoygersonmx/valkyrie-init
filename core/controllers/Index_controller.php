<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'contact_us')
			{
				$errors = [];

				if (empty($_POST['fullname']))
					array_push($errors, ['{$lang.fullname} {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['email']))
					array_push($errors, ['{$lang.email} {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['phone']))
					array_push($errors, ['{$lang.phone} {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['message']))
					array_push($errors, ['{$lang.message} {$lang.dont_leave_this_field_empty}']);

				if (empty($errors))
				{
					$mail = new Mailer(true);

					try
					{
						$mail->setFrom(Configuration::$vars['emailer'], Configuration::$web_page);
						$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
						$mail->Subject = 'Nuevo contacto. ' .  $_POST['fullname'];
						$mail->Body =
						'Nombre completo: ' . $_POST['fullname'] . '.<br>
						Correo electrónico: ' . $_POST['email'] . '.<br>
						Teléfono: ' . $_POST['phone'] . '.<br>
						Mensaje: ' . $_POST['message'] . '.';
						$mail->send();
					}
					catch (Exception $e) {}

					echo json_encode([
						'status' => 'success',
						'message' => '{$lang.thanks_for_contact_us}'
					]);
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' {$lang.home}');

			$template = $this->view->render($this, 'index');

			echo $template;
		}
	}
}
