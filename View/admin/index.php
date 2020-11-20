<?php
	require('layouts/header.php');

	if (isset($_GET['p'])) {
		$controller = $_GET['p'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'test':
			echo "trang test";
			break;
		
		default:
			require('pages/home.php');
			break;
	}

	require('layouts/footer.php');