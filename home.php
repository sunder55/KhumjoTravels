<?php get_header();
?>
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('src/assets/hero-mountains.jpg')">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-6">
            Discover Your Next
            <span class="block bg-hero-gradient bg-clip-text text-transparent">
                Adventure
            </span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-white/90">
            Explore breathtaking destinations with expert guides and unforgettable experiences
        </p>

        <!-- Search Bar -->
        <div class="bg-white/95 backdrop-blur rounded-2xl p-6 shadow-2xl max-w-2xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Where to?"
                        class="w-full pl-10 pr-3 py-2 border border-input rounded-md" />
                    <svg class="absolute left-3 top-3 h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <select class="w-full px-3 py-2 border border-input rounded-md">
                    <option>Duration</option>
                    <option>1-3 days</option>
                    <option>4-7 days</option>
                    <option>8-14 days</option>
                    <option>15+ days</option>
                </select>
                <button class="bg-hero-gradient text-white px-6 py-2 rounded-md hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Search Tours
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Tours -->
<section class="py-20 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Featured Destinations</h2>
            <p class="text-xl text-muted-foreground">
                Handpicked adventures for unforgettable experiences
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Tour Card 1 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-md hover:shadow-primary transition-all duration-300 hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <img
                        src="src/assets/hero-mountains.jpg"
                        alt="Himalayan Mountain Adventure"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300" />
                    <span class="absolute top-3 left-3 bg-secondary text-secondary-foreground px-2 py-1 rounded text-sm">
                        Featured
                    </span>
                    <span class="absolute top-3 right-3 bg-destructive text-destructive-foreground px-2 py-1 rounded text-sm">
                        Save $500
                    </span>
                </div>

                <div class="p-4">
                    <div class="flex items-center gap-1 mb-2">
                        <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <span class="text-sm font-medium">4.8</span>
                        <span class="text-sm text-muted-foreground">(124 reviews)</span>
                    </div>

                    <h3 class="font-semibold text-lg mb-2">Himalayan Mountain Adventure</h3>

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
                            <span>14 days</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <span>8-12 people</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="text-2xl font-bold text-primary">$2,499</span>
                                <span class="text-sm text-muted-foreground line-through">$2,999</span>
                            </div>
                            <span class="text-sm text-muted-foreground">per person</span>
                        </div>
                        <a href="tour-details.html" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar cards for other tours -->
            <!-- Tour Card 2 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-md hover:shadow-primary transition-all duration-300 hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <img
                        src="src/assets/tropical-beach.jpg"
                        alt="Tropical Paradise Getaway"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300" />
                </div>

                <div class="p-4">
                    <div class="flex items-center gap-1 mb-2">
                        <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <span class="text-sm font-medium">4.9</span>
                        <span class="text-sm text-muted-foreground">(89 reviews)</span>
                    </div>

                    <h3 class="font-semibold text-lg mb-2">Tropical Paradise Getaway</h3>

                    <div class="space-y-2 text-sm text-muted-foreground mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Maldives</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>7 days</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <span>2-6 people</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-primary">$1,899</span>
                            <span class="text-sm text-muted-foreground">per person</span>
                        </div>
                        <a href="tour-details.html" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tour Card 3 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-md hover:shadow-primary transition-all duration-300 hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <img
                        src="src/assets/ancient-temple.jpg"
                        alt="Ancient Temples & Culture"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300" />
                </div>

                <div class="p-4">
                    <div class="flex items-center gap-1 mb-2">
                        <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <span class="text-sm font-medium">4.7</span>
                        <span class="text-sm text-muted-foreground">(156 reviews)</span>
                    </div>

                    <h3 class="font-semibold text-lg mb-2">Ancient Temples & Culture</h3>

                    <div class="space-y-2 text-sm text-muted-foreground mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Cambodia</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>10 days</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <span>6-15 people</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-primary">$1,299</span>
                            <span class="text-sm text-muted-foreground">per person</span>
                        </div>
                        <a href="tour-details.html" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tour Card 4 -->
            <div class="bg-card rounded-lg overflow-hidden shadow-md hover:shadow-primary transition-all duration-300 hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <img
                        src="src/assets/city-skyline.jpg"
                        alt="Modern Cities & Nightlife"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300" />
                </div>

                <div class="p-4">
                    <div class="flex items-center gap-1 mb-2">
                        <svg class="h-4 w-4 fill-secondary text-secondary" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <span class="text-sm font-medium">4.6</span>
                        <span class="text-sm text-muted-foreground">(203 reviews)</span>
                    </div>

                    <h3 class="font-semibold text-lg mb-2">Modern Cities & Nightlife</h3>

                    <div class="space-y-2 text-sm text-muted-foreground mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Japan</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>12 days</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <span>4-10 people</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-primary">$3,299</span>
                            <span class="text-sm text-muted-foreground">per person</span>
                        </div>
                        <a href="tour-details.html" class="bg-primary text-primary-foreground px-4 py-2 rounded-md hover:opacity-90 transition-opacity">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Why Choose Khumjo Travels?</h2>
            <p class="text-xl text-muted-foreground">
                Your trusted partner for extraordinary journeys
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Safe & Secure</h3>
                <p class="text-muted-foreground">100% secure booking with full protection coverage</p>
            </div>

            <div class="text-center p-6">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Expert Guides</h3>
                <p class="text-muted-foreground">Professional local guides with years of experience</p>
            </div>

            <div class="text-center p-6">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                    <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                <p class="text-muted-foreground">Round-the-clock customer support for peace of mind</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-hero-gradient">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">
            Ready for Your Next Adventure?
        </h2>
        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            Join thousands of travelers who have discovered the world with Khumjo Travels.
            Book your dream destination today!
        </p>
        <button class="bg-white text-primary hover:bg-white/90 text-lg px-8 py-4 rounded-md font-semibold transition-colors">
            Start Planning Now
        </button>
    </div>
</section>
</body>

</html>