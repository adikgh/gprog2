<div class="s_bl8">
	<div class="bl_c">

		<div class="head_c head_c1">
			<h3>Сколько стоит разработка?</h3>
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
								</div>
							</div>
						</div>
					';
				}
	    	?>

		</div>

	</div>
</div>