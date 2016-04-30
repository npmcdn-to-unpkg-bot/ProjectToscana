var $grid = $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 350,
    isFitWidth: true
});

$grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
});

/*
$.getJSON('getJSON.php', function(json) {

    console.log("JSON");

    images = json;

    for (var i = 0; i < images.length; i++) {
        var imageURL = "uploads/" + images[i]["ID"] + "_thumbnail." + images[i]["type"];
        var URL = "imageView.php?ID=" + i;
        $items = $("<div class='grid-item'><a href='" + URL + "'><img src='" + imageURL + "'></a></div>");
        $grid.append($items).masonry('appended', $items);
    }

    $grid.imagesLoaded( function() {
        console.log("Aktuellisiert!");
        $grid.masonry('layout');
    });

});
*/
