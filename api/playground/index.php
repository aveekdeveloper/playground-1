<?php

include_once('render_playground.php');


$app->get('/playground/:url' , function($url) use ($app){
	$result = get_playground_by_url($url);
	
	if(empty($result))
	{
	$app->response()->status(400);
	$result=array();
	$result['message'] = 'Your search returned no results. Please modify your query';
	}
	
	$renderValue = $app->request->params('render');
		
	switch($renderValue)
	{
		case 'json' :
			echo json_encode($result);
			break;
		default:
			//render full html
			$app->response->headers->set('Content-Type', 'text/html');
			render_playground($result);
	}
	
	});

?>