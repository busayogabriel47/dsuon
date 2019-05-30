<?php
/*
Template Name: products
*/
?>

<?php get_header(); ?>
<!-- Top Nav -->
	<div class="grid-x standard-padding" id="product-banner">
		<div class="cell align-self-middle" id="product-padding">
				<h1> Light is Life...<br/> <span class="dsuon-lightgreen-text">But</span> not in every case. </h1>
				<p> Learn about different light sources and thier possible impact on your health</p>

		
		</div>
	
 

	</div>

	  <div class="grid-x">
	  <div class="cell small-5 medium-1 float-center">
		<img src="<?php echo get_template_directory_uri(); ?>/images/footprint.png">
		</div>
	</div>


	<div class="grid-x">
		<div class="cell small-12 float-center medium-4 text-center dsuon-letter-spacing white dsuon-green-bg">
			<h1> Solar Products </h1>
		</div>
		<div class="cell text-center" id=strip-design>
		<div class="grid-x">
		<div class="cell small-12 medium-3 text-center dsuon-letter-spacing white dsuon-green-bg float-center topline-style">
			<p class="no-margin-bottom"> Explore our value offering below </p>
			</div>
        </div>
			<div  class="tabs grid-x no-border" data-tabs id="dsuon-tabs">
				<div class="cell small-12 medium-3 tabs-title is-active">
					<a href="#panel1" aria-selected="true">
						<h4> Panels </h4>
						
					</a>
				</div>
				<div class="cell small-12 medium-3 tabs-title">
					<a href="#panel2">
						<h4> Inverters  </h4>
					</a>
				</div>
				<div class="cell small-12 medium-3 tabs-title">
					<a  href="#panel3">
						<h4> Battery </h4>
					</a>
				</div>
				<div class="cell small-12 medium-3 tabs-title">
					<a href="#panel4">
						<h4> Controllers </h4>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="grid-x tabs-content" data-tabs-content="dsuon-tabs">
		<div class="cell tabs-panel is-active no-padding-top" id="panel1">
			<div class="grid-x" id="">
				<h6 class="cell small-12 float-center medium-4 text-center dsuon-letter-spacing white dsuon-green-bg subheading-style"> Lorem ipsum dolor sit amet dolor sit amet sit amet dolor  </h6>
			</div>

			<div class="grid-x dsuon-orange-bg standard-margin-left-right products-clear-space curve-top-right">

			<!-- 1st product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('panel_wp__solar_image'); ?>">
          <div class=" grid-x card-section">
            <div class="cell small-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('panel_wp_solar_heading'); ?> </h4>
					<h6 class="white"> Starting Price <?php the_field('panel_wp_solar_price'); ?></h6>
					<p> <?php the_field('panel_wp_solar_description_'); ?> </p>
				</div>
<!-- second product tier -->
<div class="grid-x">
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding products-clear-space-top">
					<h2 class="white heading">  <?php the_field('panel_mono_solar_heading'); ?>  </h2>
					<h6 class="white"> <?php the_field('panel_mono_solar_price'); ?>  </h6>
					<p><?php the_field('panel_mono_solar_description'); ?></p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('panel_mono_solar_image'); ?>">
          <div class="grid-x card-section">
                <div class="cell small-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>

				</div>

				<!-- 3rd product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('panel_poly_solar_image'); ?> " />
          <div class="grid-x card-section">
                <div class="cell small-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('panel_poly_solar_heading'); ?> </h4>
					<h6 class="white"> Price - <?php the_field('panel_poly_solar_price'); ?> </h6>
					<p> <?php the_field('panel_poly_solar_description'); ?> </p>
				</div>
<!-- 4th product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('solar_hybrid_heading'); ?> </h4>
					<h6 class="white"> <?php the_field('solar_hybrid_price'); ?>  </h6>
					<p><?php the_field('solar_hybrid_description'); ?> </p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('solar_hybrid_image'); ?>" />
          <div class="grid-x card-section">
            <div class="cell small-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>



			</div>


		</div>
		<div class="cell tabs-panel no-padding-top" id="panel2">
			<div class="grid-x" id="ceo-strip">
				<h6 class="cell small-12 float-center medium-4 text-center dsuon-letter-spacing white dsuon-green-bg subheading-style"> Lorem ipsum dolor sit amet </h6>
			</div>

			<div class="grid-x dsuon-orange-bg standard-margin-left-right products-clear-space curve-top-right">

			<!-- 1st product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('ecovolt_inverter_image'); ?> ">
          <div class=" grid-x card-section">
            <div class="cell small-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('ecovolt_inverter_heading'); ?> </h4>
					<h6 class="white"> <?php the_field('ecovolt_inverter_price'); ?>  </h6>
					<p><?php the_field('ecovolt_inverter_description'); ?> </p>
				</div>
<!-- second product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding products-clear-space-top">
					<h2 class="white heading"> <?php the_field('cruz_inverter_heading'); ?>  </h4>
					<h6 class="white"> <?php the_field('cruz_inverter_price'); ?>  </h6>
					<p><?php the_field('cruz_inverter_description'); ?> </p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('cruz_inverter_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>

				<!-- 3rd product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('ro_inverter_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('ro_inverter_heading'); ?> </h4>
					<h6 class="white"> Price -<?php the_field('ro_inverter_price'); ?>  </h6>
					<p><?php the_field('ro_inverter_description'); ?> </p>
				</div>
<!-- 4th product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('tribal_inverter_heading'); ?> </h4>
					<h6 class="white"> <?php the_field("tribal_heading_price"); ?> </h6>
					<p> <?php the_field('tribal_inverter_description'); ?> </p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('tribal_heading_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>



			</div>

		</div>
		<div class="cell tabs-panel no-padding-top" id="panel3">
			<div class="grid-x" id="ceo-strip">
				<h6 class="cell small-12 float-center medium-4 text-center dsuon-letter-spacing white dsuon-green-bg subheading-style"> Lorem ipsum dolor sit amet </h6>
			</div>

			<div class="grid-x dsuon-orange-bg standard-margin-left-right products-clear-space curve-top-right">

			<!-- 1st product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('smf_agm_battery_image'); ?> ">
          <div class=" grid-x card-section">
            <div class="cell small-3">
            <img src="images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('smf_agm_battery_heading'); ?>  </h4>
					<h6 class="white"> <?php the_field('smf_agm_battery_price'); ?> </h6>
					<p><?php the_field('smf_agm_battery_description'); ?> </p>
				</div>
<!-- second product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding products-clear-space-top">
					<h2 class="white heading"> <?php the_field('smf_gel_battery_heading'); ?>  </h4>
					<h6 class="white"> Price - <?php the_field('smf_gel_battery_price'); ?>  </h6>
					<p><?php the_field('smf_gel_battery_description'); ?> </p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('smf_gel_battery_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>

				<!-- 3rd product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="<?php the_field('tubular_wetcell_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('tubular_wetcell_heading'); ?>  </h4>
					<h6 class="white"> <?php the_field('tubular_wetcell_price'); ?>  </h6>
					<p><?php the_field('tubular_wetcell_description'); ?> </p>
				</div>
<!-- 4th product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> <?php the_field('amron_quanta_heading'); ?>  </h4>
					<h6 class="white"> <?php the_field('amron_quanta_price'); ?> </h6>
					<p><?php the_field('amron_quanta_description'); ?> </p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="<?php the_field('amron_quanta_image'); ?> ">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>



			</div>

		</div>
		<div class="cell tabs-panel no-padding-top" id="panel4">
			<div class="grid-x" id="ceo-strip">
				<h6 class="cell small-12 float-center medium-4 text-center dsuon-letter-spacing white dsuon-green-bg subheading-style"> Lorem ipsum dolor sit amet </h6>
			</div>

			<div class="grid-x dsuon-orange-bg standard-margin-left-right products-clear-space curve-top-right">

			<!-- 1st product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="images/solarpanel.jpg">
          <div class=" grid-x card-section">
            <div class="cell small-3">
            <img src="images/lightning.png"> 
             </div>
              <div class="cell small-9 text-center">
                <h6 class="dsuon-lightgreen-text"> Voltage range </h6> 
             </div>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> WP Solar Panels </h4>
					<h6 class="white"> Price - N35,000 </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra ac</p>
				</div>
<!-- second product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding products-clear-space-top">
					<h2 class="white heading"> Mono Solar Panels </h4>
					<h6 class="white"> Price - N35,000 </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra ac</p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="images/solarpanel.jpg">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>

				<!-- 3rd product tier --> 
				<div class="cell small-12 medium-3 text-center align-self-middle">
					
	<div class="card product-card product-card-left standard-padding">
        <img src="images/solarpanel.jpg">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>
				<div class="cell small-12 medium-9 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> Poly Solar Panels </h4>
					<h6 class="white"> Price - N35,000 </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra ac</p>
				</div>
<!-- 4th product tier -->
				<div class="cell small-12 small-order-2 medium-9 medium-order-1 align-self-middle large-text-left text-center standard-padding">
					<h2 class="white heading"> Solar hybrid home </h4>
					<h6 class="white"> Price - N35,000 </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra acLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam tellus ex, posuere ultrices nulla viverra ac</p>
				</div>

        <div class="cell small-12 small-order-1 medium-3 medium-order-2 text-center align-self-middle">
					
	<div class="card product-card product-card-right standard-padding">
        <img src="images/luminous.png">
          <div class="card-section">
             <h4>This is a card.</h4>
             <p>It has an easy to override visual style, and is appropriately subdued.</p>
         </div>
    </div>
				</div>



			</div>

		</div>
	</div>


<?php get_footer(); ?>