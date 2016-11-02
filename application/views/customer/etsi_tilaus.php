<h1>Valitun asiakkaan tilaukset</h1>
<form method="POST" action="etsi_tilaus">
<select name="valittu_id">

<?php
	foreach ($customers as $row) {
		echo '<option value="'.$row['id_asiakas'].'">'.
		$row['etunimi'].' '.
		$row['sukunimi'].'</option>';
	}
?>
</select>
<input type="submit" name="btnEtsi" value="Etsi"/>
</form>
<br>
<?php
	if(isset($tilaus)){
		print_r($tilaus);
	}
?>