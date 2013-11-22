<?php
        if (!isset($GET['language']))
        {
                $_GET['language'] = 'dutch';
        }
        $userrole = array('customer');
        include('security.php');
        include('connect_db.php');
        $query = "SELECT *
                          FROM `faq`";
        $result = mysql_query($query, $db);
?>

<table>
	<tr>
		<td><a href='./index.php?content=faqengels'><img src='./pictures/eng_vlag.png'/></td>
		<td><a href='./index.php?content=faqnederlands'><img src='./pictures/ned_vlag.png'/></td>
	</tr>
</table>
<table>
	<tr>
		<td><b>How do you restart the game?</b></td>
	</tr>
	<tr>
		<td>u cant restart ingame, wait till you are gameover</td>
	</tr>
	<tr>
		<td><b>Is my data saved?</b></td>
	</tr>
	<tr>
		<td>No your data is not saved</td>
	</tr>
	<tr>
		<td><b>How do you start the game?</b></td>
	</tr>
	<tr>
		<td>To push on the B button</td>
	</tr>
	<tr>
		<td><b>How do I shoot</b></td>
	</tr>
	<tr>
		<td>To push on the SpaceBar</td>
	</tr>
	<tr>
		<td><b>Where do I see my points?</b></td>
	</tr>
	<tr>
		<td>On top of your game screen</td>
	</tr>
	<tr>
		<td><b>How do I walk forward?</b></td>
	</tr>
	<tr>
		<td>To push on the S button</td>
	</tr>
	<tr>
		<td><b>How do I walk backwards?</b></td>
	</tr>
	<tr>
		<td>To push on the A button</td>
	</tr>
	<tr>
		<td><b>How do I stop the game?</b></td>
	</tr>
	<tr>
		<td>To push on the ESC button</td>
	</tr>
	<tr>
		<td><b>How do i start the game</b></td>
	</tr>
	<tr>
		<td>To push on the N button</td>
	</tr>
	<tr>
		<td><b>If i'm game over, how do start a new game?</b></td>
	</tr>
	<tr>
		<td>To push on the N button</td>
	</tr>
</table>