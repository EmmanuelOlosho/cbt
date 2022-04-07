function logout(){
 var name = document.getElementById('jj');
 // console.log(name.innerHTML);
 if(name.innerHTML == "()"){
   document.getElementById('logout').click();
 }
}
logout();
var btn1 = document.getElementById('slide-btn-1')
var btn2 = document.getElementById('slide-btn-2')
var next = document.getElementById('next')
var prev = document.getElementById('prev')
var slideContainer = document.getElementById('slide-container')
var sub = document.querySelectorAll('#sub');
var news = document.querySelectorAll('#news');
var current = 0;
var x = 0;
var y = 0;
function	slide1(){
var slideContainer1 = document.getElementById('slide-container1')
	if(y == 0){
		slideContainer1.className = 'slide-container1 slide-left-1 down-5'
		y = 1
	}	
	else if(y == 1) {
    slideContainer1.className = 'slide-container1 down-5'
    y = 0
	}
}
function slide(){
	if(x == 0){
		slideContainer.className = 'slide-container slide-left'
		x = 1
	}	
	else if(x == 1) {
    slideContainer.className = 'slide-container'
    x = 0
	}
}
	function init() {
	  sub[0].style.display = 'inline-block';
	}
	function start(){
		for(var i = 0; i < sub.length; i++){
			sub[i].style.display = 'none';
		}
		init();
	}
	function reset() {
		for(var i = 0; i < sub.length; i++) {
	   	sub[i].style.display = 'none';
		}
	}
	start()
	next.addEventListener('click', function(){
		if(current == 0 ){
			gotoSlide(sub.length - 1);
			return;
		}
		current--;
		gotoSlide(current);
	})
	function gotoSlide(index) {
		reset();
		sub[index].style.display = 'inline-block';
	  current = index; 
	}
	function clickBtn(){
		setTimeout(function(){
		  next.click()
		}, 3000)
		setTimeout(function(){
		  clickBtn()
		}, 3000)
	}
	// clickBtn()
	function scroller(){
	  var item = document.querySelectorAll('.scroller');
	  for(var i = 0; i < item.length; i++){
	    item[i].style.opacity = '0';
	    var toTop = window.pageYOffset + item[i].getBoundingClientRect().top
	    // console.log(toTop);
	    if(window.pageYOffset + 390 > toTop) {
	    item[i].style.animation = 'fade-in 1.1s forwards';
	    }
	    else{
	      item[i].style.animation = 'fade-out  1.1s forwards';
	    }
	  }
	}
	scroller()
	function openModal(modal){
	  document.getElementById(modal).style.display = 'block'
	}
	function closeModal(modal){
	  document.getElementById(modal).style.display = 'none'
	}

	
	function open(modal){
	  document.querySelector(modal).style.display = 'block'
	}
	
	function clickBTN(modal){
	  document.getElementById(modal).click();
	}

	// for news

	 function central(){
	  var id = document.getElementById('id');
	  if(id.innerHTML !== '1' ){
	    document.getElementById('tools').style.display = 'none';
	  }
	  else{
	    document.getElementById('tools').style.display = 'block';
	  }
	 }
	central();


