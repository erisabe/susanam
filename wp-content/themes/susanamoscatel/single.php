<?php get_template_part('head') ?>
	<body>
		<?php get_header(); ?>
		<div class="contTotal"><!--inicio contenedor total-->	

			<div class="contPrincipal"><!--inicio contenedor principal-->

			<div class="colIzquierda"><!--col izquierda-->
				<article>
					<?php
					if ( have_posts() ) 
					{
						while ( have_posts() ) 
						{
							the_post(); 
							$postid= get_the_ID();
							$excerpt = get_the_excerpt( $post );
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postid), 'large' );
							$url=$thumb[0];
							$post_author_id = get_post_field( 'post_author', $postid );
							$author_url = get_author_posts_url( $post_author_id );
							?> 
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
							<h1><?php the_title(); ?></h1>
							<div class="lR"><span></span></div>
							<span class="cuerpoText"> <?php the_content(); ?></span>
							<?php
						}
					}
					?>			

				</article>
				<div class="modulo relacionadas"><!--pricipales-->

					<div class="titSeccion"><div class="linSecc"></div><span>Te puede interesar</span></div>

					<div class="nota relA">
						<a href="#"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></a>
						<div class="linea azul"></div>
						<span class="tituloNota">
							<a href="#">Título de la nota</a>
						</span>
						<span class="teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					</div>

					<div class="nota relA">
						<a href="#"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></a>
						<div class="linea azul"></div>
						<span class="tituloNota">
							<a href="#">Título de la nota</a>
						</span>
						<span class="teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					</div>
				</div><!--pricipales-->
			</div><!--col izquierda-->

			<?php  get_sidebar();?>



			</div><!--fin contenedor principal-->
			
		</div><!--fin contenedor total-->

<?php get_footer();?>
