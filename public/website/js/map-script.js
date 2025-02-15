"use strict";

function goMap() {
    if ($("#map").length) {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -7.4184818, lng: 109.2257192 },
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "all",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            saturation: 36,
                        },
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 40,
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "labels.text.stroke",
                    stylers: [
                        {
                            visibility: "on",
                        },
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 16,
                        },
                    ],
                },
                {
                    featureType: "all",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
                {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 20,
                        },
                    ],
                },
                {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 17,
                        },
                        {
                            weight: 1.2,
                        },
                    ],
                },
                {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 20,
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 21,
                        },
                    ],
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 17,
                        },
                    ],
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 29,
                        },
                        {
                            weight: 0.2,
                        },
                    ],
                },
                {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 18,
                        },
                    ],
                },
                {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 16,
                        },
                    ],
                },
                {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 19,
                        },
                    ],
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [
                        {
                            color: "#000000",
                        },
                        {
                            lightness: 17,
                        },
                    ],
                },
            ],
        });

        // To add the marker to the map
        var image = "/website/images/logo/map.png";
        var beachMarker = new google.maps.Marker({
            position: { lat: -7.4184818, lng: 109.2257192 },
            map: map,
            icon: image,
            title: "EZMEERA-office",
            infoWindow: {
                content: "<h6>Ezmeera</h6> <p>skincare</p>",
            },
        });
    }
}

// Dom Ready Function
jQuery(document).on("ready", function () {
    (function ($) {
        // add your functions
        goMap();
    })(jQuery);
});
