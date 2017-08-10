"use strict";

$.fn.setEqualHeight = function () {
	var $this = this;

	$(".gen-password").click(function () {
		var randomstring = Math.random().toString(36).slice(-8);
		$(".new_pass_admin").val(randomstring);
	});

	var maxHeight = 0;
	$this.each(function () {
		if (maxHeight < $(this).outerHeight()) {
			maxHeight = $(this).outerHeight();
		}
	});
	$this.each(function () {
		$(this).css("min-height", maxHeight);
	});
};

function radioElem(elem, active) {

	$(elem).click(function () {
		$(elem).removeClass(active);
		$(this).addClass(active);
	});
}

$(document).ready(function () {

	$('#date_in').datetimepicker();
	$('#date_out').datetimepicker({
		useCurrent: false //Important! See issue #1075
	});
	$("#date_in").on("dp.change", function (e) {
		$('#date_out').data("DateTimePicker").minDate(e.date);
	});
	$("#date_out").on("dp.change", function (e) {
		$('#date_in').data("DateTimePicker").maxDate(e.date);
	});

	$(".application-modal").modal("show");

	$("#drop-currency > .dropdown-menu > li > a").click(function () {
		var old = $("#drop-currency-text").attr("ident");
		var nw = $(this).attr("ident");
		$("#drop-currency-text").removeClass("input-" + old);
		$("#drop-currency-text").addClass("input-" + nw);
		$("#drop-currency-text").attr("ident", nw);
		$("#drop-currency-text").text($(this).text());
	});

	var elemsInfo = 0;
	$(".teacher-info-students.elem").click(function () {
		if ($(this).hasClass("active")) {
			elemsInfo = elemsInfo - 1;
			$(this).removeClass("active");
		} else {
			if (elemsInfo == 3) {
				return null;
			} else {
				$(this).addClass("active");
				elemsInfo = elemsInfo + 1;
			}
		}
	});

	radioElem(".slide-elem", "active");

	var selectedFiles = [];

	function clearUppload() {
		$(".uppload-file").remove();
	}

	$(".uppload-button").click(function () {
		$("#upploadFile").click();
	});

	function addFile(i, file) {

		$('.upploads').append('<div ident="' + i + '" class="uppload-file"><div class="uppload_name">' + file.name + '</div><div class="close_file"></div></div>');
	}

	function resetDeleteFile() {
		$(".close_file").click(function () {
			delete selectedFiles[parseInt($(this).parent().attr("ident"))];
			$(this).parent().remove();
		});
	}

	$("#upploadFile").change(function (e) {
		selectedFiles = [];
		var files = e.target.files,
		    l = 0,
		    i = 0;
		if (files.length > 2) {
			l = 2;
		} else {
			l = files.length;
		}
		clearUppload();
		for (var i; i < l; i++) {
			addFile(i, files[i]);
			selectedFiles.push(files[i]);
		}
		resetDeleteFile();
	});

	$(".send-button").click(function () {
		var text = $(".textarea-chat").val();
		var links = "";
		var message = '<div class="container-fluid"><div class="row message"><div class="col-xs-10"><div class="avatar avatarMessage"><img src="img/user_2.jpg"></div><div class="messageData col-xs-7"><div class="firstnameMessage">Emma Gordon</div><div class="textMessage">' + text + '</div></div></div><div class="col-xs-2"><div class="dateMessage">18 апр</div></div></div></div>';
		$(".textarea-chat").val("");

		if (selectedFiles.length > 0) {
			var i = 0;
			links += "<br>";
			for (i; i < selectedFiles.length; i++) {
				links += "<a href='#' class='chat-link'>" + selectedFiles[i].name + "</a><br>";
			}
			message = '<div class="container-fluid"><div class="row message"><div class="col-xs-10"><div class="avatar avatarMessage"><img src="img/user_2.jpg"></div><div class="messageData col-xs-7"><div class="firstnameMessage">Emma Gordon</div><div class="textMessage">' + text + links + '</div></div></div><div class="col-xs-2"><div class="dateMessage">18 апр</div></div></div></div>';
			selectedFiles = [];
			clearUppload();
		}

		$(".chat").append(message);
	});

	$(".textarea-chat").keyup(function (e) {
		if (e.keyCode === 13) {
			$(".send_button").click();
		}
	});

	$("#avatarButton").click(function () {
		$("#avatarSave").click();
	});

	$("#avatarSave").change(function (e) {
		var file = e.target.files[0];
		if (file.type.indexOf("image") !== -1) {
			var img = $("img.avatarPhoto");
			var reader = new FileReader();
			reader.onload = function (img) {
				return function (e) {
					img.attr('src', e.target.result);
				};
			}(img);

			reader.readAsDataURL(file);
		}
	});

	$('.scrollbar-macosx').scrollbar();

	$("#drop-lang-level > .dropdown-menu > li > a").click(function () {
		$("#drop-lang-level > .dropdown-toggle").text($(this).text());
	});

	$('.datepicker').datetimepicker({
		format: 'DD.MM.YYYY'
	});

	$(".radio-button > .item").click(function () {
		$(".radio-button > .item").removeClass("active");
		$(this).addClass("active");
	});

	$('.dropdown').on('shown.bs.dropdown', function () {
		var elem = $(this).find(".arrow_down");
		elem.removeClass("arrow_down").addClass("arrow_up");
	});

	$('.dropdown').on('hidden.bs.dropdown', function () {
		var elem = $(this).find(".arrow_up");
		elem.removeClass("arrow_up").addClass("arrow_down");
	});

	$(".selectLang").click(function () {
		$(".selectLangData").text($(this).text());
	});

	function circle() {
		//$(".circle").height($(".circle").innerWidth());
		//$(".circle").css("line-height",$(".circle").innerWidth()+"px");
		$(".line").css("margin-top", 2 + $(".circle").innerWidth() / 2 + "px");
	}

	circle();

	$(window).resize(function () {
		circle();
	});

	$('.tooltipInfo').tooltip();

	$(".week_circle > .circle").click(function () {
		$(".day_week").text($(this).text());
		$(".week_circle > .circle").removeClass("active");
		$(".week_circle > .line").removeClass("active");
		var size = $(this).attr("c");

		if (size == "1") {
			$(".week_circle > .circle:nth-child(1)").addClass("active");
		}
		if (size == "2") {
			$(".week_circle > .circle:nth-child(1), .week_circle > .circle:nth-child(3)").addClass("active");
			$(".week_circle > .line:nth-child(2)").addClass("active");
		}
		if (size == "3") {
			$(".week_circle > .circle:nth-child(1), .week_circle > .circle:nth-child(3), .week_circle > .circle:nth-child(5)").addClass("active");
			$(".week_circle > .line:nth-child(2), .week_circle > .line:nth-child(4)").addClass("active");
		}
		if (size == "4") {
			$(".week_circle > .circle").addClass("active");
			$(".week_circle > .line").addClass("active");
		}
	});

	$(".min_circle > .circle").click(function () {
		$(".min-day").text($(this).text());
		$(".min_circle > .circle").removeClass("active");
		$(".min_circle > .line").removeClass("active");
		var size = $(this).attr("c");

		if (size == "1") {
			$(".min_circle > .circle:nth-child(1)").addClass("active");
		}
		if (size == "2") {
			$(".min_circle > .circle:nth-child(1), .min_circle > .circle:nth-child(3)").addClass("active");
			$(".min_circle > .line:nth-child(2)").addClass("active");
		}
		if (size == "3") {
			$(".min_circle > .circle:nth-child(1), .min_circle > .circle:nth-child(3), .min_circle > .circle:nth-child(5)").addClass("active");
			$(".min_circle > .line:nth-child(2), .min_circle > .line:nth-child(4)").addClass("active");
		}
		if (size == "4") {
			$(".min_circle > .circle").addClass("active");
			$(".min_circle > .line").addClass("active");
		}
	});

	$(window).resize(function () {
		circle();
		$(".column").setEqualHeight();
	});

	$(".column").setEqualHeight();
});