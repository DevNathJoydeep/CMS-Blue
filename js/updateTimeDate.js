$(document).ready(function(){
	
	function myTimer() {
    var d = new Date();
    var time = d.toLocaleTimeString();
    document.getElementById("time").innerHTML = time;
	var date = d.toLocaleDateString();
    document.getElementById("date").innerHTML = date;
}
	setInterval(function(){ myTimer() }, 1000);
	
});
		
		