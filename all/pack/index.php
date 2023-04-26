<?php include "../config/core.php";
	
	// site setting
	$menu_name = 'pack';
	$site_set = [
		'css' => $menu_name,
		'js' => $menu_name,
	];
?>

<!-- header -->
<?php include "../block/header.php"; ?>

<!--  -->
<?php include 'bl1.php'; ?>

<!--  -->
	<div class="pack_br">
		<div class="pack_br_c">
			<div><?=t::wb('pack_br')?></div>
		</div>
	</div>

<!--  -->
<?php include 'bl2.php'; ?>

<!--  -->
<?php include 'bl3.php'; ?>

<!--  -->
<?php include 'bl4.php'; ?>

<!-- footer -->
<?php include "../block/footer.php"; ?>