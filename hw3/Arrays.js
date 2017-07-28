
function start(){
	var numArray = new Array(100);
	
	//Set all elements to 1
	for( var i = 0; i < numArray.length; i++){
		numArray[i] = 1;
	}
	
	//Set 1st and 2nd elements to 0
	numArray[0] = 0;
	numArray[1] = 0;
	
	for( var i = 2; i < numArray.length; i++){
		if(numArray[i] == 1){
			changeVal(numArray, i);
		}
	}

//	changeVal(numArray, 2);
//	changeVal(numArray, 3);
	
	function changeVal(numArray, i){
		for(var k = (i+i); k < numArray.length; k = k + i){
			numArray[k] = 0;
		}
	}
	
	outputArray( "Array of Primes: ", numArray, document.getElementById( "output" ) );
}
	
window.addEventListener( "load", start, false );

function outputArray( heading, theArray, output){
	var content = "<h2>" + heading + "</h2><table>" +
		"<thead><th>Index</th><th>Value</th></thead><tbody>";
	
	var length = theArray.length;
	
	for( var i = 0; i < length; ++i){
		content += "<tr><td>" + i + "</td><td>" + theArray[i] + 
			"</td></tr>";
	}
	content += "</tbody></table>";
	output.innerHTML = content;
}

window.addEventListener( "load", start, false );