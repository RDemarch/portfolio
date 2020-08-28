let carousel = document.getElementsByClassName('carouselItem');
let circleNav = document.getElementsByClassName('circle');
let items = "";
let numItem = 1;
let maxItem = 0;

for (i = 0; i < carousel.length; i++) {
  items = String("item" + i + "");
  carousel[i].classList.add(items)
  maxItem ++
}

carousel[0].classList.add('active');
for (i = 1; i < carousel.length; i++) {
  carousel[i].classList.add('nonActive');
}
circleNav[0].classList.add('active');

setInterval(function (){
  if (numItem >= maxItem) numItem = 0;
  if (numItem == 0) {
    carousel[maxItem - 1].classList.replace('active', 'goLeft');
    carousel[maxItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
    circleNav[numItem].classList.add('active');
    circleNav[maxItem - 1].classList.remove('active');
  }
  else if (numItem == 1) {
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[maxItem - 1].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
    circleNav[numItem - 1].classList.remove('active');
    circleNav[numItem].classList.add('active');
  }
  else if (numItem == maxItem) {
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[numItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[0].classList.replace('nonActive', 'active');
    circleNav[numItem - 1].classList.remove('active');
    circleNav[0].classList.add('active');
  }
  else {
    carousel[numItem - 1].classList.replace('active', 'goLeft');
    carousel[numItem - 2].classList.replace('goLeft', 'nonActive');
    carousel[numItem].classList.replace('nonActive', 'active');
    circleNav[numItem - 1].classList.remove('active');
    circleNav[numItem].classList.add('active');
  }
  numItem++
}, 7500);
