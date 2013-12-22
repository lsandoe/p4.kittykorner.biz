function doOnClick(object) {
	switchPicture("img/afterClick.png");
}

function switchPicture(imagePath) {
    document.getElementById('introImage').src = imagePath;
}

function doOnLoad(object) {
	switchPicture("img/load.png");
}


