<?php
/**
 * Template Name: Contato
 * Description: Contato
 *
 * @package Portfólio_Hudson_Carolino
 */

get_header(); ?>
<div class="pg pg-contato">

	<p class="tituloContato">Entre em contato</p>
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="formulario">
					<?php echo do_shortcode('[contact-form-7 id="11" title="Formulário de contato"]'); ?>
				</div>
			</div>

			<div class="col-md-6 hidden">
				<div class="endereco">
					<p>
						<a href="#" target="_blank">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</a>
						Curitiba - PR
					</p>
					<p>
						<a href="#" target="_blank" class="email">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<i class="fa fa-envelope-open" aria-hidden="true"></i>
						</a>
						carolinohudson@gmail.com
					</p>

					<p>
						<a href="#" target="_blank">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
						HudsonCaroino
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>