	// timer
	function progress(timeleft, timetotal, $element) {
		var progressBarWidth = timeleft * $element.width() / timetotal;
		$element.find('.countdown__bar-animated').animate({ width: progressBarWidth }, 500);
		var minutes = ("0" + Math.floor(timeleft/60)).slice(-2);
		var seconds = ("0" + timeleft%60).slice(-2);
		if (timeleft > 0) {$element.find('.countdown__bar-time').html(minutes + ":"+ seconds);
		} else {$element.find('.countdown__bar-time').html("00:00");}
		if(timeleft > 0) setTimeout(function(){progress(timeleft - 1, timetotal, $element)}, 1000);
	};
	var timerBar = $('.countdown__bar');
	var timerTime = timerBar.data('time');
	var pageID = timerBar.data('page-id');
	var visitStart = localStorage.getItem(pageID);
	if (visitStart === null) {
		var visitStart = Date.parse(new Date());
		localStorage.setItem(pageID, Date.parse(new Date()));
	}
	var visitEnd = +visitStart + timerTime*1000;
	var timeleft = (visitEnd - Date.parse(new Date())) / 1000;
	progress(timeleft, timerTime, timerBar);




   	// 
      var bl11_cls = new Swiper('.bl11_cls', {
         effect: 'fade',
         autoHeight: true,
         allowTouchMove: false,
         fadeEffect:{crossFade:true},
         navigation:{nextEl:'.gallery-next',prevEl:'.gallery-prev'},
         pagination:{el:'.gallery-pagination',type:'progressbar'},
      })
   
   
      var bl5_con = new Swiper('.bl5_con', {
         slidesPerView: 'auto',
         spaceBetween: 30,
         navigation: {nextEl:'.bl5_next',prevEl:'.bl5_prev'},
         on:{slideChange:function(){$('.lazy_img2').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
      });
   
      var bl7_con = new Swiper('.bl7_con', {
         autoHeight: true,
         slidesPerView: 'auto',
         navigation: {nextEl:'.bl7_next',prevEl:'.bl7_prev'},
         on:{slideChange:function(){$('.lz_bl7').lazy({effect:"fadeIn",effectTime:300,threshold:0})}},
      });  
   
      var s_bl9_lc = new Swiper('.s_bl9_lc', {
         slidesPerView: 'auto',
         spaceBetween: 30,
         navigation: {nextEl:'.s_bl9_next',prevEl:'.s_bl9_prev'},
      });









      $('.menu_clc').on('click', function(e){
         e.preventDefault();
         if($('.mn').hasClass('open')){
            $('.mn').removeClass('open');
            $('.mn').addClass('close');
            $('body').removeClass('menu_act')
            $('#html').removeClass('ovr_h');
         } else {
            $('.mn').removeClass('close');
            $('.mn').addClass('open');
            $('body').addClass('menu_act')
            $('#html').addClass('ovr_h');
         }
      });




      	// 
	// let scroll = $(window).scrollTop();
	// if (scroll > 80) {
	// 	$('.header').addClass('header_fix');
   // } else {
   //  	$('.header').removeClass('header_fix');
   // }
	// $(window).scroll(function() {
   //  	scroll = $(window).scrollTop();
	// 	if (scroll > 80) {
	// 		$('.header').addClass('header_fix');
	//    } else {
	//     	$('.header').removeClass('header_fix');
	//    }
	// })




   	// 
	$('.menu_pj').click(function(){
		$('.header').toggleClass('trs_act')
		$('.body').toggleClass('trs_act')
		$('.footer').toggleClass('trs_act')
		$('.menu_ph').toggleClass('trs_act')
	})
	$('.menu_back, .menu_phi a').click(function(){
		$('.header').removeClass('trs_act')
		$('.body').removeClass('trs_act')
		$('.footer').removeClass('trs_act')
		$('.menu_ph').removeClass('trs_act')
	})