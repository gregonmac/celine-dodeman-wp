<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */
$str = <<<'XML'
<section class="focus" id="team">
    <div class="container">
        <div class="section-header">
            <h2 class="dark-text">Découvrez l’aquarelle</h2>
        </div>
        <div class="row" data-scrollreveal="enter left after 0s over 0.1s" data-sr-init="true"
             data-sr-complete="true">
<span id="zerif_team-widget-1" class="">
			<div class="col-md-12 team-box">

				<div class="team-member" tabindex="0">
					<figure class="profile-pic">
						<img src="/wp-content/uploads/2017/11/portrait-médaillon-Céline.jpg" alt=""></img>
					</figure>
					<div class="member-details">
							<h3 class="dark-text red-border-bottom">Céline Dodeman</h3>
							<div class="position" style="padding-top:10px">
							<p style="color:#71B0CB;font-weight:bold">Artiste &amp; Professeur d’Arts Plastiques</p>
<p>Diplômée de l’Ecole Supérieure des Arts Appliqués Duperré j’enseigne l’aquarelle avec pédagogie depuis 2011.</p>
<p>Retrouvez-moi lors de cours d’aquarelle à Rennes ou de stages d’aquarelle à Hédé.</p>
							</div>
					</div>
				</div>
			</div>

			</span>
        </div>
    </div>
</section>
XML;
echo $str;
zerif_before_our_team_trigger();

echo '<section class="our-team" id="team">';

	zerif_top_our_team_trigger();

	echo '<div class="container">';

//		echo '<div class="section-header">';
//
//			/* Title */
//			zerif_our_team_header_title_trigger();
//
//			/* Subtitle */
//			zerif_our_team_header_subtitle_trigger();
//
//		echo '</div>';

if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
	echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
	dynamic_sidebar( 'sidebar-ourteam' );
	echo '</div> ';
} elseif ( current_user_can( 'edit_theme_options' ) ) {

	if ( is_customize_preview() ) {
		/* translators: Our team section */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), __( 'Our team section', 'zerif-lite' ) );
	} else {
		/* translators: Our team section in customizer */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Our team section', 'zerif-lite' ) ) );
	}
}

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();
