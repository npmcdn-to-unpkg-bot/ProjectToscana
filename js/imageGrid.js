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
            var imageURL = "/uploads/" + images[imageNumber]["ID"] + "_thumbnail." + images[imageNumber]["type"];
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

