var $grid = $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 350
});


var images;

var $items = "";

$.getJSON('getJSON.php', function(json) {

    console.log("JSON");

    images = json;

    for (var i = 0; i < images.length; i++) {
        var imageURL = "uploads/" + images[i]["ID"] + "_thumbnail." + images[i]["type"];
        var URL = "imageView.php?ID=" + i;
        $items += "<div class='grid-item'><a href='" + URL + "'><img src='" + imageURL + "'></a></div>";
        console.log($items);
    }


    $grid.append( $items).masonry( 'appended', $items );
    $grid.imagesLoaded( function() {
        console.log("Append");
    });



});


/*


var $grid = $('.grid');


var addImageCount = 20;

var images;
var imageCount = 0;
var imageNumber = 0;

var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

$.getJSON('getJSON.php', function(json) {
    //console.log(json[0]["imageURL"]);
    //console.log(json.length);

    images = json;

    for (; imageNumber < imageCount+addImageCount; imageNumber++) {
        if (images[imageCount]["ID"] != null) {
            console.log(imageCount);
            var imageURL = "uploads/" + images[imageNumber]["ID"] + "_thumbnail." + images[imageNumber]["type"];
            var URL = "imageView.php?ID=" + imageNumber;
            $grid.append("<div class='grid-item'><a href='" + URL + "'><img src='" + imageURL + "'></a></div>");
        }
    }

    imageCount = imageCount + addImageCount;


});



$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() == $(document).height()) {

        for (; imageNumber < imageCount+addImageCount; imageNumber++) {
            if (imageCount < images.length) {
                var imageURL = images[imageCount]["imageURL"];
                $grid.append("<div class='grid-item'><a href='" + URL +"'><img src='" + imageURL + "'></a></div>");
            }

        }

        imageCount = imageCount + addImageCount;
    }
});

*/

