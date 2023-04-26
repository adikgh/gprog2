<?php include "../../config/core.php";

	// site setting
	$menu_name = 'contextual';
	$site_set = [
		'css' => 'marketing'
	];
?>

<!-- header -->
<?php include "../../block/header.php"; ?>


<!-- site block 1 -->
	<div class="m_bl1">
		<div class="m_bl1a">
			<div class="lazy_bag" data-src="/assets/img/bag/mm2.png"></div>
		</div>
		<div class="bl_c">
			<div class="m_bl1_c">
				<h3><?=t::wb('cx_bl1_h')?></h3>
				<h6><?=t::wb('cx_bl1_p')?></h6>
				<div class="btn disb_zab"><span><?=t::w('Fast start')?></span></div>
			</div>
		</div>
	</div>


<!--  -->
	<div class="m_bl2">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3><?=t::w('Our works')?></h3>
			</div>
			<div class="m_bl2_c">

				<?php
		    		$works = db::query("select * from works where `type` LIKE '%$menu_name%' order by contextual_number asc");
					while ($works_date = mysqli_fetch_array($works)){
						echo '
							<div class="m_bl2_ci">
								<div class="m_bl2_cim">
									<img class="lazy_img" src="/assets/img/works/ads/google/'.$works_date['contextual_img'].'">
								</div>
								<div class="m_bl2_cin">
									<div class="bq_cih">'.$works_date['name_'.$lang].'</div>
									<div class="bq_cip">'.$works_date['about_'.$lang].'</div>
								</div>
							</div>
						';
					}
		    	?>

			</div>
		</div>
	</div>



<!--  -->
	<div class="">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3><?=t::w('Why you should contact us')?></h3>
			</div>
			<div class="bq2_c">

				<?php
		    		$blocks = db::query("select * from blocks where `type` LIKE '%$menu_name%' order by number asc");
					while ($blocks_date = mysqli_fetch_array($blocks)){
						echo '
							<div class="bq2_ci">
								<div class="bq_cim lazy_img" data-src="/assets/img/icons/'.$blocks_date['img'].'"></div>
								<div class="bq_cih">'.$blocks_date['txt1_'.$lang].'</div>
								<div class="bq_cip">'.$blocks_date['txt2_'.$lang].'</div>
							</div>
						';
					}
		    	?>

			</div>
		</div>
	</div>





<!-- прайст лист -->
<div class="s_bl8">
	<div class="bl_c">

		<div class="head_c head_c1">
			<h3><?=t::w('How much does advertising cost?')?></h3>
			<h6><?=t::w('We work not for prices, but for quality')?></h6>
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
									<div class="s_bl8_ip">'.t::w('Payment for ').$product_date['date'].t::w(' days').':</div>
									'.($product_date['price_sole']!='null'?'<div class="s_bl8_iprice_sole">'.substr_replace($product_date['price_sole'],' ',-3,0).' 000 тг</div>':'').'
									<div class="s_bl8_iprice">'.substr_replace($product_date['price'],' ',-3,0).' 000 тг</div>
									<div class="s_bl8_ib"><div class="btn disb_zab">'.t::w('To order').'</div></div>
								</div>
								<div class="s_bl8i_sl">
									<div class="s_bl8i_slh">'.t::w('Until the end of the discount is left:').'</div>
									<div class="countdown__bar" data-time="3600" data-page-id="contextual1">
										<div class="countdown__bar-animated"></div>
										<div class="countdown__bar-time">00:00</div>
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

<!-- Наши сертификаты -->
<?php include '../../block/standart/bl7.php'; ?>

<!-- vprs -->
<?php include '../../block/standart/bl4.php'; ?>

<!-- -->
	<div class="quiz">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3><?=t::w('Frequently asked Questions')?></h3>
			</div>
			<div class="quiz_c">
				
				<?php
		    		$quiz = db::query("select * from quiz where type LIKE '%$menu_name%'");
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
<?php include '../../block/standart/bl9.php'; ?>


<div class="mb80"></div>


<!-- footer -->
<?php include "../../block/footer.php"; ?>