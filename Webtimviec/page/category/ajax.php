<?php
require_once ('../db/dbhelper.php');

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['job_id'])) {
					$job_id = $_POST['job_id'];

					$sql = 'delete from cong_viec where job_id = '.$job_id;
					execute($sql);
				}
				break;
		}
	}
}