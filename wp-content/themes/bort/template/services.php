<?php
/*
Template Name: services
*/
get_header(); ?>

	<main>
		<section class="page-2 section">
			<div class="container">
				<div class="page-2__content flex flex--a-center">
					<h1 class="title mob">Услуги</h1>

					<div class="page-2__line page-2__line--top"></div>

					<div class="flex flex--j-between">
						<div class="page-2__left">
							<div class="flex flex--a-top page-2__row">
								<span><img src="<?php echo get_template_directory_uri()?>/images/page-2/shape-1.svg" alt="shape"></span>
								<p><?php echo get_field("text-pol-1") ?></p>
							</div>

							<div class="flex flex--a-top page-2__row">
								<span> <img src="<?php echo get_template_directory_uri()?>/images/page-2/shape-3.svg" alt="shape"></span>
								<p><?php echo get_field("text-pol-2") ?></p>
							</div>

							<div class="flex flex--a-top page-2__row">
								<span> <img src="<?php echo get_template_directory_uri()?>/images/page-2/vip.svg" alt="vip"></span>
								<p><?php echo get_field("text-pol-3") ?></p>
							</div>

						</div>
						<div class="page-2__right">


							<div class="flex flex--a-top page-2__row">
								<span> <img src="<?php echo get_template_directory_uri()?>/images/page-2/combined-shape.svg" alt="shape"></span>
								<p><?php echo get_field("r-text-pol-1") ?></p>
							</div>

							<div class="flex flex--a-top page-2__row">
								<span><img src="<?php echo get_template_directory_uri()?>/images/page-2/group-3.svg" alt="group"></span>
								<p><?php echo get_field("r-text-pol-2") ?></p>
							</div>

							<div class="flex flex--a-top page-2__row">
								<span><img src="<?php echo get_template_directory_uri()?>/images/page-2/shape-2.svg" alt="shape"></span>
								<p><?php echo get_field("r-text-pol-3") ?></p>
							</div>

						</div>
					</div>
					<div class="page-2__line page-2__line--bottom"></div>
				</div>
			</div>
			<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>
		</section>
	</main>






<?php
get_footer();
