function revealExcerpt() {
  var text = document.getElementsByClassName("entry-excerpt")
  if (text.style.display === "none") {
    text.style.display = "inline-block"
  } else {
    text.style.display = "none"
  }
}
