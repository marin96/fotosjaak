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
		<td><b>Hoe begin ik opnieuw?</b></td>
	</tr>
	<tr>
		<td>u kunt ingame het spel niet restarten, wacht tot u dood bent of sluit het spel opnieuw op</td>
	</tr>
	<tr>
		<td><b>Word mijn data opsgeslagen?</b></td>
	</tr>
	<tr>
		<td>Nee, na de game worden de scores verwijderd</td>
	</tr>
	<tr>
		<td><b>Hoe kan ik het spel beginnen?</b></td>
	</tr>
	<tr>
		<td>Door te drukken op de B toets</td>
	</tr>
	<tr>
		<td><b>Hoe schiet ik?</b></td>
	</tr>
	<tr>
		<td>Door te drukken op de spatie balk</td>
	</tr>
	<tr>
		<td><b>Waar zie ik de score</b></td>
	</tr>
	<tr>
		<td>Boven in het spel scherm staan uw scores</td>
	</tr>
	<tr>
		<td><b>Hoe loop ik naar voren?</b></td>
	</tr>
	<tr>
		<td>Door op de S toets te drukken</td>
	</tr>
	<tr>
		<td><b>Hoe loop ik naar achteren?</b></td>
	</tr>
	<tr>
		<td>Door op de A toets te drukken</td>
	</tr>
	<tr>
		<td><b>Hoe stop ik het spel?</b></td>
	</tr>
	<tr>
		<td>Door op de ESC toets te drukken</td>
	</tr>
	<tr>
		<td><b>Hoe start ik het spel?</b></td>
	</tr>
	<tr>
		<td>Door op de N toets te drukken</td>
	</tr>
	<tr>
		<td><b>Als ik dood ben, hoe begin ik dan een nieuw spel?</b></td>
	</tr>
	<tr>
		<td>Door op de N toets te drukken</td>
	</tr>
</table>