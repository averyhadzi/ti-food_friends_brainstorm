popupRedux.prototype.setController = function(){

	var _popupRedux = this;

    // DOM Ready
    $(function() {

	// console.log("DOM ready");
	//checkForReturnString();



	// SOCIAL BUTTONS

	$('[data-function="share-twitter"], [data-function="share-facebook"], [data-function="share-pinterest"]').click(function (e) {
	    //var id = '<%# CurrentConversation.Data.PosterBlogID %>';

	    var id = _popupRedux.apiData.discussion.poster.blogid;
	    var blogTitle = _popupRedux.apiData.discussion.poster.blogtitle;
	    var blogPostTitle = _popupRedux.apiData.discussion.title;
	    var blogPostImage = _popupRedux.apiData.discussion.featuredimage;

	    var target = $(e.currentTarget);
	    var shareUrl = 'http://theblogfrog.com/jump.aspx?inviteid='+_popupRedux.urlParams.inviteid;
	    var ev = '';

	    if (target.attr('data-function') === 'share-twitter') {
		shareUrl = 'http://twitter.com/share?text=' + escape("Check out this great Hidden Valley Ranch recipe! ") + escape(blogPostTitle) + escape(" #RanchRemix") + '&url=' + escape(shareUrl);
		ev = 'share-twitter';
	    }

	    else if (target.attr('data-function') === 'share-facebook') {
		shareUrl = 'http://facebook.com/share.php?u=' + escape(shareUrl) + '&t=' + escape(blogPostTitle);
		ev = 'share-facebook';
	    }

	    else if (target.attr('data-function') === 'share-pinterest'){
		 var title = escape("Check out this great Hidden Valley Ranch recipe! ") + escape(blogPostTitle) + ' - ' + escape(blogTitle) + escape(" #RanchRemix");
		 shareUrl = 'http://pinterest.com/pin/create/bookmarklet/?media=' + escape(blogPostImage) + '&url=' + escape(shareUrl) + '&alt=alt&title=' + title + '&is_video=false&description=' + title;
		 ev = 'share-pinterest';
	    };

	    window.open(shareUrl, '_blank');
	    e.preventDefault();
	});

    });
};

//Should be in controller
popupRedux.prototype.setView = function() {

	var source = {};
	var template = {};

	if (this.urlParams.debug !== undefined) {
		source   = $("#popupRedux-view-template-debug").html();
		template = Handlebars.compile(source);
	} else {
		source   = $("#blogpost-item-template").html();
		template = Handlebars.compile(source);
	};

	$("#popupRedux-view-container").append(template(this.apiData));
};