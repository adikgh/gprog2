<?php include "../../../config/core.php";

	// site setting
	$menu_name = 'site';
	$site_set = [
		'form' => 'false',
	];
	$css = [$menu_name];
	$js = [$menu_name];

?>

<!-- header -->
<? include "../../../block/header.php"; ?>

	<!-- top -->
	<div class="pack_b1">
	    <div class="bl_c">
	        <div class="pack_b1_c">
					<div class="pack_b1_lts"><?=t::w('Web studio in Almaty')?></div>
					<h1 class="pack_b1_h"><?=t::w('Website development')?></h1>
					<div class="pack_b1_n"><div class="lazy_img" data-src="/assets/img/bag/12.png"></div></div>
					<div class="pack_b1_lt">
						<h6 class="pack_b1_h2"><?=t::w('Modern design. Any complexity. From one page to online store. Comprehensive brand promotion on the Internet.')?></h6>
						<div class="btn disb_zab"><?=t::w('Free consultation')?></div>
					</div>
	        </div>
	    </div>
	</div>

	<!-- works -->
	<div class="bl6" id="case">
		<div class="bl_c">

			<div class="head_c head_c1">
				<h2><?=t::w('Examples of our work')?></h2>
				<p><?=t::w('Better to see once than hear 100 times')?></p>
			</div>

			<div class="bl6_c">
				<? $cases = db::query("select * from cases where service_id = 2 order by ins_dt desc"); ?>
				<? while ($works_d = mysqli_fetch_array($cases)): ?>
					<a class="bl6_i" target="_blank" href="https://<?=$works_d['url']?>">
						<div class="bl6_im">
							<div class="lazy_img" data-src="/assets/img/cases/<?=$works_d['img']?>"></div>
						</div>
						<div class="bl6_ir">
							<div class="bl6_irnc">
								<div class="bl6_in"><?=$works_d['name_'.$lang]?></div>
								<div class="bl6_ip">
									<div><?=t::w($works_d['site_type'])?></div>
									<div><?=date("m-d-Y", strtotime($works_d['opening_dt']))?></div>
								</div>
							</div>
							<div class="btn btn_back" target="_blank" href="https://<?=$works_d['url']?>">
								<span><?=t::w('View')?></span>
								<i class="far fa-long-arrow-right"></i>
							</div>
						</div>
					</a>
				<? endwhile ?>
			</div>

			<div class="bl6_b">
				<div class="bl6_bl">
					<div class="head_c">
						<h4><?=t::w('Do I want this too?')?></h4>
						<p><?=t::w('Do you want to strengthen your business? Then contact us now to leave your competitors far behind!')?></p>
					</div>
				</div>
				<div class="bl6_br">
					<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
						<div class="btn btn_whatsapp">
							<span><?=t::w('Contact via WhatsApp')?></span>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>



	<!-- service -->
	<div class="srv_bt1" id="types">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2><?=t::w('Services')?></h2>
				<!-- <p><?=t::w('Most of the projects do not lend themselves to an average assessment. <br> Below we have indicated the approximate prices for different sites.')?></p> -->
			</div>
			<div class="srv_bt1_c">
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/pushpin_1f4cc.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Landing page')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('A one-page website is created to promote one specific product or service.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 80.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/desktop-computer_1f5a5-fe0f.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Business site')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('A full-fledged multi-page site with all the necessary information about your company and its services.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 150.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/shopping-cart_1f6d2.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Online-store')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('A well-developed online showcase with all the necessary functionality: shopping cart, online payment, delivery, etc.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 300.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/gem-stone_1f48e.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Platform')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('For those who want the site to look like an application. This format can be applied to any site.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 500.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/magnifying-glass-tilted-left_1f50d.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Site-catalog')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('An online catalog of your products with no instant purchase option. Suitable for B2B.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 240.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
				<div class="srv_bt1_ci">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/mobile-phone_1f4f1.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Micro-site')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('Economy option for those who sell via Instagram. The implementation of a business card, landing page, online store is possible.')?></div>
					<div class="srv_bt1_cib">
						<!-- <div class="srv_bt1_cib_p"><?=t::w('from')?> 40.000 <?=t::w('tg')?></div> -->
						<div class="btn btn_cl disb_zab"><?=t::w('To order')?></div>
					</div>
				</div>
			</div>

			<div class="sb2_b">
				<div class="sb2_bl">
					<div class="srv_bt1_cih"><?=t::w('Exact cost')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('To find out the exact price and implementation period, please contact us. Tell us what task you need a website for, and we will prepare an accurate estimate for the development for you.')?></div>
					<a class="sb2_bs" href="tel:<?=$site['phone']?>" target="_blank">
						<div class="sb2_bsl lazy_img" data-src="/assets/img/team/ako.jpg"></div>
						<div class="sb2_bsn">
							<div class="sb2_bsnp">Акерке Шакебаева</div>
							<div class="sb2_bsnp2"><i class="fal fa-info-circle"></i><span><?=t::w('Sales department')?></span></div>
						</div>
						<div class="sb2_bsb"><div class="lazy_img" data-src="/assets/img/icons/telephone-receiver_1f4de.png"></div></div>
					</a>
				</div>
				<div class="sb2_br"><div class="lazy_img" data-src="/assets/img/bag/8Z1A0547.png"></div></div>
			</div>

			<div class="srv_bt1_b">
				<div class="srv_bt1_bl">
					<div class="srv_bt1_cimg"><div class="lazy_img" data-src="/assets/img/icons/thinking-face_1f914.png"></div></div>
					<div class="srv_bt1_cih"><?=t::w('Not sure which is right for you?')?></div>
					<div class="srv_bt1_ci_p"><?=t::w('Call us by phone or write to messengers. We will discuss and advise.')?></div>
				</div>
				<div class="srv_bt1_bb">
					<a class="srv_bt1_bbi" href="tel:<?=$site['phone']?>">
						<div class="srv_bt1_bbim"><i class="fas fa-phone-alt"></i></div>
						<div class="srv_bt1_bbit"><span><?=t::w('Call #gprog')?></span><p><?=$site['phone_view']?></p></div>
					</a>
					<a class="srv_bt1_bbi" href="">
						<div class="srv_bt1_bbim"><i class="fab fa-telegram-plane"></i></div>
						<div class="srv_bt1_bbit"><span><?=t::w('Contact via Telegram')?></span><p><?=t::w('Write a message')?></p></div>
					</a>
					<a class="srv_bt1_bbi" href="">
						<div class="srv_bt1_bbim"><i class="fab fa-whatsapp"></i></div>
						<div class="srv_bt1_bbit"><span><?=t::w('Contact via WhatsApp')?></span><p><?=t::w('Write a message')?></p></div>
					</a>
				</div>
			</div>

		</div>
	</div>


	<!-- team -->



	<!--  -->
	<div class="sb3" id="steps">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2><?=t::w('How we make websites')?></h2>
				<p><?=t::w('We carry out each project in several stages in order to work out the site as deeply as possible for your goals and objectives.')?></p>
			</div>
			<div class="sb3_c">
				<?php $works_steps = db::query("select * from works_steps where type = 'site' order by number asc"); ?>
				<?php while ($works_steps_d = mysqli_fetch_array($works_steps)): ?>
					<div class="sb3_i">
						<div class="sb3_ia">0<?=$works_steps_d['number']?></div>
						<div class="sb3_img">
							<div class="lazy_img" data-src="/assets/img/icons/<?=$works_steps_d['img']?>"></div>
						</div>
						<div class="sb3_ic">
							<div><?=$works_steps_d['name_'.$lang]?></div>
							<p><?=$works_steps_d['txt_'.$lang]?></p>
						</div>
					</div>
				<?php endwhile ?>
			</div>

			<div class="fmb_c">
				<div class="fmb_h">
					<div class="lazy_img" data-src="/assets/img/icons/globe-with-meridians_1f310.png"></div>
					<p><?=t::w('Discuss digital production')?></p>
				</div>
				<div class="form_c form_d">
					<div class="form_cl">
						<div class="form_im">
							<i class="far fa-user form_icon"></i>
							<input type="text" class="form_im_txt name" placeholder="<?=t::w('Enter your name ..')?>" />
						</div>
						<div class="form_im">
							<i class="far fa-phone-alt form_icon"></i>
							<input type="tel" class="form_im_txt phone ms_phone" placeholder="+7 (___) ___-__-__" />
						</div>
						<div class="form_im form_im_sel">
							<i class="far fa-globe form_icon"></i>
							<input type="text" class="form_im_txt" placeholder="Тип сайта" />
							<div class="">
								<div class=""></div>
							</div>
						</div>
					</div>
					<div class="form_cr">
						<div class="form_im">
							<i class="far fa-comment-dots form_icon"></i>
							<textarea class="form_im_txt" placeholder="<?=t::w('Describe the task')?>"></textarea>
						</div>
						<div class="form_im">
							<div class="btn">
								<i class="fab fa-telegram-plane"></i>
								<span><?=t::w('Send a request')?></span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>




	<!-- brend -->
	<div class="sb4" id="ads">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2>Как мы <span>продвигаем бренды</span></h2>
				<p>Сразу после создания сайта, необходимо заниматься его продвижением и <br>рекламой, чтобы привлечь на сайт максимум клиентов и извлекать прибыль</p>
			</div>
			<div class="sb4_c">
				<div class="sb4_i">
					<div class="sb4_img">
						<div class="lazy_img" data-src="/assets/img/icons/large-red-circle_1f534.png"></div>
					</div>
					<div class="sb4_ic">
						<div>Контекстная реклама</div>
						<p>Мощнейший инструмент для быстрого привлечения новых <br>клиентов из поисковых систем Яндекс и Google.</p>
					</div>
					<div class="sb4_ib">
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/go.jpg"></div></div>
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/ya.jpg"></div></div>
					</div>
				</div>
				<div class="sb4_i">
					<div class="sb4_img">
						<div class="lazy_img" data-src="/assets/img/icons/large-yellow-circle_1f7e1.png"></div>
					</div>
					<div class="sb4_ic">
						<div>Таргетированная реклама</div>
						<p>Позволяет работать с клиентами не только внутри соцсетей, но и <br>привлекать трафик из соцсетей сразу на сайт.</p>
					</div>
					<div class="sb4_ib">
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/ig.jpg"></div></div>
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/fb.jpg"></div></div>
					</div>
				</div>
				<div class="sb4_i">
					<div class="sb4_img">
						<div class="lazy_img" data-src="/assets/img/icons/large-blue-circle_1f535.png"></div>
					</div>
					<div class="sb4_ic">
						<div>Медийный реклама</div>
						<p>Бренда принесёт гораздо больше пользы, если параллельно с ней <br>использовать другие инструменты продвижения</p>
					</div>
					<div class="sb4_ib">
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/tt.png"></div></div>
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/yt.png"></div></div>
					</div>
				</div>
			</div>

			<div class="bl61_c">
				<? $cases = db::query("select * from cases where service_id = 7 or service_id = 8 order by ins_dt desc limit 6"); ?>
				<? while ($works_date = mysqli_fetch_array($cases)): ?>
					<? $client_d = fun::clients($works_date['client_id']); ?>
					<? $service_d = fun::services($works_date['service_id']); ?>

					<div class="bl61_i">
						<div class="bl61_im">
							<div class="lazy_img" data-src="/assets/img/cases/<?=$works_date['img']?>"></div>
						</div>
						<div class="bl61_ic">
							<div class="bl61_it">
								<div class="bl6_in"><?=$client_d['name_ru']?></div>
								<div class="bl6_ip"><div><?=$service_d['name_ru']?></div></div>
							</div>
							<!-- <div class="bl6_ib"><div class="btn btn_cl" target="_blank" href="https://<?=$works_date['url']?>">Смотреть</div></div> -->
						</div>
					</div>
				<? endwhile ?>
			</div>

		</div>
	</div>


	<!--  -->
	<div class="sb5" id="auto">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2>Не забываем <span>автоматизировать продажи</span></h2>
				<p>Разработать сайт и привлечь на него трафик – это только пол дела. <br>Но с трафиком надо ещё уметь работать.</p>
			</div>
			<div class="sb5_c">
				<div class="sb5_t">
					<div class="sb5_i">
						<div class="sb5_img">
							<div class="lazy_img" data-src="/assets/img/icons/speech-balloon_1f4ac.png"></div>
						</div>
						<p class="sb5_ic"><span>Умный чат</span> – быстро отвечать на вопросы клиентов</p>
					</div>
					<div class="sb5_i">
						<div class="sb5_img">
							<div class="lazy_img" data-src="/assets/img/icons/laptop_1f4bb.png"></div>
						</div>
						<p class="sb5_ic"><span>CRM-система</span> – не потерять ни одной заявки <br>и вовремя напомнить о себе</p>
					</div>
					<div class="sb5_i">
						<div class="sb5_img">
							<div class="lazy_img" data-src="/assets/img/icons/bar-chart_1f4ca.png"></div>
						</div>
						<p class="sb5_ic"><span>Сквозная аналитика</span> – проверить, какие каналы <br>продаж рабочие, а какие нужно отключить</p>
					</div>
					<div class="sb5_i">
						<div class="sb5_img">
							<div class="lazy_img" data-src="/assets/img/icons/shopping-cart_1f6d2.png"></div>
						</div>
						<p class="sb5_ic"><span>E-commerce «Carrot Quest»</span> – задать автоматизированные <br>алгоритмы продаж в интернет-магазине без участия <br>менеджера</p>
					</div>
				</div>
				<div class="sb5_b"><span>Обратись за этим в #gprog</span> — автоматизируй процессы, сделай свою работу удобнее, <br>следи за трафиком и эффективностью расходования рекламного бюджета.</div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="fmb">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2><?=t::w('Do you have a project?')?></h2>
				<p><?=t::w('You can call us or write to any messenger convenient for you. Or just leave a request and we will contact you ourselves.')?></p>
			</div>
			<div class="fmb_c">
				<div class="fmb_h">
					<div class="lazy_img" data-src="/assets/img/icons/waving-hand_1f44b.png"></div>
					<p><?=t::w('Let`s discuss it')?></p>
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
						<div class="form_im form_im_sel">
							<i class="far fa-globe form_icon"></i>
							<input type="text" class="form_im_txt" placeholder="Тип сайта" />
							<div class="">
								<div class=""></div>
							</div>
						</div>
					</div>
					<div class="form_cr">
						<div class="form_im">
							<textarea class="form_im_txt" placeholder="<?=t::w('Describe the task')?>"></textarea>
							<div class="form_icon"><i class="far fa-comment-dots"></i></div>
						</div>
						<div class="form_im">
							<div class="btn">
								<i class="fab fa-telegram-plane"></i>
								<span><?=t::w('Send a request')?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="sb6">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h2><span>Хорошо знакомые.</span> И такие новые</h2>
				<p>Мы готовы познакомиться с вами поближе. Всегда открыты для новых проектов и рады <br>новым коллаборациям с брендами. Не стесняйтесь, <a href="#">выходите с нами на связь.</a></p>
			</div>
			<div class="sb6_c">
				<div class="sb6_l">
					<div class="sb6_h"><span>#gprog</span> production</div>
					<div class="sb6_p">Команда с высоким уровнем экспертности – возьмём действующий бизнес на обслуживание или запустим стартап с нуля.</div>
					<div class="sb6_ic">
						<div class="sb6_ici">
							<div>50+</div>
							<p>выполненных проектов</p>
						</div>
						<div class="sb6_ici">
							<div>20+</div>
							<p>бизнесов на обслуживании</p>
						</div>
						<div class="sb6_ici">
							<div>30+</div>
							<p>digital услуг</p>
						</div>
						<div class="sb6_ici">
							<div>7+</div>
							<p>человек в команде</p>
						</div>
					</div>
					<div class="sb6_b">
						<div class="btn btn_cl btn_54 disb_zab">Обсудить проект</div>
					</div>
				</div>
				<div class="sb6_r">
					<div class="lazy_img" data-src="/assets/img/bag/2021-07-17 16.45.03.JPG"></div>
				</div>
			</div>
		</div>
	</div>

<? include "../../../block/footer.php"; ?>

	<!-- block form -->
	<div class="pop_bl fr">
		<div class="pop_bl_a zabr_back"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c">
				<h4>Обсудить проект</h4>
				<p><?=t::w('Fill out the form and we will contact you shortly')?></p>
			</div>
			<div class="form_c">
				<div class="form_im">
					<input type="text" class="form_im_txt name" placeholder="<?=t::w('Enter your name ..')?>">
					<div class="form_icon"><i class="far fa-user"></i></div>
				</div>
				<div class="form_im">
					<input type="tel" class="form_im_txt phone ms_phone" placeholder="+7 (___) ___-__-__">
					<div class="form_icon"><i class="far fa-phone-alt"></i></div>
				</div>
				<div class="form_im form_im_bn">
					<div class="btn orderSend">
						<span><?=t::w('Submit your')?></span>
					</div>
				</div>
			</div>
		</div>
	</div>