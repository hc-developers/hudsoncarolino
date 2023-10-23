<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfólio_Hudson_Carolino
 */
global $configuracao;

$infoRodape = explode("|", $configuracao['opt_info_rodape']);

?>
	<!-- RODAPÉ -->
	<footer class="rodape">
		<div class="infosContato">
			<div class="infos">
				<?php if ($configuracao['opt_endereco']): ?>
				<a href="https://www.google.com.br/maps/place/<?php echo $configuracao['opt_endereco'] ?> " target="_blank">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</a>
				<?php 
					endif; 
					if ($configuracao['opt_Email']):
				?>
				<a href="malito:<?php echo $configuracao['opt_Email'] ?> " class="email">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<i class="fa fa-envelope-open" aria-hidden="true"></i>
				</a>
				<?php 
					endif; 
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
			<div class="nome">
				<h1><?php echo $infoRodape[0] ?></h1>
				<h2><?php echo $infoRodape[1] ?></h2>
			</div>
		
		</div>
		<div class="row">
			<div class="col-sm-6 text-center">
				<p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i><?php echo $configuracao['opt_Copyryght']; ?></p>
			</div>
			<div class="col-sm-6 text-center">
				<p class="design">DESIGN BY <a href="https://www.facebook.com/dldesignerc/" target="_blank">DL Designer</a></p>
			</div>
		</div>
	</footer>
	<script>
		$(document).ready(function() {
			<?php echo $configuracao['scripts_rodape'] ?>
		});
	</script>
<?php wp_footer(); ?>

</body>
</html>
