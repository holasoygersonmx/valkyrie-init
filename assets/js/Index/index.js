'use strict';

$(document).ready(function()
{
    $('#home > div.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX',
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: false
    });

    $('form[name="contact_us"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=contact_us',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);

                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors += response.errors[i] + '\n';

                    alert(errors);
                }
            }
        });
    });
});

function map()
{
    var title = $('#map').data('title');
    var lat = $('#map').data('lat');
    var lng = $('#map').data('lng');
    var zoom = $('#map').data('zoom');

    var locations = [
        {
            title: title,
            lat: lat,
            lng: lng,
            zoom: zoom
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: locations[0].zoom,
        center: {
            lat: locations[0].lat,
            lng: locations[0].lng
        }
    });

    var marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map,
        icon: '/assets/images/marker.png',
        title: locations[0].title
    });
}
