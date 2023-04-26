<?php include "../config/core.php";

	
	// site setting
	$menu_name = 'services';
	// $site_set[] = '';
	$css = ['services/main'];
	$js = ['services/main'];
?>
<? include "../block/header.php"; ?>

	<div class="services">
		<div class="bl_c">

			<div class="services_t">
				<div class="head_c">
					<h1>Наши услуги</h1>
					<p>#gprog существует для того, чтобы сделать доступными все самые современные инструменты продвижения и развития вашего бизнеса</p>
				</div>
				<div class="services_tc">
					<? $services_c = db::query("select * from services_category"); ?>
					<? while ($services_cd = mysqli_fetch_array($services_c)): ?>
						<? $category_id = $services_cd['id']; ?>
						<a class="services_ti" href="#<?=$services_cd['name']?>">
							<div class="services_tic">
								<h2><?=$services_cd['names_ru']?></h2>
								<p>production</p>
							</div>
						</a>
					<? endwhile ?>
				</div>
			</div>

			<div class="services_c">
				<? $services_c = db::query("select * from services_category"); ?>
				<? while ($services_cd = mysqli_fetch_array($services_c)): ?>
					<? $category_id = $services_cd['id']; ?>
					
					<div class="head_c" id="<?=$services_cd['name']?>">
						<h3><?=$services_cd['name_ru']?></h3>
						<p><?=$services_cd['offer_ru']?></p>
					</div>
	
					<div class="services_it">
						<? $services = db::query("select * from services where category_id = '$category_id' and number is not null order by number asc"); ?>
						<? while ($services_d = mysqli_fetch_array($services)): ?>
							<a class="services_it_i" href="<?=$services_d['url']?>">
								<div class="services_it_ic">
									<p><?=$services_d['disc_ru']?></p>
									<div><?=$services_d['name_ru']?></div>
								</div>
								<div class="services_it_img lazy_img" data-src="/assets/img/services/<?=$services_d['img']?>"></div>
							</a>
						<? endwhile ?>
					</div>
	
				<? endwhile ?>
			</div>

		</div>
	</div>

<? include "../block/footer.php"; ?>