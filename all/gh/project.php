<?php include "../config/core.php";

	// site setting
	$menu_name = 'gh';
	$site_set = [
		'form' => 'false',
	];
	$css = ['site', 'gh'];
	$js = ['site'];

?>

<!-- header -->
<?php include "../block/header.php"; ?>

	<!-- works -->
	<div class="bl6" id="case">
		<div class="bl_c">

			<div class="head_c head_c1">
				<h2><?=t::w('My works')?></h2>
				<p><?=t::w('Better to see once than hear 100 times')?></p>
			</div>

			<div class="bl6_c">
				<?php $works = db::query("select * from works where site = 1 order by date desc"); ?>
				<?php while ($works_d = mysqli_fetch_array($works)): ?>
					<a class="bl6_i" target="_blank" href="https://<?=$works_d['url']?>">
						<div class="bl6_im">
							<div class="lazy_img" data-src="/assets/img/works/site/<?=$works_d['bag']?>"></div>
						</div>
						<div class="bl6_ir">
							<div class="bl6_irnc">
								<div class="bl6_in"><?=$works_d['name_'.$lang]?></div>
								<div class="bl6_ip">
									<div><?=t::w($works_d['site_type'])?></div>
									<div><?=date("m-d-Y", strtotime($works_d['date']))?></div>
								</div>
							</div>
							<div class="btn btn_back" target="_blank" href="https://<?=$works_d['url']?>">
								<span><?=t::w('View')?></span>
								<i class="far fa-long-arrow-right"></i>
							</div>
						</div>
					</a>
				<?php endwhile ?>
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
				<h2><?=t::w('As we promote brands')?></h2>
				<p><?=t::w('Immediately after the creation of the site, it is necessary to engage in its promotion and advertising in order to attract the maximum number of customers to the site and make a profit.')?></p>
			</div>
			<div class="sb4_c">
				<div class="sb4_i">
					<div class="sb4_img">
						<div class="lazy_img" data-src="/assets/img/icons/large-red-circle_1f534.png"></div>
					</div>
					<div class="sb4_ic">
						<div><?=t::w('Сontextual advertising')?></div>
						<p><?=t::w('The most powerful tool for quickly attracting new customers from Yandex and Google search engines.')?></p>
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
						<div><?=t::w('Targeted advertising')?></div>
						<p><?=t::w('Allows you to work with clients not only within social networks, but also to attract traffic from social networks directly to the site.')?></p>
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
						<div><?=t::w('Display advertising')?></div>
						<p><?=t::w('The brand will bring much more benefit if you use other promotion tools in parallel with it.')?></p>
					</div>
					<div class="sb4_ib">
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/tt.png"></div></div>
						<div class="sb4_ibm"><div class="lazy_img" data-src="/assets/img/icons/sn/yt.png"></div></div>
					</div>
				</div>
			</div>

			<div class="bl61_c">
				<?php $works = db::query("select * from works where marketing = 1 and marketing_offer = 1 order by date desc limit 6"); ?>
				<?php while ($works_date = mysqli_fetch_array($works)): ?>
					<div class="bl61_i">
						<div class="bl61_im">
							<div class="lazy_img" data-src="/assets/img/works/ads/<?=$works_date['ads_img']?>"></div>
						</div>
						<div class="bl61_ic">
							<div class="bl61_it">
								<div class="bl6_in"><?=$works_date['name_'.$lang]?></div>
								<div class="bl6_ip"><div><?=$works_date['marketing_type']?></div></div>
							</div>
							<!-- <div class="bl6_ib"><div class="btn btn_cl" target="_blank" href="https://<?=$works_date['url']?>">Смотреть</div></div> -->
						</div>
					</div>
				<?php endwhile ?>
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


<!-- footer -->
<?php include "../block/footer.php"; ?>


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