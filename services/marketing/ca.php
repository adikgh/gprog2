<?php include "../../config/core.php";
	$menu_name = 'marketing_ca';
	$site_set = [
		'menu' => 'bl',
		'css' => 'true',
	];
?>

<!-- header -->
<?php include "../../block/header.php"; ?>


<!-- site block 1 -->
	<div class="s_bl1">
		<div class="s_bl1a">
			<div class="lazy_bag" data-src="/assets/img/bag/first-slide.png"></div>
		</div>
		<div class="bl_c">
			<div class="s_bl1_c">
			   <div class="pack_b1_lb">
              	<i class="fal fa-gift"></i>
              	<p>Закажите создание сайта и <br>получите <span>рекламу в подарок</p>
	         </div>
				<h3>Разработка продающих сайтов <br>для вашего бизнеса за 7 дней</h3>
				<div class="btn disb_zab"><span>Получить консультацию</span></div>
			</div>
			<div class="bl1_b"><a href="#bl10"><div class="bl1_list"></div></a></div>
		</div>
	</div>


<!-- Познакомьтесь с нашими работами -->

<!-- Почему Вам стоит к нам обратиться -->

<!-- Наши сертификаты -->

<!-- прайст лист -->
<div class="s_bl8">
	<div class="bl_c">

		<div class="head_c head_c1">
			<h3>Сколько стоит реклама?</h3>
			<h6>Мы работаем не за цены, за качества</h6>
		</div>

		<div class="s_bl8_c">

			<?php
				$menu_id = $menu['id'];
	    		$product = db::query("select * from product where menu_id = $menu_id");
				while ($product_date = mysqli_fetch_array($product)){
					$product_id = $product_date['id'];
					echo '
						<div class="s_bl8_i">
							<div class="s_bl8_ic">
								<div class="s_bl8_in">
									<h5>'.$product_date['name'].'</h5>
								</div>
								<div class="s_bl8_it">
									<div class="s_bl8_ip">
										<span>Срок разработки '.$product_date['date'].' дней</span>
									</div>
									<ul>
					';

					$info = db::query("select * from product_info where product_id = '$product_id' order by number asc");
					while ($info_date = mysqli_fetch_array($info)){
						echo '<li class="'.($info_date['plus']==1?'s_bl8_plus':'').'">'.t::info($info_date['info_id']).'</li>';
					}

					echo ' 		</ul>
									<div class="s_bl8_iprice">
										<h5>'.substr_replace($product_date['price'],' ',-3,0).' 000 тг</h5>
									</div>
									<div class="s_bl8_ib">
										<div class="btn disb_zab">Заказать</div>
									</div>
									<div class="s_bl8_id">
										<div class="s_bl8_idc"><i class="fal fa-gift"></i></div>
										<p>'.$product_date['plus'].'</p>
										<div class="s_bl8_idc s_bl8_idc2"><i class="fal fa-bullseye-arrow"></i></div>
									</div>
								</div>
							</div>
						</div>
					';
				}
	    	?>

		</div>

	</div>
</div>

<!-- ватц -->
<?php // include "../../block/standart/bl4.php"; ?>

<!-- Часто задаваемые вопросы -->

<!--  -->
<div class="mb80"></div>

<!-- footer -->
<?php include "../../block/footer.php"; ?>