<?php include "../config/core.php";

	
	// site setting
	$menu_name = 'cases';
	// $site_set[] = '';
	$css = ['cases/main'];
	$js = ['cases/main'];
?>
<? include "../block/header.php"; ?>

	<div class="">
		<div class="bl_c">

         <div class="head_c">
            <h1>Кейсы #gprog</h1>
         </div>

         <div class="">
            <div class="">
               <input type="text"  />
            </div>
            <div class="">
               <div class=""></div>
            </div>
         </div>
         
         <div class="case_tc">
            <? $cases = db::query("select * from cases"); ?>
            <? while ($case_d = mysqli_fetch_array($cases)): ?>
               <? $case_id = $case_d['id']; ?>
               <? $client_d = fun::clients($case_d['client_id']); ?>
               <? $service_d = fun::services($case_d['service_id']); ?>
               <a class="case_ti" href="#<?=$case_d['name']?>">
                  <div class="case_tic">
                     <p><?=$service_d['names_ru']?></p>
                     <div><?=$client_d['name_ru']?></div>
                  </div>
                  <div class="case_tib lazy_img" data-src="/assets/img/cases/<?=$case_d['img']?>"></div>
               </a>
            <? endwhile ?>
         </div>

		</div>
	</div>

<? include "../block/footer.php"; ?>