	<footer class="grid-x standard-padding">
		<div class="cell">
			<div class="grid-x">
				<div class="cell small-12 large-3 align-self-middle text-center little-space">
					<h4> Vision </h4> <br> <p class="text-green"> Sustainable energy for all </p>
				</div>
				<div class="cell small-12 large-3 text-center little-space">
					<h4> Quicklinks </h4>
					<ul class="text-green" id="quicklinks">
						<li> About Us </li>
						<li> Community </li>
						<li> Services </li>
						<li> Products </li>
					</ul>
				</div>
				<div class="cell small-12 large-3 text-center little-space">
					<h4 class="text-center">Subscsribe to our Newsletter</h4> <br>
					<form class="grid-x" id="mail-form">
						<input type="text" class="cell small-10" placeholder="design@iNspireleadership.biz" id="mail-input">
						<button class="cell small-2" id="mail-btn">
							<i class="fas fa-envelope fa-2x text-center"></i>
						</button>
					</form>
					<button type="submit" class="cell small-4 align-self-middle" id="form-submit"> Submit </button>
				</div>
				<div class="cell small-12 large-3 text-center little-space">
					<div class="grid-x">
						<h4 class="cell"> Follow us on social media </h4>
						<br>
						<div class="cell">
							<a href="#" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
							<a href="#" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></a>
							<a href="#" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"></a>
							<a href="#" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- fixed button classes start --> 

	<div class="align-middle-center text-center"  data-open="faq" id="mybutton2">
  		<i class="fas fa-question white quick-links"></i>
	</div>

	<div class="align-middle-center text-center"  data-open="quote" id="mybutton3">
  		<i class="far fa-lightbulb white quick-links"></i>
	</div>

<!-- site modals start -->

<!-- faqs start -->
	<div class="reveal" id="faq" data-reveal>

   		<div class="row grid-x align-bottom-center text-center"> 
    		<div class="cell small-12 inner-page-banner-faq pOff "> 
           		<h3 class="inner-page-header lime">FAQ's</h3> 
     		</div>   
  		</div>

			<!-- Faq accordions --> 

		<ul class="accordion" data-accordion>
  			<li class="accordion-item" data-accordion-item>
    			<!-- Accordion tab title -->
    			<a href="#" class="accordion-title">FAQ </a>

    			<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    			<div class="accordion-content" data-tab-content>
      			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora. Impedit eius officia possimus laudantium? Molestiae eaque, sapiente atque doloremque placeat! In sint, fugiat saepe sunt dolore tempore amet cupiditate.
    			</div>
  			</li>
 			<li class="accordion-item" data-accordion-item>
    			<!-- Accordion tab title -->
    			<a href="#" class="accordion-title">FAQ 1</a>

    			<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
   				<div class="accordion-content" data-tab-content>
      			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora. Impedit eius officia possimus laudantium? Molestiae eaque, sapiente atque doloremque placeat! In sint, fugiat saepe sunt dolore tempore amet cupiditate.
    			</div>
  			</li>
    		<li class="accordion-item" data-accordion-item>
    			<!-- Accordion tab title -->
    			<a href="#" class="accordion-title">FAQ 2</a>

    			<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    			<div class="accordion-content" data-tab-content>
      			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora. Impedit eius officia possimus laudantium? Molestiae eaque, sapiente atque doloremque placeat! In sint, fugiat saepe sunt dolore tempore amet cupiditate.
    			</div>
  			</li>
    		<li class="accordion-item" data-accordion-item>
    			<!-- Accordion tab title -->
    			<a href="#" class="accordion-title">FAQ 3</a>

   				<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    			<div class="accordion-content" data-tab-content>
      			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora. Impedit eius officia possimus laudantium? Molestiae eaque, sapiente atque doloremque placeat! In sint, fugiat saepe sunt dolore tempore amet cupiditate.
    			</div>
  			</li>
    		<li class="accordion-item" data-accordion-item>
    		<!-- Accordion tab title -->
    		<a href="#" class="accordion-title">FAQ 4</a>

    		<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    		<div class="accordion-content" data-tab-content>
      		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora. Impedit eius officia possimus laudantium? Molestiae eaque, sapiente atque doloremque placeat! In sint, fugiat saepe sunt dolore tempore amet cupiditate.
    		</div>
  			</li>

		</ul>

	</div>

<!-- faqs end -->



<!-- quote start -->
	<div class="reveal" id="quote" data-reveal>
 
    	<div class="row grid-x inner-page-banner-products-container paddingTB"> 
    		<div class="cell small-12 medium-4 inner-page-quotes-header "></div>   

     		<div class="cell small-12 medium-8 quotes-test-height"> 

          		<div class="row grid-x align-middle-center text-center get-quotes-header "> 
    				<div class="cell small-12 pOff"> 
           				<h2 class="lime">Need a quote ? </h2> 
           				<h6 class="lime get-quotes-sub-heading"> Fill out the details and we will get right back to you </h6>
     				</div> 

     				<div class="cell small-12" > 
        				<form method="" action="">
  							<div class="grid-container">
    							<div class="grid-x grid-padding-x">
      								<div class="small-12 cell">
        								<label> Full Name
          									<input type="text" placeholder="Ayodeji Ayodele">
        								</label>
      								</div>
      								<div class="small-12 cell">
        								<label> Phone Number
          									<input type="tel" placeholder="+234(0)810-501-0073">
        								</label>
      								</div>
       								<div class="small-12 cell">
        								<label> Email
          									<input type="email" placeholder="Iwantaquote@email.com">
        								</label>
      								</div>
    
   									<fieldset class="small-12 cell pOff">
    									<legend>Electronic devices</legend>
    									<input id="checkbox1" type="checkbox"><label for="checkbox1">Device A</label>
    									<input id="checkbox2" type="checkbox"><label for="checkbox2">Device B</label>
    									<input id="checkbox3" type="checkbox"><label for="checkbox3">Device C</label>
    									<input id="checkbox1" type="checkbox"><label for="checkbox1">Device D</label>
    									<input id="checkbox2" type="checkbox"><label for="checkbox2">Device E</label>
    									<input id="checkbox3" type="checkbox"><label for="checkbox3">Device F</label>
  									</fieldset>
    
     								<button class="slider-btn button-style" type=submit> Get Quote </button>      

    							</div>
  							</div>
						</form>

     				</div> 
    			</div>
    
  			</div>
  		</div>
  		<div class="row grid-x align-middle paddingTB white"> 

       		<div class="cell small-12 medium-12 align-middle-center text-center"> 

       			Have more questions ? Contact us we are always available to 
       			help you understand the advantages solar presents. 

       		</div>

          	<div class="cell small-12 medium-6 align-middle-center text-center paddingTB"> 

       			<h3> Working Hours </h3>
       			<h5> 9am - 6pm </h5>
       			<h6> Mobile: +234(0)9060001413 </h6>
       			<h6> Email:  info@dsuonenergy.com </h6>

        	</div>

        	<div class="cell small-12 medium-6 paddingTB"> 
            	<h3> Address </h3>
            	<p> 30 Bassie Ogamba Street, Off Adeniran Ogunsanya, Surulere Lagos </p>    
        	</div>

    	</div>

    </div>

  	<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
  	</button>

<!-- quote end -->


 <!-- fixed button classes end --> 

		<div class="cell" id="base-rec">
			<div class="grid-x">
				<div class="cell small-12 large-6 large-text-left text-center"><p class="no-margin-bottom-p"> Copyright D'suon Energy 2018</p></div>
				<div class="cell small-12 large-6 large-text-right text-center"><p class="no-margin-bottom-p">Content and Design by iNspire</p></div>
			</div>
		</div>
	</footer>




<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Fast click -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>

<!-- Foundation Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/js/foundation.min.js" integrity="sha256-G6jsRyH1fxbsvFIXSCuwYmI1aIDYBa28xscrvmYjJy0= sha384-vtoG68NvPc9azmFJr447vvY8qgdyA4FdaJ5/bqvzIM4eAdZfO0iyRRF8l2AAscYI sha512-43seCcNrHA0BQgrtyajB9sp8yOdv5c8QdYvgjP7zJ7v+dmzAcxYDQ2gupb9aztsNWBq1COIp/3NHYkQs4l/dkg==" crossorigin="anonymous"></script>

<script>
  $(document).foundation();
</script>

<!-- Owl carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	autoplay: true,
  	dots: false,
  	nav: false,
  	autoplayHoverPause: true,
  	items: 1,
  	loop:true,
    margin:10
  });
});
</script>
<?php wp_footer(); ?>
