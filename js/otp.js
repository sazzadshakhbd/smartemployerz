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