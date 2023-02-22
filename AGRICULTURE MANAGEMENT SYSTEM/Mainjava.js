var images =["img/pic.jpg",
            "img/crop1.jpg",
            "img/crop2.jpg",  ];

var i=0;
function slides(){
    document.getElementById("slideimage").src=images[i];
    if(i<(images.length-1))
        i++;
        else
        i=0;
}
setInterval(slides,2000)