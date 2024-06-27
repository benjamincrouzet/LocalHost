document.addEventListener('DOMContentLoaded', function() {
    var element = document.getElementById('texte');
    var text = element.textContent;
    var index = 0;

    function appendText() {
        if (index < text.length) {
            element.textContent = text.substring(0, index++);
            setTimeout(appendText, 10); // Ajustez le délai (en ms) pour contrôler la vitesse
        } else {
            element.classList.remove('texte-cache'); // Montrez le texte complètement
        }
    }

    // Cache le texte initialement
    element.classList.add('texte-cache');
    appendText();
});
