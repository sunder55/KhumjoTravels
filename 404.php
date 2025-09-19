<?php
get_header(); ?>

<div class="min-h-[calc(100vh-300px)] flex items-center justify-center">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-lg mx-auto space-y-8">
            <!-- 404 Icon -->
            <div class="bg-primary/5 w-24 h-24 rounded-full mx-auto flex items-center justify-center">
                <svg class="h-12 w-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>

            <!-- Error Message -->
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-foreground">Page Not Found</h1>
                <p class="text-muted-foreground text-lg">
                    Oops! The page you're looking for seems to have wandered off on its own adventure.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url(); ?>"
                    class="bg-hero-gradient text-white px-6 py-3 rounded-md hover:opacity-90 transition-opacity">
                    Return Home
                </a>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="border border-input px-6 py-3 rounded-md hover:bg-muted transition-colors">
                    Contact Support
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>