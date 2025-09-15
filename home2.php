<?php
get_header();
?>
<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="@container">
            <div class="@[480px]:p-4">
                <div
                    class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLIB3gTBP56dmuJQ8UkW226KmzDEIC-LoKM8mPqVHR4l9C8GkAN_k4zi_Mxjf5NUSEltfa4LAQhFmnhm5PQbsqORk_xQmZQFRExXFXkwuTzp83ZtRzlhgYJV1X3cd8IubZjs3yONu6PbUAtmz_mdnDb0V-EL7ddth4_8YAHLRFlcjIZnoSAe-yYe2abLL1du3pKHzPLEYkO3T5NKJhUjLvt4TwARaKWW-5yKL3HIiYKNvIm66veGuJwqG4s-u8CmoFJJhvgxvjWlE");'>
                    <div class="flex flex-col gap-2 text-center">
                        <h1
                            class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                            Explore the World with Adventure Tours
                        </h1>
                        <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                            Discover unforgettable experiences with our curated tours. From exotic beaches to thrilling mountain treks, we have something for every adventurer.
                        </h2>
                    </div>
                    <label class="flex flex-col min-w-40 h-14 w-full max-w-[480px] @[480px]:h-16">
                        <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                            <div
                                class="text-[#60758a] flex border border-[#dbe0e6] bg-white items-center justify-center pl-[15px] rounded-l-lg border-r-0"
                                data-icon="MagnifyingGlass"
                                data-size="20px"
                                data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                </svg>
                            </div>

                            <?php
                            // get wordpress search widget
                            ?>
                            <input
                                placeholder="Search for tours"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] h-full placeholder:text-[#60758a] px-[15px] rounded-r-none border-r-0 pr-2 rounded-l-none border-l-0 pl-2 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal"
                                value="" />
                            <div class="flex items-center justify-center rounded-r-lg border-l-0 border border-[#dbe0e6] bg-white pr-[7px]">
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#3d99f5] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
                                    <span class="truncate">Search</span>
                                </button>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Featured Tours</h2>
        <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
            <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                    <div
                        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCnlzSScpgU-G9Cw9nmUZyxo-rAtg45dnq5lm9zFmlWs0C8OkuC2sNKiznHZ6xkkaSQsGuz31etp-7lCbaN9fUYqpyQ6IYKzApc2NVX0lroG1A-zAhnzAjy-Te60CazphHxGe4k_wkdFSv0v3LOm-JRBYUneQOcXajuVBR3mrmrgQw8DUuvVXNuqAZXYekJ-5wu1A0bAy4py7Pug1xnCLMezwSKWMyljPOX4QzcJnK4WSSmnMVbZxluINAIWk7-AbzWMn7ApUQvBsM");'></div>
                    <div>
                        <p class="text-[#111418] text-base font-medium leading-normal">Mountain Trekking in the Alps</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">Experience the thrill of conquering the Alps with our expert guides.</p>
                    </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                    <div
                        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXGRyHPA44Al5Wo-SxUMADMcJT28U6s8x-ot-1DthmSVKwLl4yPfZAVc19ZRPiKAHkHf5qG7BzoWSDZfCPzLg-woTqgPTHhsoSjPti7VpbUKdA6Zrj87PNraq1qyIA4aDxC0tCgUXqFmihem7FM_tOxaGdYPvm46EwM9aeJx29ELBh3xTPlSa7Jlmkzub-UiHnHJxGYal42co_ZZ_6eP6p2IlaQ-L1mbC4JGipQ1pqqaP_8-uPUx7-MT1cJcjnzt3muatKJsqv-fI");'></div>
                    <div>
                        <p class="text-[#111418] text-base font-medium leading-normal">Amazon Rainforest Expedition</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">Explore the biodiversity of the Amazon with our eco-friendly tours.</p>
                    </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                    <div
                        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAxNhT3DapQIlNgqYlQZ-iuMejsgmPr2F9pw3vrGkLPYlFp7Kh6-DlwkZGfavsriSRSQVzY3O_QXSKC5fIgM-asnUfUKVbzO5WwCjco16EaZKLkeeAGyVSBMRLNRPObH-YdS1AFlxxplxI08SUp-97KiRXrVZv_7i1e8IIb6ol-tuUH7F67BZR8Kw4yW3Nus0jL3_AUy_7JmGDRXhe3ncLMAufN-C-Cqij0yW4Uhsku9vnx7fhtatCGO4Hko2Vmfi54b72DYSLwJ70");'></div>
                    <div>
                        <p class="text-[#111418] text-base font-medium leading-normal">Sahara Desert Adventure</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">Embark on a journey through the Sahara with our experienced team.</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Customer Testimonials</h2>
        <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAX5Wm2BfDVkyVApdbsE9eTKYa34o07IgUesQXk68tTT3gD3Ye3gG5NYwGBlMFk4O2YAwtYX3pTUvzPmNYxku76ySE3D_Xqp4J3P5OuaKbTM7p00hl0kLUavBb-pral3m2L-mYRC7IF_YXm7m8MrbaiTTE6-ZeAOUWbpWUre-iRz2t_46ufEQflXuRFcbsTeGBb76WRvrjNWO_OXrJiMD0-3eSkiLbGHfe-Zc3Aph2VS3L_V293R9jriimNLz7L6Q6KJaeWA_hATkM");'></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Sophia Clark</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">June 15, 2023</p>
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
                    "The mountain trekking tour was an incredible experience. The guides were knowledgeable and supportive, and the views were breathtaking!"
                </p>
                <div class="flex gap-9 text-[#60758a]">
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">12</p>
                    </button>
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">2</p>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDi3_iy9I1X-WeRf-HEhX76mCIA_8L4UtFV9tx2bAc2_CWGEjIcnzBQgy-X9C3GDnT4_DeSpH-Yi3ASK9hAYbLPwmFdZt5UDpR8T2HmNS0TBVwGA-n8oxcOFERJicyKfaNO-5Hh6CqKLu6ngD33-UMgr5g05reZs0-DewbfoyyybD6a7FTAyUMtZMQTCMBXG5laajBA0tIG0qgtWInTw47j_zW32P8lmx2gU50BD19QvaS6-j_NFS7Jzu1g9qmGk4HoI2bX-u8fqUU");'></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Ethan Miller</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">July 22, 2023</p>
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
                    "The Amazon expedition was well-organized and educational. I learned so much about the rainforest and its inhabitants."
                </p>
                <div class="flex gap-9 text-[#60758a]">
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">8</p>
                    </button>
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">1</p>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpphkLoP4ciSfRHhm11XzGOBrVaH7g9izT2eapbGwoVcvhIGvNnAel5Hu68KgkJ8WeQvMZUcZxSCJzYy_Lz5SN-W2u7q7qMFzYKAlyT9uJnKWijc4_Jgfn5i0otpLQJ0Sm1cHQBZ7p2phZ5BhwN9Bbf574H6X2CyRBOyv8YDK_sRvAJKNXEDMGzPGgJfeYUWvnAAc5lFoVxtaXFTGXb5d79ZWbbk5k4HEm1tbQfEoC7yAvy1fujVuuKjNiIxuBBKZpBFFnHi36b9U");'></div>
                    <div class="flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal">Olivia Davis</p>
                        <p class="text-[#60758a] text-sm font-normal leading-normal">August 10, 2023</p>
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
                    "The Sahara adventure exceeded my expectations. The camel ride and stargazing were unforgettable moments."
                </p>
                <div class="flex gap-9 text-[#60758a]">
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsUp" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">15</p>
                    </button>
                    <button class="flex items-center gap-2">
                        <div class="text-inherit" data-icon="ThumbsDown" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path>
                            </svg>
                        </div>
                        <p class="text-inherit">3</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="@container">
            <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
                <div class="flex flex-col gap-2 text-center">
                    <h1
                        class="text-[#111418] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]">
                        Ready for Your Next Adventure?
                    </h1>
                    <p class="text-[#111418] text-base font-normal leading-normal max-w-[720px">Explore our wide range of tours and find the perfect experience for you.</p>
                </div>
                <div class="flex flex-1 justify-center">
                    <div class="flex justify-center">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#3d99f5] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow">
                            <span class="truncate">Browse Tours</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
