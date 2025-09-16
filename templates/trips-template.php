<?php
/* Template Name: Trips Template  */

get_header();
?>
<!-- Header -->
<section class="bg-hero-gradient py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">
            Explore Destinations
        </h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Discover amazing places around the world with our carefully curated tours and experiences
        </p>
    </div>
</section>

<!-- Filters -->
<section class="py-8 bg-muted/30 border-b">
    <div class="container mx-auto px-4">
        <form method="GET" class="flex flex-col lg:flex-row gap-4 items-center">
            <input type="hidden" name="paged" value="1" />
            <div class="flex-1 relative">
                <input
                    type="text"
                    name="search"
                    value="<?php echo isset($_GET['search']) ? esc_attr($_GET['search']) : ''; ?>"
                    placeholder="Search destinations..."
                    class="w-full pl-10 pr-3 py-2 border border-input rounded-md" />
                <svg class="absolute left-3 top-3 h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <div class="flex gap-4 items-center">
                <select name="price_range" class="w-48 px-3 py-2 border border-input rounded-md">
                    <option value="">All Prices</option>
                    <option value="0-1000" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '0-1000') ? 'selected' : ''; ?>>Under Rs.1,000</option>
                    <option value="1000-2000" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '1000-2000') ? 'selected' : ''; ?>>Rs.1,000 - Rs.2,000</option>
                    <option value="2000-3000" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '2000-3000') ? 'selected' : ''; ?>>Rs.2,000 - Rs.3,000</option>
                    <option value="3000+" <?php echo (isset($_GET['price_range']) && $_GET['price_range'] == '3000+') ? 'selected' : ''; ?>>Rs.3,000+</option>
                </select>
                <button type="submit" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                    Filter
                </button>
                <a href="<?php echo get_permalink();
                            ?>" class="text-sm text-primary">
                    Clear filters
                </a>
            </div>
        </form>
    </div>
</section>

<!-- Tours Grid -->
<?php
// get all woocommerce products
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 5, // Show 9 products per page
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged
);
// Add search filter
if (!empty($_GET['search'])) {
    $args['s'] = sanitize_text_field($_GET['search']);
}

// Add price filter
if (!empty($_GET['price_range'])) {
    $price_range = explode('-', $_GET['price_range']);

    if (count($price_range) === 2) {
        $args['meta_query'][] = array(
            'key' => '_price',
            'value' => array($price_range[0], $price_range[1]),
            'type' => 'numeric',
            'compare' => 'BETWEEN'
        );
    } elseif ($_GET['price_range'] === '3000+') {
        $args['meta_query'][] = array(
            'key' => '_price',
            'value' => 3000,
            'type' => 'numeric',
            'compare' => '>='
        );
    }
}

$products = new WP_Query($args);

if (empty($products->posts)) {
    echo '
    
    <div class="mt-4 text-center border border-secondary p-2 rounded">
        <h5 class="text-1xl font-semibold">No tours found.</h5>
    </div>';
}

// Update the tours found count
$tours_found = $products->found_posts;

?>
<!-- <div class="flex gap-2 mt-4">
    <span class="bg-secondary text-secondary-foreground px-3 py-1 rounded text-sm">
        <?php //echo $tours_found; 
        ?> tours found
    </span>
    <?php //if (!empty($_GET['search']) || !empty($_GET['price_range'])) : 
    ?>
        <a href="<?php //echo get_permalink(); 
                    ?>" class="text-sm text-primary hover:underline">
            Clear filters
        </a>
    <?php //endif; 
    ?>
</div> -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tour Card 1 -->
            <?php
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();

                    $currency = get_woocommerce_currency_symbol();
                    $price = $product->get_price();
                    $regular_price = $product->get_regular_price();
                    $discount_price = $regular_price - $price;

                    $product_thumbnail_id = get_post_thumbnail_id();
                    $product_thumbnail_url = wp_get_attachment_url($product_thumbnail_id);

            ?>

                    <div class="bg-card rounded-lg overflow-hidden shadow-md hover:shadow-primary transition-all duration-300 hover:-translate-y-1">
                        <div class="relative overflow-hidden">
                            <img
                                src="<?php echo $product_thumbnail_url; ?>"
                                alt="<?php the_title(); ?>"
                                class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300" />
                            <span class="absolute top-3 left-3 bg-secondary text-secondary-foreground px-2 py-1 rounded text-sm">
                                Featured
                            </span>
                            <?php if ($discount_price > 0) : ?>
                                <span class="absolute top-3 right-3 bg-destructive text-destructive-foreground px-2 py-1 rounded text-sm">
                                    Save <?php echo $currency . $discount_price; ?>
                                </span>
                            <?php endif; ?>

                        </div>

                        <div class="p-4">
                            <div class="flex items-center gap-1 mb-2">
                                <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <span class="text-sm font-medium">4.8</span>
                                <span class="text-sm text-muted-foreground">(124 reviews)</span>
                            </div>

                            <h3 class="font-semibold text-lg mb-2"><?php the_title(); ?></h3>

                            <div class="space-y-2 text-sm text-muted-foreground mb-4">
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    </svg>
                                    <span>Nepal, Himalayas</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span><?php echo get_post_meta(get_the_ID(), 'kt_no_of_days', true) ?: 0; ?> days</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                    </svg>
                                    <?php
                                    $min_travelers = get_post_meta(get_the_ID(), 'kt_min_travelers', true) ?: '';
                                    $max_travelers = get_post_meta(get_the_ID(), 'kt_max_travelers', true) ?: '';

                                    if ($min_travelers && $max_travelers) {
                                        echo '<span>' . $min_travelers . '-' . $max_travelers . 'people</span>';
                                    } else if ($min_travelers) {
                                        echo '<span>' . $min_travelers . 'people</p>';
                                    } else {
                                        echo '<span>' . $max_travelers . 'people</p>';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <span class="text-2xl font-bold text-primary"><?php echo  $price ? $currency . $price : ''; ?></span>
                                        <span class="text-sm text-muted-foreground line-through"><?php echo $discount_price > 0 ? $currency . $regular_price : ''; ?></span>
                                    </div>
                                    <span class="text-sm text-muted-foreground">per person</span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;


            ?>

        </div>


        <div class="mt-12 flex justify-center">
            <div class="inline-flex items-center gap-2">
                <?php
                $big = 999999999;
                $current_page = max(1, get_query_var('paged'));
                $total_pages = $products->max_num_pages;


                $current_query = array();
                if (!empty($_GET['search'])) $current_query['search'] = $_GET['search'];
                if (!empty($_GET['price_range'])) $current_query['price_range'] = $_GET['price_range'];

                // Previous page
                if ($current_page > 1) {
                    echo '<a href="' . get_pagenum_link($current_page - 1) . '" class="inline-flex items-center justify-center w-10 h-10 bg-card border border-input rounded-md hover:bg-muted transition-colors">';
                    echo '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>';
                    echo '</a>';
                }

                // First page
                if ($current_page > 2) {
                    echo '<a href="' . get_pagenum_link(1) . '" class="inline-flex items-center justify-center w-10 h-10 bg-card border border-input rounded-md hover:bg-muted transition-colors">1</a>';
                    if ($current_page > 3) {
                        echo '<span class="inline-flex items-center justify-center w-10 h-10">...</span>';
                    }
                }

                // Current page and adjacent pages
                for ($i = max(1, $current_page - 1); $i <= min($total_pages, $current_page + 1); $i++) {
                    if ($i == $current_page) {
                        echo '<span class="inline-flex items-center justify-center w-10 h-10 text-white bg-primary rounded-md">' . $i . '</span>';
                    } else {
                        echo '<a href="' . get_pagenum_link($i) . '" class="inline-flex items-center justify-center w-10 h-10 bg-card border border-input rounded-md hover:bg-muted transition-colors">' . $i . '</a>';
                    }
                }

                // Last page
                if ($current_page < $total_pages - 1) {
                    if ($current_page < $total_pages - 2) {
                        echo '<span class="inline-flex items-center justify-center w-10 h-10">...</span>';
                    }
                    echo '<a href="' . get_pagenum_link($total_pages) . '" class="inline-flex items-center justify-center w-10 h-10 bg-card border border-input rounded-md hover:bg-muted transition-colors">' . $total_pages . '</a>';
                }

                // Next page
                if ($current_page < $total_pages) {
                    echo '<a href="' . get_pagenum_link($current_page + 1) . '" class="inline-flex items-center justify-center w-10 h-10 bg-card border border-input rounded-md hover:bg-muted transition-colors">';
                    echo '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>';
                    echo '</a>';
                }
                ?>
            </div>
        </div>
    </div>

</section>

<?php wp_reset_postdata(); // Reset post data before footer
get_footer(); ?>