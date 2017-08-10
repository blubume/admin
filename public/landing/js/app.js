'use strict';

$(document).ready(function () {

	$('a[href^="."]').click(function () {
		// если в href начинается с # или ., то ловим клик
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href
		scroll_el = scroll_el.replace(".", "#");
		if ($(scroll_el).length != 0) {
			// проверим существование элемента чтобы избежать ошибки
			$('html, body').animate({ scrollTop: $(scroll_el).offset().top - 80 }, 1000); // анимируем скроолинг к элементу scroll_el
		}
		return false; // выключаем стандартное действие
	});

	$('#langSelect').on('shown.bs.dropdown', function () {
		var elem = $(this).find(".arrow_down");
		elem.removeClass("arrow_down").addClass("arrow_up");
	});

	$('#langSelect').on('hidden.bs.dropdown', function () {
		var elem = $(this).find(".arrow_up");
		elem.removeClass("arrow_up").addClass("arrow_down");
	});

	$(".selectLang").click(function () {
		$(".selectLangData").text($(this).text());
	});

	function circle() {
		$(".circle").height($(".circle").innerWidth());
		$(".circle").css("line-height", $(".circle").innerWidth() + "px");
		$(".line").css("margin-top", 2 + $(".circle").innerWidth() / 2 + "px");
	}

	circle();

	$(window).resize(function () {
		circle();
	});

	function change_subscribe(){
		var min_day = parseInt($(".min-day").text()),
			day_week = parseInt($(".day_week").text());

		$(".payment_num").text(subscribe_list["month_"+min_day+"_"+day_week]);
	}

	$(".week_circle > .circle").click(function () {
		$(".day_week").text($(this).text());
		$(".week_circle > .circle").removeClass("active");
		$(".week_circle > .line").removeClass("active");
		$(this).addClass("active");
		change_subscribe();


	});

	$(".min_circle > .circle").click(function () {
		$(".min-day").text($(this).text());
		$(".min_circle > .circle").removeClass("active");
		$(".min_circle > .line").removeClass("active");
		$(this).addClass("active");
		change_subscribe();

	});
});