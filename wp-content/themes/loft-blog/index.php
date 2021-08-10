<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Loft_Blog
 */

get_header();
?>
<style>
	.main-content {
        height: 60vh;
        padding: 20px;
      }
</style>

	<div class="main-content">
      <h1>Основной контент</h1>
      <p>Это какой-то параграф. </p>
    </div>	
<?php
get_footer();
