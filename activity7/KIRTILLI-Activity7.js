var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

var displayResults = function(){
	var max = 0;
	var max_index;
	var sum = 0;

    for(var i = 0; i < scores.length; i++) {
       sum += Number(scores[i]); 
	   if(max < scores[i]){
		   max = scores[i];
		   max_index = i;
	   }
    }
    var avg = sum / scores.length;

	$("results").innerHTML = "<h2>Results</h2>";
	$("results").innerHTML += "<p>Avarage Score = " + avg + "</p>";
	$("results").innerHTML += "<p>High Score = " + names[max_index] +" with a score of "+ max + "</p>";
}


var displayScores = function(){
    $("scores_table").innerHTML = "<h2>Scores</h2>";
	$("scores_table").innerHTML += "<tr><th>Name</th><th>Scores</th></tr>";

	for(var i = 0; i < names.length; i++){
       $("scores_table").innerHTML += "<tr><td>" + names[i] +"</td>" + "<td>"+ scores[i] + "</td></tr>";
	}
}

var addScore = function(){

	if($("name").value != "" &&  $("score").value >0 && $("score").value <= 100){
		names.push($("name").value);
		scores.push($("score").value);

		$("name").value = "";
		$("score").value = "";

		displayResults();
		displayScores();
	}
    else{
		alert("You must enter a name and a valid score");
	}
	$("name").focus();

}

window.onload = function () {
	$("name").focus();
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};


