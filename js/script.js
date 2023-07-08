let searchForm = document.querySelector('.search-form');
let searchButton = document.querySelector('#search-btn');

searchButton.addEventListener('click', function() {
    searchForm.classList.toggle('active');
});

// Initialize Nivo Slider
$(window).on('load', function() {
    $('#slider').nivoSlider();
});