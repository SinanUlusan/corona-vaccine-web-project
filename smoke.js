var myMadal = document.querySelector("#myMadal");

var mBtn = document.querySelector("#mBtn");

var closeBtn = document.querySelector("#closeBtn");

mBtn.onclick = function(){
	myMadal.style.display = "block";
}

closeBtn.onclick = function(){
	myMadal.style.display = "none";
}

window.onclick = function(event){
	if (event.target == myMadal){
		myMadal.style.display = "none";
	}
}
