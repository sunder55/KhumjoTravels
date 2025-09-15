<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script> -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header class="flex items-center justify-between border-b border-solid border-b-[#f0f2f5] px-6 py-3">
                <!-- Left Logo -->
                <div class="flex items-center gap-3 text-[#111418]">
                    <div class="size-6 md:size-4">
                        <!-- <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.8261 30.5736C16.7203..." fill="currentColor"></path>
                        </svg> -->
                        <?php
                        $site_icon_id =  get_option('site_icon');
                        echo wp_get_attachment_image($site_icon_id, 'full');
                        ?>

                    </div>
                    <!-- <h2 class="text-[#111418] text-lg font-bold leading-tight">Khumjo Travels</h2> -->
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="menu-toggle" class="md:hidden text-[#111418] focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'flex items-center gap-9',
                            'fallback_cb' => false,
                            'menu' => 'Primary Menu'
                        ));
                        ?>
                    </div>
                    <button
                        class="flex min-w-[84px] h-10 px-4 items-center justify-center rounded-lg bg-[#3d99f5] text-white text-sm font-bold">
                        <span>Book Now</span>
                    </button>
                </div>
            </header>

            <!-- Mobile Dropdown Menu -->
            <div id="mobile-menu" class="hidden flex-col space-y-4 px-6 py-4 bg-white border-b md:hidden">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex flex-col gap-4',
                    'fallback_cb' => false,
                    'menu' => 'Primary Menu'
                ));
                ?>
                <button
                    class="flex w-full h-10 px-4 items-center justify-center rounded-lg bg-[#3d99f5] text-white text-sm font-bold">
                    <span>Book Now</span>
                </button>
            </div>

            <script>
                // Mobile menu toggle
                document.getElementById("menu-toggle").addEventListener("click", function() {
                    const menu = document.getElementById("mobile-menu");
                    menu.classList.toggle("hidden");
                });
            </script>