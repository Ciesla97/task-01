var slider = tns({
    container: ".my-slider",
    items: 4,
    slideBy: 1,
    nav: false,
    gutter: 35,
    edgePadding: 10,
    loop: false,
    controlsPosition: "bottom",
    mouseDrag: true,
    controlsContainer: "#custom-control",
    responsive: {
        375: {
            items: 1
        },
        640: {
            items: 2
        },
        768: {
            items: 4
        }

    },
    autoHeight: true

});