let carousel = document.getElementsByClassName('carouselItem');
let imgBg = [];
let itmCarousel = 4;
let items = "";
let numItem = 1;
let maxItem = 0;

for (i = 0; i < carousel.length; i++) {
  items = String("item" + i + "");
  carousel[i].classList.add(items)
  maxItem ++
}

setInterval(function (){
  if (numItem >= maxItem) numItem = 0;
  if (numItem == 0) {
    carousel[maxItem - 1].classList.replace('active', 'goLeft');
    carousel[maxItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
  }
  else if (numItem == 1) {
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[maxItem - 1].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
  }
  else if (numItem == maxItem) {
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[numItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[0].classList.replace('nonActive', 'active');
  }
  else {
    console.log('bite');
    console.log(numItem);
    console.log(carousel.length);
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[numItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
  }
  numItem++
}, 7500);
