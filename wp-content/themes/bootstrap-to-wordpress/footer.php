<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap to Wordpress
 */

?>

<?php wp_footer(); ?>

<!--SIGN UP SECTION
			================================================================ -->
		<section id='signup' data-type='background' data-speed='4'>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2>Are you ready to take your coding skills to the <strong>next level?</strong></h2>
						<p><a href='#' class='btn btn-lg btn-block btn-success'>Yes, Sign me up!</a></p>
					</div>
				</div><!--row-->
			</div><!-- container-->
			
		</section><!--signup-->

		<!--FOOTER
			================================================================ -->
		<footer>
			<div class="container">
				<div class="col-sm-3">
					<p><a href='#'><img src='assets/img/logo.png' alt='bootstrap to wordpress'></a></p>
				</div><!-- col end -->
				
				<div class="col-sm-6">
					<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="">Home</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Resources</a></li>
							<li><a href="">Contact</a></li>
							<li class='signup-link'><a href="">Sign Up now</a></li>
						</ul>

					</nav>
				</div>

				<div class="col-sm-3">
					<p class="pull-right"> &copy; 2015 Brad Hussey</p>
				</div>

				</div><!-- col end -->
			</div><!--container -->
			
		</footer>

		<!--MODAL
			================================================================ -->

		<div class='modal fade' id='myModal'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;<span class='sr-only'>Close</span></span></button>
						<h4 class='modal-title' id='myModalLabel'><i class='fa fa-envelope'></i> Subscribe to our Mailing List</h4>
					</div>

					<div class="modal-body">
						<p>Simply enter your name and meail! As a thank you for joining us, we're going to give you one of our best-selling courses.<em>for free!</em></p>

						<form class='form-inline' role='form'>

							<div class='form-group'>
								<label class='sr-only' for='subscribe-name'> Your first name </label>
								<input type='text' class='form-control' id='subscribe-name' placeholder='Your First Name'>
							</div>

							<div class='form-group'>
								<label class='sr-only' for='subscribe-email'> Your email </label>
								<input type='text' class='form-control' id='subscribe-email' placeholder='Your Email'>

								<input type='submit' class="btn btn-danger" value="Subscribe!">
							</div>
						</form>

						<hr>

						<p> <small> By providing us with your name and email you will be receiving occasional promotional emails &amp; newsletters. <br> No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time. </small></p>
					</div> <!-- modal body -->
				</div> <!-- modaldialog -->
			</div>
		</div>

		
<!--BOOTSTRAP CORE JAVASCRIPT
	Placed at the end of the document so the pages load faster!
	================================================================ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src='<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.4.min.js'></script>

<script src='<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js'></script>

<script src='<?php bloginfo('template_directory'); ?>/assets/js/main.js'></script>

<!-- Adobe TypeKit Fonts -->
<script src="//use.typekit.net/bzz1gio.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
