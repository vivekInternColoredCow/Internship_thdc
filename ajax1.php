<?php
require_once 'functions1.php';

if (isset($_POST['action'])) {
	
	switch ($_POST['action']) {
		
		case 'events':  $status=events();
						print json_encode($status);
						break;
		
		case 'guest_details':  $status=guest_details();
								print json_encode($status);
								break;
		
		case 'update_details':  $status=update_details();
								print json_encode($status);
								break;
								
		case 'requests':        $status=requests();
								print json_encode($status);
								break;

		case 'show_all_guests':		$status=rsvp();
									print json_encode($status);
									break;						
		
		default:echo "Invalid";
			break;
	}
}
?>