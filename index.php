<?php

	  $escaped_fragment = isset($_GET['_escaped_fragment_']) ? $_GET['_escaped_fragment_'] : "" ;
	  if($escaped_fragment != "")
	  {
		 // handle bots
		 $escaped_fragment_arr = explode('/' ,$escaped_fragment );
		 
		 switch($escaped_fragment_arr[0])
		 {
			case 'playground' :
				echo "Looking for playground with url " + $escaped_fragment_arr[1] ;
				break;
			default:
				echo "Bot request" ;
		 }
	  }

?>