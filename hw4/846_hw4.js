var resultsPlaceholder = document.getElementById('results');
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

document.getElementById('search-form').addEventListener('submit', function (e) {
    e.preventDefault();
	//document.write("Sumeet");
    searchArtists(document.getElementById('query').value);
}, false);