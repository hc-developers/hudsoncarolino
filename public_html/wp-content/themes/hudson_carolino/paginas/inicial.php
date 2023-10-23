<?php
/**
 * Template Name: Inicial
 * Description: Página inicial
 *
 * @package Portfólio_Hudson_Carolino
 */

get_header(); ?>
<!-- PÁGINA INICIAL -->
<div class="pg pg-inicial">
	
	<!-- CARROSSEL DESTAQUE -->
	<section class="carrosselDestaque">
		<h6 class="hidden">Destaque</h6>
		<div id="carrosselDestaque" class="owl-Carousel">
			<?php 
				$i = 0;
				//LOOP DE POST DESTAQUES
				$posDestaques = new WP_Query( array( 'post_type' => 'destaque', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1) );
				while ( $posDestaques->have_posts() ) : $posDestaques->the_post();
				$fotoDestaque = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$fotoDestaque = $fotoDestaque[0];
				$destaque_link = rwmb_meta('Hudson_Carolino_destaque_link');
				$destaque_video = rwmb_meta('Hudson_Carolino_destaque_video');
				 if ($destaque_video == 1):
					
			 ?>
			 <!-- ITEM TIPO VÍDEO -->
			<figure class="item" >
				<a href="#portfolio" target="_blank" class="scrollTop">
						<div class="texto">
							<?php echo get_the_content() ?>
						</div>
					</a>
				<video loop="" autoplay="" muted="" class="video<?php echo $i  ?>" style="background:url(<?php echo $fotoDestaque ?> )" id="">
						<source src="<?php echo $destaque_link ?>" type="video/mp4">
					</video>
			</figure>
			
			
			<?php else: ?>
			<!-- ITEM TIPO FOTO-->
			<figure class="item" style="background:url(<?php echo $fotoDestaque ?>)">
				<?php if ($destaque_link != ""): ?>
					<a href="<?php echo $destaque_link ?>" target="_blank">
						<div class="texto">
							<?php echo get_the_content() ?>
						</div>
					</a>
				<?php else: ?>

					<div class="texto">
						<?php echo get_the_content() ?>
					</div>

				<?php endif; ?>
			</figure>
			<?php  endif;$i++;endwhile; wp_reset_query(); ?>

		</div>

		<div class="btnCarrossel">
			<button id="btnCarrosselLeft"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
			<button id="btnCarrosselRight"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
		</div>
	</section>

	<!-- SECTION SOBRE MIM -->
	<section class="sobre" id="sobre">
		<h6 class="hidden"><?php echo get_the_title() ?></h6>
		<div class="row">
			<?php 
				$foto_paginaInicial = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$foto_paginaInicial = $foto_paginaInicial[0];
			?>
			<div class="col-sm-6">
				<figure>
					<img src="<?php echo $foto_paginaInicial ?>" alt="<?php echo get_the_title() ?>">
				</figure>
			</div>

			<div class="col-sm-6">
				<article>
				<h6 class="hidden">Sobre mim</h6>
					<div class="texto">
						<?php echo the_content(); ?>
					</div>
				</article>

				<div class="redesSociais">
				<?php 
					if ($configuracao['opt_face']):
				?>
				<a href="<?php echo $configuracao['opt_face'] ?> " target="_blank">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
				</a>
				<?php 
					endif; 
					if ($configuracao['opt_face']):
				?>
				<a href="<?php echo $configuracao['opt_linkedin'] ?> " target="_blank">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<?php 
					endif; 
					if ($configuracao['opt_face']):
				?>
				<a href="<?php echo $configuracao['opt_instagram'] ?> " target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<?php 
					endif; 
					if ($configuracao['opt_telefone']):
				?>
				<a href="tel:<?php echo $configuracao['opt_telefone'] ?> ">
					<i class="fa fa-whatsapp" aria-hidden="true"></i>
				</a>
				<?php endif; ?>
				</div>
			</div>

		</div>
	</section>
	
	<!-- HABILIDADES / FERRAMENTAS -->
	<section class="minhasSkius" id="skiill">
		<h6 class="hidden">Habilidades e Ferramentas</h6>
		<div class="areaSkius">
			<div class="row">
				<?php 
					//LOOP DE POST CATEGORIA HABILIDADES				
					$habilidades = new WP_Query(array(
						'post_type'     => 'habilidades',
						'posts_per_page'   => -1,
						'tax_query'     => array(
							array(
								'taxonomy' => 'categoriaHabilidades',
								'field'    => 'slug',
								'terms'    => 'habilidades',
								)
							)
						)
					);
					if ($habilidades): 
				?>
				<div class="col-sm-6">
					<div class="skius">
						<div class="titulo">
							<span>Minhas Habilidades</span>
						</div>
						<ul class="skiusRight">
							<?php 
								// LOOP DE POST
								while ( $habilidades->have_posts() ) : $habilidades->the_post();
									$habilidade_icone = rwmb_meta('Hudson_Carolino_habilidade_icone');
									$habilidade_cor = rwmb_meta('Hudson_Carolino_habilidade_cor');
									$habilidade_largura = rwmb_meta('Hudson_Carolino_habilidade_largura');
							?>
							<li <?php if ($habilidade_cor) {echo 'class="ativo"';} ?> data-largura="<?php echo $habilidade_largura ?>" style="background:<?php echo $habilidade_cor ?>">
								<i class="fa <?php echo $habilidade_icone ?>" aria-hidden="true"></i>
								<h2><?php echo get_the_title() ?></h2>
								<span data-largura="<?php echo $habilidade_largura ?>"></span>
							</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<?php
					endif; 
					//LOOP DE POST CATEGORIA FERRAMENTAS				
					$ferramentas = new WP_Query(array(
						'post_type'     => 'habilidades',
						'posts_per_page'   => -1,
						'tax_query'     => array(
							array(
								'taxonomy' => 'categoriaHabilidades',
								'field'    => 'slug',
								'terms'    => 'ferramentas',
								)
							)
						)
					);
					if ($ferramentas):
				?>
				<div class="col-sm-6">
					<div class="skius">
						<div class="titulo">
						<span>Ferramentas</span>
						</div>
						<ul class="skiusRight skiusLeft">
							<?php 
								// LOOP DE POST
								while ( $ferramentas->have_posts() ) : $ferramentas->the_post();
									$ferramentas_icone = rwmb_meta('Hudson_Carolino_habilidade_icone');
									$ferramentas_cor = rwmb_meta('Hudson_Carolino_habilidade_cor');
									$ferramentas_largura = rwmb_meta('Hudson_Carolino_habilidade_largura');
							?>
							<li <?php if ($habilidade_cor != " ") {echo 'class="ativo"';} ?> data-largura="<?php echo $ferramentas_largura ?>" style="background:<?php echo $ferramentas_cor ?>">
								<i class="fa <?php echo $ferramentas_icone ?>" aria-hidden="true"></i>
								<h2><?php echo get_the_title() ?></h2>
								<span data-largura="<?php echo $ferramentas_largura ?>"></span>
							</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<?php endif; ?>

			</div>
		</div>
	</section>

	<?php 
		//LOOP DE POST CATEGORIA HABILIDADES				
		$caracteristicas = new WP_Query(array(
			'post_type'     => 'habilidades',
			'posts_per_page'   => -1,
			'tax_query'     => array(
				array(
					'taxonomy' => 'categoriaHabilidades',
					'field'    => 'slug',
					'terms'    => 'caracteristicas',
					)
				)
			)
		);
		if ($caracteristicas): 
	?>
	<!-- MINHAS CARACTERISTICAS -->
	<section class="caracteristicas" id="caracteristicas">
		<h6 class="hidden">Minhas Características</h6>
		<div class="titulo text-center">
			<span>Minhas Características</span>
		</div>
		<ul>
			<?php 
				// LOOP DE POST
				while ( $caracteristicas->have_posts() ) : $caracteristicas->the_post();
					$caracteristicas_icone = rwmb_meta('Hudson_Carolino_habilidade_icone');
			?>
			<li>
				<i class="fa <?php echo $caracteristicas_icone  ?>" aria-hidden="true"></i>
				<h3><?php echo get_the_title() ?></h3>
			</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
		
	</section>
	<?php endif; ?>

	<!-- SECTION SOBRE MIM -->
	<section class="sobre front-end" id="front-end">
		<h6 class="hidden">Front-End</h6>
		<div class="row ">
			
			<div class="col-md-6">
				<article>
				<h6 class="hidden">Front-end</h6>
					<div class="texto">
						<?php echo $inicial_texto = rwmb_meta('Hudson_Carolino_inicial_texto'); ?>
					</div>
				</article>
			</div>

			<div class="col-md-6">
				<?php 
					$inicial_foto_ilustrativa = rwmb_meta('Hudson_Carolino_inicial_foto_ilustrativa'); 
					foreach ($inicial_foto_ilustrativa  as $inicial_foto_ilustrativa):
						$inicial_foto_ilustrativa = $inicial_foto_ilustrativa['full_url'];
					
				?>
				<figure style="background:url(<?php echo $inicial_foto_ilustrativa ?>)">
				</figure>
			<?php endforeach; ?>
			</div>

		</div>
	</section>

	<!-- PORTFÓLIO -->
	<section class="portfolio" id="portfolio">
		<h6 class="hidden">Portfólio</h6>
		<div class="titulo interno text-center">
			<span>Portfólio</span>
		</div>

		<div class="projetos">
			<ul>
				<?php 
					//LOOP DE POST PTOJETOS
					$projetos = new WP_Query( array( 'post_type' => 'projetos', 'orderby' => 'id', 'posts_per_page' => -1) );
					while ( $projetos->have_posts() ) : $projetos->the_post();
					$fotoProjetos = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$fotoProjetos = $fotoProjetos[0];
					$projeto_logo = rwmb_meta('Hudson_Carolino_projeto_logo'); 
				 ?>
				<li class="projeto" title="<?php echo get_the_title() ?>">
					<a href=" <?php echo get_permalink() ?> ">
						<figure style="background:url(<?php echo $fotoProjetos ?>)">
						<?php 
							foreach ($projeto_logo  as $projeto_logo):
						?>
							<img src="<?php echo $projeto_logo = $projeto_logo["full_url"] ?>" alt="<?php echo get_the_title() ?>">
						<?php endforeach; ?>
						</figure>
					</a>
				</li>
				 <?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</section>

	<section class="sessaoDepoimentos">
		<div class="titulo interno text-center">
			<span>Depoimentos</span>
		</div>
		<div class="container">
			<div class="depoimentos">
				<div id="carrosselDepoimentos" class="owl-Carousel">
					<?php 
					//LOOP DE POST PTOJETOS
					$depoimentos = new WP_Query( array( 'post_type' => 'depoimento', 'orderby' => 'id', 'posts_per_page' => -1) );
					while ( $depoimentos->have_posts() ) : $depoimentos->the_post();
						$fotodepoimentos = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$fotodepoimentos = $fotodepoimentos[0];

						?>
						<div class="item">
							<article>
								<?php echo the_content() ?>
								<figure style="background: url(<?php echo $fotodepoimentos  ?>)"></figure>
								<h2><?php echo get_the_title() ?></h2>
							</article>

						</div>
					<?php endwhile;wp_reset_query();  ?>
				</div>
				<div class="buttons">
					<div class="row">
						<div class="col-xs-6">
							<button id="depoimentosLeft"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
						</div>
						<div class="col-xs-6">
							<button id="depoimentosRight"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>