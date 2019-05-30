<?php
/*
Template Name: Services
*/

$installation = get_field('installations');
$maintanance = get_field('maintanances');
$trainings = get_field('training');
$consulting = get_field('consulting');

?>

<?php get_header(); ?>

	<div class="grid-container fluid">
		<div class="grid-x">
			<div class="cell service-icon-container">
				<ul class="tabs dsuon-orange-bg" data-active-collapse="true" data-tabs id="collapsing-tabs">
					<li class="tabs-title is-active">
						<a href="#sales-panel" aria-selected="true" class="text-center">
							<img src="images/sales.png">
						</a>
					</li>
					<li class="tabs-title">
						<a href="#installation-panel" class="text-center tabs-link">
							<img src="images/installations.png">
						</a>
					</li>
					<li class="tabs-title">
						<a href="#maintenance-panel" class="text-center tabs-link">
							<img src="images/repairs.png">
						</a>
					</li>
					<li class="tabs-title">
						<a href="#training-panel" class="text-center tabs-link">
							<img src="images/training.png">
						</a>
					</li>
					<li class="tabs-title">
						<a href="#consulting-panel" class="text-center tabs-link">
							<img src="images/consultancy.png">
						</a>
					</li>
				</ul>
                </div>
                <div class="cell">
				<div class="tabs-content" data-tabs-content="collapsing-tabs">
				  <div class="tabs-panel is-active" id="sales-panel">
				    <div class="grid-x">
					    <div class="cell medium-6 small-12 align-self-middle">
					    	<h1 class="solar-sales"> Solar Sales </h1>
					    	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit justo mi, at tincidunt ligula malesuada sit amet. Curabitur sed eleifend leo. Etiam convallis tempor interdum. Aliquam vulputate tincidunt ipsum.</p>
					    	<button type="submit" class="btn-orange"> Explore product line </button>
					    </div>
					    <div class="cell medium-6 small-12">
					    	<div class="owl-carousel">
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    	</div>
					    </div>
				  </div>
				</div>

				  <div class="tabs-panel" id="installation-panel">
				  	<div class="grid-x">
				  <?php foreach ($installation as $key => $install) { ?>
				  
				  <div class="cell medium-6 small-12 align-self-middle">
					    	<h1 class="solar-sales"> Solar Sales </h1>
					    	<p> <?php echo $install['installation_conten']; ?>  </p>
					    	<button type="submit" class="btn-orange"> Explore product line </button>
					    </div>
            	    <div class="cell medium-6 small-12">
					    	<div class="owl-carousel">
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    	</div>
					    </div>
                    <?php } ?>
                    
					    
				
				  	</div>
				  </div>

				  <div class="tabs-panel" id="maintenance-panel">
				  	<div class="grid-x">
					    <?php foreach ($maintanance as $key => $maintain) { ?>	  
				  <div class="cell medium-6 small-12 align-self-middle">
					    	<h1 class="solar-sales"> Solar Sales </h1>
					    	<p> <?php echo $maintain['maintanance_content']; ?>  </p>
					    	<button type="submit" class="btn-orange"> Explore product line </button>
					    </div>
            	    <div class="cell medium-6 small-12">
					    	<div class="owl-carousel">
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    	</div>
					    </div>
                    <?php } ?>
				  	</div>
				  </div>

				  <div class="tabs-panel" id="training-panel">
				  	<div class="grid-x">
					     <?php foreach ($trainings as $key => $train) { ?>
				  
				  <div class="cell medium-6 small-12 align-self-middle">
					    	<h1 class="solar-sales"> Solar Sales </h1>
					    	<p> <?php echo $train['training_text']; ?>  </p>
					    	<button type="submit" class="btn-orange"> Explore product line </button>
					    </div>
            	    <div class="cell medium-6 small-12">
					    	<div class="owl-carousel">
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    	</div>
					    </div>
                    <?php } ?>
                    
				  	</div>
				  </div>

				  <div class="tabs-panel" id="consulting-panel">
				  	<div class="grid-x">
					     <?php foreach ($consulting as $key => $consult) { ?>
				  
				  <div class="cell medium-6 small-12 align-self-middle">
					    	<h1 class="solar-sales"> Solar Sales </h1>
					    	<p> <?php echo $consult['consulting_text']; ?>  </p>
					    	<button type="submit" class="btn-orange"> Explore product line </button>
					    </div>
            	    <div class="cell medium-6 small-12">
					    	<div class="owl-carousel">
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image.png">
					    		</div>
					    		<div class="item">
					    			<img src="images/sales-image-2.png">
					    		</div>
					    	</div>
					    </div>
                    <?php } ?>
                    
				  	</div>
				  </div>
				</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>