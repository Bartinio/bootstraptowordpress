	
<?php
	 
$featurette_section_title	= get_field( 'featurette_section_title' );
$video_url	= get_field( 'video_url' );

?>
<!--VIDEO FEATURETTE
	================================================================ -->
<section id='featurette'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-8 col-sm-offset-2'>
				<h2> <?php echo $featurette_section_title; ?></h2>
				<?php if (!empty($video_url) ) : ?>
					<iframe width="100%" height="415" src="<?php echo $video_url['url']; ?>" frameborder="0" allowfullscreen></iframe>
				<?php endif; ?>
			</div><!--col-sm-8-->
		</div><!--row-->
	</div><!--container-->
</section><!--featurette-->