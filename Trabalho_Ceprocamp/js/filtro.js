
// Filtro portfólio

$('.filter-btn').on('click', function () {

  let type = $(this).attr('id');
  let boxes = $('.project-box');

  $('.main-btn').removeClass('active');
  $(this).addClass('active');

  if (type == 't-btn') {
    eachBoxes('t', boxes);
  } else if (type == 'm-btn') {
    eachBoxes('m', boxes);
  } else if (type == 'n-btn') {
    eachBoxes('n', boxes);
  } else {
    eachBoxes('all', boxes);
  }

});

function eachBoxes(type, boxes) {

  if (type == 'all') {
    $(boxes).fadeIn();
  } else {
    $(boxes).each(function () {
      if (!$(this).hasClass(type)) {
        $(this).fadeOut('slow');
      } else {
        $(this).fadeIn();
      }
    });
  }
}
