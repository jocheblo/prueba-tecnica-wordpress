<?php
/*
**** MAIN TEMPLATE ****
*/
/*--------- HEADER --------------*/
get_header();
/*--------- CONTENT -------------*/

			// loop.
			while ( have_posts() ) :
				
				the_post();

				the_title();
				the_content('Continua leyendo...', get_the_title());


				// Fin loop.
			endwhile;


/*--------- SIDEBAR -------------*/
get_sidebar();
/*--------- FOOTER -------------*/
get_footer();


?>