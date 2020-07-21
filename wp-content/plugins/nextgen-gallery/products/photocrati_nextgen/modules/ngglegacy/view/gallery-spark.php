<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>

<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div id="owl" class="owl-carousel owl-theme">
	<?php foreach ( $images as $image ) { ?>
   <div class="item" style="background-image: url('<?php echo nextgen_esc_url($image->thumbnailURL) ?>');">
		<!-- <img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />              -->  
		<div class="slider-title">
			<?php echo esc_attr($image->alttext) ?>
		</div>
   </div> 
   <?php } ?>
</div>
<!--<div class="owl-carousel mb7">
<?php /*foreach ( $images as $image ) { ?>
	<div>
		<img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
		<div class="carousel__title"><?php echo esc_attr($image->alttext) ?></div>
	</div>
<?php }*/ ?>
</div>-->
<?php endif; ?>