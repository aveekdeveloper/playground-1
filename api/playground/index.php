<?php

$app->get('/playground/:url' , function($url) use ($app){
	$result = get_playground_by_url($url);
	
	if(empty($result))
	{
	$app->response()->status(400);
	$result=array();
	$result['message'] = 'Your search returned no results. Please modify your query';
	}
	
	echo json_encode($result);
	});

?>