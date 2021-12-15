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