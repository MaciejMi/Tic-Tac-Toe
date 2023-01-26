<?php
session_start();
$display_board = isset($_SESSION['who']) ? true : false;
if (!isset($_SESSION['broad'])) {
	$_SESSION['broad'] = array(
		array('', '', ''),
		array('', '', ''),
		array('', '', '')
	);
}

$broad = $_SESSION['broad'];
$win = $_SESSION['win'] ?? NULL;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=sss, initial-scale=1.0" />
	<title>tic tac toe</title>
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body>
	<div class="text-box">
		<h1>Tic Tac Toe</h1>
		<?php if ($win == 1): ?>
			<h2>Wygrał
				<?= $_SESSION['who'] == 'o' ? 'x' : 'o' ?>
			</h2>
		<?php endif; ?>
		<?php if ($win == 2): ?>
			<h2>Remis</h2>
		<?php endif; ?>
		<?php if ($display_board and $win != 1 and $win != 2): ?>
			<?php if ($_SESSION['who'] == 'x'): ?>
				<p class="cross">Teraz krzyżyk ( X )</p>
			<?php else: ?>
				<p class="circle">Teraz kółko ( O )</p>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<?php if ($display_board): ?>
		<main class="main">
			<?php for ($j = 0; $j < 3; $j++): ?>
				<div class="row">
					<?php for ($i = 0; $i < 3; $i++): ?>
						<a <?php if ($broad[$i][$j] != 'x' and $broad[$i][$j] != 'o' and $win != 1 and $win != 2): ?>
								href="./php/set.php?field_x=<?= $j ?>&field_y=<?= $i ?>" <?php endif; ?> class="field<?php if($win == 0): ?> active <?php endif; ?> <?php if ($broad[$i][$j] == 'x')
										   echo 'cross';
									   elseif ($broad[$i][$j] == 'o')
										   echo 'circle'; ?>"><?= $broad[$i][$j] ?></a>
					<?php endfor; ?>
				</div>
			<?php endfor; ?>
		</main>
	<?php endif; ?>
	<div class="buttons">
		<?php if (!$display_board): ?>
			<a href="./php/start.php?mode=ai" class="button">Rozpocznij (AI)!</a>
			<a href="./php/start.php?mode=pvp" class="button">Rozpocznij (PVP)!</a>
		<?php else: ?>
			<a href="./php/reset.php" class="button">Zacznij od nowa!</a>
		<?php endif; ?>
	</div>
</body>

</html>