<?php include "../config/core.php";

	
	// site setting
	$menu_name = 'clients';
	// $site_set[] = '';
	$css = ['clients'];
	$js = ['clients'];
?>
<? include "../block/header.php"; ?>

	<div class="">
		<div class="bl_c">

         <div class="head_c">
            <h1>Клиенты #gprog</h1>
         </div>
         
         <div class="clients_c">
            <? $clients = db::query("select * from clients"); ?>
            <? while ($client_d = mysqli_fetch_array($clients)): ?>
               <? $client_id = $client_d['id']; ?>
               <div class="clients_i">
                  <div class="clients_ic">
                     <div class="clients_icn">
                        <h3><?=$client_d['name_ru']?></h3>
                        <p><?=$client_d['disc_ru']?></p>
                        <a class="btn btn_back" href="">Официальный сайт </a>
                     </div>
                     <div class="clients_icm">
                        <div class="lazy_img" data-src="/assets/img/clients/<?=$client_d['logo']?>"></div>
                     </div>
                  </div>
                  <div class="clients_ib">
                     <? $cases = db::query("select * from cases where client_id = '$client_id'"); ?>
                     <? while ($case_d = mysqli_fetch_array($cases)): ?>
						      <? $service_d = fun::services($case_d['service_id']); ?>
                        <a class="btn btn_cm" href="<?=$case_d['url']?>"><?=$service_d['names_ru']?></a>
                     <? endwhile ?>
                  </div>
               </div>
            <? endwhile ?>
         </div>

		</div>
	</div>

<? include "../block/footer.php"; ?>