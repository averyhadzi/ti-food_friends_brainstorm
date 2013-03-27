function popupRedux(){

	this.urlParams = {};
	this.apiData = {};

	this.getUrlParams();
	this.getBfApiData();
};

popupRedux.prototype.getUrlParams = function(){

	var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

	    while (match = search.exec(query))
	    	this.urlParams[decode(match[1])] = decode(match[2]);
};

popupRedux.prototype.getBfApiData = function(){
	

	var APIurl = 'http://api.theblogfrog.com/v1/sponcon/176/conversations?bodyplain=true&with=votecount&sortorder=random&orderby=random&count=50';

	$.ajax({
			type: 'GET',
			url: APIurl,
			dataType: 'jsonp',
			context: this
		})
	    .statusCode({
			200: function(jsonData){
				console.log('API request successful');
			},
			400: function(){
			    alert('Oops - bad API request.');
			},
			404: function(){
			    alert('Oops - API data not found.');
			}
	    })
	    .done(function(jsonData){
	    	// console.log('API request completed : ', jsonData);
	    	this.apiData = jsonData;
	    	
	    	this.setView();
	    	this.setController();

	    });
};

//Should be someplace else....
/*
popupRedux.prototype.setView = function() {

	var source = {};
	var template = {};

	if (this.urlParams.debug !== undefined) {
		source   = $("#popupRedux-view-template-debug").html();
		template = Handlebars.compile(source);
	} else {
		source   = $("#popupRedux-view-template").html();
		template = Handlebars.compile(source);
	};
	$("#popupRedux-view-container").append(template(this.apiData));
};
*/