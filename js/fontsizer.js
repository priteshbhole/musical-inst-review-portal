function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.2em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.9) + "em";
}
function resetToDefaultFontSize() {
    var body = document.getElementsByTagName('body')[0];
    body.style.fontSize = '1em';
}