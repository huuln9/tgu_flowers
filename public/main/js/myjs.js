const appRootURL = "http://localhost/github/tgu_flowers";

$(document).ready(function() {
  $("#val-email").keyup(function() {
      var email = $(this).val();
      $.post(appRootURL + "/ajax/checkemail", {email: email}, function(data) {
        var rs = JSON.parse(data);
        if (rs) {
          $("#check-email").html("Email đã tồn tại!");
        } else {
          $("#check-email").html("");
        }
      });
  });
});

function togglePassword() {
  var x = document.getElementById("val-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function toggleRePassword() {
  var x = document.getElementById("val-confirm-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}