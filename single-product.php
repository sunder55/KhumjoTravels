<?php get_header();
$product = wc_get_product(get_the_ID());
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<div class="relative h-96 md:h-[500px]">

    <img
        src="<?php echo $featured_img_url; ?>"
        alt="<?php echo $product->get_title(); ?>"
        class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute bottom-6 left-6 text-white">
        <div class="flex items-center gap-2 mb-2">
            <span class="bg-secondary text-secondary-foreground px-3 py-1 rounded text-sm">
                Featured Tour
            </span>
            <div class="flex items-center gap-1">
                <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                <span class="font-medium">4.8</span>
                <span class="text-white/80">(124 reviews)</span>
            </div>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-2"><?php echo $product->get_title(); ?></h1>
        <div class="flex items-center gap-2 text-lg">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            </svg>
            <span>Nepal, Himalayas</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Overview -->
            <div class="bg-card rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4">Tour Overview</h2>
                <p class="text-muted-foreground mb-6">
                    <?php echo $product->get_short_description(); ?>
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <p class="font-medium">Duration</p>
                            <p class="text-sm text-muted-foreground"><?php echo get_post_meta(get_the_ID(), 'kt_no_of_days', true) ?: 0; ?> days</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                        </svg>
                        <div>
                            <p class="font-medium">Group Size</p>
                            <?php
                            $min_travelers = get_post_meta(get_the_ID(), 'kt_min_travelers', true) ?: '';
                            $max_travelers = get_post_meta(get_the_ID(), 'kt_max_travelers', true) ?: '';

                            if ($min_travelers && $max_travelers) {
                                echo '<p class="text-sm text-muted-foreground">' . $min_travelers . '-' . $max_travelers . 'people</p>';
                            } else if ($min_travelers) {
                                echo '<p class="text-sm text-muted-foreground">' . $min_travelers . 'people</p>';
                            } else {
                                echo '<p class="text-sm text-muted-foreground">' . $max_travelers . 'people</p>';
                            }
                            ?>

                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-primary" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>

                        <div>
                            <p class="font-medium">Ages</p>
                            <?php $ages = get_post_meta(get_the_ID(), 'kt_ages', true) ?: '';
                            echo '<p class="text-sm text-muted-foreground">' . $ages . ' people</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Highlights -->
            <div class="bg-card rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4">Tour Highlights</h2>
                <ul class="space-y-2">
                    <?php $tour_highlights =  get_post_meta(get_the_ID(), 'kt_tour_highlights', true) ?: '';

                    if ($tour_highlights) {
                        $tour_highlights = explode(",", $tour_highlights);
                        foreach ($tour_highlights as $highlight) {
                    ?>
                            <li class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-primary rounded-full"></div>
                                <span><?php echo $highlight; ?></span>
                                <!-- <span>Trek to Everest Base Camp</span> -->
                            </li>

                    <?php

                        }
                    }
                    ?>

                    <!-- <li class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <span>Visit ancient Buddhist monasteries</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <span>Experience local Sherpa culture</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <span>Witness stunning mountain sunrises</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <span>Professional mountain guides included</span>
                    </li> -->
                </ul>
            </div>

            <!-- What's Included -->
            <div class="bg-card rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4">What's Included</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php
                    $inclusions = get_post_meta(get_the_ID(), 'kt_inclusion_fields', true);
                    if ($inclusions) {
                        $inclusions = explode(',', $inclusions);
                        foreach ($inclusions as $inclusion) {
                            echo '<div class="flex items-center gap-3">
                            <svg class="h-5 w-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>' . $inclusion . '</span>
                        </div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Sample Itinerary -->
            <div class="bg-card rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4">Sample Itinerary</h2>
                <div class="space-y-4">
                    <div class="flex gap-4 pb-4 border-b border-border">
                        <div class="flex-shrink-0 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center text-sm font-medium">
                            1
                        </div>
                        <div>
                            <h4 class="font-medium">Arrival in Kathmandu</h4>
                            <p class="text-sm text-muted-foreground">Airport pickup and hotel check-in</p>
                        </div>
                    </div>
                    <div class="flex gap-4 pb-4 border-b border-border">
                        <div class="flex-shrink-0 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center text-sm font-medium">
                            2
                        </div>
                        <div>
                            <h4 class="font-medium">Fly to Lukla</h4>
                            <p class="text-sm text-muted-foreground">Begin trek to Namche Bazaar</p>
                        </div>
                    </div>
                    <div class="flex gap-4 pb-4 border-b border-border">
                        <div class="flex-shrink-0 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center text-sm font-medium">
                            3
                        </div>
                        <div>
                            <h4 class="font-medium">Acclimatization Day</h4>
                            <p class="text-sm text-muted-foreground">Rest and explore Namche Bazaar</p>
                        </div>
                    </div>
                    <div class="flex gap-4 pb-4 border-b border-border">
                        <div class="flex-shrink-0 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center text-sm font-medium">
                            4
                        </div>
                        <div>
                            <h4 class="font-medium">Trek to Tengboche</h4>
                            <p class="text-sm text-muted-foreground">Visit famous monastery</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center text-sm font-medium">
                            5
                        </div>
                        <div>
                            <h4 class="font-medium">Continue to Dingboche</h4>
                            <p class="text-sm text-muted-foreground">Higher altitude trekking</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Sidebar -->
        <div class="space-y-6">
            <div class="bg-card rounded-lg p-6 shadow-md sticky top-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-2">
                            <?php
                            // gett currency
                            $currency = get_woocommerce_currency_symbol();
                            $price = $product->get_price();
                            $regular_price = $product->get_regular_price();
                            $discount_price = $regular_price - $price;

                            ?>
                            <!-- get currency -->
                            <span class="text-3xl font-bold text-primary"> <?php echo  $price ? $currency . $price : ''; ?></span>
                            <span class="text-lg text-muted-foreground line-through"><?php echo  $discount_price > 0 ? $currency . $regular_price : ''; ?></span>
                        </div>
                        <p class="text-sm text-muted-foreground">per person</p>
                    </div>
                    <?php if ($discount_price > 0) : ?>
                        <span class="bg-destructive text-destructive-foreground px-3 py-1 rounded text-sm">
                            Save <?php echo $currency . $discount_price; ?>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="space-y-4">
                    <a href="booking.html" class="block w-full bg-hero-gradient text-white text-center py-3 rounded-md hover:opacity-90 transition-opacity font-semibold">
                        Book This Tour
                    </a>
                    <button class="w-full border border-border text-foreground py-3 rounded-md hover:bg-muted transition-colors">
                        Add to Wishlist
                    </button>

                    <div class="border-t pt-4">
                        <div class="text-center">
                            <p class="text-sm text-muted-foreground mb-2">
                                Have questions? Need help planning?
                            </p>
                            <a href="contact.html" class="text-primary hover:underline">Contact Our Experts</a>
                        </div>
                    </div>
                </div>

                <div class="mt-4 p-3 bg-primary/5 rounded-lg">
                    <div class="flex items-center gap-2 text-sm text-primary">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span>Secure booking with 100% protection</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>