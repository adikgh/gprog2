<? if ($site_set['header'] == true): ?>
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
							<div class="menu_cn">

								<div class="menu_cnq">
									<a class="menu_ci" href="/services">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/magnet_1f9f2.png"></div></div>
										<span><?=t::w('Services')?></span>
									</a>
									<div class="menu_ci menu_cip menu_cipc menu_clc_gprog">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/logo/logo.png"></div></div>
										<span>G prog</span>
									</div>
									<div class="menu_ci menu_cip menu_cipc menu_clc_lang">
										<? if ($lang == 'kz'): ?>
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-kazakhstan_1f1f0-1f1ff.png"></div></div>
											<span><?=t::w('Language')?>: <b>Қазақша</b></span>
										<? else: ?>
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-russia_1f1f7-1f1fa.png"></div></div>
											<span><?=t::w('Language')?>: <b>Русский</b></span>
										<? endif ?>
									</div>
									<!-- <a class="menu_ci" href="/pack">
										<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/fire_1f525.png"></div></div>
										<span><?=t::w('Packaging')?></span>
									</a> -->
								</div>

								<div class="menu_cna dsp_n">
									<div class="menu_pod menu_pod_lang dsp_n">
										<div class="menu_ci menu_cipl">
											<div class="menu_cim"><i class="fal fa-angle-left"></i></div>
											<span>Назад</span>
										</div>
										<a class="menu_ci" href="<?=$url?>?lang=kz">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-kazakhstan_1f1f0-1f1ff.png"></div></div>
											<span>Қазақша</span>
										</a>
										<a class="menu_ci" href="<?=$url?>?lang=ru">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/flag-russia_1f1f7-1f1fa.png"></div></div>
											<span>Русский</span>
										</a>
									</div>
									<div class="menu_pod menu_pod_gprog dsp_n">
										<div class="menu_ci menu_cipl">
											<div class="menu_cim"><i class="fal fa-angle-left"></i></div>
											<span>Назад</span>
										</div>
										<a class="menu_ci" href="/cases">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/briefcase_1f4bc.png"></div></div>
											<span>Кейсы</span>
										</a>
										<a class="menu_ci" href="/clients">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/handshake_1f91d.png"></div></div>
											<span><?=t::w('Clients')?></span>
										</a>
										<a class="menu_ci" href="/about/team">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/waving-hand_1f44b.png"></div></div>
											<span><?=t::w('Team')?></span>
										</a>
										<a class="menu_ci" href="/about/contacts">
											<div class="menu_cim"><div class="lazy_menu" data-src="/assets/img/icons/telephone-receiver_1f4de.png"></div></div>
											<span><?=t::w('Contacts')?></span>
										</a>
									</div>
								</div>
							</div>

							<a class="menu_cn menu_cn2" href="tel:<?=$site['phone']?>">
								<div class="menu_cim">
									<div class="lazy_menu" data-src="/assets/img/team/ako.jpg"></div>
									<!-- <span class="menu_cim_on"></span> -->
								</div>
								<div class="menu_cizt">
									<span><?=t::w('Sales department')?></span>
									<div><?=$site['phone_view']?></div>
								</div>
								<div class="menu_cizi"><i class="fas fa-phone-alt"></i></div>
							</a>

						</div>
					</div>
	
				</div>
			</div>
		</div>
	</div>
<? endif ?>