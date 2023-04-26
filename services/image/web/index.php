<?php include "../../../config/core.php";

	
	// site setting
	$menu_name = 'services';
	// $site_set[] = '';
	$css = ['services/main'];
	$js = ['services/main'];
?>
<? include "../../../block/header.php"; ?>

	<div class="srv">
		<div class="bl_c">

			<div class="srv_c">
				
				<div class="srv_ct">
					<div class="top_nv">
						<a href="/">Главная</a>
						<a href="/services">Все услуги</a>
						<span>Коммерческий имидж</span>
					</div>
					<div class=""></div>
					<div class="srv_ctc">
						<h1>Разработка сайтов</h1>
						<p>Разработка сайтов для бизнеса с высокой проработкой коммерческого имиджа. Делаем web production c высокой экспертизой и формируем ваш бренд через web-дизайн высшего уровня.</p>
						<p>У нас существует три категории разработки под любой бюджет. Рекомендуем разработку в категории "Стандарт" или "Pro".</p>
					</div>
				</div>

				<div class="srv_cs">
					<a class="srv_csi" href="pro">
						<div class="srv_csic">
							<div class="srv_csih">PRO</div>
							<span>крупные проекты</span>
						</div>
						<div class=""></div>
						<div class="srv_csic">
							<div class="srv_csip">от 1 000 000 тг</div>
							<span>стоимость разработки</span>
						</div>
					</a>
					<a class="srv_csi" href="standart">
						<div class="srv_csic">
							<div class="srv_csih">Стандарт</div>
							<span>оптимальные сайты</span>
						</div>
						<div class=""></div>
						<div class="srv_csic">
							<div class="srv_csip">от 300 000 тг</div>
							<span>средний чек</span>
						</div>
					</a>
					<a class="srv_csi" href="economy">
						<div class="srv_csic">
							<div class="srv_csih">Эконом</div>
							<span>дешёвые решения</span>
						</div>
						<div class=""></div>
						<div class="srv_csic">
							<div class="srv_csip">от 80 000 тг</div>
							<span>средний чек</span>
						</div>
					</a>
				</div>

			</div>
			
		</div>
	</div>

<? include "../../../block/footer.php"; ?>