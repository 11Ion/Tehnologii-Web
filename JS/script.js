function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}


  function myFunction2(dots1,more1,btn1) {
    console.log (dots1);
  var dots = document.getElementById(dots1);
  var moreText = document.getElementById(more1);
  var btnText = document.getElementById(btn1);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Vezi mai multe";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Restrange";
    moreText.style.display = "inline";
  }
}
