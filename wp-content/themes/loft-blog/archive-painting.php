<?php
get_header();
?>
<style>
    .leftcolumn {
    float: left;
    width: 75%;
    }
    .rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
    }
    .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
    }
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
</style>

<?php
/*$args = array(
    'post_type'      => 'painting',
    'posts_per_page' => 10,
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
    $loop->the_post();
?>
    <div class="entry-content">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <?php
}*/
?>
<div class="row">
    <div class="leftcolumn">
        <?php get_sidebar(2); ?>
    </div>

    <div class="rightcolumn">
        <div class="card">
            <h2>Год</h2>
            <?php

            $terms = get_terms('painting_year');
            foreach ($terms as $term) {
                echo '<a href="'.get_term_link($term).'">'.$term->name.'</a><br />';
            }
            ?>
        </div>
        <div class="card">
            <h2>Страна</h2>
            <?php
            $terms = get_terms('painting_country');
            foreach ($terms as $term) {
                echo '<a href="'.get_term_link($term).'">'.$term->name.'</a><br />';
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();