
<section class="products">

    <h2>Suositut tuotteet</h2>
    <?php
    $args = ['tag' => 'featured', 'posts_per_page' => 3];
    $products = new WP_Query($args);
    generate_article($products);
    ?>

</section>