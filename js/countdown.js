var secondsRemaining;
var intervalHandle;
let firework = document.querySelector(".firework");
let timeDiv = document.querySelector(".time-div");

function tick(){
	// grab the h1
	var minuteDisplay = document.getElementById("minutes");
	var secondDisplay = document.getElementById("seconds");

	// turn the seconds to minutes
	var min = Math.floor(secondsRemaining / 60);
	var sec = secondsRemaining - (min * 60);

	//add a leading zero (as a string value) if less than 10
	if (sec < 10) {
		sec = "0" + sec;
	}
    if(min < 10){
        min = "0" + min;
    }

	// convert minutes and hour to string
    var minutesVal = min.toString();
    
	// changing the display   
    minuteDisplay.innerText = minutesVal;
    secondDisplay.innerText = sec;
	
	// stop is down to zero
	if (secondsRemaining === 0){
		// alert("Time up!");
		timeDiv.style.display = "block"
		firework.style.display = "block";
		clearInterval(intervalHandle);
		resetPage();
	}

	//subtract from seconds remaining
	secondsRemaining--;

}

// Countdown function
function startCountdown(){
	// starting time in minutes
	var minutes = 0.1;
	

	// how many seconds
	secondsRemaining = minutes * 60;
	
	//every second, call the "tick" function
	// have to make it into a variable so that you can stop the interval later!!!
	intervalHandle = setInterval(tick, 1000);

}

// startCountdown when website load
window.onload = function(){
    startCountdown();
}

