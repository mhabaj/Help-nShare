$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});


$(function () {

			var links = $('.sidebar-links > a');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			})
		});