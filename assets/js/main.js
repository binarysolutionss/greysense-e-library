// JavaScript Document

//Nav bar whitens as you scroll down
		$(function(){
			$(document).scroll(function(){
				var $nav = $('.nav-bar');
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});
		});

