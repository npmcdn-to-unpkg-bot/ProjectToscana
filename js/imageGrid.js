var $grid = $('.grid').imagesLoaded( function() {
    $grid.masonry({
        itemSelector: '.grid-item',
        columnWidth: 350,
        isFitWidth: true
    });
});


/*
var $grid = $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 350,
    isFitWidth: true
});

$grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
});

*/
