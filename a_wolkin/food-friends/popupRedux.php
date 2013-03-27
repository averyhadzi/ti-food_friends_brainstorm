<!DOCTYPE html>
<html>
<head>

    <title>Popup Redux</title>

    <!-- JS Frameworks Required for View & Controller-->
    <script src="../../lib/jq/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../../lib/handlebars/handlebars.js" type="text/javascript"></script>
    
    <!-- Model : gets URL params and API data -->
    <script src="js/popupRedux-model.js" type="text/javascript"></script>

    <!-- Controller : binds model to view, controls interface functionality (including shares) -->
    <script src="js/popupRedux-controller.js" type="text/javascript"></script>

    <link type="text/css" rel="stylesheet" href="../../lib/fonts/WebSymbols/stylesheet.css">
     <link type="text/css" rel="stylesheet" href="css/hiddenvalley_popup.css">
    <link type="text/css" rel="stylesheet" href="css/hiddenvalley_popup-print.css" media="print" />

    <link type="text/css" rel="stylesheet" href="css/fonts/stylesheet.css">

    <style>
    	body{font-size:10px; font-family: Helvetica, Arial, Sans-Serif;}
    	h1{font-size:16px;}
    	label,input{font-size:11px;}
    	a{color:#000033;}
    	a:hover{color:#666;}
    	.symbol{font-family: 'WebSymbolsRegular'; font-size:24px; }
    	#testing{display:inline;}
    </style>

</head>    

<body>


<div id="popupRedux-view-container">


</div>


<script id="popupRedux-view-template" type="text/x-handlebars-template">
	
	<div class="wrapper">
		<div id="popup-header">
			<div id="profile-pic" class="column">
				<a href="{{ discussion.poster.blogurl }}" title="Click to view this blogger's profile" target="_blank">
			    	<img src="{{ discussion.poster.image }}" alt="{{ discussion.poster.name }}'s profile picture">
				</a>
			</div>
			<div class="popup-meta column">
				<a href="{{ discussion.poster.blogurl }}" target="_blank" title="{{ discussion.title }}"><h1 class="font-georgia">{{ discussion.title }}</h1></a>
				<h2>by {{ discussion.poster.name }}</h2>
				<a href="{{ discussion.poster.blogurl }}" target="_blank"><h3>{{ discussion.poster.blogtitle }}</h3></a>
			</div>
			<div id="print">
				<a class="bf-medium-action" title="Print this recipe">print this recipe</a>
			</div>
		</div>

		<div id="popup-body" class="container">
			<div id="left" class="column">
				<div class="popup-content">{{{ discussion.body }}}</div>
			</div>

			<div id="right" class="column">
			    <div id="post-img"><img src="{{ discussion.featuredimage }}" alt="Blog Post Image"></div>
			    	<div class="social_icons">
			    		<h4 class="column font-lipstick">Share this recipe!</h4>
					    <a class="bf-twitter" href="#TwitterShare" data-function="share-twitter" title="Share to Twitter">
							<div id="twitter" class="social_icon"></div>
					    </a>
					    <a class="bf-facebook" href="#FacebookShare" data-function="share-facebook" title="Share to Facebook">
							<div id="facebook" class="social_icon"></div>
					    </a>
					    <a class="bf-pinterest" href="#PinterestShare" data-function="share-pinterest" title="Pin on Pinterest">
							<div id="pinterest" class="social_icon"></div>
					    </a>
					</div>
			</div>

		</div>
</div>

</script>

<script id="popupRedux-view-template-debug" type="text/x-handlebars-template">

	<div id="popupRedux-view-template-debug-container" style="width:600px; margin:0 auto; background:#ccc; padding:25px;">

		<h1 style="text-align:center; font-size:24px">Debug</h1>

		<h2>API Data</h2>


		<h3>Meta</h3>

		<!-- meta.offset -->
		<label class="input_label" for="meta-offset">Meta Offset :</label>
		<input type="text" id="meta-offset" size="60" data-is="meta-offset" value={{ meta.offset }} />
		meta.offset
		<br />

		<!-- meta.count -->
		<label class="input_label" for="meta-count">Meta Count :</label>
		<input type="text" id="meta-count" size="60" data-is="meta-count" value={{ meta.count }} />
		meta.count
		<br />

		<!-- meta.next -->
		<label class="input_label" for="meta-next">Meta Next :</label>
		<input type="text" id="meta-next" size="60" data-is="meta-next" value={{ meta.next }} />
		meta.next
		<br />

		<!-- meta.prev -->
		<label class="input_label" for="meta-prev">Meta Prev :</label>
		<input type="text" id="meta-prev" size="60" data-is="meta-prev" value={{ meta.prev }} />
		meta.prev
		<br />


		<h3>Sponsored</h3>

		<!-- sponsored.type -->
		<label class="input_label" for="sponsored-type">Sponsored Type :</label>
		<input type="text" id="sponsored-type" size="60" data-is="sponsored-type" value={{ sponsored.type }} />
		sponsored.type
		<br />

		<!-- sponsored.id -->
		<label class="input_label" for="sponsored-id">Sponsored ID :</label>
		<input type="text" id="sponsored-id" size="60" data-is="sponsored-id" value={{ sponsored.id }} />
		sponsored.id
		<br />

		<!-- sponsored.campaign -->
		<label class="input_label" for="sponsored-campaign">Sponsored Campaign :</label>
		<textarea id="sponsored-campaign" size="60" data-is="sponsored-campaign" cols="30" rows="1" style="resize:none;">{{ sponsored.campaign }}</textarea>
		sponsored.campaign
		<br />

		<!-- sponsored.companyimage -->
		<label class="input_label" for="sponsored-companyimage">Sponsored Company Image :</label>
		<input type="text" id="sponsored-companyimage" size="60" data-is="sponsored-companyimage" value={{ sponsored.companyimage }} />
		sponsored.companyimage
		<br />

		<!-- sponsored.companyname -->
		<label class="input_label" for="sponsored-companyname">Sponsored Company Name :</label>
		<input type="text" id="sponsored-companyname" size="60" data-is="sponsored-companyname" value={{ sponsored.companyname }} />
		sponsored.companyname
		<br />

		<!-- sponsored.found -->
		<label class="input_label" for="sponsored-found">Sponsored Found :</label>
		<input type="text" id="sponsored-found" size="60" data-is="sponsored-found" value={{ sponsored.found }} />
		sponsored.found
		<br />

		<!-- sponsored.hubpageurl -->
		<label class="input_label" for="sponsored-hubpageurl">Sponsored Hubpage Url :</label>
		<input type="text" id="sponsored-hubpageurl" size="60" data-is="sponsored-hubpageurl" value={{ sponsored.hubpageurl }} />
		sponsored.hubpageurl
		<br />

		<!-- sponsored.replydisclaimer -->
		<label class="input_label" for="sponsored-replydisclaimer">Sponsored Reply Disclaimer :</label>
		<textarea id="sponsored-replydisclaimer" data-is="sponsored-replydisclaimer" cols="40" rows="10">{{ sponsored.replydisclaimer }}</textarea>
		sponsored.replydisclaimer
		<br />

		<!-- sponsored.invitation.ispublished -->
		<label class="input_label" for="sponsored-invitation-ispublished">Sponsored Invitation Is Published :</label>
		<input type="text" id="sponsored-invitation-ispublished" size="60" data-is="sponsored-invitation-ispublished" value={{ sponsored.invitation.ispublished }} />
		sponsored.invitation.ispublished
		<br />

		<!-- sponsored.invitation.ishubpage -->
		<label class="input_label" for="sponsored-invitation-ishubpage">Sponsored Invitation Is Hubpage :</label>
		<input type="text" id="sponsored-invitation-ishubpage" size="60" data-is="sponsored-invitation-ishubpage" value={{ sponsored.invitation.ishubpage }} />
		sponsored.invitation.ishubpage
		<br />

		<!-- sponsored.invitation.isscheduled -->
		<label class="input_label" for="sponsored-invitation-isscheduled">Sponsored Invitation Is Scheduled :</label>
		<input type="text" id="sponsored-invitation-isscheduled" size="60" data-is="sponsored-invitation-isscheduled" value={{ sponsored.invitation.isscheduled }} />
		sponsored.invitation.isscheduled
		<br />

		<!-- sponsored.invitation.scheduleddate -->
		<label class="input_label" for="sponsored-invitation-scheduleddate">Sponsored Invitation Scheduled Date :</label>
		<input type="text" id="sponsored-invitation-scheduleddate" size="60" data-is="sponsored-invitation-scheduleddate" value={{ sponsored.invitation.scheduleddate }} />
		sponsored.invitation.scheduleddate
		<br />


		<h3>Discussion</h3>

		<!-- discussion.type -->
		<label class="input_label" for="discussion-type">Discussion Type :</label>
		<input type="text" id="discussion-type" size="60" data-is="discussion-type" value={{ discussion.type }} />
		discussion.type
		<br />

		<!-- discussion.id -->
		<label class="input_label" for="discussion-id">Discussion ID :</label>
		<input type="text" id="discussion-id" size="60" data-is="discussion-id" value={{ discussion.id }} />
		discussion.id
		<br />

		<!-- discussion.communityid -->
		<label class="input_label" for="discussion-communityid">Discussion Community ID :</label>
		<input type="text" id="discussion-communityid" size="60" data-is="discussion-communityid" value={{ discussion.communityid }} />
		discussion.communityid
		<br />

		<!-- discussion.groupid -->
		<label class="input_label" for="discussion-groupid">Discussion Group ID :</label>
		<input type="text" id="discussion-groupid" size="60" data-is="discussion-groupid" value={{ discussion.groupid }} />
		discussion.groupid
		<br />

		<!-- discussion.lastreplyid -->
		<label class="input_label" for="discussion-lastreplyid">Discussion Last Reply ID :</label>
		<input type="text" id="discussion-lastreplyid" size="60" data-is="discussion-lastreplyid" value={{ discussion.lastreplyid }} />
		discussion.lastreplyid
		<br />

		<!-- discussion.islive -->
		<label class="input_label" for="discussion-islive">Discussion Is Live :</label>
		<input type="text" id="discussion-islive" size="60" data-is="discussion-islive" value={{ discussion.islive }} />
		discussion.islive
		<br />

		<!-- discussion.featuredimage -->
		<label class="input_label" for="discussion-featuredimage">Discussion Group ID :</label>
		<input type="text" id="discussion-featuredimage" size="60" data-is="discussion-featuredimage" value={{ discussion.featuredimage }} />
		discussion.featuredimage
		<br />

		<!-- discussion.body -->
		<label class="input_label" for="discussion-body">Discussion Body :</label>
		<textarea id="discussion-body" size="60" data-is="discussion-body" cols="50" rows="20">{{ discussion.body }}</textarea>
		discussion.body
		<br />

		<!-- discussion.posttime -->
		<label class="input_label" for="discussion-posttime">Discussion Post Time :</label>
		<input type="text" id="discussion-posttime" size="60" data-is="discussion-posttime" value={{ discussion.posttime }} />
		discussion.posttime
		<br />

		<!-- discussion.votecount -->
		<label class="input_label" for="discussion-votecount">Discussion Vote Count :</label>
		<input type="text" id="discussion-votecount" size="60" data-is="discussion-votecount" value={{ discussion.votecount }} />
		discussion.votecount
		<br />

		<br /><strong>Blogger Info (discussion.poster...)</strong><br />

		<!-- discussion.poster.type -->
		<label class="input_label" for="discussion-poster-type">Discussion Poster Type :</label>
		<input type="text" id="discussion-votecount" size="60" data-is="discussion-poster-type" value={{ discussion.poster.type }} />
		discussion.poster.type
		<br />

		<!-- discussion.poster.id -->
		<label class="input_label" for="discussion-poster-id">Discussion Poster ID :</label>
		<input type="text" id="discussion-poster-id" size="60" data-is="discussion-poster-id" value={{ discussion.poster.id }} />
		discussion.poster.id
		<br />

		<!-- discussion.poster.image -->
		<label class="input_label" for="discussion-poster-image">Discussion Poster Image :</label>
		<input type="text" id="discussion-poster-image" size="60" data-is="discussion-poster-image" value={{ discussion.poster.image }} />
		discussion.poster.image
		<br />

		<!-- discussion.poster.name -->
		<label class="input_label" for="discussion-poster-name">Discussion Poster Name :</label>
		<input type="text" id="discussion-poster-name" size="60" data-is="discussion-poster-name" value={{ discussion.poster.name }} />
		discussion.poster.name
		<br />

		<!-- discussion.poster.blogid -->
		<label class="input_label" for="discussion-poster-blogid">Discussion Poster Blog ID :</label>
		<input type="text" id="discussion-poster-blogid" size="60" data-is="discussion-poster-blogid" value={{ discussion.poster.blogid }} />
		discussion.poster.blogid
		<br />

		<!-- discussion.poster.blogtitle -->
		<label class="input_label" for="discussion-poster-blogtitle">Discussion Poster Blog Title :</label>
		<input type="text" id="discussion-poster-blogtitle" size="60" data-is="discussion-poster-blogtitle" value={{ discussion.poster.blogtitle }} />
		discussion.poster.blogtitle
		<br />

		<!-- discussion.poster.blogurl -->
		<label class="input_label" for="discussion-poster-blogurl">Discussion Poster Blog URL :</label>
		<input type="text" id="discussion-poster-blogurl" size="60" data-is="discussion-poster-blogurl" value={{ discussion.poster.blogurl }} />
		discussion.poster.blogurl
		<br />


		<h3>Replies</h3>

		<div id="replies">

			{{#replies}}
		
				<hr />

				<label class="input_label" for="reply-type-{{ id }}">Reply Type :</label>
				<input type="text" id="reply-type-{{ id }}" size="60" data-is="reply-type" value={{ type }} />
				[replies].type
				<br />

				<label class="input_label" for="reply-id-{{ id }}">Reply ID :</label>
				<input type="text" id="reply-id-{{ id }}" size="60" data-is="reply-id" value={{ id }} />
				[replies].id
				<br />

				<label class="input_label" for="reply-threadid-{{ id }}">Reply ThreadID :</label>
				<input type="text" id="reply-threadid-{{ id }}" size="60" data-is="reply-threadid" value={{ threadid }} />
				[replies].threadid
				<br />

				<label class="input_label" for="reply-body-{{ id }}">Reply Body :</label>
				<textarea id="reply-body-{{ id }}" size="60" data-is="reply-body-{{ id }}" cols="50" rows="4r">{{ body }}</textarea>
				[replies].body
				<br />

				<label class="input_label" for="reply-posttime-{{ id }}">Reply Post Time :</label>
				<input type="text" id="reply-posttime-{{ id }}" size="60" data-is="reply-posttime" value={{ posttime }} />
				[replies].posttime
				<br />

				<label class="input_label" for="reply-votecount-{{ id }}">Reply Vote Count :</label>
				<input type="text" id="reply-votecount-{{ id }}" size="60" data-is="reply-votecount" value={{ votecount }} />
				[replies].votecount
				<br />

				<br /><strong>Blogger Info (reply.poster...)</strong><br />

				<label class="input_label" for="reply-{{ id }}-type">Reply Poster Type :</label>
				<input type="text" id="reply-{{ id }}-type" size="60" data-is="reply-{{ id }}-type" value={{ poster.type }} />
				[replies].poster.type
				<br />

				<label class="input_label" for="reply-{{ id }}-id">Reply Poster ID :</label>
				<input type="text" id="reply-{{ id }}-id" size="60" data-is="reply-{{ id }}-id" value={{ poster.id }} />
				[replies].poster.id
				<br />

				<label class="input_label" for="reply-{{ id }}-image">Reply Poster Image :</label>
				<input type="text" id="reply-{{ id }}-image" size="60" data-is="reply-{{ id }}-image" value={{ poster.image }} />
				[replies].poster.image
				<br />

				<label class="input_label" for="reply-{{ id }}-name">Reply Poster name :</label>
				<input type="text" id="reply-{{ id }}-name" size="60" data-is="reply-{{ id }}-name" value={{ poster.name }} />
				[replies].poster.name
				<br />

				<label class="input_label" for="reply-{{ id }}-blogid">Reply Poster blogid :</label>
				<input type="text" id="reply-{{ id }}-blogid" size="60" data-is="reply-{{ id }}-blogid" value={{ poster.blogid }} />
				[replies].poster.blogid
				<br />

				<label class="input_label" for="reply-{{ id }}-blogtitle">Reply Poster blogtitle :</label>
				<input type="text" id="reply-{{ id }}-blogtitle" size="60" data-is="reply-{{ id }}-blogtitle" value={{ poster.blogtitle }} />
				[replies].poster.blogtitle
				<br />

				<label class="input_label" for="reply-{{ id }}-blogurl">Reply Poster blogurl :</label>
				<input type="text" id="reply-{{ id }}-blogurl" size="60" data-is="reply-{{ id }}-blogurl" value={{ poster.blogurl }} />
				[replies].poster.blogurl
				<br />
		
			{{/replies}}

		</div>

		<h2>Social Sharing</h2>
		<a class="symbol" href="#" title="" data-function="share-facebook">f</a>
		<a class="symbol" href="#" title="" data-function="share-twitter">t</a>
		<a href="#" title="" data-function="share-pinterest">Pinterest</a>

	</div>

</script>

</body>


<script type="text/javascript">

	$(function(){
		window.popupObj = new popupRedux();
	});

</script>

<script>
	
$(document).ready(function() {
	setTimeout(function(){
		  // Google Analytics
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-38163916-3', 'theblogfrog.com');
		ga('send', 'pageview');

		ga('send', 'event', 'Recipie Loaded', 'Page Load', $('#popup-header a').attr('href'));
	}, 3000);
 });

</script>
</html>