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
									'<p><span class="text-uppercase">Butiken</span><br>%s</p><p><span class="text-uppercase">Hämtlager</span><br>%s</p>',
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
									'<p><span class="text-uppercase">Butiken</span><br>%s</p><p><span class="text-uppercase">Hämtlager</span><br>%s</p>',
									$address['store'],
									$address['warehouse']
								);
								?>
							</div>
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Kontakta oss</h3>
								<hr>
								<p>
									<?php
									the_field('company_info_phone', 'option');
									echo '<br>';
									$email = get_field('company_info_email', 'option');
									echo sprintf('<a href="mailto:%s">%s</a>', antispambot( $email ), antispambot($email) );
									?>
								</p>
							</div>
							<div class="col-sm-6 col-xl-3 mb-4">
								<h3>Följ oss</h3>
								<hr>
								<p>Inspireras via sociala medier, följ oss på Instagram och Facebook.</p>
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