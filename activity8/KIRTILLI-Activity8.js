var level = 1;
var score = 0;

function changeButtonPosition(){
    var btn = document.getElementById("button");
    var top = Math.random()*400;
    var left = Math.random()*600;
    btn.style.marginLeft = left + "px";
    btn.style.marginTop = top + "px";
}

function timer(){
  if(score <= 3)
    setTimeout(changeButtonPosition,500);
  else if (score > 3 && score <=6)
    setTimeout(changeButtonPosition,400);
  else if (score > 6 && score <=9)
    setTimeout(changeButtonPosition,300);
  else if (score > 9 && score <=12)
    setTimeout(changeButtonPosition,200); 
  else if (score > 12 && score <=15)
    setTimeout(changeButtonPosition,100);
  else if (score > 15)
    setTimeout(changeButtonPosition,0);
}

function calcScore(){
    score ++;
    document.getElementById("score").innerHTML = "Score: " + score;
    if(score % 3 == 0){
        level++;
        alert("New level is " + level);
        changeLevel();
    }
}

function changeLevel(){
    document.getElementById("level").innerHTML = "Level: " + level;
}