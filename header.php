<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Khumjo Travels - Discover Your Next Adventure</title>
    <meta name="description" content="Explore breathtaking destinations with expert guides and unforgettable experiences. Book your dream adventure with Khumjo Travels - your trusted partner for extraordinary journeys." />
    <meta name="author" content="Khumjo Travels" />
    <!-- 
    <meta property="og:title" content="Khumjo Travels - Discover Your Next Adventure" />
    <meta property="og:description" content="Explore breathtaking destinations with expert guides and unforgettable experiences. Book your dream adventure with Khumjo Travels." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@khumjotravels" />
    <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png" /> -->

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': 'hsl(210 70% 35%)',
                        'primary-foreground': 'hsl(0 0% 98%)',
                        'primary-glow': 'hsl(210 70% 55%)',
                        'secondary': 'hsl(25 90% 65%)',
                        'secondary-foreground': 'hsl(215 25% 15%)',
                        'accent': 'hsl(145 60% 45%)',
                        'accent-foreground': 'hsl(0 0% 98%)',
                        'muted': 'hsl(210 40% 96%)',
                        'muted-foreground': 'hsl(215 15% 45%)',
                        'border': 'hsl(214 31% 91%)',
                        'input': 'hsl(214 31% 91%)',
                        'background': 'hsl(0 0% 100%)',
                        'foreground': 'hsl(215 25% 15%)',
                        'card': 'hsl(0 0% 100%)',
                        'card-foreground': 'hsl(215 25% 15%)',
                        'destructive': 'hsl(0 84% 60%)',
                        'destructive-foreground': 'hsl(0 0% 98%)'
                    },
                    backgroundImage: {
                        'hero-gradient': 'linear-gradient(135deg, hsl(210 70% 35%), hsl(25 90% 65%))',
                        'ocean-gradient': 'linear-gradient(180deg, hsl(210 70% 55%), hsl(190 80% 45%))',
                        'sunset-gradient': 'linear-gradient(135deg, hsl(25 90% 65%), hsl(15 95% 55%))',
                        'mountain-gradient': 'linear-gradient(180deg, hsl(145 60% 45%), hsl(120 50% 35%))'
                    },
                    boxShadow: {
                        'primary': '0 10px 30px -10px hsl(210 70% 35% / 0.3)',
                        'warm': '0 8px 25px -8px hsl(25 90% 65% / 0.25)',
                        'nature': '0 6px 20px -6px hsl(145 60% 45% / 0.2)'
                    }
                }
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobileMenuButton');
            const menu = document.getElementById('mobileMenu');

            btn.addEventListener('click', () => {
                console.log('clicked');
                menu.classList.toggle('hidden');
            });
        });
    </script>
</head>

<body class="bg-background text-foreground">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 w-full bg-background/95 backdrop-blur border-b border-border">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="<?php echo home_url(); ?>" class="flex items-center gap-2 font-bold text-xl">
                    <div class="p-2 bg-hero-gradient rounded-lg">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <span class="bg-hero-gradient bg-clip-text text-transparent">
                        Khumjo Travels
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <!-- <a href="index.html" class="text-primary font-medium">Home</a>
                    <a href="destinations.html" class="text-foreground hover:text-primary transition-colors">Destinations</a>
                    <a href="about.html" class="text-foreground hover:text-primary transition-colors">About</a>
                    <a href="contact.html" class="text-foreground hover:text-primary transition-colors">Contact</a> -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'hidden md:flex items-center gap-8',
                        'fallback_cb' => false,
                        'menu' => 'Primary Menu'

                    ));
                    ?>
                    <button class="hidden md:inline-block bg-hero-gradient text-white px-6 py-2 rounded-md hover:opacity-90 transition-opacity">
                        Book Now
                    </button>

                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 border border-border rounded-md" id="mobileMenuButton">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>


                <div id="mobileMenu" class="md:hidden hidden flex flex-col gap-4 mt-2 p-4 bg-background border-t border-border">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex flex-col gap-4',
                        'fallback_cb' => false,
                        'menu' => 'Primary Menu'
                    ));
                    ?>
                    <button class="bg-hero-gradient text-white px-6 py-2 rounded-md hover:opacity-90 transition-opacity">
                        Book Now
                    </button>
                </div>

            </div>
        </div>
    </nav>