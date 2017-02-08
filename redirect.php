<?php

	function redirected_to($location){
		header("Location: ".$location);
		exit;
	}
?>
