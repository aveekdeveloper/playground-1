<?php

function render_playground($venue)
{
?>

	<div class="flat_box_body_div ">
		<h3>
		<span><font style="text-transform: uppercase;"><b>$venue.Playground_name</b></font> - $venue.Playground_locality</span>
		</h3>
		<span class="soft">$venue.Playground_sports_type | uppercase</span>
		<br/>
		<br/>
		Rate : <span class="soft">$venue.Playground_rate per time slot of 1 hour</span>
		<br/>
		Address : <span class="soft">$venue.Playground_address</span>
		<br/>
		About : <span class="soft">$venue.Playground_about</span>
		<br/>
		Contact : <span class="soft">$venue.Playground_number</span>
		<br/>
		<br/>
		<a target="_blank" href="$venue.Playground_google_map">Get directions to this place</a>
	</div>

<?php
	
}

?>