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
	
$app->get('/booking/:venue_id/:week' , function($venue_id , $week) use ($app){
	//set the venue in the session variable by calling
	list_venue_by_id($venue_id);	 
	$result = prepare_reservation_chart_week($week);
	
	if(empty($result))
	{
		$app->response()->status(400);
		$result=array();
		$result['message'] = 'Your search returned no results. Please modify your query';
	}
	
	echo json_encode($result);
	});

?>