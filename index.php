<!DOCTYPE html>
<html>
<head>
	<title>phenom learning center</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="black">
</head>
<body class="bg-white noselect">
  <div class="laptop-view hidden-xs">
      <nav class="hidden-xs">
        <div class="col-10 off-2">
         <span class="time-container px13 black"><span id="hrs">3</span>h</span>
          <span class="time-container px13 black"><span id="min">60</span>m</span>
           <span class="time-container px13 black"><span id="sec">59</span>s</span>
       <div class="logo"></div>
        </div>
      </nav>
    <div class="col-2 fixed-side-nav p-fixd">
      <div class="col-10 off-1 down-50 centered">
        <div><span class="white px13 bold">Ayomide Babatunde Olosho</span></div>
        <div><span class="white px13">phenom mock 2022</span></div>
        <div class="bottom-10 mother bg-black down-30"><span class="white down-5 mother px13">Subjects</span></div>
        <div class="mother down-10">
          <a href="javascript:void(0)" class="subject active">English Language</a>
          <a href="javascript:void(0)" class="subject">Mathematics</a>
          <a href="javascript:void(0)" class="subject">General Science</a>
        </div>
        <div class="mother down-10"><span class="btn-sm-2 shadow white px13">Submit Mock</span></div>
      </div>
    </div>
<!-- ls-paper-1 -->
 <?php include 'paper1.php' ?>
 <?php include 'paper2.php' ?>
 <?php include 'paper3.php' ?>
</div>
   <!-- mobile view -->
  <div class="mobile-nav hidden-ls" id="mobile-nav">
    <div class="logo"></div>
    <div class="p-absolute xs-off-5 xs-12"><span class="white px15 bold">Phenom CBT</span></div>
    <span class="bars" onclick="navify()"><i class="fas fa-bars white px30" id="menu-icon"></i></span>
    <div class="mother bottom-20 bg-color-code-2 centered">
      <span class="off-white px13 bold xs-top-5">Ayomide Babatunde</span> <br>
      <div class="mother centered p-absolute xs-top-15"><span class="off-white ">phenom2022/0001</span></div>
    </div>
    <div class="xs-10 xs-off-1 xs-down-5vh scroller fade-in" id="anchor">
      <a href="" id="home" class="fade-in active"> p1: English Language</a>
      <a href="" class="fade-in">p2: Mathematics</a>
      <a href="" class="fade-in">p3: General Paper</a>
     <div class="mother xs-down-2vh socials centered fade-in">
      <span class="btn-sm-2 no-pad shadow bg-color-code-1 white">Submit Mock</span>
    </div>
    </div>
  </div>                                                                                                
  <div class="col-10 off-1 down-10 xs-10 xs-off-1 xs-down-30 bottom-50 hidden-ls">
  	<div class="xs-12 col-12 timer-container bbm-faded">
  		<div class="bottom-10 mother bg-color-code-1">
  			<div class="xs-10 xs-off-1 xs-down-2vh">
  				<span class="px20 bold white">Common Entrance Mock Exam 2022</span>
  			</div>
  		</div>
  		<div class="xs-10 xs-off-1 xs-down-2vh">
  			<div class="mother xs-down-1">
  				<div class="xs-8 left">
  					<span class="faded">Timer</span><br>
  					<span>0</span>H:<span>50</span>M:<span>19</span>S
  				</div>
  				<div class="xs-4">
  					<span class="faded">Attempts</span><br>
  					<span>0</span>/<span>50</span>
  				</div>
  			</div>
  		</div>
  	</div>
  <!-- xs-paper-1 -->
  	<div class="exam-container-xs">
      <div class="xs-12 timer-container xs-down-3 centered">
        <div class="xs-10 xs-off-1 xs-down-2vh">
           <span class="bottom-20" id="xs-prev"><i class="fas fa-caret-left px20"></i></span>
           <span class="faded bold xs-off-1">Paper 1: English Language</span>
           <span class="xs-off-1 bottom-20" id="xs-next"><i class="fas fa-caret-right px20"></i></span>
         </div>
      </div>
      <div class="mother xs-p1-question">
        <div class="xs-12 timer-container xs-down-3">
          <div class="xs-10 xs-off-1 xs-down-5 left">
           <div class="mother">
            <span class="left">1/50</span>
            <span class="fl-right"><i class="fas fa-file-image color-code-1"></i></span>
           </div>
            <div class="question-containe xs-down-10">
              <span class="px13 bold" id="red">What is the fraction of 10/12 ?</span>
            </div>
          </div>
        </div>
        <form>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing </span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
          <div class="mother bottom-50"></div>
         </label>
        </form>
      </div>
     <div class="float-container bg-color-code-1 hidden-ls">
        <span class="px10 white xs-pre">Prev</span>
     </div>
     <div class="float-container bg-color-code-1 push-up-10 hidden-ls">
      <span class="px10 white xs-nxt">Next</span>
     </div> 
    </div>
<!-- xs-paper-2 -->
    <div class="exam-container-xs">
        <div class="xs-12 timer-container xs-down-3 centered">
          <div class="xs-10 xs-off-1 xs-down-2vh">
            <span class="bottom-20" id="xs-prev"><i class="fas fa-caret-left px20"></i></span>
            <span class="faded bold xs-off-1">Paper 2: Mathematics</span>
            <span class="xs-off-1 bottom-20" id="xs-next"><i class="fas fa-caret-right px20"></i></span>
          </div>
        </div>
       <div class="mother xs-p2-question">
        <div class="xs-12 timer-container xs-down-3">
          <div class="xs-10 xs-off-1 xs-down-5 left">
           <div class="mother">
            <span class="left">2/50</span>
            <span class="fl-right"><i class="fas fa-file-image color-code-1"></i></span>
           </div>
            <div class="question-containe xs-down-10">
              <span class="px13 bold" id="red">What is the fraction of 10/12 ?</span>
            </div>
          </div>
        </div>
        <form>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing </span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
          <div class="mother bottom-50"></div>
         </label>
        </form>
       </div>
      <div class="float-container bg-color-code-1 hidden-ls">
          <span class="px10 white xs-pre">Prev</span>
      </div>
      <div class="float-container bg-color-code-1 push-up-10 hidden-ls">
        <span class="px10 white xs-nxt">Next</span>
      </div>
    </div>
<!-- xs-paper-3 -->
    <div class="exam-container-xs">
        <div class="xs-12 timer-container xs-down-3 centered">
          <div class="xs-10 xs-off-1 xs-down-2vh">
            <span class="bottom-20" id="xs-prev"><i class="fas fa-caret-left px20"></i></span>
            <span class="faded bold xs-off-1">Paper 3: General Science</span>
            <span class="xs-off-1 bottom-20" id="xs-next"><i class="fas fa-caret-right px20"></i></span>
          </div>
        </div>
       <div class="mother xs-p3-question">
        <div class="xs-12 timer-container xs-down-3">
          <div class="xs-10 xs-off-1 xs-down-5 left">
           <div class="mother">
            <span class="left">1/50</span>
            <span class="fl-right"><i class="fas fa-file-image color-code-1"></i></span>
           </div>
            <div class="question-containe xs-down-10">
              <span class="px13 bold" id="red">What is the fraction of 10/12 ?</span>
            </div>
          </div>
        </div>
        <form>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">Lorem ipsum dolor sit amet, consectetur adipisicing </span></div>
            </div>
          </div>
         </label>
         <label>
          <div class="mother timer-container xs-down-1">
            <div class="xs-10 xs-off-1 xs-down-2vh left">
              <div class="xs-1"><input type="radio" name="option" class="px13"></div>
              <div class="xs-10 xs-off-1 xs-down-1"><span class="faded px13">19 and 16</span></div>
            </div>
          </div>
          <div class="mother bottom-50"></div>
         </label>
        </form>
       </div>
      <div class="float-container bg-color-code-1 hidden-ls">
          <span class="px10 white xs-pre">Prev</span>
      </div>
      <div class="float-container bg-color-code-1 push-up-10 hidden-ls">
        <span class="px10 white xs-nxt">Next</span>
      </div>
    </div>
  </div>
</body>
<script src="js/script.js"></script>
</html>



<script >
 var ls_next = document.querySelectorAll('.ls-next');
 var ls_prev = document.querySelectorAll('.ls-prev');
	function navify(){
	  var nav = document.getElementById('mobile-nav');
	  var icon = document.getElementById('menu-icon');
	  var modal = document.getElementById('modal');
	  var anchor = document.getElementById('anchor');
	  if(nav.className == "mobile-nav hidden-ls"){
	    nav.className = "mobile-nav hidden-ls drop-out-nav"
	    icon.className = "fas fa-times px30 white fade-in"
	    modal.style.display = "block"  
	    anchor.style.display = "block"  
	  }else{
	    nav.className = "mobile-nav hidden-ls"
	    icon.className = "fas fa-bars white px30"
	    modal.style.display = "none" 
	    anchor.style.display = "none"  
	  }
	}
	// var red = document.getElementById('red');
	// console.log(red.innerHTML.length)

var subBtn = document.querySelectorAll('.subject');
var subBtn_xs = document.querySelectorAll('.subject_xs');
var paper = document.querySelectorAll('.exam-container');
var paper_xs = document.querySelectorAll('.exam-container-xs');
function init(){
 for(var i = 0;  i < paper.length;  i++){
   paper[i].style.display = 'none';
   paper_xs[i].style.display = 'none'
   paper[0].style.display = 'block';
   paper_xs[0].style.display = 'block';
 }
}
init()
for (var i = 0; i < subBtn.length; i++){
 subBtn[i].setAttribute('onclick', "Subject("+i+"), active("+i+")");
}
function Subject(index){
 for(var i = 0;  i < paper.length;  i++){
  current = index;
   paper[i].style.display = 'none';
   paper_xs[i].style.display = 'none';
   paper_xs[index].style.display = 'block';
   paper[index].style.display = 'block';
 }
}
function active(index) {
  for(var i = 0;  i < subBtn.length;  i++){
   subBtn[i].classList.remove("active");
   subBtn[index].classList.add('active');
  }
}


var next = document.querySelectorAll('#xs-next');
var prev = document.querySelectorAll('#xs-prev');
// var prev = document.querySelectorAll('.next');
var current = 0;

 for(var i = 0;  i < next.length;  i++){
  next[i].addEventListener('click', function(){
  if(current == next.length - 1){
   Subject(0);
   return;
  }
  current++;
   Subject(current);
  })

  prev[i].addEventListener('click', function(){
   if(current == 0 ){
     Subject(next.length- 1);
    return;
   }
   current--;
    Subject(current);
  })

 }

// for questions


 var next_btn = document.querySelectorAll('.next-btn');
 var prev_btn = document.querySelectorAll('.prev-btn');
 var questions  = document.querySelectorAll('.question');
 var cur = 0;
function hideAllQuestion() {
  for(var i = 0;  i < questions.length;  i++){
   questions[i].style.display = 'none';
  }
 questions[0].style.display = 'block';
}
hideAllQuestion()
function goToQuestion(index){
 cur = index;
 for(var i = 0;  i < questions.length;  i++){
 questions[i].style.display = 'none';
 questions[index].style.display = 'block';
 }
}
for(var i = 0;  i < questions.length;  i++){
 next_btn[i].addEventListener('click', function(){
 if(cur == questions.length - 1){
  goToQuestion(0);
  return;
  }
 cur++;
  goToQuestion(cur);
 })
  prev_btn[i].addEventListener('click', function(){
   if(cur == 0 ){
    goToQuestion(questions.length- 1);
    return;
   }
   cur--;
    goToQuestion(cur);
  })
 }


</script>

<!-- 151 -->
<!-- if .innerHTML.length >= 209 change cass to question container or xs-down-5 mother -->