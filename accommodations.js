//https://codepen.io/phileflanagan/pen/QgPdwz


// var gallery = document.querySelector('.gallery');
// var galleryItems = document.querySelectorAll('.gallery-item');
// var numOfItems = gallery.children.length;
// var itemWidth = 23; // percent: as set in css



// var featured = document.querySelector('.featured-item');

// var leftBtn = document.querySelector('.move-btn.left');
// var rightBtn = document.querySelector('.move-btn.right');
// var leftInterval;
// var rightInterval;

// var scrollRate = 0.2;
// var left;

// function selectItem(e) {
// 	if (e.target.classList.contains('active')) return;
	
// 	featured.style.backgroundImage = e.target.style.backgroundImage;
	
// 	for (var i = 0; i < galleryItems.length; i++) {
// 		if (galleryItems[i].classList.contains('active'))
// 			galleryItems[i].classList.remove('active');
// 	}
	
// 	e.target.classList.add('active');
// }

// function galleryWrapLeft() {
// 	var first = gallery.children[0];
// 	gallery.removeChild(first);
// 	gallery.style.left = -itemWidth + '%';
// 	gallery.appendChild(first);
// 	gallery.style.left = '0%';
// }

// function galleryWrapRight() {
// 	var last = gallery.children[gallery.children.length - 1];
// 	gallery.removeChild(last);
// 	gallery.insertBefore(last, gallery.children[0]);
// 	gallery.style.left = '-23%';
// }

// function moveLeft() {
// 	left = left || 0;

// 	leftInterval = setInterval(function() {
// 		gallery.style.left = left + '%';

// 		if (left > -itemWidth) {
// 			left -= scrollRate;
// 		} else {
// 			left = 0;
// 			galleryWrapLeft();
// 		}
// 	}, 1);
// }

// function moveRight() {
// 	//Make sure there is element to the leftd
// 	if (left > -itemWidth && left < 0) {
// 		left = left  - itemWidth;
		
// 		var last = gallery.children[gallery.children.length - 1];
// 		gallery.removeChild(last);
// 		gallery.style.left = left + '%';
// 		gallery.insertBefore(last, gallery.children[0]);	
// 	}
	
// 	left = left || 0;

// 	leftInterval = setInterval(function() {
// 		gallery.style.left = left + '%';

// 		if (left < 0) {
// 			left += scrollRate;
// 		} else {
// 			left = -itemWidth;
// 			galleryWrapRight();
// 		}
// 	}, 1);
// }

// function stopMovement() {
// 	clearInterval(leftInterval);
// 	clearInterval(rightInterval);
// }

// leftBtn.addEventListener('mouseenter', moveLeft);
// leftBtn.addEventListener('mouseleave', stopMovement);
// rightBtn.addEventListener('mouseenter', moveRight);
// rightBtn.addEventListener('mouseleave', stopMovement);


// (function init() {
// 	var images = [
// 		'images/ROOMS/presidential/cr.jpg',
//         'images/ROOMS/presidential/Dinning.jpg',
//         'images/ROOMS/presidential/Entertainment-Room.jpg',
//         'images/ROOMS/presidential/Kitchen.jpg',
//         'images/ROOMS/presidential/Living-Room.jpg',
//         'images/ROOMS/presidential/Pres-2.jpg',
//         'images/ROOMS/presidential/Pres-Room-1-BR-2.jpg',
//         'images/ROOMS/presidential/Pres-Room-1-BR-3.jpg',
//         'images/ROOMS/presidential/Pres-Room-1-BR.jpg',
//         'images/ROOMS/presidential/Pres-Room-1.jpg',
//     ];
	
// 	//Set Initial Featured Image
// 	featured.style.backgroundImage = 'url(' + images[0] + ')';
	
// 	//Set Images for Gallery and Add Event Listeners
// 	for (var i = 0; i < galleryItems.length; i++) {
// 		galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
// 		galleryItems[i].addEventListener('click', selectItem);
// 	}
// })();




///


(function() {
    function initializeGallery(galleryContainer, images) {
        var gallery = galleryContainer.querySelector('.gallery');
        var galleryItems = gallery.querySelectorAll('.gallery-item');
        var featured = galleryContainer.querySelector('.featured-item');
        var leftBtn = galleryContainer.querySelector('.move-btn.left');
        var rightBtn = galleryContainer.querySelector('.move-btn.right');
        var leftInterval;
        var rightInterval;
        var scrollRate = 0.2;
        var left = 0;

        function selectItem(e) {
            if (e.target.classList.contains('active')) return;

            featured.style.backgroundImage = e.target.style.backgroundImage;

            galleryItems.forEach(item => {
                item.classList.remove('active');
            });

            e.target.classList.add('active');
        }

        function galleryWrapLeft() {
            var first = gallery.children[0];
            gallery.removeChild(first);
            gallery.appendChild(first);
            gallery.style.left = '0%';
        }

        function galleryWrapRight() {
            var last = gallery.children[gallery.children.length - 1];
            gallery.removeChild(last);
            gallery.insertBefore(last, gallery.children[0]);
            gallery.style.left = '-23%';
        }

        function moveLeft() {
            leftInterval = setInterval(function() {
                gallery.style.left = left + '%';

                if (left > -23) {
                    left -= scrollRate;
                } else {
                    left = 0;
                    galleryWrapLeft();
                }
            }, 1);
        }

        function moveRight() {
            leftInterval = setInterval(function() {
                gallery.style.left = left + '%';

                if (left < 0) {
                    left += scrollRate;
                } else {
                    left = -23;
                    galleryWrapRight();
                }
            }, 1);
        }

        function stopMovement() {
            clearInterval(leftInterval);
            clearInterval(rightInterval);
        }

        leftBtn.addEventListener('mouseenter', moveLeft);
        leftBtn.addEventListener('mouseleave', stopMovement);
        rightBtn.addEventListener('mouseenter', moveRight);
        rightBtn.addEventListener('mouseleave', stopMovement);

        featured.style.backgroundImage = 'url(' + images[0] + ')';

        galleryItems.forEach((item, index) => {
            item.style.backgroundImage = 'url(' + images[index] + ')';
            item.addEventListener('click', selectItem);
        });
    }

    var galleries = document.querySelectorAll('.container_rooms');

    galleries.forEach((gallery, index) => {
        var images;

        if (index === 0) {
            images = [
		'images/ROOMS/presidential/Pres-Room-1.jpg',
		'images/ROOMS/presidential/Pres-Room-1-BR.jpg',
		'images/ROOMS/presidential/cr.jpg',
        'images/ROOMS/presidential/Dinning.jpg',
        'images/ROOMS/presidential/Entertainment-Room.jpg',
        'images/ROOMS/presidential/Kitchen.jpg',
        'images/ROOMS/presidential/Living-Room.jpg',
        'images/ROOMS/presidential/Pres-2.jpg',
        'images/ROOMS/presidential/Pres-Room-1-BR-2.jpg',
        'images/ROOMS/presidential/Pres-Room-1-BR-3.jpg',
            ];
        } else if (index === 1) {
            images = [
				'images/ROOMS/executive/Room-1.jpg',
				'images/ROOMS/executive/NMR1235.jpg',
				'images/ROOMS/executive/NMR1243.jpg',
				'images/ROOMS/executive/NMR1280.jpg',
            ];
		} else if (index === 2) {
            images = [
				'images/ROOMS/junior/DSCF7421.jpg',
				'images/ROOMS/junior/DSCF7422.jpg',
				'images/ROOMS/junior/Junior-Suite-2017-2.jpg',
				'images/ROOMS/junior/NMR2709.jpg',
				'images/ROOMS/junior/Room-3.jpg',
            ];
		} else if (index === 3) {
            images = [
				'images/ROOMS/deluxe/Deluxe-Single-2017-4-1-640x360.jpg',
				'images/ROOMS/deluxe/Deluxe-Single-2017-16-640x360.jpg',
				'images/ROOMS/deluxe/Deluxe-Single-2017-22-640x360.jpg',
				'images/ROOMS/deluxe/DSCF74491-640x360.jpg',
				'images/ROOMS/deluxe/DSCF74741-640x360.jpg',
				'images/ROOMS/deluxe/DSCF74781-640x360.jpg',
				'images/ROOMS/deluxe/DSCF79371-640x360.jpg',

            ];
		} else if (index === 4) {
            images = [
				'images/ROOMS/superior/Superior-Twin-2017-3-640x360.jpg',
				'images/ROOMS/superior/Superior-Twin-2017-10-640x360.jpg',
				'images/ROOMS/superior/Superior-Twin-2017-16-640x360.jpg',
				'images/ROOMS/superior/Superior-Twin-2017-19-640x360.jpg',
				'images/ROOMS/superior/Superior-Twin-2017-25-640x360.jpg',

            ];
        }
		

        initializeGallery(gallery, images);
    });
})();
