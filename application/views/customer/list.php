<h1>Customers</h1>
<table border=1>
<tr><td><b>Etunimi</b></td><td><b>Sukunimi</b></td><td><b>Email</b></td></tr>
<?php
	#print_r($customers);
	foreach ($customers as $row) {
		echo '<tr><td>'.$row['etunimi'].'</td><td>'.$row['sukunimi'].'</td><td>'.$row['email'].'</td></tr>';
	}
?>

</table>
