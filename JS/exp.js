$(document).ready(function() {
    // Smooth scroll for navigation links
    $('nav a').click(function(event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);
    });

    // Fade-in animation for properties
    $('.property').hide();
    $('.property').each(function(index) {
        $(this).delay(index * 200).fadeIn(600);
    });

    // Alert when a "View Details" button is clicked
    $('.btn-view-details').click(function(event) {
        event.preventDefault();
        alert('Feature coming soon!');
    });

    // Search button functionality
    $('#search-btn').click(function () {
        var query = $('#search').val().toLowerCase().trim();
        if (query) {
            window.location.href = 'properties.html?city=' + encodeURIComponent(query);
        } else {
            alert('Please enter a search term.');
        }
    });

    // Hover effect on property cards
    $('.property').hover(
        function() {
            $(this).css('transform', 'scale(1.05)');
        },
        function() {
            $(this).css('transform', 'scale(1)');
        }
    );
});
