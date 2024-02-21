// Sidebar JS
function openNav() {
  document.getElementById("mySidenav").style.width = "242px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
//   Onclick show password
$(document).ready(function () {
    $("#show_hide_password a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_hide_password input").attr("type") == "text") {
        $("#show_hide_password input").attr("type", "password");
        $("#show_hide_password i").addClass("fa-eye-slash");
        $("#show_hide_password i").removeClass("fa-eye");
      } else if (
        $("#show_hide_password input").attr("type") == "password"
      ) {
        $("#show_hide_password input").attr("type", "text");
        $("#show_hide_password i").removeClass("fa-eye-slash");
        $("#show_hide_password i").addClass("fa-eye");
      }
    });
    // Confirm Password Registration
    $("#show_hide_password2 a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_hide_password2 input").attr("type") == "text") {
        $("#show_hide_password2 input").attr("type", "password");
        $("#show_hide_password2 i").addClass("fa-eye-slash");
        $("#show_hide_password2 i").removeClass("fa-eye");
      } else if (
        $("#show_hide_password2 input").attr("type") == "password"
      ) {
        $("#show_hide_password2 input").attr("type", "text");
        $("#show_hide_password2 i").removeClass("fa-eye-slash");
        $("#show_hide_password2 i").addClass("fa-eye");
      }
    });
});
// For Tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


// For Country Flag JS
function format(item, state) {
  if (!item.id) {
    return item.text;
  }
  var countryUrl = "https://hatscripts.github.io/circle-flags/flags/";
  var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
  var url = state ? stateUrl : countryUrl;
  var img = $("<img>", {
    class: "img-flag",
    width: 26,
    src: url + item.element.value.toLowerCase() + ".svg"
  });
  var span = $("<span>", {
    text: " " + item.text
  });
  span.prepend(img);
  return span;
}

$(document).ready(function() {
  $("#countries").select2({
    templateResult: function(item) {
      return format(item, false);
    }
  });
  $("#us-states").select2({
    templateResult: function(item) {
      return format(item, true);
    }
  });
});



  // International Phone Number JS
  // -----Country Code Selection
$("#mobile_code").intlTelInput({
	initialCountry: "bd",
	separateDialCode: true,
	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});



// Step Slider

$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //steper-wrapper
  var opacity;

  $(".next").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //show the next steper-wrapper
    next_fs.show();
    //hide the current steper-wrapper with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 600,
      }
    );
  });

  $(".previous").click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //show the previous steper-wrapper
    previous_fs.show();

    //hide the current steper-wrapper with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 600,
      }
    );
  });

  $(".submit").click(function () {
    return false;
  });
});