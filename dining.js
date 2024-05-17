$('.slide-nav').on('click', function(e) {
    e.preventDefault();
    // get current slide
    var current = $('.flex--active').data('slide'),
      // get button data-slide
      next = $(this).data('slide');
  
    $('.slide-nav').removeClass('active');
    $(this).addClass('active');
  
    if (current === next) {
      return false;
    } else {
      $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
      $('.flex--active').addClass('animate--end');
      setTimeout(function() {
        $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
        $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
      }, 800);
    }
  });

  const images = [
    "images/dining/shang6.jpg",
    "images/dining/shang7.jpg",
    "images/dining/shang8.jpg"
];
let currentIndexShang = 0;
const shangimg = document.getElementById("shangimg");

function changeshangimg() {
    shangimg.src = images[currentIndexShang];
    currentIndexShang = (currentIndexShang + 1) % images.length; // Move to the next image, loop back to the first if at the end
}

// Set interval to change image every 2.5 seconds 
setInterval(changeshangimg, 2500);

const imagess = [
    "images/dining/bar.jpg",
    "images/dining/bar1.jpg",
    "images/dining/bar3.jpg",
    "images/dining/bar4.jpg",
    "images/dining/bar2.jpg"
];
let currentIndexBar = 0;
const barimg = document.getElementById("barimg");

function changebarimg() {
    barimg.src = imagess[currentIndexBar];
    currentIndexBar = (currentIndexBar + 1) % imagess.length; // Move to the next image, loop back to the first if at the end
}

// Set interval to change image every 2.5 seconds 
setInterval(changebarimg, 2500);