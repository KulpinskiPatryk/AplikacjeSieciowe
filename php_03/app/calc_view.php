<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>


<div class="container">
	<h3 class="px-5 text-center">Prosty kalkulator</h2>
	<div class="row">
		<form class="col-12 pure-form pure-form-aligned" action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
			<fieldset>
			<div class="form-group">
				<label for="x">Podaj kwotę kredytu :</label>
				<input class="form-control" id="x" type="text" placeholder="wartość kredytu" name="x" value="<?php out($form['x']); ?>">
			</div >
			<div class="form-group">
				<label for="op"> Podaj jego oprocentowania (bez znaku procent) : </label>
				<input class="form-control" id="op" type="text" placeholder="wartość oprocentowania" name="op" value="<?php out($form['op']); ?>" />
			</div>
			<div class="form-group">
				<label for="y">Podaj w latach na jak długo go bierzesz : </label>
				<input class="form-control" id="y" type="text" placeholder="ilość lat" name="y" value="<?php out($form['y']); ?>">
			</div>
			</fieldset>
			<div class="text-center">
				<button style type="submit" class="my-2 px-5 btn btn-lg btn-success btn-block">Oblicz</
			</div>
		</form>
	</div>
</div>
<div class="messages">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Rata miesięczna : </h4>
	<p class="res">
<?php print($result); ?> PLN
	</p>
<?php } ?>

</div>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>