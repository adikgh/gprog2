<?php include "../../config/core.php";

	// 
	$menu_name = 'site_lending';
	$site_set = [
		'css' => 'site',
		'js' => 'site',
	];
?>

<!-- header -->
<?php include "../../block/header.php"; ?>

<!-- site block 1 -->
	<div class="sa_bl1">
		<div class="sa_bl1_cr">
			<div class="lazy_bag" data-src="/assets/img/bag/first-slide.png"></div>
		</div>
		<div class="bl_c">
			<div class="sa_bl1_c">
				<div class="sa_bl1_cl">
					<h3>Получите Landing Page за 3 дней с индивидуальным дизайном и гарантией на 1 год.</h3>
					<p>А ещё, наши цены почти на 30% ниже среднерыночных. Узнайте стоимость и убедитесь в этом сами.</p>
					<div class="sl_bl1_cb">
						<div class="btn">Заказать сайт</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--  -->
<div class="site_lending"></div>

<!-- site block 7 -->
<?php include "block/s_bl7.php"; ?>

<!-- прайст лист -->
<?php include "block/s_bl8.php"; ?>

<!-- work -->
<?php include '../../block/standart/bl6.php'; ?>

<!-- sertf -->
<?php include '../../block/standart/bl7.php'; ?>

<!-- whatsapp -->
<?php include '../../block/standart/bl4.php'; ?>


<!-- footer -->
<?php include "../../block/footer.php"; ?>