
</div> <!-- main -->
</div> <!-- main -->

<?php if(get_field("testimonial")) { ?>

<div id="bottom-content">
<?php 
wp_reset_postdata();
wp_reset_query();
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$image = get_field('page_bottom_photo');
$bcStyle = ($image) ? ' style="background-image:url('.$image['url'].')"' : '';
?>
<div class="bottom-inner-img"<?php echo $bcStyle ?>>
	<?php if( !empty($image) ) { ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
	<?php } ?>
	<div id="bottom-content-testimonial-wrapper">
		<div id="bottom-content-testimonial"><?php the_field("testimonial"); ?></div>
	</div>
</div>
</div>
<?php endwhile; endif; ?>

<?php } ?>


<div id="footer">



<div id="footer2-wrapper">

<div id="footer2-column1">Heart Math Tutoring | <a href='ma&#105;&#108;&#116;o&#58;volunt&#101;e%72%40h%6&#53;ar&#37;&#55;4tu&#116;o&#114;in&#103;%2E&#111;%7&#50;g'>&#118;olunt&#101;e&#114;&#64;&#104;&#101;a&#114;t&#116;&#117;t&#111;ring&#46;org</a>

<div class="clear"></div>

<div class="sociallinks">
<?php if( $social = get_social_media() ) { ?>
	<?php foreach ($social as $type=>$data) { ?>
	<a href="<?php echo $data[0] ?>" target="_blank" class="social <?php echo $type ?>"><i class="<?php echo $data[1] ?>"></i><span style="position:absolute;z-index:-999"><?php echo ucwords($type) ?></span></a>	
	<?php } ?>
<?php } ?>
</div>

<br>
<a href="<?php bloginfo('url'); ?>/contact-us">CONTACT US</a> &nbsp; | &nbsp;
<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> &nbsp; | &nbsp; site by <a href="https://www.bellaworksweb.com" target="_blank">Bellaworks</a>

</div>


	

<div id="footer2-right">
	<div id="newsletter-signup-footer">
		<?php echo do_shortcode("[pdb_signup]"); ?>
	</div>
	<div class="clear"></div>
	


</div>


</div>
</div>
	

<?php wp_footer(); ?>

</body>
</html>
