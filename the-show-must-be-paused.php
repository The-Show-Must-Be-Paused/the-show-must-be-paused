<?php
/*
Plugin Name: The Show Must Be Paused
Plugin URI:https://github.com/The-Show-Must-Be-Paused/the-show-must-be-paused
Description: A show of solidarity with George Floyd.
Version: 1.0.1
Author: johnstonphilip
Text Domain: the-show-must-be-paused
Domain Path: languages
License: GPLv3
*/

/*
Copyright 2020  The Show Must Be Paused

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output the message on all front-end pages.
 *
 * @access private
 * @since  1.0.0
 * @return void
 */
function the_show_must_be_paused() {

	if ( 'wp-login.php' === $GLOBALS['pagenow'] || is_admin() ) {
		return;
	}

	?>
	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>George Floyd</title>
	<link rel="stylesheet" href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '/bootstrap.min.css' ); ?>">
	<meta name="theme-color" content="#563d7c">

	<style>
		/*
		* Globals
		*/

		/* Links */
		a,
		a:focus,
		a:hover {
			color: #fff;
		}

		/* Custom default button */
		.btn-secondary,
		.btn-secondary:hover,
		.btn-secondary:focus {
			color: #333;
			text-shadow: none; /* Prevent inheritance from `body` */
			background-color: #fff;
			border: .05rem solid #fff;
		}


		/*
		* Base structure
		*/

		html,
		body {
			background-color: #333;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			color: #fff;
			text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
			box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
		}

		.cover-container {
			max-width: 42em;
		}


		/*
		* Header
		*/
		.masthead {
			margin-bottom: 2rem;
		}

		.masthead-brand {
			margin-bottom: 0;
		}

		.nav-masthead .nav-link {
			padding: .25rem 0;
			font-weight: 700;
			color: rgba(255, 255, 255, .5);
			background-color: transparent;
			border-bottom: .25rem solid transparent;
		}

		.nav-masthead .nav-link:hover,
		.nav-masthead .nav-link:focus {
			border-bottom-color: rgba(255, 255, 255, .25);
		}

		.nav-masthead .nav-link + .nav-link {
			margin-left: 1rem;
		}

		.nav-masthead .active {
			color: #fff;
			border-bottom-color: #fff;
		}

		@media (min-width: 48em) {
			.masthead-brand {
				float: left;
			}
			.nav-masthead {
				float: right;
			}
		}


		/*
		* Cover
		*/
		.cover {
			padding: 0 1.5rem;
		}
		.cover .btn-lg {
			padding: .75rem 1.25rem;
			font-weight: 700;
		}


		/*
		* Footer
		*/
		.mastfoot {
			color: rgba(255, 255, 255, .5);
		}
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
					font-size: 3.5rem;
			}
		}
	</style>
	</head>
	<body class="text-center">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	<main role="main" class="inner cover">
	<h1 class="cover-heading">George Floyd</h1>
	<p class="lead mastfoot">Natosha McDade, Yassin Mohamed, Finan H. Berhe, Sean Reed, Steven Demarco Taylor, Breonna Taylor, Ariane McCree, Terrance Franklin, Miles Hall, Darius Tarver, William Green, Samuel David Mallard, Kwame Jones, De’von Bailey, Christopher Whitfield, Anthony Hill, De’Von Bailey, Eric Logan, Jamarion Robinson, Gregory Hill Jr, JaQuavion Slaton, Ryan Twyman, Brandon Webber, Jimmy Atchison, Willie McCoy, Emantic Fitzgerald Bradford J, D’ettrick Griffin, Jemel Roberson, DeAndre Ballard, Botham Shem Jean, Robert Lawrence White, Anthony Lamar Smith, Ramarley Graham, Manuel Loggins Jr, Trayvon Martin, Wendell Allen, Kendrec McDade, Larry Jackson Jr, Jonathan Ferrell, Jordan Baker, Victor White III, Dontre Hamilton, Eric Garner, John Crawford III, Michael Brown, Ezell Ford, Dante Parker, Kajieme Powell, Laquan McDonald, Akai Gurley, Tamir Rice, Rumain Brisbon, Jerame Reid, Charly Keunang, Tony Robinson, Walter Scott, Freddie Gray, Brendon Glenn, Samuel DuBose, Christian Taylor, Jamar Clark, Mario Woods, Quintonio LeGrier, Gregory Gunn, Akiel Denkins, Alton Sterling, Philando Castile, Terrence Sterling, Terence Crutcher, Keith Lamont Scott, Alfred Olango, Jordan Edwards, Stephon Clark, Danny Ray Thomas, DeJuan Guillory, Patrick Harmon, Jonathan Hart, Maurice Granton, Julius Johnson, Jamee Johnson, Michael Dean...</p>
	</main>
	<footer class="mastfoot mt-auto">
		<div class="inner">
			<p><?php echo esc_html( __( 'This site is currently offline, as a small mark of respect, and expression of solidarity.', 'the-show-must-be-paused' ) ); ?></p>
			<p><?php echo wp_kses_post( __( 'Organisations that could use your financial support include <a href="https://blacklivesmatter.com/">Black Lives Matter</a>, <a href="https://www.naacpldf.org">The NAACP Legal Defense and Educational Fund</a>, <a href="https://eji.org">The Equal Justice Initiative</a>, <a href="https://www.wetheprotesters.org">We The Protesters</a>, and the <a href="https://www.gofundme.com/f/georgefloyd">George Floyd Memorial Fund</a>.', 'the-show-must-be-paused' ) ); ?></p>
		</div>
	</footer>
</div>
</body>
</html>
	<?php
	exit;
}
add_action( 'init', 'the_show_must_be_paused' );
