
(function() {

    var $container = $('.grid');

    // Masonry + ImagesLoaded
    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.grid-item',
            columnWidth: 350
        });
    });

    // Infinite Scroll
    $container.infinitescroll({

            // selector for the paged navigation (it will be hidden)
            navSelector  : ".pagination",
            // selector for the NEXT link (to page 2)
            nextSelector : ".pagination a",
            // selector for all items you'll retrieve
            itemSelector : ".grid-item",

            // finished message
            loading: {
                finishedMsg: 'No more pages to load.'
            }
        },

        // Trigger Masonry as a callback
        function( newElements ) {
            // hide new items while they are loading
            var $newElems = $( newElements ).css({ opacity: 0 });
            // ensure that images load before adding to masonry layout
            $newElems.imagesLoaded(function(){
                // show elems now they're ready
                $newElems.animate({ opacity: 1 });
                $container.masonry( 'appended', $newElems, true );
            });

        });
})();

/*
var $grid = $('.grid').imagesLoaded( function() {
    $grid.masonry({
        itemSelector: '.grid-item',
        columnWidth: 350,
        isFitWidth: true
    });
});
*/


//---

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
