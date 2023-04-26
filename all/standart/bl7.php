<div class="bl7">
	<div class="bl_c">
		
		<div class="head_c head_c1">
			<h2><?=t::w('Certificates')?></h2>
			<h6><?=t::w('It is not us, but the results that speaks to us')?></h6>
		</div>
		
		<div class="bl7_c">

			<?php
	    		$certificate = db::query("select * from certificate");
				while ($certificate_date = mysqli_fetch_array($certificate)){
					echo '
						<div class="bl7_i">
							<div class="bl7_img lazy_img" data-src="/assets/img/certificate/'.$certificate_date['img'].'"></div>
							<p>'.$certificate_date['txt_'.$lang].'</p>
						</div>
					';
				}
	    	?>

		</div>
	</div>

</div>