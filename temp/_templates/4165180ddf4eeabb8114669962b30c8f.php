<div class="newsletter-banner">
	<div class="container-wide">
		<div class="flex center-vertically">
			<div class="left">
				<h5>The best design stories, sent to your inbox.</h5>
			</div>
			<form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
					<input style="display: none" type="text" name="b_7f799244738e8b8558a646378_6c81011ad7" tabindex="-1" value="">
					<input autofocus="" class="flex-8" type="email" name="EMAIL" placeholder="Email address" required="">
					<button class="flex-4 primary" name="subscribe">Sign up</button>
				
				<!-- <small>Unsubscribe at any time.  We won't share your details with anyone.</small> -->
				
			</form>
		</div>
	</div>
	
</div>

<article class="flex-1" id="measureScroll">
	<div class="content">
		<div class="resources">
			<?php  if (isset($template["resourceDetails"])) {  ?>
					<a href="<?php echo( $template["resourceDetails"]["link"] ); ?>" target="_blank">
					<article>
						<div class="container-narrow">
							<h3 class="title"><?php echo( $template["resourceDetails"]["title"] ); ?></h3>
							<small><strong><?php echo( $template["resourceDetails"]["date"] ); ?></strong> by <strong><?php echo( $template["resourceDetails"]["author"] ); ?></strong></small>
							<p><?php echo( $template["resourceDetails"]["desc"] ); ?></p>
							<div class="tags flex">
								<?php  foreach ($template["resourceDetails"]["tags"] as $tag) {  ?>
								<span class="label <?php echo( $tag ); ?>"><?php echo( $tag ); ?></span>
								<?php  }  ?>
							</div>
						</div>
					</article>
					</a>
			<?php  } else {  ?>

				<!--<h2>Resources</h2>-->
				<!--<p class="description">Curated tools &amp; food for thought, updated daily.</p>-->

				<?php  foreach($template["content"] as $k) {  ?>
				<a href="<?php echo( $k["link"] ); ?>" target="_blank">
				<article>
					<div class="container-narrow">
						<h3><?php echo( $k["title"] ); ?></h3>
						<small><strong><?php echo( $k["date"] ); ?></strong></small>
						<!-- <strong><?php echo( $k["author"] ); ?></strong> -->
						<p><?php echo( $k["desc"] ); ?></p>
						<div class="tags flex">
							<?php  foreach ($k["tags"] as $tag) {  ?>
							<span class="label <?php echo( $tag ); ?>"><?php echo( $tag ); ?></span>
							<?php  }  ?>
						</div>
					</div>
				</article>
				</a>
				<?php  }  ?>
			<?php  }  ?>
		</div>
	</div>
</article>
</div>