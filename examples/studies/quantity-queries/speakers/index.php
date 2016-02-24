<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Speakers</title>
	<link rel="stylesheet" href="css.css">
<style>
html {
	font: 100%/1.5 helvetica;
}
h2 {
	color: red;
	margin: 0;
}
ul {
	margin: 0;
	padding: 0;
}
input {
	position: absolute;
	left: -20em;
}
div {
	position: relative;
}
img {
	width: 100%;
	max-width: 225px;
	height: auto;
}
.speaker-details {
	display: inline-block;
}
.speaker-bio,
.speaker-details-row + .speaker-details-row {
	display: none;
}
#female:checked ~ [data-female="nope"] {
	display: none;
}
div:target .speaker-bio,
div.open .speaker-bio,
#female:checked ~ [data-female="yep"] .speaker-bio {
	display: block;
}

.all-speakers {
	display: flex;
	flex-wrap: wrap;
}
.all-speakers > div {
	flex-basis: 20em;
	margin: 0 0 2em;
}
</style>
</head>
<body>
<nav>
	<label for="everybody">everybody</label>
	<label for="female">female</label>
	<label for="male">male</label>
	<label for="single">single</label>
	<label for="duo">duo</label>
	<label for="nerd">hosts</label>
	<label for="artist">speakers</label>
</nav>
<div class="all-speakers">
<input type="radio" name="filter" id="female">
<input type="radio" name="filter" id="everybody">
<input type="radio" name="filter" id="male">
<input type="radio" name="filter" id="single">
<input type="radio" name="filter" id="duo">
<input type="radio" name="filter" id="nerd">
<input type="radio" name="filter" id="artist">
 <div class="speaker-details" data-female="nope" id="dan-rubin">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/dan-rubin-225x225.jpg" class="attachment-thumbnail" alt="Dan Rubin – Photo: Chris Davis/specularworld.com" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Dan Rubin <small> – Host</small></h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/danrubin" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/danrubin', '@danrubin']);" target="_blank" title="Open Twitter profile of Dan Rubin in a new window">@danrubin</a> – 
			
			Designer, Photographer, Creative Director
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Dan is a designer, photographer, and creative director based in London. Co-founder of&nbsp;The&nbsp;Photographic Journal and webgraph, a design studio, he helps startups and established brands solve design problems and travels the globe on photographic commissions for Barbour, Ducati, O2, RedBull,&nbsp;Starwood Hotels,&nbsp;Williams Martini, and more.</span></p>
</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="stephen-hay">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/stephen-hay-225x225.jpg" class="attachment-thumbnail" alt="Stephen Hay" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Stephen Hay <small> – Host</small></h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/stephenhay" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/stephenhay', '@stephenhay']);" target="_blank" title="Open Twitter profile of Stephen Hay in a new window">@stephenhay</a> – 
			
			Designer, Consultant, Author
					</ul>

			<div class="speaker-bio"><p>Californian by birth and Dutchman by choice, Stephen is a designer, consultant and author of Responsive Design Workflow (New Riders, 2013) and contributing author to Smashing Book #3. He is a frequent speaker at industry events and has written for A List Apart and other industry publications, including his popular-but-sparingly-updated blog The Haystack. While spending an increasing amount of time leading workshops, writing, and speaking, Stephen still spends the majority of his time working with clients large and small through his consultancy, Zero Interface.</p>
</div>
		</div>
	</div>
	
</div> 
		
<div class="speaker-details" data-female="nope" id="charles-mccathie-nevile">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/chaals-mccathie-nevile-225x225.jpg" class="attachment-thumbnail" alt="Charles McCathie Nevile" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Charles McCathie Nevile</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/chaals" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/chaals', '@chaals']);" target="_blank" title="Open Twitter profile of Charles McCathie Nevile in a new window">@chaals</a> – 
			
			CTO group, Yandex
					</ul>

			<div class="speaker-bio"><p>Chaals McCathie Nevile has over 30 years of professional experience with hypertext systems, for the last two decades focused on the web. He currently works in the CTO group of russian internet giant Yandex, primarily focused on web standards and accessibility.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">13:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">SVG Accessibility</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">SVG has been around since the late 1990s. In the second half of the noughties it was implemented in browsers natively (before that it was widespread on mobile platforms). In 2001, W3C published a&nbsp;<a href="http://w3.org/tr/svg-access" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://w3.org/tr/svg-access', 'guide to ways SVG&nbsp;could&nbsp;be accessible']);"><span class="s2">guide to ways SVG&nbsp;<i>could</i>&nbsp;be accessible</span></a>. This presentation will look at the (sorry) state of the art today, and the path before us if we want to take advantage of SVG to really improve accessibility:</span></p>

<ul class="ul1">
	<li class="li1"><span class="s1">What have we learned since 2001?</span></li>
	<li class="li1"><span class="s1">What SVG can I use at work?</span></li>
	<li class="li1"><span class="s1">What's coming up?</span></li>
</ul></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="david-condrau">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/07/David-Condrau-225x225.jpg" class="attachment-thumbnail" alt="David Condrau" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">David Condrau</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/dcondrau" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/dcondrau', '@dcondrau']);" target="_blank" title="Open Twitter profile of David Condrau in a new window">@dcondrau</a> – 
			
			Mobile Engineer
					</ul>

			<div class="speaker-bio"><p>David has been designing and developing native mobile apps for the past 6 years with his Zurich based company <a href="http://appart15.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://appart15.com/', 'AppArt15']);">AppArt15</a>. He co-started the Cocoaheads Zurich monthly meeting of Mac &amp; iOS developers about 5 years ago. There the local developers meet and share their work.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">11:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Mobile UX Prototyping Toolchain With Sketch + Framer.js</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;Prototyping tools have come a long way in the last 2 years and we should adapt our processes to take full advantage of them. In the future prototyping will be even more important. The more diverse mobile devices are, the more time should be invested in prototyping. Prototyping is the fastest and most efficient way to test, iterate and even future proof your app's interface. To that end, one should start using real live data via an api adapter and also experiment with currently non-existent sizes and aspect ratios. In the future we will see tooling that converts our prototype interfaces to real interfaces, so that our developers will work less on the interfaces and more on the logic of your native app. There are already some advances in that regard, which I will mention.&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">Prototyping tools have come a long way in the last 2 years and we should adapt our processes to take full advantage of them. In the future prototyping will be even more important. The more diverse mobile devices are, the more time should be invested in prototyping. Prototyping is the fastest and most efficient way to test, iterate and even future proof your app's interface. To that end, one should start using real live data via an api adapter and also experiment with currently non-existent sizes and aspect ratios. In the future we will see tooling that converts our prototype interfaces to real interfaces, so that our developers will work less on the interfaces and more on the logic of your native app. There are already some advances in that regard, which I will mention.</span></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="edward-oriordan">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/07/Edward-O-Riordan-225x225.jpg" class="attachment-thumbnail" alt="Edward O’Riordan" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Edward O’Riordan</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/edwardoriordan" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/edwardoriordan', '@edwardoriordan']);" target="_blank" title="Open Twitter profile of Edward O’Riordan in a new window">@edwardoriordan</a> – 
			
			Senior UX Designer
			
				– <a href="http://edwardoriordan.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://edwardoriordan.com/', 'http://edwardoriordan.com/']);" target="_blank" title="Open Edward O’Riordan's website in a new window">edwardoriordan.com/</a> 
					</ul>

			<div class="speaker-bio"><p class="p1">Edward is a designer from Ireland living and working in lovely Amsterdam. He currently works as a Senior UX Designer at <a href="http://booking.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://booking.com', 'Booking']);">Booking</a>.com, the world’s leading provider of accommodation online, helping millions of people from all over the world find great places to stay.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">11:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">A year designing with data</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;Data and design are often seen as incompatible. Design is empathic, emotive, and artful. It is a craft that can not be fully rationalised, reduced to numbers, or planned in advance. Data, on the other hand, is rational and objective. It is a scientific endeavour that proceeds in a formulaic way toward certainty.nnHaving worked this last year designing with data, I have come to see these ways of thinking as deeply naive. This talk shares my journey in coming to see data as a tool that deepensu2014rather than diminishesu2014the fundamentally human nature of design.&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">Data and design are often seen as incompatible. Design is empathic, emotive, and artful. It is a craft that can not be fully rationalised, reduced to numbers, or planned in advance. Data, on the other hand, is rational and objective. It is a scientific endeavour that proceeds in a formulaic way toward certainty.</span>

Having worked this last year designing with data, I have come to see these ways of thinking as deeply naive. This talk shares my journey in coming to see data as a tool that deepens—rather than diminishes—the fundamentally human nature of design.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="eric-m-suzanne">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Eric-M-Suzanne-225x225.jpg" class="attachment-thumbnail" alt="Eric M. Suzanne" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Eric M. Suzanne</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/ericmsuzanne" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/ericmsuzanne', '@ericmsuzanne']);" target="_blank" title="Open Twitter profile of Eric M. Suzanne in a new window">@ericmsuzanne</a> – 
			
			Cross-Media Artist
			
				– <a href="http://www.ericsuzanne.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ericsuzanne.com/', 'http://www.ericsuzanne.com/']);" target="_blank" title="Open Eric M. Suzanne's website in a new window">www.ericsuzanne.com/</a> 
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Eric M Suzanne&nbsp;is a cross-media artist — developing web applications with&nbsp;<a href="http://oddbird.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://oddbird.net/', 'OddBird']);"><span class="s2">OddBird</span></a>, soundscapes with&nbsp;<a href="http://teacupgorilla.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://teacupgorilla.com/', 'Teacup Gorilla']);"><span class="s2">Teacup Gorilla</span></a>, wordscapes with [WriteyWrite], and performances with&nbsp;<a href="http://vicioustrap.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://vicioustrap.com/', 'Vicious Trap']);"><span class="s2">Vicious Trap</span></a>&nbsp;or the&nbsp;<a href="http://www.denverpoetstheatre.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.denverpoetstheatre.com/', 'Denver Poets’ Theatre']);"><span class="s2">Denver Poets’ Theatre</span></a>. Eric is the author of&nbsp;<a href="http://ridingsidesaddle.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ridingsidesaddle.net/', 'Riding SideSaddle*']);"><span class="s2">Riding SideSaddle*</span></a>&nbsp;(SpringGun Press, 2015) and&nbsp;<a href="http://andmeyer.dev:5000/post-obsolete/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://andmeyer.dev:5000/post-obsolete/', 'The Post-Obsolete Book']);"><span class="s2">The Post-Obsolete Book</span></a>&nbsp;—&nbsp;an avid open-source contributor, co-organizer of&nbsp;<a href="http://www.meetup.com/Sass-Hack-Denver/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.meetup.com/Sass-Hack-Denver/', 'SassHack Denver']);"><span class="s2">SassHack Denver</span></a>, core developer on&nbsp;<a href="http://compass-style.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://compass-style.org/', 'Compass']);"><span class="s2">Compass</span></a>, and creator of&nbsp;<a href="http://susy.oddbird.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://susy.oddbird.net/', 'Susy']);"><span class="s2">Susy</span></a>&nbsp;and&nbsp;<a href="http://andmeyer.dev:5000/true/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://andmeyer.dev:5000/true/', 'True']);"><span class="s2">True</span></a>.</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">10:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Sassy Toolkits</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">The web is littered with opinionated CSS frameworks that can rapidly back you into a corner. Now pre-processors like Sass have opened the door for more flexible toolkits, and a thriving open-source community. You don't need 3 million followers and your own clearfix to contribute — just a willingness to participate and learn. Together, we can build more flexible and powerful toolkits that respect our unique styles and constraints!</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="eric-muntz">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/eric_m-225x225.jpg" class="attachment-thumbnail" alt="Eric Muntz" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Eric Muntz</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/muntzen" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/muntzen', '@muntzen']);" target="_blank" title="Open Twitter profile of Eric Muntz in a new window">@muntzen</a> – 
			
			VP of Product at MailChimp
					</ul>

			<div class="speaker-bio"><p>Eric Muntz is the VP of Product at <a href="http://mailchimp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mailchimp.com/', 'MailChimp']);">MailChimp</a>. He has developed software for 16 years including embedded, desktop, mobile and web software products. &nbsp;He believes in creating easily extensible, reusable and robust software regardless of the development platform and focusing on the needs of the product’s users. &nbsp;In his spare time he enjoys family time with his wife and two young children and tweeting about baseball. &nbsp;Eric earned a degree in Applied Mathematics from Auburn University in 1999 and currently resides in Atlanta, GA, USA.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">11:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Simple processes to ensure users trust your applications</h3>
			<div class="talk-abstract">Users fundamentally need to trust applications. Accurate and performant applications that continually iterate and move forward keep users happy and stimulate growth. I’ll talk through minimal best practices for adding structure to products that will maintain users trust.

I’ll peel back the curtain and show examples we put in place at MailChimp over the last five years while growing from a few hundred thousand to more than 8 million active users, yet staying lean and nimble.

Attendees will take home simple actions to put in place or adapt to their own environments to maintain user’s trust while sustaining growth.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="erik-runyon">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Erik-Runyon-225x225.jpg" class="attachment-thumbnail" alt="Erik Runyon" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Erik Runyon</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/erunyon" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/erunyon', '@erunyon']);" target="_blank" title="Open Twitter profile of Erik Runyon in a new window">@erunyon</a> – 
			
			Technical Director, Frontend Developer
			
				– <a href="http://erikrunyon.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://erikrunyon.com/', 'http://erikrunyon.com/']);" target="_blank" title="Open Erik Runyon's website in a new window">erikrunyon.com/</a> 
					</ul>

			<div class="speaker-bio"><p>Erik Runyon, Technical Director for <a href="http://marcomm.nd.edu/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://marcomm.nd.edu/', 'Marketing Communications']);">Marketing Communications</a> at the University of Notre Dame, has been developing websites for fun and profit since 1995, and joined the university in 2007. Erik enjoys chatting and writing about web performance, accessibility, mobile support, and RWD.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">15:30</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Taking the Web Offline</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;The web has advanced greatly since the days of the browser cookie. We now have much more robust ways of saving data to a client device, including saving an entire site for offline use. We will look at a brief history of offline storage, but spend the majority of the time on how to use technologies available today to not only store data locally, but also how to create an app-like experience for those times when it's necessary.&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">The web has advanced greatly since the days of the browser cookie. We now have much more robust ways of saving data to a client device, including saving an entire site for offline use. We will look at a brief history of offline storage, but spend the majority of the time on how to use technologies available today to not only store data locally, but also how to create an app-like experience for those times when it's necessary.</span></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="felix-palmer">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Felix-Palmer-225x225.jpg" class="attachment-thumbnail" alt="Felix Palmer" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Felix Palmer</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/pheeeelicks" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/pheeeelicks', '@pheeeelicks']);" target="_blank" title="Open Twitter profile of Felix Palmer in a new window">@pheeeelicks</a> – 
			
			Developer
					</ul>

			<div class="speaker-bio"><p>Coming from a physics background, Felix got into software by writing games in Flash. Since then he has spent time working in London and Silicon Valley, working with a wide range of technologies, from mobile to cloud, server to web. He enjoys combining the visual with the technical and is excited about the opportunities WebGL brings. He is the creator of <a href="http://www.piste.io" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.piste.io', 'www.piste.io']);">www.piste.io</a>. Currently he lives in Prague, spending his time building things with WebGL, speaking at conferences, and writing on <a href="http://www.pheelicks.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.pheelicks.com', 'www.pheelicks.com']);">www.pheelicks.com</a>.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">11:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">How to build Photoshop - WebGL not just for 3D</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;WebGL is normally associated with 3D graphics, which can seem daunting without a background in this field. However, the WebGL API is inherently 2D, merely supplying a very useful toolbox of functionality for creating 3D engines. In this talk, we'll explore how WebGL can be used to manipulate 2D graphics, by creating a simple image editing application. Through live-coding we'll see that working with WebGL isn't all that complicated and a lot can be achieved without having to reach for higher level frameworks. We'll explore how hardware accelerated image effects like color changes, deformations or blurs can be implemented in a few lines of code.n&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">WebGL is normally associated with 3D graphics, which can seem daunting without a background in this field. However, the WebGL API is inherently 2D, merely supplying a very useful toolbox of functionality for creating 3D engines. In this talk, we'll explore how WebGL can be used to manipulate 2D graphics, by creating a simple image editing application. Through live-coding we'll see that working with WebGL isn't all that complicated and a lot can be achieved without having to reach for higher level frameworks. We'll explore how hardware accelerated image effects like color changes, deformations or blurs can be implemented in a few lines of code.
</span></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="flurin-adrian-egger">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/flurin-adrian-egger-225x225.jpg" class="attachment-thumbnail" alt="Flurin &amp; Adrian Egger" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Flurin &amp; Adrian Egger</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/flurin" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/flurin', '@flurin']);" target="_blank" title="Open Twitter profile of Flurin &amp; Adrian Egger in a new window">@flurin</a> – 
			
			Front-End Developer &amp; Designer
					</ul>

			<div class="speaker-bio"><p><strong>Flurin Egger – </strong>Flurin is a front-end developer who started tinkering on the web back when it still made that funny noise when you connected. He has been co-managing Digitpaint since 2000, and has had the pleasure of working on large scale websites, intranets and applications for a multitude of clients. Flurin is an advocate of open source and loves hackathon projects. He lives with his wife and son in The Netherlands, where he enjoys the finer things in life — such as taste-testing strange Japanese candies.</p>
<p><strong>Adrian Egger – </strong>Adrian is a designer who started out as an advertising art director in Zurich, London and Los Angeles. After that got boring, he started freelancing. He’s now designing under his own name in The Netherlands, working on exciting web projects. Adrian designs as much as possible directly in the browser. And when he’s not designing, reading, or walking the dog, he works as a documentary photographer on humanitarian topics.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">13:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Clear cache &amp; refresh</h3>
			<div class="talk-abstract">It's 2015, yet many of us (both designers and web-developers) are still sticking to a process that hasn’t changed since back when we were slicing PSD's in the nineties (remember that?). We are still making pretty pictures of websites before we make the actual websites. In doing so we lose a lot of ideas, expertise, and momentum. Let’s change that.

We are two brothers who sit on different sides of the same industry. Adrian is a designer, and Flurin is a front-end developer. In this talk we’ll explore designing with HTML, CSS, and JavaScript right in your browser. We’ll explain why we think you should — and why your clients, your front-end developer colleagues, your fellow designers, and even your pets will love you for it.
Of course it's not all unicorns and rainbows; but we hope to get you started nonetheless.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="hugo-giraudel">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/hugo-giraudel-225x225.jpg" class="attachment-thumbnail" alt="Hugo Giraudel" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Hugo Giraudel</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/hugogiraudel" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/hugogiraudel', '@hugogiraudel']);" target="_blank" title="Open Twitter profile of Hugo Giraudel in a new window">@hugogiraudel</a> – 
			
			CSS Goblin and Sass Hacker
					</ul>

			<div class="speaker-bio"><p>Hugo is&nbsp;a 23 year old French front-end developer based in Berlin, focused on CSS and Sass. He’s&nbsp;the author of many open-source community projects, such as <a href="http://sass-guidelin.es/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sass-guidelin.es/', 'Sass Guidelines']);" rel="noreferrer">Sass Guidelines</a>, <a href="http://sassdoc.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sassdoc.com/', 'SassDoc']);" rel="noreferrer">SassDoc</a>, <a href="http://sass-compatibility.github.io/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sass-compatibility.github.io/', 'Sass Compatibility']);" rel="noreferrer">Sass Compatibility</a> and <a href="http://browserhacks.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://browserhacks.com/', 'Browserhacks']);" rel="noreferrer">Browserhacks</a>.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">16:30</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">3 years of purging Sass</h3>
			<div class="talk-abstract">Writing Sass is easy. Well, kind of. In fact, the average quality of open-sourced Sass code is quite low. I care. That's why I have been contributing to dozen of repositories and projects over the last 3 years to level up the Sass game on GitHub.

This talk is a summary of all the common mistakes, poor practices and bad design patterns I have met along the journey. Hopefully, you will have a deeper understanding of the language after this presentation, able to avoid the usual pitfalls from writing Sass code.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="jonathan-snook">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Jonathan-Snook-225x225.jpg" class="attachment-thumbnail" alt="Jonathan Snook" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Jonathan Snook</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/snookca" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/snookca', '@snookca']);" target="_blank" title="Open Twitter profile of Jonathan Snook in a new window">@snookca</a> – 
			
			Developer
			
				– <a href="http://snook.ca/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://snook.ca/', 'http://snook.ca/']);" target="_blank" title="Open Jonathan Snook's website in a new window">snook.ca/</a> 
					</ul>

			<div class="speaker-bio"><p>Jonathan Snook is a designer and developer from Ottawa, Canada. He writes about tips, tricks, and bookmarks on web development at <a href="http://snook.ca/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://snook.ca/', 'Snook.ca']);">Snook.ca</a> and self-published the acclaimed book, Scalable and Modular Architecture for CSS.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">15:30</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Modular CSS: Breaking it down and building it back up</h3>
			<div class="talk-abstract">In the last few years, we’ve seen an emergence of a modular way of thinking about code and design. We’ve seen the rise of SMACSS, BEM, and Atomic Design. This talk will look at those modular concepts and how they can streamline development for large and long-running projects. We’ll also look at how these approaches can ease responsive design and development. Lastly, we will look at where the modular approach is going in the future as Web Components slowly make their way into browsers and application frameworks.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="kevin-m-hoffman">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/kevin-m-hoffman-225x225.jpg" class="attachment-thumbnail" alt="Kevin M. Hoffman" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Kevin M. Hoffman</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/kevinmhoffman" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/kevinmhoffman', '@kevinmhoffman']);" target="_blank" title="Open Twitter profile of Kevin M. Hoffman in a new window">@kevinmhoffman</a> – 
			
			Information Architect, Design Strategist
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Kevin M. Hoffman is an information architect and design strategist that has been building web stuff since 1995. He’s the author of the forthcoming Rosenfeld Media book, “<a href="http://rosenfeldmedia.com/books/meeting-design/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rosenfeldmedia.com/books/meeting-design/', 'Meeting Design']);">Meeting Design</a>”. He founded the distributed design network <a href="http://www.sevenheadsdesign.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.sevenheadsdesign.com/', 'Seven Heads Design']);">Seven Heads Design</a>, a network of highly experienced digital design thinkers who operate independently, but love working together. Formerly he served as Experience Director for the Jeffrey Zeldman’s award-winning web design agency Happy Cog. &nbsp;</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">16:30</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Responsive Reorganization: Better Collaboration Through Responsible Web Design</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">Responsive design has been around for a few years now, and no doubt—it’s totally awesome! It has fundamentally changed web careers, but it exposes some ugly truths about design processes and how people collaborate within organizations. Providing access to content and services across multiple screen sizes forces conversations that fracture traditional ideas about how things are built, and who should build them. Enter new models for collaboration around making decisions to support good responsive design. Some of the most successful responsive design efforts have changed the way organizations work together. Let’s boil down what we’ve learned so far into what works well that can be easily applied in any company, and a few pitfalls to avoid.</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="yep" id="laura-kalbag">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/laura-kalbag-225x225.jpg" class="attachment-thumbnail" alt="Laura Kalbag" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Laura Kalbag</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/laurakalbag" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/laurakalbag', '@laurakalbag']);" target="_blank" title="Open Twitter profile of Laura Kalbag in a new window">@laurakalbag</a> – 
			
			Designer
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1"><a href="https://laurakalbag.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://laurakalbag.com', 'Laura Kalbag']);">Laura Kalbag</a>&nbsp;is a designer with a thing for the web. She works at <a href="http://ind.ie/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ind.ie/', 'Ind.ie']);"><span class="s2">Ind.ie</span></a>, creating design-led, free and open alternatives to technologies that are funded through the exploitation of users’ data. She tends to harp on about accessibility, web development, design theory, web fonts, responsiveness and walks with her big fluffy dog, Oskar.</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">10:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Ethical Design</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">The web today is filled with products and services that gather and&nbsp;exploit users’ data, ignoring our privacy and personal safety. We need to create sustainable alternatives that can compete against these (mostly) free products. While it might be easier for us to make money from users’&nbsp;data, we must be more ethical in order to create genuine alternatives.</span></p>
<p class="p1"><span class="s1">Considerate design and user experience will help us make alternatives to the current mainstream&nbsp;tech. We don’t want our alternatives to only be available to a geek elite. Accessibility and diversity&nbsp;will make us design better solutions, and aid new technology in spreading beyond the geeks.</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="yep" id="leonie-watson">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/leonie-watson-225x225.jpg" class="attachment-thumbnail" alt="Léonie Watson" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Léonie Watson</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/leoniewatson" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/leoniewatson', '@leoniewatson']);" target="_blank" title="Open Twitter profile of Léonie Watson in a new window">@leoniewatson</a> – 
			
			Senior Accessibility Engineer
			
				– <a href="http://ljwatson.co.uk/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ljwatson.co.uk/', 'http://ljwatson.co.uk/']);" target="_blank" title="Open Léonie Watson's website in a new window">ljwatson.co.uk/</a> 
					</ul>

			<div class="speaker-bio"><p>Léonie Watson began using the internet in 1993, turned it into a web design
career in 1997, and (despite losing her eyesight along the way) has been
enjoying herself thoroughly ever since.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">10:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Accessibility mechanics, APIs and ARIA</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">Understanding accessibility mechanics is a critical thing for developers working on the web platform. Find out how to use ARIA to manipulate the browser's accessibility tree, why accessibility APIs are important, and how to use the Vibration API and Web Speech API for progressive enhancement.</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="martin-gontovnikas">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Martin-Gontovnikas-225x225.jpg" class="attachment-thumbnail" alt="Martin Gontovnikas" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Martin Gontovnikas</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/mgonto" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/mgonto', '@mgonto']);" target="_blank" title="Open Twitter profile of Martin Gontovnikas in a new window">@mgonto</a> – 
			
			Developer Advocate
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Gonto is a tech nerd that works as a Developer Advocate at Auth0. He &lt;3 OSS, JS, meat and a good beer in that order. He has built <a href="https://github.com/mgonto/restangular" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/mgonto/restangular', 'Restangular']);">Restangular</a>, <a href="https://github.com/mgonto/factory_pal" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/mgonto/factory_pal', 'factory_pal']);">factory_pal</a>, <a href="https://github.com/auth0/angular-jwt" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/auth0/angular-jwt', 'angular-jwt']);">angular-jwt</a> and many other OSS projects!</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">10:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Rethinking backend with webtasks</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;You are writing a mobile or HTML5 web application that needs just a little bit of a backend. Maybe you want to access MongoDB, send an SMS, or an e-mail. Do you really need to host your own Node.js service to run this small snippet of backend logic? In this talk I will take a hard look at the role of the backend in modern applications. I will introduce the concept of a webtask - a lightweight representation of backend logic that can safely be embedded in a client application. I will show how you can use modern container technologies based on CoreOS and Docker to build a generic runtime for securely executing web tasks directly from a mobile or HTML5 application. You donu2019t need a backend to run backend code. &quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">You are writing a mobile or HTML5 web application that needs just a little bit of a backend. Maybe you want to access MongoDB, send an SMS, or an e-mail. Do you really need to host your own Node.js service to run this small snippet of backend logic? In this talk I will take a hard look at the role of the backend in modern applications. I will introduce the concept of a webtask - a lightweight representation of backend logic that can safely be embedded in a client application. I will show how you can use modern container technologies based on CoreOS and Docker to build a generic runtime for securely executing web tasks directly from a mobile or HTML5 application. You don’t need a backend to run backend code. </span></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="nick-niles">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/07/Nick-Niles-225x225.jpg" class="attachment-thumbnail" alt="Nick Niles" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Nick Niles</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/flavrcrystals" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/flavrcrystals', '@flavrcrystals']);" target="_blank" title="Open Twitter profile of Nick Niles in a new window">@flavrcrystals</a> – 
			
			Head of Product Design
					</ul>

			<div class="speaker-bio"><p>Nick is a multi-disciplinarian from California who has been designing for the web since 1997. He recently signed on as Lead Product Designer at <a href="https://voicerepublic.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://voicerepublic.com/', 'Voice Republic']);">Voice Republic</a> in Zürich. Previously, he was a Senior Interactive Designer at <a href="http://atfront.ch/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://atfront.ch/', 'Atfront']);">Atfront</a>.&nbsp;He continues to design and build websites for his own clients, as well as directing films and animations through the <a href="http://niles.ch/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://niles.ch/', 'creative studio']);">creative studio</a> he shares with his wife.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">14:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Command-Line Magic For Designers: An Intro To Front-End Tooling</h3>
			<div class="talk-abstract">As Flurin &amp; Adrian Egger will certainly point out in their talk, designing for the web means being able to deliver more than just a PSD. Clients will expect to see what their site will look like on a variety of devices. And we designers can often save lots of time iterating on designs when that means simply changing some markup and CSS.

When designing a website, it’s important to be able to click things as early as possible—and then iterate on that. Thankfully there are a slew of fantastic open-source tools which can help us get up and running.

With Assemble and Yeoman, for example, it’s possible to scaffold a multi-page website in minutes. It’s a great solution for projects ranging from prototyping a large CMS-based website to building a simple online styleguide.

If you’re a designer and you’ve been wanting to get comfortable with the command line, there’s never been a better excuse to start.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="yep" id="patty-toland">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/patty-toland1-225x225.jpg" class="attachment-thumbnail" alt="Patty Toland" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Patty Toland</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/pattytoland" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/pattytoland', '@pattytoland']);" target="_blank" title="Open Twitter profile of Patty Toland in a new window">@pattytoland</a> – 
			
			Partner at Filament Group
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Patty Toland is a partner at <a href="http://www.filamentgroup.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.filamentgroup.com', 'Filament Group']);">Filament Group</a>, a Boston-based UI design and front-end development consulting firm that helps companies design and build super-fast responsive sites and web apps that are simple to use and accessible to everyone. We’re strong believers in responsive design and progressive enhancement, in creating delightful and intuitive user experiences, and in sharing great ideas that push the boundaries of what the web can do without leaving anyone behind.&nbsp;</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">09:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Design Consistency for the Responsive Web</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">One of the biggest challenges in design responsive websites and applications is creating and communicating design systems so we and our client teams — developers, designers, brand and business owners, and most especially QA teams — all understand and can implement them effectively. We’ll take a practical look at tools, techniques and deliverables to help articulate important ideas, and the new mental models that will help teams work effectively together toward robust and effective design solutions.&nbsp;</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="paul-verbeek">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Paul-Verbeek-225x225.jpg" class="attachment-thumbnail" alt="Paul Verbeek" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Paul Verbeek</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/_paulverbeek" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/_paulverbeek', '@_paulverbeek']);" target="_blank" title="Open Twitter profile of Paul Verbeek in a new window">@_paulverbeek</a> – 
			
			Senior front-end developer
					</ul>

			<div class="speaker-bio"><p>Without a better name for it, Paul identifies himself as a web person. He’s working at <a href="http://www.indivirtual.nl/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.indivirtual.nl/', 'Indivirtual']);">Indivirtual</a> as a front-end developer in Amsterdam. He is very active in the Dutch web development community; he runs the meetup group <a href="http://nlhtml5.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://nlhtml5.org/', 'NLHTML5']);">NLHTML5</a>, established the country’s first Open Device Lab and ran <a href="http://nlhtml5.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://nlhtml5.org/', 'Web Platform']);">Web Platform</a> Doc Sprints. He’s passionate about helping people getting into tech.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">14:00</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">An Introduction to ECMAScript 2015</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;Last year ECMAScript 6 (now 2015) reached itu2019s u2018feature completeu2019 status, and browsers are already implementing it. Itu2019s packed with new features aimed to make the developer's life easier.nSo what is new in ECMAScript 2015? What are the features that will help you in your day-to-day programming? And how can you start using it today?nnThe talk will cover a bit of the history of ECMAScript and usefull features in ECMAScript 2015, like Array deconstruction and default values. And I will explain how, by use of preprocessors, you can use most of it today!n&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">Last year ECMAScript 6 (now 2015) reached it’s ‘feature complete’ status, and browsers are already implementing it. It’s packed with new features aimed to make the developer's life easier.</span>

<span data-sheets-value="[null,2,&quot;Last year ECMAScript 6 (now 2015) reached itu2019s u2018feature completeu2019 status, and browsers are already implementing it. Itu2019s packed with new features aimed to make the developer's life easier.nSo what is new in ECMAScript 2015? What are the features that will help you in your day-to-day programming? And how can you start using it today?nnThe talk will cover a bit of the history of ECMAScript and usefull features in ECMAScript 2015, like Array deconstruction and default values. And I will explain how, by use of preprocessors, you can use most of it today!n&quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">So what is new in ECMAScript 2015? What are the features that will help you in your day-to-day programming? And how can you start using it today?</span>

The talk will cover a bit of the history of ECMAScript and usefull features in ECMAScript 2015, like Array deconstruction and default values. And I will explain how, by use of preprocessors, you can use most of it today!</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="yep" id="thomas-jaggi-olga-skurativska">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/07/Thomas-Jaggi-Olga-Skurativska-225x225.jpg" class="attachment-thumbnail" alt="Thomas Jaggi &amp; Olga Skurativska" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Thomas Jaggi &amp; Olga Skurativska</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/backflip" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/backflip', '@backflip']);" target="_blank" title="Open Twitter profile of Thomas Jaggi &amp; Olga Skurativska in a new window">@backflip</a> – 
			
			Frontend Engineers
					</ul>

			<div class="speaker-bio"><p>Olga is a former .NET developer, who has always been secretly in love with frontend. Three years ago she changed her job title, and since then she’s been busy with all kinds of web projects in Unic. She can spend hours perfecting responsive forms and refactoring is her guilty pleasure. As any decent nerd, she has probably played all of the existing boardgames (including expansion packs).</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">14:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">2015: A Static Site Generator Odyssey</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;2015: A Static Site Generator OdysseynnOur frontend team has been searching for a convenient way to create (and maintain!) scalable responsive web projects with a complex data structure. After trying some existing static site generators, we have spent a lot of time planning, developing, testing, rewriting, utilizing, and finally open-sourcing our own Gulp.js based setup. nnThis talk is about successes and failures, ongoing problems (looking at you, npm!) as well as responsibilities that come with open-sourcing. &quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">Our frontend team has been searching for a convenient way to create (and maintain!) scalable responsive web projects with a complex data structure. After trying some existing static site generators, we have spent a lot of time planning, developing, testing, rewriting, utilizing, and finally open-sourcing our own Gulp.js based setup. </span>

<span data-sheets-value="[null,2,&quot;2015: A Static Site Generator OdysseynnOur frontend team has been searching for a convenient way to create (and maintain!) scalable responsive web projects with a complex data structure. After trying some existing static site generators, we have spent a lot of time planning, developing, testing, rewriting, utilizing, and finally open-sourcing our own Gulp.js based setup. nnThis talk is about successes and failures, ongoing problems (looking at you, npm!) as well as responsibilities that come with open-sourcing. &quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">This talk is about successes and failures, ongoing problems (looking at you, npm!) as well as responsibilities that come with open-sourcing. </span></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="tim-holman">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/tim-holman-225x225.jpg" class="attachment-thumbnail" alt="Tim Holman" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Tim Holman</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/twholman" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/twholman', '@twholman']);" target="_blank" title="Open Twitter profile of Tim Holman in a new window">@twholman</a> – 
			
			Interactive Developer
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Tim is an interactive developer, from sunny Australia, working in the sometimes sunny NYC. He enjoys hacking on both the <a href="http://theuselessweb.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://theuselessweb.com', 'strangely useless']);">strangely useless</a>&nbsp;and <a href="http://zenpen.io" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://zenpen.io', 'strangely useful']);">strangely useful</a>&nbsp;… when he’s not awkwardly talking about himself in third person, you’ll find him hacking away on the latest features at Tumblr, or skating around the city!</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">15:30</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Fun with Javascript</h3>
			<div class="talk-abstract">When we learned to read, we also learned to write – but we don't do that day in and day out without some creativity. The same should be with the web! We have, in our hands some of the most amazing tools to create fun and enjoyable experiences for the biggest audience imaginable. This talk goes over some of my thoughts on the creative web, as well going over some of the stranger areas of the internet, and even stranger techniques and ways of thinking to create!</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="umar-hansa">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/umar-hansa-225x225.jpg" class="attachment-thumbnail" alt="Umar Hansa" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Umar Hansa</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/umaar" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/umaar', '@umaar']);" target="_blank" title="Open Twitter profile of Umar Hansa in a new window">@umaar</a> – 
			
			Front-End Web Developer
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Umar is a front-end web developer based in London, with a focus on writing tips, tutorials and documentation for the web platform. One of the projects he plans to explore and share with the community, is using tooling such as the Chrome DevTools for an improved development workflow, but also for debugging performance issues.</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">15:30</span> 
<span class="talk-location">Room 2 – HSR</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">DevTools: An animated journey</h3>
			<div class="talk-abstract"><p class="p1"><span class="s1">My session reveals how the web application development landscape is rapidly changing. Tools are improving to such an extent that the usual "edit + refresh" cycle is fading away for many use cases. DevTools is not just a tool for inspecting the styling of elements, but rather it's a suite of tools which all developers and designers should be familiar with to improve their efficiency.</span></p>
<p class="p1"><span class="s1">This talk will arm you with tips and techniques to for web app development + debugging. The audience can expect to learn hidden DevTools secrets but also how to adopt a modern development and debugging workflow. This talk is important for any web developer or web designer who wants to understand the internals of a webpage quickly and with ease.</span></p></div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="vasilis-van-gemert">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/06/Vasilis-van-Gemert-225x225.jpg" class="attachment-thumbnail" alt="Vasilis van Gemert" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Vasilis van Gemert</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/vasilis" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/vasilis', '@vasilis']);" target="_blank" title="Open Twitter profile of Vasilis van Gemert in a new window">@vasilis</a> – 
			
			Lecturer
					</ul>

			<div class="speaker-bio"><p>Vasilis van Gemert is a lecturer at the <a href="http://www.amsterdamuas.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amsterdamuas.com/', 'Amsterdam University of Applied Sciences']);">Amsterdam University of Applied Sciences</a>, where he teaches the next generation of digital product designers how to design things with the web as a material. Before he became a lecturer he worked as a principal front-end developer for large and small clients in The Netherlands. Every now and then he publishes articles on his own blog, or on other publications like Smashing Magazine, Web Designer Magazine and Net Magazine. Today he only creates websites for himself. This not only means that he can use any new feature he wants, it also means he is able to investigate things that might not seem very interesting. Most of the time this turns out to be true. But not always.</p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Thursday, Aug 27th</span> 
			<span class="talk-time">14:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Look, no mediaqueries!</h3>
			<div class="talk-abstract"><span data-sheets-value="[null,2,&quot;Media queries gave us the power to create responsive layouts that work on all kinds of screens: from small to huge. Without media queries the web would be much less flexible. But media queries are hard work. We have to decide *when* a breakpoint occurs, we have to decide how it looks at that breakpoint, and we have to write the code to make it so. Wouldnu2019t it be better if we could simply *tell the content to behave*? To behave in a matter that makes sense, according to a set of rules, a system, we come up with. In other words: instead of crafting every possible layout by hand, wouldnu2019t it be better if we go home early and let the computer do the work for us?nnIt turns out that CSS gives us quite some tools to create super flexible, responsive layouts that donu2019t use media queries. Some are old, like floats and CSS columns. Some are newer, like flexbox and viewport relative units. And some are not implemented (yet), like paged media and element queries. In this talk I explain the many ways to use these techniques to create flexible, responsive design systems. &quot;]" data-sheets-userformat="[null,null,513,[null,0],null,null,null,null,null,null,null,null,0]">Media queries gave us the power to create responsive layouts that work on all kinds of screens: from small to huge. Without media queries the web would be much less flexible. But media queries are hard work. We have to decide *when* a breakpoint occurs, we have to decide how it looks at that breakpoint, and we have to write the code to make it so. Wouldn’t it be better if we could simply *tell the content to behave*? To behave in a matter that makes sense, according to a set of rules, a system, we come up with. In other words: instead of crafting every possible layout by hand, wouldn’t it be better if we go home early and let the computer do the work for us?</span>

It turns out that CSS gives us quite some tools to create super flexible, responsive layouts that don’t use media queries. Some are old, like floats and CSS columns. Some are newer, like flexbox and viewport relative units. And some are not implemented (yet), like paged media and element queries. In this talk I explain the many ways to use these techniques to create flexible, responsive design systems.</div>
		</div>
	</div>
	
</div><div class="speaker-details" data-female="nope" id="vitaly-friedman">
	
	<div class="speaker-details-row">
		<div class="speaker-image">
			<img src="http://frontendconf.ch/wp-content/uploads/2015/05/vitaly-friedman-225x225.jpg" class="attachment-thumbnail" alt="Vitaly Friedman" height="225" width="225">
		</div>
		<div class="speaker-info">
			<h2 class="speaker-name">Vitaly Friedman</h2>
			<ul class="speaker-meta">
			
				<a href="https://twitter.com/smashingmag" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://twitter.com/smashingmag', '@smashingmag']);" target="_blank" title="Open Twitter profile of Vitaly Friedman in a new window">@smashingmag</a> – 
			
			Editor-in-chief of Smashing Magazine
					</ul>

			<div class="speaker-bio"><p class="p1"><span class="s1">Vitaly Friedman loves beautiful content and does not give up easily. From Minsk in Belarus, he studied computer science and mathematics in Germany, discovered the passage a passion for typography, writing and design. After working as a freelance designer and developer for 6 years, he co-founded <a href="http://smashingmagazine.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://smashingmagazine.com/', 'Smashing Magazine']);">Smashing Magazine</a>, a leading online magazine dedicated to design and web development. Vitaly is the author, co-author and editor of all <a href="https://shop.smashingmagazine.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://shop.smashingmagazine.com', 'Smashing books']);">Smashing books</a>. He currently works as editor-in-chief of Smashing Magazine in the lovely city of Freiburg, Germany.</span></p>
</div>
		</div>
	</div>
	
		
	<div class="speaker-details-row">

		<div class="talk-meta">
			<p><b>Presentation</b></p>
			<span class="talk-date">Friday, Aug 28th</span> 
			<span class="talk-time">09:00</span> 
<span class="talk-location">Room 1 – Unic</span>
		</div>
		<div class="talk-info">
			<h3 class="talk-title">Improving Web Fonts Performance</h3>
			<div class="talk-abstract">When it comes to Web fonts, loading time can be quite a headache. A blank canvas with a few background colors and link underlines is what users usually see on websites, especially when the network connection is suboptimal. There are smart ways to improve web fonts performance and start rendering pages faster, without compromising on the quality of Web typography. In this talk, Vitaly will be talking about a few strategies and a few practical techniques to deliver content faster, load Web fonts faster and deal with them across both modern and legacy browsers in mobile and desktop devices.</div>
		</div>
	</div>
	
</div>
		</div> <!-- .et_pb_text -->


<script>
var imgs = document.querySelectorAll('.speaker-image');
var i = 0;
while (i < imgs.length) {
	var theId = imgs[i].parentNode.parentNode.id;
	imgs[i].innerHTML = '<a class="selfclick" href="#' + theId + '">' + imgs[i].innerHTML + '</a>';
	i++;
}
var selfie = document.querySelectorAll('.selfclick');
var i = 0;
while (i < selfie.length) {
	selfie[i].onclick = function(e){
		if(document.querySelector('.open')){
			document.querySelector('.open').classList.toggle('open')
		}
		this.parentNode.parentNode.classList.toggle('open');
		return false;
	}
	i++;
}
function closeOpen(){

}
</script>
</body>
</html>
