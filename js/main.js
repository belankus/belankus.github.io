$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-gaya");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});
