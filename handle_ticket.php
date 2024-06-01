<?php 
   $page_title = 'Ticket Purchase Confirmation';
   include ('main/ticket_header.html');

	// Variable declaration
  	$dDay = $_POST['day'];
	$dTime = $_POST['time'];

?>
<body>
	<div class="container">
		<div class="content">
			<?php
				// If everything is okay, print the message.
				if ($dDay != "--Select--" && $dTime != "--Select--"){
					// Calculate cost based on selection
					
					if ($dDay == "Saturday" || $dDay == "Sunday"){ // weekend
						// Check time
						if ($dTime == "21:00"){
							$cost = 6;
						} else {
							$cost = 8;
						}
					} else { // weekdays
						// Check time
						if ($dTime == "21:00"){
							$cost = 5;
						} else {
							$cost = 6;
						}
					}

					// Print the submitted information. 
					echo '<p class="departure-info">Thank you for your purchase.<br />';
					echo "Below is your purchased ticket: <br></p>";
					echo '<div class="ticket">';
					echo "<b>Departure Day:</b> $dDay <br>
					<br><b>Departure Time:</b> $dTime <br>
					<br><b>Total Cost:</b> $cost <br>
					</div>";
				} else {
					// One form element was not filled out properly.
					echo '<p class="departure-info">Please go back and choose out the ticket again.</font></p>';
				}
			?>
		</div> <!-- content -->
	</div> <!-- container -->

	<?php
		include ('main/ticket_footer.html');
	?>
