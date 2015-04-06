<section id="masthead" class="flex center-vertically">
	<div class="container-wide">
		<h1>Sharing the stories behind </br> great products.</h1>
		<h3>1 day. 9 speakers. Great coffee.</h3>
		<h2>London, Saturday 3rd of October 2015. 10am - 6pm.</h2>
		<a href="https://www.eventbrite.com/e/jam-london-2015-tickets-16351563968" class="no-margin button brand large">Book Tickets</a>
		<p class="description">Early Bird Discounts Available!</p>
	</div>
</section>

<section id="sectionStory">
	<div class="container-wide">
		<h3 class="small-heading">Story</h3>
		<h2>Why JAM?</h2>
		<p>We started JAM to help people build better products. As product makers ourselves, we’ve often asked ourselves - what’s happening backstage? How do others do it? What tools do they use? How do they organise their teams?</p>
		
		<p>We wanted to know more, and thought others would too.</p>
		<button class="large toggle-our-story">Read More</button>
	</div>
</section>

<section id="sectionSpeakers" class="text-center border-bottom">
	<div class="container-wide">
		<h3 class="small-heading">Speakers</h3>
		<h2>Hear it straight from the horses’ mouth. </br>
		9 speakers share their experiences.</h2>

		<ul class="flex-grid-3">
			<?php  foreach ($template["authors"] as $k => $v) {  ?>
			<li class="flex-item toggle-speaker-bio" id="<?php echo( Utilities\String::sanUrl($k) ); ?>">
				<img src="/assets/images/speakers/<?php echo( $v["img"] ); ?>">
				<strong><?php echo( $k ); ?></strong>

				<small><?php echo( $v["position"] ); ?><br/><?php echo( $v["company"] ); ?>
				</small>
			</li>
			<?php  }  ?>
		</ul>
	</div>
</section>

<section class="quote">
	<div class="container-wide">
		<p>We believe a great product should be the first focus of every startup.</p>
		<small>Intercom, Product Management</small>
	</div>
</section>

<section id="sectionTopics">
		<!-- <h2 class="text-center no-margin">20 Minute Talks, 6 Topics.</h2> -->
		<h3 class="small-heading">Schedule</h3>
		<?php  foreach ($template["schedule"] as $k) {  ?>
		<article>
			<div class="container-wide">
			<small><?php echo( $k["time"] ); ?></small>
			<h3><?php echo( $k["title"] ); ?></h3>

			<?php  $author = $template["authors"][$k["author"]];  ?>
			<strong><?php echo( $k["author"] ); ?></strong></br>
			<small><?php echo( $author["position"] ); ?>, <?php echo( $author["company"] ); ?></small>
			</div>
		</article>
		<?php  }  ?>
</section>

<section id="sectionVenue" class="text-center">
	<div class="container-wide">
		<h2>Hosted in the iconic Oval Space, East London.<br/>
			Food & Drink included</h2>
		<a href="https://www.eventbrite.com/e/jam-london-2015-tickets-16351563968" class="button brand large">Book Tickets</a>
	</div>
</section>