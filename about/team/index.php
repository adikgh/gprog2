<?php include "../../config/core.php";

	// site setting
	$menu_name = 'team';
	// $site_set = [];
   $css = ['about/team'];
	$js = ['about/team'];
?>
<? include "../../block/header.php"; ?>

	<div class="">
      <div class="bl_c">
         <div class="tm_bl1">
            <div class="tm_bl1_l">
               <div class="head_c">
                  <h1>Команда #gprog</h1>
               </div>
               <div class="tm_bl1_lp">
                  <p>Наш коллектив насчитывает более 30 человек в команде и больше похож на структуру семьи, чем на корпоративный строй.</p>
                  <p>Мы гордимся каждым членом команды и вкладываем в него свои «правильные» принципы работы в #digital.</p>
               </div>
               <div class="btn">Отправить резюме</div>
            </div>
            <div class="tm_bl1_r"></div>
         </div>

         <div class="">

            <div class="">
               <div class="team_tc">
                  <? $team = db::query("select * from team"); ?>
                  <? while ($team_d = mysqli_fetch_array($team)): ?>
                     <div class="team_ti">
                        <div class="case_tib lazy_img" data-src="/assets/img/team/<?=$team_d['img']?>"></div>
                        <div class="case_tic">
                           <div><?=$team_d['name']?></div>
                           <p><?=$team_d['post_ru']?></p>
                        </div>
                     </div>
                  <? endwhile ?>
               </div>
            </div>

         </div>

      </div>
	</div>

<? include "../../block/footer.php"; ?>