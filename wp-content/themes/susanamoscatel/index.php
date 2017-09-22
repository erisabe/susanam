<?php get_template_part('head') ?>
	<body>
<?php get_header(); ?>
		<div class="contTotal"><!--inicio contenedor total-->	
			<div class="contPrincipal"><!--inicio contenedor principal-->
				<div class="modPrincipal"><!--mod principal-->
					<div class="cajaNombre">
						<span>Susana Moscatel</span>
						<div class="linea"></div>
						<span class="textCaja">PERIODISTA</span>
					</div>
				</div><!--mod principal-->

				<div class="fraseDiaria"><!--frase diario-->
					<span class="textCaja chica">FRASE DEL DÍA</span><br>
					<span class="comillas">"</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</span><span class="comillas">"</span>
				</div><!--frase diario-->

				<div class="modulo"><!--video-->
					<div class="video"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></div>
				</div><!--video-->

			<div class="modulo"><!--pricipales-->
				<?php
					$args = array(
						'posts_per_page'   => 2,
						'category_name'    => 'articulos',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'post_status'      => 'publish'
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							?>
				
							<div class="nota">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"> 
									</a>
								<div class="linea azul"></div>
								<span class="tituloNota">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</span>
								<span class="teaser"><?php echo strip_tags(get_the_excerpt()); ?></span>
							</div>
							<?php
						}
					}
					?>
				<div class="nota banner">
					<div class="centrarHeader">
						<div class="box"><img src="<?php echo THEME_DIR ?>/images/box.jpg"></div>
					</div>
				</div>

			</div><!--pricipales-->

			

			<div class="modulo azul"><!--contenedor libros-->
				<div class="titModulo"><span>Libros</span></div>

				<div class="libros"><!--libros-->
					<div class="libro"><!--libro-->
						<div class="infoLibro">
							<div class="linea azul color"></div>
							<span class="tituloNota blanco">
								<a href="#">Enganchados</a>
							</span><br>
							<span class="subLibro">Edición Kindle</span>
						</div>
						<div class="cajaLibro">
							<img src="<?php echo THEME_DIR ?>/images/libro.jpg">
						</div>
					</div><!--libro-->
					<div class="libro"><!--libro-->
						<div class="infoLibro">
							<div class="linea azul color"></div>
							<span class="tituloNota blanco">
								<a href="#">Toda mujer debe tener un marido gay</a>
							</span><br>
						</div>
						<div class="cajaLibro">
							<img src="<?php echo THEME_DIR ?>/images/libro.jpg">
						</div>
					</div><!--libro-->
					<div class="libro"><!--libro-->
						<div class="infoLibro">
							<div class="linea azul color"></div>
							<span class="tituloNota blanco">
								<a href="#">Enganchados</a>
							</span><br>
							<span class="subLibro">Edición Kindle</span>
						</div>
						<div class="cajaLibro">
							<img src="<?php echo THEME_DIR ?>/images/libro.jpg">
						</div>
					</div><!--libro-->

				</div><!--contenedor libros-->

			</div><!--libros-->


			<div class="modulo margen"><!--conferrencias-->
				<div class="modulo interno"><!--modulo interno-->
					<div class="bannerM">
						<div class="half"><img src="<?php echo THEME_DIR ?>/images/300600.jpg"></div>
					</div>

					<div class="conferencias"><!--caja gris-->
						<div class="titModulo gris"><span>Conferencias</span></div>

						<div class="notasGrises">

							<?php
							$args = array(
								'posts_per_page'   => 2,
								'category_name'    => 'conferencias',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish'
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									?>
									<div class="nota chica"><!--nota-->
										<span class="imgGris"><a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"></a></span>
										<div class="linea azul"></div>
										<span class="tituloNota">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</span>
										<span class="teaser"><?php echo strip_tags(get_the_excerpt()); ?></span>
									</div><!--nota-->
									<?php 
								}
							}
							?>	
						</div><!--notas grises-->
					</div><!--caja gris-->


				</div><!--modulo interno-->

			</div><!--conferrencias-->

			<div class="modulo vH"><!--videos-->
				<div class="titModulo gris vH"><span>Videos</span></div>
							<div class="nota vH"><!--nota-->
								<span class="imgGris"><a href="#"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></a></span>
								<div class="play">
									<i class="fa fa-play-circle-o" aria-hidden="true"></i>
								</div>
								<div class="linea gris"></div>
								<span class="tituloNota">
									<a href="#">Título del video</a>
								</span>
								
							</div><!--nota-->
							<div class="nota vH"><!--nota-->
								<span class="imgGris"><a href="#"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></a></span>
								<div class="play">
									<i class="fa fa-play-circle-o" aria-hidden="true"></i>
								</div>
								<div class="linea gris"></div>
								<span class="tituloNota">
									<a href="#">Título del video</a>
								</span>
								
							</div><!--nota-->
							<div class="nota vH"><!--nota-->
								<span class="imgGris"><a href="#"><img src="<?php echo THEME_DIR ?>/images/imagen.jpg"></a></span>
								<div class="play">
									<i class="fa fa-play-circle-o" aria-hidden="true"></i>
								</div>
								<div class="linea gris"></div>
								<span class="tituloNota">
									<a href="#">Título del video</a>
								</span>
								
							</div><!--nota-->
			</div><!--videos-->

			<div class="modulo azul galeria"><!--contenedor galeria-->
				<div class="titModulo"><span>Galería</span></div>
				<div class="galerias"><!--libros-->
					<div class="item"><!--fotogaleria-->
						<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
						<div class="plus" id="ver1"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
					</div><!--fotogaleria-->
					<div class="item"><!--fotogaleria-->
						<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
						<div class="plus" id="ver2"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
					</div><!--fotogaleria-->
					<div class="item"><!--fotogaleria-->
						<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
						<div class="plus" id="ver3"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
					</div><!--fotogaleria-->
					<div class="item"><!--fotogaleria-->
						<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
						<div class="plus" id="ver4"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
					</div><!--fotogaleria-->
					
				</div><!--libros-->
			</div><!--contenedor galeria-->

			</div><!--fin contenedor principal-->

			
		</div><!--fin contenedor total-->

		<div class="foto1"><!--foto1-->
			<div class="centrarFooter galeria">
				<div class="fotoGal">
					<div class="close galeria"><i class="fa fa-times" aria-hidden="true"></i></div>
					<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
					<span class="teaser galeria">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					<button id="sig1">Siguiente foto</button>
				</div>	
			</div>
		</div><!--foto1-->

		<div class="foto2"><!--foto2-->
			<div class="centrarFooter galeria">
				<div class="fotoGal">
					<div class="close galeria"><i class="fa fa-times" aria-hidden="true"></i></div>
					<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
					<span class="teaser galeria">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					<button id="sig2">Siguiente foto</button>
				</div>	
			</div>
		</div><!--foto2-->

		<div class="foto3"><!--foto3-->
			<div class="centrarFooter galeria">
				<div class="fotoGal">
					<div class="close galeria"><i class="fa fa-times" aria-hidden="true"></i></div>
					<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
					<span class="teaser galeria">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					<button id="sig3">Siguiente foto</button>
				</div>	
			</div>
		</div><!--foto3-->

		<div class="foto4"><!--foto4-->
			<div class="centrarFooter galeria">
				<div class="fotoGal">
					<div class="close galeria"><i class="fa fa-times" aria-hidden="true"></i></div>
					<img src="<?php echo THEME_DIR ?>/images/imagen.jpg">
					<span class="teaser galeria">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					<button>Ver más fotografías</button>
				</div>	
			</div>
		</div><!--foto4-->

<?php get_footer(); ?>
