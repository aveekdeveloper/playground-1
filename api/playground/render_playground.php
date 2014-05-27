<?php

function render_playground($venue)
{
?>

	<div class="flat_box_body_div ">
		<h3>
		<span><font style="text-transform: uppercase;"><b><?php echo $venue['Playground_name'] ?></b></font> - <?php echo $venue['Playground_locality'] ?></span>
		</h3>
		<span class="soft"><?php echo $venue['Playground_sports_type'] ?></span>
		<br/>
		<br/>
		Rate : <span class="soft"><?php echo $venue['Playground_rate'] ?> per time slot of 1 hour</span>
		<br/>
		Address : <span class="soft"><?php echo $venue['Playground_address'] ?></span>
		<br/>
		About : <span class="soft"><?php echo $venue['Playground_about'] ?></span>
		<br/>
		Contact : <span class="soft"><?php echo $venue['Playground_number'] ?></span>
		<br/>
		<br/>
		<a target="_blank" href=<?php echo $venue['Playground_google_map'] ?>>Get directions to this place</a>
	</div>

<?php
	
}

?>