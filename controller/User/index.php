<?php
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'ajout':
			require_once '../../view/User/index.php';

			break;
		case 'modif':
			require_once '../../view/User/modifier.php';

			break;
		case 'supp':
			require_once '../../view/User/supprimer.php';

			break;
		default:
			
			break;
	}
}

if (isset($_POST['action'])) {
	
}
?>