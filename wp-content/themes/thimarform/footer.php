				<div class="cta row no-gutters">
					<div class="col-10 offset-1">
						<div class="text-center mt-4">
							<?php
							if ( $cta_text = get_field('cta_text') ) {
								echo wpautop( $cta_text );
							}
							?>
						</div>
						<?php
						$cta_button = get_field('cta_button');
						if ( ! empty( $cta_button['link'] ) ) :
						?>
							<div class="text-center mb-4">
								<?php the_button( $cta_button ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

			<footer class="site-footer">
				<div class="row no-gutters">
					<div class="col-10 offset-1 py-4">
						<div class="row">
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Öppettider</h3>
								<hr>
								<?php
								$opening_hours = get_field('company_info_opening_hours', 'option');
								echo sprintf(
									'<p><span class="text-uppercase">Butik</span><br>%s</p><p><span class="text-uppercase">Hämtlager</span><br>%s</p>',
									$opening_hours['store'],
									$opening_hours['warehouse']
								);
								?>
							</div>
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Adress</h3>
								<hr>
								<?php
								$address = get_field('company_info_address', 'option');
								echo sprintf(
									'<p><span class="text-uppercase">Butik</span><br>%s</p><p><span class="text-uppercase">Hämtlager</span><br>%s</p>',
									$address['store'],
									$address['warehouse']
								);
								?>
							</div>
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Kontakt</h3>
								<hr>
								<p>
									<?php
									the_field('company_info_phone', 'option');
									echo '<br>';
									if ( have_rows('company_info_email', 'option') ) {
										while ( have_rows('company_info_email', 'option') ) {
											the_row();
											$email = get_sub_field('email');
											echo sprintf('<a href="mailto:%s">%s</a><br>', antispambot( $email['address'] ), $email['label'] );
										}
									}
									?>
								</p>
							</div>
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Socialt</h3>
								<hr>
								<p>Inspireras på Instagram och Facebook.</p>
								<div class="d-flex justify-content-center">
									<div class="social-media-icon social-media-icon--instagram">
										<a href="<?php the_field('company_info_instagram', 'option');?>" target="_blank"><?php echo file_get_contents(__DIR__.'/assets/img/icon-instagram.svg');?></a>
									</div>
									<div class="social-media-icon social-media-icon--facebook">
										<a href="<?php the_field('company_info_facebook', 'option');?>" target="_blank"><?php echo file_get_contents(__DIR__.'/assets/img/icon-facebook.svg');?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div> <!-- .site-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>