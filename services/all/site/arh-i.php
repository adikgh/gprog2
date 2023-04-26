<?php include "../../config/core.php";

	// site setting
	$menu_name = 'site';
	$site_set = [
		'css' => $menu_name,
		'js' => $menu_name,
	];
?>

<!-- header -->
<?php include "../../block/header.php"; ?>

<!-- site block 1 -->
<div class="s_bl1">
	<div class="s_bl1_con">
		<div class="s_bl1_a">
			<div class="s_bl1_am lazy_bag" data-src="/assets/img/bag/003.png"></div>
			<div class="s_bl1_an"><span>Абрайм Айдос</span><span>@adik.gh</span><div class="s_bl1_ans"><i class="fas fa-question"></i></div></div>
			<div class="s_bl1_a2"><span>web</span><span>site</span></div>
		</div>
		<div class="bl_c">
			<div class="s_bl1_c">
				<div class="s_bl1_cn">
					<h1>То, что мы <span>любим</span> делать и <br>делаем <span>профессионально!</span></h1>
					<h5>Разработка продающих сайтов <br>для вашего бизнеса</h5>
				</div>
				<div class="top_site_hub">
					<div class="ts_btn">
						<div class="btn disb_zab">
							<span>Получить консультацию</span>
						</div>
					</div>
					<div class="ts2_btn">
						<a href="#bl2">
							<div class="btn btn_cm">
								<span>Узнать больше</span>
								<i class="fal fa-long-arrow-right"></i>
							</div>
						</a>
					</div>
					<div class="top_site_abs">
						<div class="top_site_abs2 lazy_bag" data-src="/assets/img/icons/19384_12.png"></div>
						<p>Закажите создание сайта и <br>получите <span>рекламу в подарок</p>
					</div>
				</div>
			</div>
			<div class="s_bl1_sm">
				<div class="s_bl1_smi">
					<h4>10+</h4>
					<p>человек в <br>команде</p>
				</div>
				<div class="s_bl1_smi">
					<h4>50+</h4>
					<p>выполненных <br>проектов</p>
				</div>
				<div class="s_bl1_smi">
					<h4>5 лет</h4>
					<p>опыта <br>на рынке</p>
				</div>
			</div>
			<div class="bl1_b"><a href="#bl10"><div class="bl1_list"></div></a></div>
		</div>
	</div>
</div>


<!-- site block 2 -->
<?php include "block/s_bl2.php"; ?>

<!-- block 4 -->
<?php include '../../block/standart/bl4.php'; ?>

<!-- block 6 -->
<?php include '../../block/standart/bl6.php'; ?>

<!-- site block 10 -->
<?php include "block/s_bl10.php"; ?>

<!-- site block 7 -->
<!-- кнопка -->
<?php include "block/s_bl7.php"; ?>

<!-- block 11 -->
<?php include '../../block/standart/bl11.php'; ?>

<!-- block 7 -->
<?php include '../../block/standart/bl7.php'; ?>


<!-- footer -->
<?php include "../../block/footer.php"; ?>