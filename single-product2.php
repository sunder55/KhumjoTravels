<?php
defined('ABSPATH') || exit;
get_header();

// Get product & featured image
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$product = wc_get_product(get_the_ID());

?>


<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="@container">
            <div class="@[480px]:px-4 @[480px]:py-3">
                <div
                    class="bg-cover bg-center flex flex-col justify-end overflow-hidden bg-white @[480px]:rounded-lg min-h-80"
                    style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 25%), url("<?php echo $featured_img_url; ?>");'>
                    <div class="flex p-4">
                        <p class="text-white tracking-light text-[28px] font-bold leading-tight"><?php echo $product->get_title(); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
            <?php echo $product->get_short_description(); ?>
        </p>
        <!-- <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Tour Highlights</h2> -->
        <!-- <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 items-center">
                <div class="text-[#111418]" data-icon="TreePalm" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M237.79,53.23a66.86,66.86,0,0,0-97.74,0,72.21,72.21,0,0,0-12.05,17,72.21,72.21,0,0,0-12-17,66.86,66.86,0,0,0-97.74,0,8,8,0,0,0,2.6,12.85L77,90.55a71.42,71.42,0,0,0-43.36,33.21,70.64,70.64,0,0,0-7.2,54.32A8,8,0,0,0,39,182.36l81-61.68V224a8,8,0,0,0,16,0V120.68l81,61.68a8,8,0,0,0,12.57-4.28,70.64,70.64,0,0,0-7.2-54.32A71.42,71.42,0,0,0,179,90.55l56.22-24.47a8,8,0,0,0,2.6-12.85ZM67.08,48a51.13,51.13,0,0,1,37.28,16.26,56.53,56.53,0,0,1,14.26,26.93L39,56.53A50.5,50.5,0,0,1,67.08,48ZM40,161.5a54.82,54.82,0,0,1,7.47-29.7,55.55,55.55,0,0,1,34-25.89A56.52,56.52,0,0,1,96.1,104a55.82,55.82,0,0,1,16.23,2.41ZM208.5,131.8A54.82,54.82,0,0,1,216,161.5l-72.3-55.1a56.3,56.3,0,0,1,64.83,25.4ZM137.38,91.19a56.53,56.53,0,0,1,14.26-26.93A51.13,51.13,0,0,1,188.92,48,50.5,50.5,0,0,1,217,56.53Z"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] text-base font-bold leading-tight">Jungle Trekking</h2>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 items-center">
                <div class="text-[#111418]" data-icon="Boat" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M221.06,110.63,208,106.27V56a16,16,0,0,0-16-16H136V24a8,8,0,0,0-16,0V40H64A16,16,0,0,0,48,56v50.27l-13.06,4.36A16,16,0,0,0,24,125.82V160.1a7.73,7.73,0,0,0,.31,2.19c15.72,55.09,86.12,74.06,100.07,77.3a16.19,16.19,0,0,0,7.24,0c13.95-3.24,84.35-22.21,100.07-77.3a7.73,7.73,0,0,0,.31-2.19V125.82A16,16,0,0,0,221.06,110.63ZM64,56H192v44.93L130.53,80.41a8,8,0,0,0-5.06,0L64,100.93ZM216,158.94c-5.78,19-20.55,35.17-43.95,48.12A181.7,181.7,0,0,1,128,224a181.7,181.7,0,0,1-44-16.94C60.56,194.11,45.78,177.93,40,158.94V125.81l80-26.7V168a8,8,0,0,0,16,0V99.11l80,26.71Z"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] text-base font-bold leading-tight">River Cruise</h2>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 items-center">
                <div class="text-[#111418]" data-icon="Bird" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M176,68a12,12,0,1,1-12-12A12,12,0,0,1,176,68Zm-50.88,61.85a8,8,0,0,0-11.27,1l-40,48a8,8,0,0,0,12.3,10.24l40-48A8,8,0,0,0,125.12,129.85ZM240,80a8,8,0,0,1-3.56,6.66L216,100.28V120A104.11,104.11,0,0,1,112,224H8a8,8,0,0,1-6.25-13L96,93.19V76A60,60,0,0,1,213.21,57.86l23.23,15.48A8,8,0,0,1,240,80Zm-22.42,0L201.9,69.54a8,8,0,0,1-3.31-4.64A44,44,0,0,0,112,76V96a8,8,0,0,1-1.75,5L24.64,208H112a88.1,88.1,0,0,0,88-88V96a8,8,0,0,1,3.56-6.66Z"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] text-base font-bold leading-tight">Wildlife Spotting</h2>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 items-center">
                <div class="text-[#111418]" data-icon="Sun" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M120,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm72,88a64,64,0,1,1-64-64A64.07,64.07,0,0,1,192,128Zm-16,0a48,48,0,1,0-48,48A48.05,48.05,0,0,0,176,128ZM58.34,69.66A8,8,0,0,0,69.66,58.34l-16-16A8,8,0,0,0,42.34,53.66Zm0,116.68-16,16a8,8,0,0,0,11.32,11.32l16-16a8,8,0,0,0-11.32-11.32ZM192,72a8,8,0,0,0,5.66-2.34l16-16a8,8,0,0,0-11.32-11.32l-16,16A8,8,0,0,0,192,72Zm5.66,114.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32-11.32ZM48,128a8,8,0,0,0-8-8H16a8,8,0,0,0,0,16H40A8,8,0,0,0,48,128Zm80,80a8,8,0,0,0-8,8v24a8,8,0,0,0,16,0V216A8,8,0,0,0,128,208Zm112-88H216a8,8,0,0,0,0,16h24a8,8,0,0,0,0-16Z"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] text-base font-bold leading-tight">Cultural Immersion</h2>
            </div>
        </div> -->
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Itinerary</h2>
        <div class="grid grid-cols-[40px_1fr] gap-x-2 px-4">
            <div class="flex flex-col items-center gap-1 pt-3">
                <div class="text-[#111418]" data-icon="TextHThree" data-size="24px" data-weight="regular">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M152,56V176a8,8,0,0,1-16,0V124H48v52a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0v52h88V56a8,8,0,0,1,16,0Zm73.52,90.63,21-30A8,8,0,0,0,240,104H192a8,8,0,0,0,0,16h32.63l-19.18,27.41A8,8,0,0,0,212,160a20,20,0,1,1-14.29,34,8,8,0,1,0-11.42,11.19A36,36,0,0,0,248,180,36.07,36.07,0,0,0,225.52,146.63Z"></path>
                    </svg> -->
                </div>
                <div class="w-[1.5px] bg-[#dbe0e6] h-2 grow"></div>
            </div>
            <div class="flex flex-1 flex-col py-3">
                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- <div class="flex flex-col items-center gap-1">
                <div class="w-[1.5px] bg-[#dbe0e6] h-2"></div>
                <div class="text-[#111418]" data-icon="TextHThree" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M152,56V176a8,8,0,0,1-16,0V124H48v52a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0v52h88V56a8,8,0,0,1,16,0Zm73.52,90.63,21-30A8,8,0,0,0,240,104H192a8,8,0,0,0,0,16h32.63l-19.18,27.41A8,8,0,0,0,212,160a20,20,0,1,1-14.29,34,8,8,0,1,0-11.42,11.19A36,36,0,0,0,248,180,36.07,36.07,0,0,0,225.52,146.63Z"></path>
                    </svg>
                </div>
                <div class="w-[1.5px] bg-[#dbe0e6] h-2 grow"></div>
            </div>
            <div class="flex flex-1 flex-col py-3">
                <p class="text-[#111418] text-base font-medium leading-normal">Day 2: River Cruise and Wildlife Spotting</p>
                <p class="text-[#60758a] text-base font-normal leading-normal">Enjoy a scenic river cruise, spotting wildlife along the way.</p>
            </div>
            <div class="flex flex-col items-center gap-1 pb-3">
                <div class="w-[1.5px] bg-[#dbe0e6] h-2"></div>
                <div class="text-[#111418]" data-icon="TextHThree" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M152,56V176a8,8,0,0,1-16,0V124H48v52a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0v52h88V56a8,8,0,0,1,16,0Zm73.52,90.63,21-30A8,8,0,0,0,240,104H192a8,8,0,0,0,0,16h32.63l-19.18,27.41A8,8,0,0,0,212,160a20,20,0,1,1-14.29,34,8,8,0,1,0-11.42,11.19A36,36,0,0,0,248,180,36.07,36.07,0,0,0,225.52,146.63Z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex flex-1 flex-col py-3">
                <p class="text-[#111418] text-base font-medium leading-normal">Day 3: Cultural Visit and Departure</p>
                <p class="text-[#60758a] text-base font-normal leading-normal">Visit a local community to learn about their traditions before departing.</p>
            </div> -->
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Inclusions</h2>
        <div class="px-4">

            <?php
            $inclusions = get_post_meta(get_the_ID(), 'kt_inclusion_fields', true);
            if ($inclusions) {
                $inclusions = explode(',', $inclusions);
                foreach ($inclusions as $inclusion) {


            ?>
                    <label class="flex gap-x-3 py-3 flex-row">
                        <input
                            type="checkbox"
                            class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#3d99f5] checked:bg-[#3d99f5] checked:border-[#3d99f5] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none" />
                        <p class="text-[#111418] text-base font-normal leading-normal"><?php echo $inclusion; ?></p>
                    </label>
            <?php
                }
            }
            ?>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Exclusions</h2>
        <div class="px-4">
            <?php
            $exclusions = get_post_meta(get_the_ID(), 'kt_exclusion_fields', true);
            if ($exclusions) {
                $exclusions = explode(',', $exclusions);
                foreach ($exclusions as $exclusion) {
            ?>
                    <label class="flex gap-x-3 py-3 flex-row">
                        <input
                            type="checkbox"
                            class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#3d99f5] checked:bg-[#3d99f5] checked:border-[#3d99f5] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none" />
                        <p class="text-[#111418] text-base font-normal leading-normal"><?php echo $exclusion; ?></p>
                    </label>
            <?php
                }
            }
            ?>

        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Pricing</h2>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(228px,1fr))] gap-2.5 px-4 py-3 @3xl:grid-cols-4">
            <div class="flex flex-1 flex-col gap-4 rounded-lg border border-solid border-[#dbe0e6] bg-white p-6 max-w-[480px]">
                <div class="flex flex-col gap-1">
                    <h1 class="text-[#111418] text-base font-bold leading-tight"><?php echo $product->get_title(); ?></h1>
                    <p class="flex items-baseline gap-1 text-[#111418]">
                        <span class="text-[#111418] text-4xl font-black leading-tight tracking-[-0.033em]"><?php echo $product->get_price(); ?></span>
                        <span class="text-[#111418] text-base font-bold leading-tight">per person</span>
                    </p>
                </div>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Book Now</span>
                </button>
                <div class="flex flex-col gap-2">
                    <div class="text-[13px] font-normal leading-normal flex gap-3 text-[#111418]">
                        <div class="text-[#111418]" data-icon="Check" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </div>
                        <?php echo get_post_meta(get_the_ID(), 'kt_no_of_days', true); ?>-day tour
                    </div>
                    <div class="text-[13px] font-normal leading-normal flex gap-3 text-[#111418]">
                        <div class="text-[#111418]" data-icon="Check" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </div>
                        All-inclusive package
                    </div>
                    <div class="text-[13px] font-normal leading-normal flex gap-3 text-[#111418]">
                        <div class="text-[#111418]" data-icon="Check" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </div>
                        Expert guides
                    </div>
                    <div class="text-[13px] font-normal leading-normal flex gap-3 text-[#111418]">
                        <div class="text-[#111418]" data-icon="Check" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </div>
                        Eco-friendly accommodation
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Customer Reviews</h2>
        <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Sophia Clark</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">May 15, 2023</p>
                    </div>
                </div>
                <div class="flex gap-0.5">
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                    This tour was an incredible experience! The guides were knowledgeable, the accommodation was comfortable, and the wildlife sightings were unforgettable. Highly
                    recommended!
                </p>
            </div>
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Ethan Bennett</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">June 22, 2023</p>
                    </div>
                </div>
                <div class="flex gap-0.5">
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#bac4cf]" data-icon="Star" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M239.2,97.29a16,16,0,0,0-13.81-11L166,81.17,142.72,25.81h0a15.95,15.95,0,0,0-29.44,0L90.07,81.17,30.61,86.32a16,16,0,0,0-9.11,28.06L66.61,153.8,53.09,212.34a16,16,0,0,0,23.84,17.34l51-31,51.11,31a16,16,0,0,0,23.84-17.34l-13.51-58.6,45.1-39.36A16,16,0,0,0,239.2,97.29Zm-15.22,5-45.1,39.36a16,16,0,0,0-5.08,15.71L187.35,216v0l-51.07-31a15.9,15.9,0,0,0-16.54,0l-51,31h0L82.2,157.4a16,16,0,0,0-5.08-15.71L32,102.35a.37.37,0,0,1,0-.09l59.44-5.14a16,16,0,0,0,13.35-9.75L128,32.08l23.2,55.29a16,16,0,0,0,13.35,9.75L224,102.26S224,102.32,224,102.33Z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                    The Amazon Rainforest tour was well-organized and offered a great balance of adventure and relaxation. The river cruise was a highlight.
                </p>
            </div>
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Olivia Carter</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">July 10, 2023</p>
                    </div>
                </div>
                <div class="flex gap-0.5">
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                    <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                    Absolutely amazing! The cultural immersion aspect of the tour was particularly enriching. I learned so much and had a fantastic time.
                </p>
            </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Frequently Asked Questions</h2>
        <div class="flex flex-col p-4 gap-3">
            <details class="flex flex-col rounded-lg border border-[#dbe0e6] bg-white px-[15px] py-[7px] group" open="">
                <summary class="flex cursor-pointer items-center justify-between gap-6 py-2">
                    <p class="text-[#111418] text-sm font-medium leading-normal">What is the best time to visit the Amazon?</p>
                    <div class="text-[#111418] group-open:rotate-180" data-icon="CaretDown" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    </div>
                </summary>
                <p class="text-[#60758a] text-sm font-normal leading-normal pb-2">
                    The best time to visit the Amazon Rainforest is during the dry season, from June to November, when there is less rainfall and wildlife is easier to spot.
                </p>
            </details>
            <details class="flex flex-col rounded-lg border border-[#dbe0e6] bg-white px-[15px] py-[7px] group">
                <summary class="flex cursor-pointer items-center justify-between gap-6 py-2">
                    <p class="text-[#111418] text-sm font-medium leading-normal">What should I pack for the tour?</p>
                    <div class="text-[#111418] group-open:rotate-180" data-icon="CaretDown" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    </div>
                </summary>
                <p class="text-[#60758a] text-sm font-normal leading-normal pb-2">
                    The best time to visit the Amazon Rainforest is during the dry season, from June to November, when there is less rainfall and wildlife is easier to spot.
                </p>
            </details>
            <details class="flex flex-col rounded-lg border border-[#dbe0e6] bg-white px-[15px] py-[7px] group">
                <summary class="flex cursor-pointer items-center justify-between gap-6 py-2">
                    <p class="text-[#111418] text-sm font-medium leading-normal">Is this tour suitable for families?</p>
                    <div class="text-[#111418] group-open:rotate-180" data-icon="CaretDown" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    </div>
                </summary>
                <p class="text-[#60758a] text-sm font-normal leading-normal pb-2">
                    The best time to visit the Amazon Rainforest is during the dry season, from June to November, when there is less rainfall and wildlife is easier to spot.
                </p>
            </details>
        </div>
    </div>
</div>


<?php get_footer(); ?>