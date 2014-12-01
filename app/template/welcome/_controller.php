<?php

use Model\User;
use Utilities\Http;
use Utilities\Validate;
use Form\Control as Form;

final class controller extends Controller\baseController
{

	public function __construct()
	{
		parent::__construct();

		User::redirectIfSignedIn();

		$this->template->page["title"] = "Makers, Thinkers and Doers";
		$this->template->page["act"] = 1;

		if (Http::isRequest("email")) {
			$post = Http::getPost();

			$email = $post["email"];

			if (Validate::email($email)) {
				$file = APP_DIR . "/emails.txt";
				$content = date("d M Y G:i:s", time()) . " => " . $email . BR;
				file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
			}
		}
	}

}