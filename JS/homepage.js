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
    $('.view-details').click(function(event) {
        event.preventDefault();
        alert('Feature coming soon!'); // Alert for view details
    });

    $('#search-btn').click(function () {
        var query = $('#search').val().toLowerCase().trim();
        if (query) {
            // Redirect to the properties page for the searched city
            window.location.href = 'properties.html?city=' + encodeURIComponent(query);
        } else {
            alert('Please enter a search term.');
        }
    });

    

    // Function to filter properties based on search query
    function filterProperties(query) {
        $('.property').each(function() {
            var title = $(this).find('h3').text().toLowerCase();
            if (title.includes(query)) {
                $(this).fadeIn(300);
            } else {
                $(this).fadeOut(300);
            }
        });
    }


    // Hover effect on property cards
    $('.property').hover(
        function() {
            $(this).css('transform', 'scale(1.05)');
        },
        function() {
            $(this).css('transform', 'scale(1)');
        }
    );
    // Add keypress event for search (Enter key)
    $('#search').keypress(function (e) {
        if (e.which === 13) {
            $('#search-btn').click();
        }
    });
});


$('.btn-view-details').click(function(event) {
    event.preventDefault();
    window.location.href = 'luxuryvilla.html'; // Redirect to luxury villa page
});
$('.btn-view-details1').click(function(event) {
    event.preventDefault();
    window.location.href = 'apartment.html'; // Redirect to luxury villa page
});
$('.btn-view-details2').click(function(event) {
    event.preventDefault();
    window.location.href = 'cozycottage.html'; // Redirect to luxury villa page
});