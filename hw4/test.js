var resultsPlaceholder = document.getElementById('results');
var searchWeb = "https://api.spotify.com/v1/search";

var searchArtists = function (query) {
	//document.write("Sumeet");
	$.ajax({
		url: 'https://api.spotify.com/v1/search',
		data: { 
			q: query,
			type: 'artist'
		},
		success: function (response) {
			resultsPlaceHolder.innerHTML = response;
		}
	});
};

results.addEventListener('click', function (e) {
    var target = e.target;
    if (target !== null){
	
    }
});

function start(){
	document.getElementById("submit").addEventListener("click", searchArtists, false);
}