<!DOCTYPE html>
<html>
  <head>
<!-- adding metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Museum Admission in PHP</title>
  </head>
  <body>
<!-- adding  aJavaScript button that tells you admission fee for a museum -->
     <form action="./results.php" method="post" target="results">
	  <center>
    <?php
    echo "<h1>Museum Admission in PHP</h1>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">
					<?php
          echo "<h3>This program will tell the user the admission cost depending on their age and day of the week:</h3>";
          ?>					
						<label for="age">Age:</label>
						<input type="number" step="1" min="0" name="age"><br><br>
						<label for="day">Day:</label>
						<select name="day" id="day">
<!-- adding a drop down menu -->
						    <option value="">--Day of the Week--</option>
						    <option value="Sunday">Sunday</option>
						    <option value="Monday">Monday</option>
						    <option value="Tuesday">Tuesday</option>
						    <option value="Wednesday">Wednesday</option>
						    <option value="Thursday">Thursday</option>
						    <option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
						</select>
						<br><br>
						<input type="submit" value="Display Cost">
					</form>
				</td>
				<td valign="top" align="center">
					<img src="./images/aesthetic.museum.jpg" alt="Museum" width="72%">
				</td>
			</tr>
		</table>
		<!-- Adding an iframe to display results -->
      <center><iframe id="results" name="results"></iframe></center>
		</div>
		  </center>
  </body>
</html>