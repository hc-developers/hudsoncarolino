<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfólio_Hudson_Carolino
 */
$projeto_projeto_agencia = rwmb_meta('Hudson_Carolino_projeto_agencia'); 
$projeto_developers = rwmb_meta('Hudson_Carolino_projeto_developers'); 
$projeto_ferramentas = rwmb_meta('Hudson_Carolino_projeto_ferramentas'); 
get_header(); ?>
<div class="pg pg-projeto">
	<h2 class="tiutlo"><?php echo get_the_title() ?></h2>
	<section class="areaDestaque">
		<h6 class="hidden">Galeria</h6>
		<div  id="carrosselProjeto" class="owl-Carousel carrosselProjeto">	
			<?php 
				$projeto_galeria = rwmb_meta('Hudson_Carolino_projeto_galeria'); 
				foreach ($projeto_galeria as $projeto_galeria):
					$projeto_galeria = $projeto_galeria['full_url']
			
			?>
			<figure class="item" style="background:url(<?php echo $projeto_galeria ?>)"></figure>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="descricaoProjeto">
		<div class="row">
			<div class="col-sm-6">
				<div class="descriCaoCliente">
					<?php echo the_content() ?>

					<div class="link">
						<a href=" <?php echo $projeto_link = rwmb_meta('Hudson_Carolino_projeto_link'); ?> " target="_blank">Ver site <i class="fa fa-television" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="titulo">
					<span>Ferramentas <i class="fa fa-code" aria-hidden="true"></i></span>
				</div>
				<!-- HABILIDADES / FERRAMENTAS -->
				<section class="minhasSkius">
					<div class="areaSkius">
						<div class="skius">
							<ul class="skiusRight">
								<?php 
									//LOOP DE POST PROJETOS
									$habilidades = new WP_Query( array( 'post_type' => 'habilidades', 'orderby' => 'id', 'posts_per_page' => -1) );
									while ( $habilidades->have_posts() ) : $habilidades->the_post();
										$habilidade_icone = rwmb_meta('Hudson_Carolino_habilidade_icone');
										$habilidade_cor = rwmb_meta('Hudson_Carolino_habilidade_cor');
										$habilidade_largura = rwmb_meta('Hudson_Carolino_habilidade_largura');
										$verificacao =  in_array($post->ID,$projeto_ferramentas);
										if ($verificacao):
										
							?>
							<li <?php if ($habilidade_cor) {echo 'class="ativo"';} ?> data-largura="<?php echo $habilidade_largura ?>" style="background:<?php echo $habilidade_cor ?>">
								<i class="fa <?php echo $habilidade_icone ?>" aria-hidden="true"></i>
								<h2><?php echo get_the_title() ?></h2>
							</li>
								<?php endif;endwhile; wp_reset_query(); ?>
							
							</ul>
						</div>
					</div>
				</section>

				<div class="agenciaDesenvolvedor">
					
					<div class="titulo">
						<span>Developers <i class="fa fa-users" aria-hidden="true"></i></span>
					</div>
					<?php 

						//LOOP DE POST PROJETOS
						$desenvolvedores = new WP_Query( array( 'post_type' => 'desenvolvedores', 'orderby' => 'id', 'posts_per_page' => -1) );
						while ( $desenvolvedores->have_posts() ) : $desenvolvedores->the_post();
							$fotoDesenvolvedor = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$fotoDesenvolvedor = $fotoDesenvolvedor[0];
							$developer_atuacao = rwmb_meta('Hudson_Carolino_developer_atuacao'); 
							$developer_facebook = rwmb_meta('Hudson_Carolino_developer_facebook'); 
							$verificacao =  in_array($post->ID,$projeto_developers);
							if ($verificacao):
						
					 ?>
					<a href="<?php echo $developer_facebook  ?>" target="_blank" class="perfil">
						<h2><?php echo $developer_atuacao ?></h2>
						<figure style="background: url(<?php echo $fotoDesenvolvedor ?>);"></figure>
						<h3><?php echo get_the_title() ?></h3>
					</a>
					<?php endif;endwhile; wp_reset_query(); ?>
				 	
			 		<div class="titulo">
					<?php 
						//LOOP DE POST AGENCIA
						$agencias = new WP_Query( array( 'post_type' => 'agencia', 'orderby' => 'id', 'posts_per_page' => -1) );
						while ($agencias->have_posts()) : $agencias->the_post();
							$agencia_logo = rwmb_meta('Hudson_Carolino_agencia_logo'); 
							$verificacao =  in_array($post->ID,$projeto_projeto_agencia);
							if ($verificacao):
					?>
						<span>Agência <i class="fa fa-building-o" aria-hidden="true"></i></span>
						<a href="<?php echo get_the_content() ?>" target="_blank">
							<?php foreach ($agencia_logo as $agencia_logo):
								$agencia_logo = $agencia_logo["full_url"];
							 ?>
							<img src="<?php echo $agencia_logo ?>" alt="<?php echo get_the_title() ?> ">
							<?php endforeach ?>
						</a>
					<?php endif; endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</div>
			
		</div>
	</section>
</div>

<?php
get_footer();
