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

// OTP Timer
// OTP Input Filed & Verify OTP
function checkOTP() {
  var otp1 = document.getElementById("otp1").value;
  var otp2 = document.getElementById("otp2").value;
  var otp3 = document.getElementById("otp3").value;
  var otp4 = document.getElementById("otp4").value;
  var otp5 = document.getElementById("otp5").value;

 if (otp1 && otp2 && otp3 && otp4 && otp5) {
   // Show the Verify OTP button
   verifyButton.style.display = "block";
   timer.style.display = "none";
 } else {
   // Hide the Verify OTP button if any field is empty
   verifyButton.style.display = "none";
 }
}

const input = document.querySelectorAll(".input");
const inputField = document.querySelector(".inputfield");

let inputCount = 0,
  finalInput = "";
const updateInputConfig = (element, disabledStatus) => {
  element.disabled = disabledStatus;
  if (!disabledStatus) {
    element.focus();
  } else {
    element.blur();
  }
};

input.forEach((element) => {
  element.addEventListener("keyup", (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, "");
    let { value } = e.target;

    if (value.length == 1) {
      updateInputConfig(e.target, true);
      if (inputCount <= 3 && e.key != "Backspace") {
        finalInput += value;
        if (inputCount < 4) {
          updateInputConfig(e.target.nextElementSibling, false);
        }
      }
      inputCount += 1;
    } else if (value.length == 0 && e.key == "Backspace") {
      finalInput = finalInput.substring(0, finalInput.length - 1);
      if (inputCount == 0) {
        updateInputConfig(e.target, false);
        return false;
      }
      updateInputConfig(e.target, true);
      e.target.previousElementSibling.value = "";
      updateInputConfig(e.target.previousElementSibling, false);
      inputCount -= 1;
    } else if (value.length > 1) {
      e.target.value = value.split("")[0];
    }
  });
});

window.addEventListener("keyup", (e) => {
  if (inputCount > 4) {
    if (e.key == "Backspace") {
      finalInput = finalInput.substring(0, finalInput.length - 1);
      updateInputConfig(inputField.lastElementChild, false);
      inputField.lastElementChild.value = "";
      inputCount -= 1;
    }
  }
});

const startInput = () => {
  inputCount = 0;
  finalInput = "";
  input.forEach((element) => {
    element.value = "";
  });
  updateInputConfig(inputField.firstElementChild, false);
};
window.onload = startInput();


// Timer Counter 
document.addEventListener("DOMContentLoaded", function () {
  startTimer();
});

function startTimer() {
  var timerElement = document.getElementById("timer");
  var timeInSeconds = 120; // 2 minutes

  function updateTimerDisplay() {
    var minutes = Math.floor(timeInSeconds / 60);
    var seconds = timeInSeconds % 60;

    // Display the time in the format MM:SS
    timerElement.textContent = `${String(minutes).padStart(2, "0")}:${String(
      seconds
    ).padStart(2, "0")}`;
  }

  function handleTimerExpired() {
    clearInterval(timerInterval);
    timerElement.textContent = "Resend OTP";
    document.getElementById("timer").style.backgroundColor = "#00756A";
    document.getElementById("timer").style.color = "white";
  }

  var timerInterval = setInterval(function () {
    if (timeInSeconds > 0) {
      timeInSeconds--;
      updateTimerDisplay();
    } else {
      handleTimerExpired();
    }
  }, 1000);
}
