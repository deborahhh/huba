<? 
	include("header.html"); 

	$board = [
		["name" => "Deborah Alves", "bio" => "YAY"],
		["name" => "Eric Westphal", "bio" => "VOVO"]
	];

	$total = sizeof($board);
?>

<? foreach ($board as $member): ?>

	<div class="board_member">
		<p><strong><?= $member["name"] ?></strong></p>
		<p><strong>Bio:</strong> <?= $member["bio"] ?></p>
	</div>

<? endforeach; ?>


<? include("footer.html"); ?>