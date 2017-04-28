document.versInput.onsubmit = formValidate;

function formValidate() {
  var vers = document.versInput.formText.value;
  var forfatter = document.versInput.formAuthor.value;
  var comment = document.versInput.formComment.value;

  var reg = /["=<>&]+/;

  if (reg.test(vers) || reg.test(forfatter) || reg.test(comment)) {
    alert("Teksten din inneholder forbudte tegn (\"=<>&)");
    return false;
  }
  return true;
}
