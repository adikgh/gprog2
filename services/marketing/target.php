<?php include "../../config/core.php";

	// site setting
	$menu_name = 'target';
	$site_set = [
		'css' => 'marketing'
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
	        		<i class="fal fa-exclamation-triangle"></i>
           		<p>Наши цены почти на 20% <br>ниже среднерыночных</p>
            </div>
				<h3>Получи в 3 раза БОЛЬШЕ заявок из Instagram в тот же день</h3>
				<div class="btn disb_zab"><span>Получить консультацию</span></div>
			</div>
			<div class="bl1_b"><a href="#bl10"><div class="bl1_list"></div></a></div>
		</div>
	</div>


<!--  -->
	<div class="m_bl2">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3>Познакомьтесь с нашими работами</h3>
			</div>
			<div class="m_bl2_c">
				<div class="m_bl2_ci">
					<div class="m_bl2_cim">
						<img src="/assets/img/works/ads/facebook/baur.png" alt="" class="lazy_img">
					</div>
					<div class="m_bl2_cin">
						<div class="bq_cih">BAUR Architecture</div>
						<div class="bq_cip">Стирка ковров</div>
					</div>
				</div>
				<div class="m_bl2_ci">
					<div class="m_bl2_cim">
						<img src="/assets/img/works/ads/facebook/emsu.png" alt="" class="lazy_img">
					</div>
					<div class="m_bl2_cin">
						<div class="bq_cih">EMSU SARYAGASH</div>
						<div class="bq_cip">Санатория брондау орталағы</div>
					</div>
				</div>
				<div class="m_bl2_ci">
					<div class="m_bl2_cim">
						<img src="/assets/img/works/ads/facebook/shipaly.png" alt="" class="lazy_img">
					</div>
					<div class="m_bl2_cin">
						<div class="bq_cih">Shipaly Saryagash</div>
						<div class="bq_cip">Санатория брондау орталағы</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!--  -->
	<div class="">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3>Почему Вам стоит к нам обратиться</h3>
			</div>
			<div class="bq2_c">
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/direct-hit_1f3af.png"></div>
					<div class="bq_cih">Точное попадание в целевую аудиторию</div>
					<div class="bq_cip">Реклама показывается только при соответствии запросу пользователя</div>
				</div>
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/chart-increasing_1f4c8.png"></div>
					<div class="bq_cih">Быстрый результат</div>
					<div class="bq_cip">Увеличение количества клиентов в день запуска рекламы</div>
				</div>
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/writing-hand_270d-fe0f.png"></div>
					<div class="bq_cih">Плата только за переход</div>
					<div class="bq_cip">Вы не платите за показы рекламы, оплата только за клики по объявлению</div>
				</div>
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/spiral-calendar_1f5d3-fe0f.png"></div>
					<div class="bq_cih">Отчетность</div>
					<div class="bq_cip">Каждую неделю отправляем отчет по основным параметрам рекламы</div>
				</div>
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/bar-chart_1f4ca.png"></div>
					<div class="bq_cih">Настройка целей</div>
					<div class="bq_cip">Установка целей в Google Analitycs для понимания по каким запросам была продажа</div>
				</div>
				<div class="bq2_ci">
					<div class="bq_cim lazy_img" data-src="/assets/img/icons/money-with-wings_1f4b8.png"></div>
					<div class="bq_cih">Оптимизация рекламы</div>
					<div class="bq_cip">Снизим цену за клик по рекламному объявлению и увеличим количество заявок</div>
				</div>
			</div>
		</div>
	</div>


<!-- Наши сертификаты -->
<?php include '../../block/standart/bl7.php'; ?>

<!-- vprs -->
<?php include '../../block/standart/bl4.php'; ?>


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
									<ul>
					';

					$info = db::query("select * from product_info where product_id = '$product_id' order by number asc");
					while ($info_date = mysqli_fetch_array($info)){
						echo '<li class="'.($info_date['plus']==1?'s_bl8_plus':'').'">'.t::info($info_date['info_id']).'</li>';
					}

					echo ' 		</ul>
									<div class="s_bl8_ip">Ежемесячная оплата</div>
									<div class="s_bl8_iprice">'.substr_replace($product_date['price'],' ',-3,0).' 000 тг</div>
									<div class="s_bl8_ib"><div class="btn disb_zab">Заказать</div></div>
								</div>
							</div>
						</div>
					';
				}
	    	?>

		</div>

	</div>
</div>

<!-- -->
	<div class="quiz">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3>Часто задаваемые вопросы</h3>
			</div>
			<div class="quiz_c">
				
				<?php
		    		$quiz = db::query("select * from quiz where type = 'ads'");
					while ($quiz_date = mysqli_fetch_array($quiz)){
						$product_id = $product_date['id'];
						echo '
							<div class="quiz_ci">
								<div class="quiz_cis"><i class="fal fa-plus"></i></div>
								<div class="quiz_cih">'.$quiz_date['txt_'.$lang].'</div>
								<div class="quiz_cip">'.$quiz_date['txt2_'.$lang].'</div>
							</div>
						';
					}
		    	?>

			</div>
		</div>
	</div>

<!--  -->
<div class="fmb">
	<div class="bl_c">
		<div class="head_c head_c1">
			<h3>У вас есть проект?</h3>
			<h6>Можете позвонить нам или написать в любой удобный для вас мессенджер. <br>Или просто оставьте заявку, и мы сами с вами свяжемся.</h6>
		</div>
		<div class="fmb_c">
			<div class="fmb_h">
				<div class="lazy_img" data-src="/assets/img/icons/waving-hand_1f44b.png"></div>
				<p>Давайте его обсудим</p>
			</div>
			<div class="form_c form_d">
				<div class="form_cl">
					<div class="form_im">
						<input type="text" class="form_im_txt name" placeholder="<?=t::w('Enter your name ..')?>">
						<div class="form_icon"><i class="far fa-user"></i></div>
					</div>
					<div class="form_im">
						<input type="tel" class="form_im_txt phone ms_phone" placeholder="+7 (___) ___-__-__" >
						<div class="form_icon"><i class="far fa-phone-alt"></i></div>
					</div>
				</div>
				<div class="form_cr">
					<div class="form_im">
						<textarea class="form_im_txt" placeholder="Опишите задачу"></textarea>
						<div class="form_icon"><i class="far fa-comment-dots"></i></div>
					</div>
					<div class="form_im">
						<div class="btn">
							<i class="fab fa-telegram-plane"></i>
							<span>Отправить заявку</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mb80"></div>



<!-- footer -->
<?php include "../../block/footer.php"; ?>