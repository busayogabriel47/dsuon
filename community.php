<?php
/*
Template Name: Community
*/
?>


<?php get_header(); ?>

<div class="grid-x"> 
<div class="cell small-12 medium-3"> 
<div class=grid-x> 
<div class="cell small-12 green temp-height sdg">
</div> 
<div class="cell small-12 purp temp-height sdg">
</div> 
<div class="cell small-12 blue temp-height sdg">
</div> 
</div>

</div>
<div class="cell small-12 medium-6">
<div class="grid-x align middle"> 
<div class="cell small-12 community-img"> 

</div>
<div class="cell small-12 text-center"> 
<div class="grid-x community-heading-height align-middle"> 
  <div class="cell">
     <h2 class="dsuon-green-text dsuon-letter-spacing"> Community </h2>
  <h6 class="dsuon-green-text"> Follow our journey as we navigate Nigeria's social landscape </h6>
    </div>
  </div>
</div>
</div>
</div>
<div class="cell small-12 medium-3"> 
<div class=grid-x> 
<div class="cell small-12 gold temp-height sdg">
</div> 
<div class="cell small-12 yellow temp-height sdg">
</div> 
<div class="cell small-12 purp1 temp-height sdg">
</div> 
</div>

</div>

</div>

<div class="grid-x clear-space text-center"> 
<div class="cell small-12 standard-padding">

<p> <?php the_field('community_introduction'); ?> </p>

</div>

<div class="cell small-12">
		<img src="<?php echo get_template_directory_uri(); ?>/images/footprint.png">
	</div>
</div>

<div class="grid-x text-center clear-space"> 
 <div class="cell small-12"> 
       <h2 class="dsuon-green-text dsuon-letter-spacing"> KEY PROJECTS </h2>
       <h6 class="dsuon-green-text"> We put people first </h6>
 </div>

 <div class="grid-x standard-margin-top-bottom">

<div class="cell small-12 campaign-group"> 
  <div class="grid-x dsuon-orange-bg campaign-strip-padding campaign-strip"> 
        <div class="cell small-5"> 
              
        </div>
         <div class="cell medium-7 text-center"> 
            <h3 class="white dsuon-letter-spacing heading lfe"> <?php the_field('community_project_heading'); ?> </h3>
        </div>
  </div>
    <div class="grid-x text-center"> 


  <div class="cell small-12 medium-5 campaign-image campaign-image-height campaign-image">
  <img class="campaign-strip campaign-banner" src="<?php the_field('community_project_banner'); ?>">
      
 </div>
        <div class="cell standard-padding small-12 medium-5 medium-offset-1 campaign-intro-pad"> 
        <p><?php the_field('community_project_summary'); ?>
         </p>

        <button class="btn-orange"> Read more </button>
              
        </div>
  </div>
</div>
</div>
</div>


<?php get_footer(); ?>