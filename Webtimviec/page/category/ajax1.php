<?php
require_once ('../db/dbhelper.php');

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['user_id'])) {
					$user_id = $_POST['user_id'];

					$sql = 'delete from tai_khoan where user_id = '.$user_id;
					execute($sql);
				}
				break;
		}
	}
}