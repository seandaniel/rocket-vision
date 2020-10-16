$(function() {
  $('.mobile-toggle-open').on('click', (e) => {
    e.preventDefault();
    $('.mobile-nav').fadeIn().css('display', 'block');
  })

  $('.mobile-toggle-close').on('click', (e) => {
    e.preventDefault();
    $('.mobile-nav').fadeOut();
  })
});
