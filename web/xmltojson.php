<?php
    $userArray=simplexml_load_file("user.xml");
	$json=json_encode($userArray);//array to json
	echo $json;//printing json data
?>