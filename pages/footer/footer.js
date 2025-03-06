document.addEventListener('DOMContentLoaded', function() {
    // Toggle the 'active' class on click to show/hide the dropdown menu for "Rejoignez nous"
    const resauxBtn = document.getElementById('resaux-btn');
    const resauxMenu = document.getElementById('resaux-menu');

    resauxBtn.addEventListener('click', function() {
        resauxMenu.classList.toggle('active');
    });

    // Toggle the 'active' class on click to show/hide the dropdown menu for "Informations"
    const infoBtn = document.getElementById('info-btn');
    const infoMenu = document.getElementById('info-menu');

    infoBtn.addEventListener('click', function() {
        infoMenu.classList.toggle('active');
    });

    const newsBtn = document.getElementById('news-btn');
    const newsMenu = document.getElementById('news-menu');

    newsBtn.addEventListener('click', function() {
        newsMenu.classList.toggle('active');
    });
});
