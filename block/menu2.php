<? if ($site_set['header'] != 'false'): ?>
	<!-- header -->
	<div class="header <?=($site_set['menu']=='bl'?'header_bl':'')?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="header_l">
					<a class="logo" href="/">G prog</a>
				</div>
				<div class="header_r">
					
					<!-- menu -->
					<div class="menu_o">
						<div class="menu_oz"></div>
						<div class="menu_os">					
							<div class="menu_ot"><?=t::w('Menu')?></div>
							<div class="menu_oc"><span></span><span></span><span></span></div>
						</div>
						<div class="menu_c">
							<ul class="menu_cn">
	
								<li class="menu_ci">
									<a class="menu_cin" href="#case">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/globe-with-meridians_1f310.png"></div></div>
										<span>Кейсы</span>
									</a>
								</li>
								<li class="menu_ci">
									<a class="menu_cin" href="#types">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/briefcase_1f4bc.png"></div></div>
										<span>Виды сайтов</span>
									</a>
								</li>
								<li class="menu_ci">
									<a class="menu_cin" href="#ads">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/magnet_1f9f2.png"></div></div>
										<span>Продвижение</span>
									</a>
								</li>
								<li class="menu_ci">
									<a class="menu_cin" href="#auto">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/speech-balloon_1f4ac.png"></div></div>
										<span>Автоматизация</span>
									</a>
								</li>
	
								<!-- <li class="menu_ci">
									<a class="menu_cin" href="/works">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/briefcase_1f4bc.png"></div></div>
										<span><?=t::w('Portfolio')?></span>
									</a>
								</li> -->
	
								<!-- <li class="menu_ci">
									<a class="menu_cin" href="/pack">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/fire_1f525.png"></div></div>
										<span><?=t::w('Packaging')?></span>
									</a>
								</li> -->
	
								<!-- <li class="menu_ci">
									<a class="menu_cin" href="/services">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/magnet_1f9f2.png"></div></div>
										<span><?=t::w('Services')?></span>
									</a>
								</li> -->
	
								<!-- <li class="menu_ci">
									<div class="menu_cin menu_cip menu_cipc">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/logo/logo_tr_120.png"></div></div>
										<span>G prog</span>
									</div>
									<ul class="menu_pod">
										<li class="menu_ci">
											<div class="menu_cin menu_cipl"><span>Назад</span></div>
										</li>
										<li class="menu_ci">
											<a class="menu_cin" href="#">
												<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/handshake_1f91d.png"></div></div>
												<span><?=t::w('Clients')?></span>
											</a>
										</li>
										<li class="menu_ci">
											<a class="menu_cin" href="#">
												<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/waving-hand_1f44b.png"></div></div>
												<span><?=t::w('Team')?></span>
											</a>
										</li>
										<li class="menu_ci">
											<a class="menu_cin" href="#">
												<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/telephone-receiver_1f4de.png"></div></div>
												<span><?=t::w('Contacts')?></span>
											</a>
										</li>
									</ul>
								</li> -->
	
								<!-- <li class="menu_ci">
									<div class="menu_cin menu_cip menu_cipc">
										<div class="menu_cim">
											<?=($lang=='kz'?'<div class="lazy_menu" data-src="/assets/img/icons/flag-kazakhstan_1f1f0-1f1ff.png"></div>':'')?>
											<?=($lang=='ru'?'<div class="lazy_menu" data-src="/assets/img/icons/flag-russia_1f1f7-1f1fa.png"></div>':'')?>
										</div>
										<span><?=t::w('Language')?>: 
											<?=($lang=='kz'?'<b>Қазақша</b>':'')?>
											<?=($lang=='ru'?'<b>Русский</b>':'')?>
										</span>
									</div>
									<ul class="menu_pod">
										<li class="menu_ci">
											<div class="menu_cin menu_cipl"><span>Назад</span></div>
										</li>
										<li class="menu_ci">
											<?=($lang=='kz'?'<div class="menu_cin"><div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-kazakhstan_1f1f0-1f1ff.png"></div></div><span>Қазақша</span></div>':'<a class="menu_cin" href="'.$url.'?lang=kz"><div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-kazakhstan_1f1f0-1f1ff.png"></div></div><span>Қазақша</span></a>')?>
										</li>
										<li class="menu_ci">
											<?=($lang=='ru'?'<div class="menu_cin"><div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-russia_1f1f7-1f1fa.png"></div></div><span>Русский</span></div>':'<a class="menu_cin" href="'.$url.'?lang=ru"><div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-russia_1f1f7-1f1fa.png"></div></div><span>Русский</span></a>')?>
										</li>
									</ul>
								</li> -->
	
								<li class="menu_ci menu_ciz">
									<a class="menu_cin" href="tel:<?=$site['phone']?>">
										<div class="menu_cim">
											<div class="lazy_menu" data-src="/assets/img/team/ako.jpg"></div>
											<!-- <span class="menu_cim_on"></span> -->
										</div>
										<div class="menu_cizt">
											<span><?=t::w('Sales department')?></span>
											<div><?=$site['phone_view']?></div>
										</div>
										<div class="menu_cizi"><div class="lazy_menu" data-src="/assets/img/icons/telephone-receiver_1f4de.png"></div></div>
									</a>
								</li>
	
							</ul>
	
					<!-- 	<div class="menu_co">
								<div class="menu_i2">
									<div class="menu_i22">
										<div class="menu_i22_c">
											<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="menu_i22_ci"><i class="fab fa-whatsapp"></i></div></a>
											<a target="_blank" href="https://www.instagram.com/<?=$site['instagram']?>"><div class="menu_i22_ci"><i class="fab fa-instagram"></i></div></a>
											<a target="_blank" href="#"><div class="menu_i22_ci"><i class="fab fa-telegram-plane"></i></div></a>
											<a target="_blank" href="#"><div class="menu_i22_ci"><i class="fab fa-youtube"></i></div></a>
											<a target="_blank" href="#"><div class="menu_i22_ci"><i class="fab fa-behance"></i></div></a>
										</div>
									</div>
									<div class="menu_i21">
										<div class="menu_i21c disb_zab">
											<div class="menu_i21ci">
												<i class="fal fa-envelope"></i>
											</div>
											<div class="menu_i21ct">Задать вопрос</div>
										</div>
									</div>
								</div>
							</div> -->
	
					<!-- 	<div class="header_rc">
								<span>● Звоните, мы сейчас работаем</span>
								<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
							</div>
							<div class="header_btn">
								<div class="btn disb_zab">
									<span>Задать вопрос</span>
								</div>
							</div> -->
	
	
						</div>
	
					</div>
	
				</div>
			</div>
		</div>
	</div>
<? endif ?>