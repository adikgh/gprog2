// window.onload =()=> {
// 	setTimeout(function () {
// 		$(".preload").addClass('preloader_act')
// 		setTimeout(function(){$(".preload").addClass('dsp_n')}, 300)
// 	}, 500)
// }




// preloader
// loader();
// function loader(_success) {
// 	var obj = document.querySelector('.preloader')
// 	inner = document.querySelector('.preloader_inner')
// 	var w = 0
// 	t = setInterval(function() {
// 	   w = w + 1;
// 	   inner.textContent = w+'%';
// 	   if (w === 100){
// 			obj.classList.remove('show');
// 			clearInterval(t);
// 			w = 0;
// 			if (_success){return _success()}
// 		}
// 	}, 20);
// }



// if (window.matchMedia("(max-width: 768px)").matches) { }

// js
// AOS.init({duration:500,once:true});



// start jquery
$(document).ready(function() {

	// lazy load
	$('.lazy_logo').lazy()
	$('.lazy_bag').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_menu').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_img').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_img2').lazy({effect:"fadeIn",effectTime:500,threshold:0})


	$('html, body').on('wheel', function(event) {
		if (event.originalEvent.deltaY > 0) $(this).attr('data-scroll-direction', 'down')
		else $(this).attr('data-scroll-direction', 'up')
	});


	// setting input
	$(".ms_phone").inputmask("8 (999) 999-99-99");
	
	// form - input
	$('input[type=text]').on('input', function(){
		if ($(this).val().length < $(this).attr('data-lenght')) {
			$(this).attr('data-pr', 0)
		} else {
			$(this).attr('data-pr', '1')
			$(this).attr('data-val', $(this).val())
		}
	})
	$('input[type=tel]').on('input', function(){
		in_rez = $(this).val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')
		if (in_rez.length < $(this).attr('data-lenght')) {
			$(this).attr('data-pr', 0)
		} else {
			$(this).attr('data-pr', 1)
			$(this).attr('data-val', in_rez)
		}
	})


	// 
	$('.menu_os, .menu_oz').click(function(e) {
		$('#html').toggleClass('ovr_h');
		$('.menu_o').toggleClass('menu_o_act');
	});

	// 
	$('.menu_cipc').on('click', function() {
		// $(this).siblings('.menu_pod').addClass('menu_pod_act')
		$('.menu_cnq').addClass('dsp_n')
		$('.menu_cna').removeClass('dsp_n')

		$('.lazy_menu').lazy()
	});
	$('.menu_clc_lang').on('click', function() {
		$('.menu_pod_lang').removeClass('dsp_n')
	});
	$('.menu_clc_gprog').on('click', function() {
		$('.menu_pod_gprog').removeClass('dsp_n')
	});
	$('.menu_cipl').on('click', function() {
		$('.menu_pod').addClass('dsp_n')
		$('.menu_cnq').removeClass('dsp_n')
		$('.menu_cna').addClass('dsp_n')
	});




	// 
	$('.clc_top').click(function(){$('body,html').animate({scrollTop:0},1000)})







	$('.quiz_ci').each(function(){$(this).height($(this).children('.quiz_cih').height())})
	$('.quiz_ci').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('quiz_ci_act') == true) {
			$(this).removeClass('quiz_ci_act')
			$(this).height($(this).children('.quiz_cih').height())
		} else {
			$(this).addClass('quiz_ci_act')
			$(this).height($(this).children('.quiz_cip').height() + $(this).children('.quiz_cih').height() + 15)
		}
	});










		// СМС
		$('.orderSend').on('click', function() {

			var name = $(this).parent().siblings().children('.name')
			var phone = $(this).parent().siblings().children('.phone')
	
			if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) {
				mess('Введите свой данный')
			} else {
				$.ajax({
					url: "/send/?mess",
					type: "POST",
					dataType: "html",
					data: ({name: name.val(), phone: phone.val()}),
					success: function(data){
						if (data == 'yes') { 
							mess('Успешно отправлено')
							phone.val('')
							phone.attr('data-pr', 0)
							name.val('')
							name.attr('data-pr', 0)
						} else {
							console.log(data);
							mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
						}
					},
					beforeSend: function(){ mess('Отправка..') },
					error: function(data){ mess('Ошибка..') }
				})
			}
		})


   // 
	$('.disb_zab').click(function(){
		$('.fr').addClass('pop_bl_act');
		$('#html').addClass('ovr_h');
	})
	$('.zabr_back').click(function(){
		$('.fr').removeClass('pop_bl_act');
		$('#html').removeClass('ovr_h');
	})





})