function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element');
}

document.getElementById("year").innerHTML = new Date().getFullYear();