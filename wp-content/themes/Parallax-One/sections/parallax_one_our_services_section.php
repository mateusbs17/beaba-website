<?php
/**
 * SECTION: SERVICES
 *
 * @package parallax-one
 */

$parallax_one_our_services_title = get_theme_mod( 'parallax_one_our_services_title', esc_html__( 'Our Services', 'parallax-one' ) );
$parallax_one_our_services_subtitle = get_theme_mod( 'parallax_one_our_services_subtitle', esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'parallax-one' ) );
$parallax_one_services = get_theme_mod('parallax_one_services_content', json_encode( array(
	array( 'choice' => 'parallax_icon','icon_value' => 'icon-basic-webpage-multiple','title' => esc_html__( 'Lorem Ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one' ), 'id' => 'parallax_one_56fd4d93f3013' ),
	array( 'choice' => 'parallax_icon','icon_value' => 'icon-ecommerce-graph3','title' => esc_html__( 'Lorem Ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one' ), 'id' => 'parallax_one_56fd4d94f3014' ),
	array( 'choice' => 'parallax_icon','icon_value' => 'icon-basic-geolocalize-05','title' => esc_html__( 'Lorem Ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one' ), 'id' => 'parallax_one_56fd4d95f3015' ),
) )	);
$parallax_one_services_pinterest = get_theme_mod( 'paralax_one_services_pinterest_style','5' );
$parallax_one_frontpage_animations = get_theme_mod( 'parallax_one_enable_animations', false );

if ( ! empty( $parallax_one_our_services_title ) || ! empty( $parallax_one_our_services_subtitle ) || ! parallax_one_general_repeater_is_empty( $parallax_one_services ) ) {
	parallax_hook_services_before(); ?>
	
	<section class="services" id="services" role="region" aria-label="<?php esc_html_e( 'Services','parallax-one' ) ?>">
		<?php
		parallax_hook_services_top(); ?>
		<div class="section-overlay-layer">
			<div class="container">

				<div class="row">
					<div class="col-sm-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/f1OcjGtBMlg" frameborder="0"></iframe>
					</div>
					<div class="col-sm-6">
						Bê-a-bá, vamos começar? Beabá é a História em Quadrinhos Independente criada por Daniel Batista. A HQ narra a aventura de Beto, um menino ansioso em conhecer o mundo a sua volta e com uma motivação peculiar: encontrar a "Fonte do Guaraná", As possibilidades de aventuras são incontáveis quando ele se encontra com uma presença inesperada no Brasil.
						<br><br>
						O início de uma história que revisita a cultura brasileira em uma narrativa divertida e empolgante. Aceita um guaraná?
					</div>
				</div>	
					
				<div class="row">
					<div class="row">
						<div class="section-header font-title guarana-title">
							<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-11.png">
						</div>
					</div>	
					<div class="row">
						<div class="aba-guarana">
							<div class="row aba-image">
								<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/guaraná2.png">
							</div>
							<div class="row aba-texto">
								<span>
									Fruto nativo do Brasil, o guaraná vai aparecer muito nessa história e será
									o grande energético dessa aventura. <br>
									<br>
									Com o nome  científico  de Paullinia cupana, o guaranazeiro era uma trepadeira silvestre que foi transformada em arbusto para o cultivo  do fruto. Há rumores de que há uma "fonte do guaraná" e Beto, sendo um menino tão fissurado por este fruto, tem a motivação de encontrá-la.
								</span>
							</div>
						</div>
					</div>
				</div>	

				<div class="section-header font-title personagens-title">
					<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-12.png">
				</div>

				<div class="row">
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-10.png">
						<div class="personagem-descricao">
							Um jovem curumim de origem Sateré-Mawé que traz a lenda do guaraná dentro de si.
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-09.png">
						<div class="personagem-descricao">
							Tem 13 anos. Escoteiro sonhador pronto para uma aventura e uma certa peculiariedade: fissurado em guaraná.
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-08.png">
						<div class="personagem-descricao">
							Avô de Beto, vive até hoje como um militar quando jovem. Meio louco, mas sempre tem uma boa lição a Beto
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-05.png">
						<div class="personagem-descricao">
							Era um Antigo Biólogo do Butantan e atual guardião da "floresta de tupã". Um grande contador de histórias.
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-06.png">
						<div class="personagem-descricao">
							Até agora, o que se sabe é que ele está no meio do Brasil. O que um urso faz por aqui?
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-xs-12 personagem">
						<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-07.png">
						<div class="personagem-descricao">
							Amiga de beto, Lisa é determinada e tem um olhar diferente. Ela gosta de tirar fotos com a "pimba", sua máquina fotográfica.
						</div>
					</div>
				</div>

				<?php
				if ( ! empty( $parallax_one_services ) ) {
					$parallax_one_services_decoded = json_decode( $parallax_one_services );?>
					<div id="our_services_wrap" class="services-wrap <?php if ( ! empty( $parallax_one_services_pinterest ) ) { echo 'our_services_wrap_piterest';} ?>">
						<?php
						foreach ( $parallax_one_services_decoded as $parallax_one_service_box ) {

							$id = $parallax_one_service_box->id;
							$choice = $parallax_one_service_box->choice;
							if ( $choice == 'parallax_icon' ) {
								if ( function_exists( 'pll__' ) ) {
									$icon = pll__( $parallax_one_service_box->icon_value );
								} else {
									$icon = apply_filters( 'wpml_translate_single_string', $parallax_one_service_box->icon_value , 'Parallax One -> Services section', 'Service box icon ' . $id );
								}
							}
							if ( $choice == 'parallax_image' ) {
								if ( function_exists( 'pll__' ) ) {
									$image = pll__( $parallax_one_service_box->image_url );
								} else {
									$image = apply_filters( 'wpml_translate_single_string', $parallax_one_service_box->image_url , 'Parallax One -> Services section', 'Service box image ' . $id );
								}
							}

							if ( function_exists( 'pll__' ) ) {
								$title = pll__( $parallax_one_service_box->title );
								$text = pll__( $parallax_one_service_box->text );
								if ( isset( $parallax_one_service_box->link ) ) {
									$link = pll__( $parallax_one_service_box->link );
								}
							} else {
								$title = apply_filters( 'wpml_translate_single_string', $parallax_one_service_box->title , 'Parallax One -> Services section', 'Service box title ' . $parallax_one_service_box->id );
								$text = apply_filters( 'wpml_translate_single_string', $parallax_one_service_box->text , 'Parallax One -> Services section', 'Service box text ' . $parallax_one_service_box->id );
								if ( isset( $parallax_one_service_box->link ) ) {
									$link = apply_filters( 'wpml_translate_single_string', $parallax_one_service_box->link , 'Parallax One -> Services section', 'Service box link ' . $parallax_one_service_box->id );
								}
							}

							if ( ( ! empty( $icon ) && $icon != 'No Icon' && $choice == 'parallax_icon' )  || ( ! empty( $image )  && $choice == 'parallax_image' ) || ! empty( $title ) || ! empty( $text ) ) {  ?>
								<div class="service-box"
								<?php if ( ! empty( $parallax_one_frontpage_animations ) && ( (bool) $parallax_one_frontpage_animations === true ) ) {
									echo 'data-scrollreveal="enter left after 0.15s over 1s"';
} ?>>
									<?php
									parallax_hook_services_entry_before(); ?>
									<div class="single-service border-bottom-hover">
										<?php
										parallax_hook_services_entry_top();
										if ( ! empty( $choice ) && $choice !== 'parallax_none' ) {

											if ( $choice == 'parallax_icon' ) {
												if ( ! empty( $icon ) ) {
													if ( ! empty( $link ) ) {  ?>
														<div class="service-icon colored-text">
															<a href="<?php echo esc_url( $link ); ?>">
																<span class="fa <?php echo esc_attr( $icon ); ?>"></span>
															</a>
														</div>
													<?php
													} else { ?>
														<div class="service-icon colored-text">
															<span class="fa <?php echo esc_attr( $icon ); ?>"></span>
														</div>
													<?php
													}
												}
											}

											if ( $choice == 'parallax_image' ) {
												if ( ! empty( $image ) ) {
													if ( ! empty( $link ) ) {  ?>
														<a href="<?php echo parallax_one_make_protocol_relative_url( esc_url( $link ) ); ?>">
															<img src="<?php echo esc_url( $image ); ?>" <?php echo ( ! empty( $title ) ? 'alt="' . $title . '"' : ''); ?> />
														</a>
													<?php
													} else { ?>
														<img src="<?php echo esc_url( $image ); ?>" <?php echo ( ! empty( $title ) ? 'alt="' . $title . '"' : ''); ?> />
													<?php
													}
												}
											}
										}

										if ( ! empty( $title ) ) {
											if ( ! empty( $link ) ) {  ?>
												<h3 class="colored-text">
													<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_attr( $title ); ?></a>
												</h3>
											<?php
											} else { ?>
												<h3 class="colored-text"><?php echo esc_attr( $title ); ?></h3>
											<?php
											}
										}

										if ( ! empty( $text ) ) {  ?>
											<p><?php echo html_entity_decode( $text ); ?></p>
										<?php
										}
										parallax_hook_services_entry_bottom(); ?>
									</div>
									<?php
									parallax_hook_services_entry_after(); ?>
								</div>
							<?php
							} // End if().
						} // End foreach(). ?>
					</div>
				<?php
				} // End if(). ?>
			</div>
		</div>
		<?php parallax_hook_services_bottom(); ?>
	</section>
	<?php parallax_hook_services_after(); ?>
<?php
} else {
	if ( is_customize_preview() ) {
		parallax_hook_services_before(); ?>
		<section class="services paralax_one_only_customizer" id="services" role="region" aria-label="<?php esc_html_e( 'Services','parallax-one' ) ?>">
			<?php parallax_hook_services_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="section-header">
						<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>
						<div class="sub-heading paralax_one_only_customizer"></div>
					</div>
				</div>
			</div>
			<?php parallax_hook_services_bottom(); ?>
		</section>
		<?php parallax_hook_services_after();
	} // End if().
}  // End if(). ?>
