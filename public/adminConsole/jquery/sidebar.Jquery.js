  $(document).ready(function () {
    $(".menuBar").on("click", function () {
      $(".sidebar")
        .removeClass("hidden")
        .addClass("block")
        .hide()
        .fadeIn(100);
    });

    $(".closeSidebar").on("click", function () {
      $(".sidebar")
        .fadeOut(100, function () {
          $(this).removeClass("block").addClass("hidden");
        });
    });
  });