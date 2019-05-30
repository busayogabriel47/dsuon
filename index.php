<?php
/* Template Name: Homepage */ 

$slider_images = get_field('homepage_slider');
$testimonial_images = get_field('testimonial_slider');
$recognition_logo = get_field('recognition_logo')

?>

<?php get_header(); ?>

<!-- inner page content start --> 

<div class="grid-x" id="landing-stage">
		<div class="owl-carousel owl-theme owl-loaded">
            	<?php foreach ($slider_images as $key => $image) { ?>
                        <div class="item melon-stage <?php if ($key === 0) echo 'active' ?>">
                            <img src="<?php echo $image['url']; ?>" alt="Third slide">
                        </div>
                    <?php } ?>
    	</div>
	</div>

	<div class="grid-x text-center align-center-middle standard-padding dsuon-font">
		<div class="cell">
			<img src="<?php the_field('introductory_image'); ?>" />
		</div>
		<div class="cell clear-space standard-padding">
			<p> <?php the_field('introductory_text'); ?>  </p>
			<button id="team-btn">
				<img src="Images/business-group.png" id="team-icon">
				Meet the team
			</button>
		</div>
	</div>

	<div class="grid-x standard-padding clear-space" id="LifenDarkness">
		<div class="cell align-self-middle standard-padding">
				<h1> There is no Life in Darkness </h1>
				<p> At our core is the belief <span id="withoutElectricity">"no community or household should exist without Electricity"</span>.<br> Through our campaigns and outreach programmes we... </p>

				<button class="btn-orange"> Community projects </button>
		</div>
	</div>

	<div class="grid-x text-center standard-padding clear-space dsuon-orange-text">
		<div class="cell">
			<h1> <?php the_field('fundraising_header'); ?> </h1>
			<p>  <?php the_field('fundraising_subtext'); ?> </p>
		</div>
		<div class="cell">
			<div class="grid-x align-spaced" id="funds-icons-holder">
				<div class="cell small-12 medium-2">
					<figure class="funds-icons">
						<img src= "<?php the_field('salesicon'); ?>" />
						<figcaption class="fund-raising-caption"> <?php the_field('salestext'); ?> </figcaption>
					</figure>
				</div>
				<div class="cell small-12 medium-2">
					<figure class="funds-icons">
						<img src="<?php the_field('installicon'); ?>" />
						<figcaption class="fund-raising-caption" > <?php the_field('installtext'); ?>  </figcaption>
					</figure>
				</div>
				<div  class="cell small-12 medium-2">
					<figure class="funds-icons">
						<img src="<?php the_field('maintananceicon'); ?>" />
						<figcaption class="fund-raising-caption" > <?php the_field('maintanancetext'); ?>  </figcaption>
					</figure>
				</div>
				<div  class="cell small-12 medium-2">
					<figure class="funds-icons">
						<img src="<?php the_field('trainingicon'); ?>" />
						<figcaption class="fund-raising-caption" > <?php the_field('trainingtext'); ?>  </figcaption>
					</figure>
				</div>
				<div  class="cell small-12 medium-2">
					<figure class="funds-icons">
						<img src="<?php the_field('consulticon'); ?>" />
						<figcaption class="fund-raising-caption" > <?php the_field('consulttext'); ?> </figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="cell">
			<p> <?php the_field('fundraiser_body'); ?> </p>
			<button class="dsuon-green-bg clear-space white" id="donation"> Make a donation </button>
		</div>
	</div>

	<div class="grid-x clear-space standard-padding" id="rainbow">
		<div class="cell">
			<div class="grid-x text-center h-max">
				<div class="cell small-12 medium-6">
					<div class="grid-x">
						<div class="cell owl-carousel owl owl-theme owl-loaded">
            	<?php foreach ($testimonial_images as $key => $image) { ?>
                        <div class="item grid-x <?php if ($key === 0) echo 'active' ?> ">
                        
                        <figure> 
					        	<p> <?php echo $image['description']; ?> </p>
					        	
					        	
					        	<figcaption>  
					        	<img src="<?php echo $image['url']; ?> " class="profile-img float-center">
					        	<h3> <?php echo $image['title']; ?> </h3>
					          	<h4> <?php echo $image['caption']; ?> </h4>
					        	
					           	 </figcaption>

					        	</figure>
					        	
                          
                        </div>
                    <?php } ?>

					     
					        	
					        
					    
					    </div>
					</div>
				</div>

				<div class="cell small-12 medium-6 align-self-middle white" id="network">
					<h1> What our network has to say </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-x standard-margin-left-right standard-padding" id="Recognition">
		<div class="cell text-center">
			<div class="grid-x">
				<div class="cell align-self-middle standard-margin-top-bottom dsuon-font">
					<h2> Recognition Squad </h2>
					<br>
					<p> Some awesome organisations identify with the social work we engage in at D'suon </p>
				</div>
				<?php foreach ($recognition_logo as $key => $image) { ?>
				<div class="cell large-3 small-6">
					<img class="logo-size" src="<?php echo $image['url']; ?> ">
				</div>
                    <?php } ?>
			</div>
		</div>
	</div>
	




<!-- inner page content end --> 

<?php get_footer(); ?>