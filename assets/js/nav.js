
$(document).ready(function () {

  // Courses Spinner
  $(".nav-tabs").on("click", "a", function () {
    //show elements
    $(".loader").show();
    $(".tab-pane .container-fluid").hide();
    //wait and hide elements
    setTimeout(function () {
      $(".loader").hide();
      $(".tab-pane .container-fluid").show();
    }, 1400);
  });
});
