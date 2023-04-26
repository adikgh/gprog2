<div class="bl6">
	<div class="bl_c">

		<div class="head_c head_c1">
			<h3 class="head_c1_t">Примеры наши работы</h3>
			<h6>Лучше 1 раз увидеть, чем 100 раз услышать</h6>
		</div>

		<div class="bl6_c">

			<?php
	    		$works = db::query("select * from works where `type` LIKE '%site%' limit 6");
				while ($works_date = mysqli_fetch_array($works)){
					echo '
						<div class="bl6_i">
							<div class="bl6_ic">
								<div class="bl6_il lazy_bag" data-src="/assets/img/partners/'.$works_date['logo'].'"></div>
								<div class="bl6_it">
									<div>'.$works_date['txt'].'</div>
									<p>'.$works_date['txt2_'.$lang].'</p>
									<a target="_blank" href="https://'.$works_date['url'].'">
										<div class="btn btn_cm">Смотреть</div>
									</a>
								</div>
							</div>
						</div>
					';
				}
	    	?>

		</div>

		<div class="bl6_b">
			<div class="bl6_bl">
				<div class="head_c">
					<h3>Я тоже хочу такое?</h3>
					<p>Хотите усилить свой бизнес? Тогда свяжитесь с нами прямо сейчас, чтобы оставить конкурентов далеко позади!</p>
				</div>
			</div>
			<div class="bl6_br">
				<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
					<div class="btn btn_whatsapp">
						<span>Связаться через WhatsApp</span>
					</div>
				</a>
			</div>
		</div>

	</div>
</div>