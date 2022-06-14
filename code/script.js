var gobtn = document.querySelector(".goButton");
var skipbtn = document.querySelector(".skipButton");
var content = document.getElementById("namespace");

gobtn.addEventListener("click", () => {
  if (content.value.trim() == "") {
    content.required = true;
    document.getElementById("val").innerHTML = "Please Enter a Valid Username";
  } else {
    localStorage.setItem("username", content.value);
    window.location.href = "home.html";
  }
});

skipbtn.addEventListener("click", () => {
  localStorage.setItem("username", "Guest");
  window.location.href = "home.html";
});
