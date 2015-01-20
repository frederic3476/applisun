<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
	do_action( '__before_footer' ); ?>
		<!-- FOOTER -->
		<footer id="footer">
		 	<div class="container">
				
				<div class="rowfooter">
					<div class="span12">
						<div class="bottom fixclear">
							<div class="copyright">
								<a href="/"><img src="http://localhost/applisun/wp-content/uploads/2015/01/logo-applisunc.png" width="136" height="44" alt="creation site internet"></a>
								<p>© 2015 Applisun | <a title="Mentions légales" href="?page_id=36" class="map-link" style="color : #8B8C8D">Mentions légales</a><br>Marque déposée INPI n° 4121839 - SIREN n°</p>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</footer>
		<?php 
		wp_footer(); //do not remove, used by the theme and many plugins
	do_action( '__after_footer' ); ?>
	</body>
	<?php do_action( '__after_body' ); ?>
</html>