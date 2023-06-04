<?php get_header(); ?>
<section id="header" class="flex items-center overflow-x-clip">
    <div class="container grid items-center gap-6 lg:gap-12 lg:grid-cols-2">
        <div class="space-y-4">
            <h1 class="text-6xl font-bold">Nikolai<br />Lehbrink</h1>
            <p>
                Hey da! Willkommen im virtuellen Spielplatz eines Webentwicklers und UI/UX-Designers. Mein Ding? Das Basteln von maßgeschneiderten, knackigen und optisch ansprechenden digitalen Meisterwerken.
                Ich hab alles am Start, was du für dein Online-Auftreten brauchst - von easy-to-use Websites und Online-Shops bis hin zu kreativen Print-Designs. Dabei steht dein Ziel immer im Vordergrund.
                Lass uns zusammen die digitale Bühne deiner Marke rocken. Ready? Los geht's!
            </p>
            <div class="flex gap-4">
                <a href="#projects" class="btn btn-cerulean btn-shadow">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="uim-primary" d="M21 10H3A1 1 0 0 1 2 9V6A3.00328 3.00328 0 0 1 5 3H19a3.00328 3.00328 0 0 1 3 3V9A1 1 0 0 1 21 10zM14 14H10a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
                        <path class="uim-tertiary" d="M4,10v8a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V10Zm10,4H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z"></path>
                    </svg>
                    Projects</a>
                <a href="#contact" class="btn btn-pumpkin btn-shadow">
                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="uim-tertiary" d="M12 21H4a1 1 0 0 1-.707-1.707l1.675-1.675A9 9 0 1 1 12 21Z"></path>
                        <path class="uim-primary" d="M15.92 10.76a.997.997 0 0 1-.707-.293l-1.92-1.92a1 1 0 0 1 1.414-1.414l1.213 1.213 3.373-3.373a1 1 0 0 1 1.414 1.414l-4.08 4.08a.997.997 0 0 1-.707.293Z"></path>
                    </svg>
                    Contact
                </a>
            </div>
        </div>
        <div class="relative">
            <div class="absolute rounded-full opacity-50 -inset-16 blur-3xl -z-10 bg-gradient-to-bl from-cerulean-500 to-pumpkin-500 via-cerulean-200 via-35%"></div>
            <img src="<?php echo get_template_directory_uri() ?>/header-illustration.svg" alt="">
        </div>
    </div>
</section>

<section id="services" class="flex items-center py-8 bg-gradient-to-b from-transparent to-cod-gray-600">
    <div class="container grid items-start gap-6 lg:gap-12 lg:grid-cols-2">
        <div class="grid items-start gap-4 xl:grid-cols-2 max-lg:order-1">
            <div class="flex flex-col gap-4 xl:mt-16">
                <div class="p-4 border-2 rounded-lg bg-gradient-to-tr from-cod-gray-500 to-cod-gray-400 border-cod-gray-300">
                    <div class="inline-flex p-1 mb-2 text-white rounded-lg bg-cod-gray-300">
                        <img class="w-12 -hue-rotate-[50deg]" src="<?php echo get_template_directory_uri() ?>/images/icons/monitor.webp" alt="">
                    </div>
                    <h2 class="mb-2 text-xl font-bold">Personalized Website Development</h2>
                    <p class="line-clamp-5">Your online journey matters. That's why I'll work with you to develop a website that's uniquely yours, making sure it's both user-friendly and attractive.</p>
                </div>
                <div class="p-4 border-2 rounded-lg bg-gradient-to-tr from-cod-gray-500 to-cod-gray-400 border-cod-gray-300">
                    <div class="inline-flex p-1 mb-2 text-white rounded-lg bg-cod-gray-300">
                        <img class="w-12 -hue-rotate-[50deg]" src="<?php echo get_template_directory_uri() ?>/images/icons/google.webp" alt="">

                    </div>
                    <h2 class="mb-2 text-xl font-bold">Local SEO with Google My Business</h2>
                    <p class="line-clamp-5">I'll work to help your business shine locally. I focus on optimizing your Google My Business profile to its full potential, allowing you to stand out in search results.

                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="p-4 border-2 rounded-lg bg-gradient-to-tr from-cod-gray-500 to-cod-gray-400 border-cod-gray-300">
                    <div class="inline-flex p-1 mb-2 text-white rounded-lg bg-cod-gray-300">
                        <img class="w-12 -hue-rotate-[50deg]" src="<?php echo get_template_directory_uri() ?>/images/icons/browser.webp" alt="">
                    </div>
                    <h2 class="mb-2 text-xl font-bold">Website & Application Redesign</h2>
                    <p class="line-clamp-5">Ready for a digital makeover? I specialize in redesigning websites and applications to improve their look and feel, functionality, and overall user experience.</p>
                </div>
                <div class="p-4 border-2 rounded-lg bg-gradient-to-tr from-cod-gray-500 to-cod-gray-400 border-cod-gray-300">
                    <div class="inline-flex p-1 mb-2 text-white rounded-lg bg-cod-gray-300">
                        <img class="w-12 -hue-rotate-[50deg]" src="<?php echo get_template_directory_uri() ?>/images/icons/swatchbook.webp" alt="">

                    </div>
                    <h2 class="mb-2 text-xl font-bold">
                        Creative Brand & Print Design
                    </h2>
                    <p class="line-clamp-5">I'll help you encapsulate the spirit of your business into eye-catching designs, creating a consistent brand identity that communicates with your audience effectively.

                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start gap-4 lg:top-28 lg:sticky max-xl:relative">
            <div class="badge badge-pumpkin">
                <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path class="uim-primary" d="M17.73657 14.62189l-2.426 2.23065a11.60327 11.60327 0 0 1-4.29847 2.36987l.64368 3.00318a1.0003 1.0003 0 0 0 1.46924.66162l3.90527-2.20264a3.03526 3.03526 0 0 0 1.375-3.30371zM7.26562 8.77588L9.35431 6.296l-2.6048-.62848A2.77711 2.77711 0 0 0 3.36279 7.0249L1.1626 10.9248A.99989.99989 0 0 0 1.82422 12.394l3.07275.65869A12.88652 12.88652 0 0 1 7.26562 8.77588zM16.73373 8.81626a1.5 1.5 0 1 0-1.5-1.5A1.50055 1.50055 0 0 0 16.73373 8.81626z"></path>
                    <path class="uim-tertiary" d="M22.60107,2.062a1.00088,1.00088,0,0,0-.71289-.71289A11.24875,11.24875,0,0,0,10.46924,4.97217L7.26562,8.77588A12.93634,12.93634,0,0,0,4.3418,15.48682a1.00031,1.00031,0,0,0,.28466.83642l3.1001,3.1001a.99941.99941,0,0,0,.707.293c.02881,0,.05762-.00147.08692-.00391a11.84707,11.84707,0,0,0,6.79-2.85986l3.66308-3.36816A11.20387,11.20387,0,0,0,22.60107,2.062ZM16.7337,8.81622a1.5,1.5,0,1,1,1.5-1.5A1.50054,1.50054,0,0,1,16.7337,8.81622Z"></path>
                </svg>
                Services
            </div>
            <h2 class="text-5xl font-bold">Crafting Digital Experiences with Precision and Passion</h2>
            <p>
                Whether you're an individual or a business, my mission is to transform your digital presence into something truly unique and impactful. I bring a blend of perfectionism and passion to each project, ensuring the end result is something that both you and I can be proud of.
            </p>
            <p>
                <strong>The key to my approach lies in collaboration.</strong> I believe in involving you at each step, enabling us to capture your vision accurately and translate it into a digital reality. Whether it's crafting a striking website, producing compelling brand and print designs, optimizing your local search presence, or giving your site or application a fresh new look - I'm here to help you create a digital experience that truly reflects your brand.


            </p>

        </div>
    </div>
</section>

<section id="projects" class="flex flex-col justify-center gap-6 lg:gap-12">
    <div class="container flex flex-col items-start gap-4 lg:items-center">
        <div class="badge badge-cerulean">
            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="uim-primary" d="M21 10H3A1 1 0 0 1 2 9V6A3.00328 3.00328 0 0 1 5 3H19a3.00328 3.00328 0 0 1 3 3V9A1 1 0 0 1 21 10zM14 14H10a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
                <path class="uim-tertiary" d="M4,10v8a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V10Zm10,4H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z"></path>
            </svg>
            Projects
        </div>
        <h2 class="text-5xl font-bold">Behind the Screens</h2>
        <p class="lg:text-center">
            Welcome to my portfolio, a showcase of my diverse work in the digital landscape. You'll find a range of projects here, from cautious crafted websites to the innovative redesign of interfaces, all reflecting my passion.


        </p>
        <p class="lg:text-center"> Beyond digital, I also work in print design, each project carrying the same high standards for quality and practicality. I believe every project, no matter its size, deserves the best.</p>

    </div>
    <div>
        <div class="max-w-[1920px] max-xl:container px-4 xl:px-8 relative flex w-full gap-6 swiper projects">
            <div class="swiper-wrapper">

                <div class="flex flex-col gap-2 swiper-slide">
                    <div class="relative overflow-hidden rounded-lg ">
                        <img class="transition-all duration-500 hover:rotate-3 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/images/mockup/mockup-gratis-bergbahnen-webseite.webp" alt="">

                    </div>
                    <div>
                        <h2 class="text-xl font-bold">beziehungs-weberei.de</h2>
                        <p class=" line-clamp-2">Crafted a clean, modern WordPress site for a freelance coach and resilience trainer.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 swiper-slide">
                    <div class="relative overflow-hidden rounded-lg ">

                        <img class="transition-all duration-500 hover:rotate-3 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/images/mockup/mockup-physiomed-bremen-webseite.webp" alt="">
                    </div>
                    <div>
                        <h2 class="text-xl font-bold">physiomed-bremen.de</h2>
                        <p class=" line-clamp-2">Created a modern and minimalistic website for a physiotherapy clinic, including a staff photoshoot.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 swiper-slide">
                    <div class="relative overflow-hidden rounded-lg ">
                        <img class="transition-all duration-500 hover:rotate-3 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/images/mockup/mockup-gratis-bergbahnen-webseite.webp" alt="">
                    </div>
                    <div>

                        <h2 class="text-xl font-bold">gratis-bergbahnen.net</h2>
                        <p class=" line-clamp-2">Designed an interactive website displaying free cable car rides, including logo creation and color scheme.

                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 swiper-slide">
                    <div class="relative overflow-hidden rounded-lg ">
                        <img class="transition-all duration-500 hover:rotate-3 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/images/mockup/mockup-lapiazza-speisekarte.webp" alt="">
                    </div>
                    <div>

                        <h2 class="text-xl font-bold">La Piazza Menu</h2>
                        <p class=" line-clamp-2">Print design project for a restaurant menu, emphasizing realistic food imagery in a modern design layout.

                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 swiper-slide">
                    <div class="relative overflow-hidden rounded-lg ">
                        <img class="transition-all duration-500 hover:rotate-3 hover:scale-110" src=" <?php echo get_template_directory_uri() ?>/images/mockup/mockup-sevdesk-redesign.webp" alt="">
                    </div>
                    <div>

                        <h2 class="text-xl font-bold">sevDesk UI Redesign</h2>
                        <p class=" line-clamp-2">Proposed redesign of sevDesk's web interface, with modernized icons and improved user guidance.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex items-center justify-center h-12">
            <div class="relative !bottom-0 custom-swiper-pagination !w-auto"></div>
        </div>
    </div>

</section>

<section id="experience" class="flex items-center bg-cod-gray-600 scroll-mt-[6.75rem]">
    <div class="container grid gap-6 rounded-lg lg:gap-12 lg:py-24 lg:grid-cols-2 ">

        <div class="flex flex-col items-start self-start gap-4 lg:sticky lg:top-28">
            <div class="badge badge-pumpkin">
                <svg class="w-7" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path class="uim-primary" d="m6.002 20.001.002 1a1 1 0 0 0 1 .998h.003a1 1 0 0 0 .997-1.003l-.002-.995h-2z"></path>
                    <path class="uim-quaternary" d="M14 2.001h2v18h-2z"></path>
                    <path class="uim-tertiary" d="M17 2.001h-1v18h-2v-18H5a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a3.003 3.003 0 0 0 3-3v-12a3.003 3.003 0 0 0-3-3z"></path>
                </svg>
                Experience
            </div>
            <h2 class="text-5xl font-bold">The Journey So Far</h2>
            <p>
                Step into the timeline of my professional journey. From my earliest roles to my current position, this section maps out the progression of my career and the experiences that have shaped my skill set. It's a testament to continuous learning, adaptation, and commitment to my craft. Have a look to understand how I've evolved in my field, and what I bring to your projects.
            <h2 class="text-3xl font-bold">Grids of Expertise</h2>
            <div class="flex flex-wrap gap-2">


                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">
                    <svg viewBox="0 0 128 128">
                        <path fill="#E44D26" d="M19.037 113.876L9.032 1.661h109.936l-10.016 112.198-45.019 12.48z"></path>
                        <path fill="#F16529" d="M64 116.8l36.378-10.086 8.559-95.878H64z"></path>
                        <path fill="#EBEBEB" d="M64 52.455H45.788L44.53 38.361H64V24.599H29.489l.33 3.692 3.382 37.927H64zm0 35.743l-.061.017-15.327-4.14-.979-10.975H33.816l1.928 21.609 28.193 7.826.063-.017z"></path>
                        <path fill="#fff" d="M63.952 52.455v13.763h16.947l-1.597 17.849-15.35 4.143v14.319l28.215-7.82.207-2.325 3.234-36.233.335-3.696h-3.708zm0-27.856v13.762h33.244l.276-3.092.628-6.978.329-3.692z"></path>
                    </svg>
                    <svg viewBox="0 0 128 128">
                        <path fill="#1572B6" d="M18.814 114.123L8.76 1.352h110.48l-10.064 112.754-45.243 12.543-45.119-12.526z"></path>
                        <path fill="#33A9DC" d="M64.001 117.062l36.559-10.136 8.601-96.354h-45.16v106.49z"></path>
                        <path fill="#fff" d="M64.001 51.429h18.302l1.264-14.163H64.001V23.435h34.682l-.332 3.711-3.4 38.114h-30.95V51.429z"></path>
                        <path fill="#EBEBEB" d="M64.083 87.349l-.061.018-15.403-4.159-.985-11.031H33.752l1.937 21.717 28.331 7.863.063-.018v-14.39z"></path>
                        <path fill="#fff" d="M81.127 64.675l-1.666 18.522-15.426 4.164v14.39l28.354-7.858.208-2.337 2.406-26.881H81.127z"></path>
                        <path fill="#EBEBEB" d="M64.048 23.435v13.831H30.64l-.277-3.108-.63-7.012-.331-3.711h34.646zm-.047 27.996v13.831H48.792l-.277-3.108-.631-7.012-.33-3.711h16.447z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path fill="#F0DB4F" d="M1.408 1.408h125.184v125.185H1.408z"></path>
                        <path fill="#323330" d="M116.347 96.736c-.917-5.711-4.641-10.508-15.672-14.981-3.832-1.761-8.104-3.022-9.377-5.926-.452-1.69-.512-2.642-.226-3.665.821-3.32 4.784-4.355 7.925-3.403 2.023.678 3.938 2.237 5.093 4.724 5.402-3.498 5.391-3.475 9.163-5.879-1.381-2.141-2.118-3.129-3.022-4.045-3.249-3.629-7.676-5.498-14.756-5.355l-3.688.477c-3.534.893-6.902 2.748-8.877 5.235-5.926 6.724-4.236 18.492 2.975 23.335 7.104 5.332 17.54 6.545 18.873 11.531 1.297 6.104-4.486 8.08-10.234 7.378-4.236-.881-6.592-3.034-9.139-6.949-4.688 2.713-4.688 2.713-9.508 5.485 1.143 2.499 2.344 3.63 4.26 5.795 9.068 9.198 31.76 8.746 35.83-5.176.165-.478 1.261-3.666.38-8.581zM69.462 58.943H57.753l-.048 30.272c0 6.438.333 12.34-.714 14.149-1.713 3.558-6.152 3.117-8.175 2.427-2.059-1.012-3.106-2.451-4.319-4.485-.333-.584-.583-1.036-.667-1.071l-9.52 5.83c1.583 3.249 3.915 6.069 6.902 7.901 4.462 2.678 10.459 3.499 16.731 2.059 4.082-1.189 7.604-3.652 9.448-7.401 2.666-4.915 2.094-10.864 2.07-17.444.06-10.735.001-21.468.001-32.237z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0" fill="#38b2ac"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#CB6699" d="M1.219 56.156c0 .703.207 1.167.323 1.618.756 2.933 2.381 5.45 4.309 7.746 2.746 3.272 6.109 5.906 9.554 8.383 2.988 2.148 6.037 4.248 9.037 6.38.515.366 1.002.787 1.561 1.236-.481.26-.881.489-1.297.7-3.959 2.008-7.768 4.259-11.279 6.986-2.116 1.644-4.162 3.391-5.607 5.674-2.325 3.672-3.148 7.584-1.415 11.761.506 1.22 1.278 2.274 2.367 3.053.353.252.749.502 1.162.6 1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352 4.312-2.976 7.217-6.966 8.466-12.087.908-3.722.945-7.448-.125-11.153a11.696 11.696 0 00-.354-1.014c-.13-.333-.283-.657-.463-1.072l6.876-3.954.103.088c-.125.409-.258.817-.371 1.23-.817 2.984-1.36 6.02-1.165 9.117.208 3.3 1.129 6.389 3.061 9.146 1.562 2.23 5.284 2.313 6.944.075.589-.795 1.16-1.626 1.589-2.513 1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055-.064 1.521.025 3.033.545 4.48.445 1.238 1.202 2.163 2.62 2.326.97.111 1.743-.333 2.456-.896a10.384 10.384 0 002.691-3.199c1.901-3.491 3.853-6.961 5.576-10.54 1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671.61 1.729 1.365 3.417 2.187 5.058.389.775.344 1.278-.195 1.928-2.256 2.72-4.473 5.473-6.692 8.223-.491.607-.98 1.225-1.389 1.888a3.701 3.701 0 00-.48 1.364 1.737 1.737 0 001.383 1.971 9.661 9.661 0 002.708.193c3.097-.228 5.909-1.315 8.395-3.157 3.221-2.386 4.255-5.642 3.475-9.501-.211-1.047-.584-2.065-.947-3.074-.163-.455-.174-.774.123-1.198 2.575-3.677 4.775-7.578 6.821-11.569.081-.157.164-.314.306-.482.663 3.45 1.661 6.775 3.449 9.792-.912.879-1.815 1.676-2.632 2.554-1.799 1.934-3.359 4.034-4.173 6.595-.35 1.104-.619 2.226-.463 3.405.242 1.831 1.742 3.021 3.543 2.604 3.854-.892 7.181-2.708 9.612-5.925 1.636-2.166 1.785-4.582 1.1-7.113-.188-.688-.411-1.365-.651-2.154.951-.295 1.878-.649 2.837-.868 4.979-1.136 9.904-.938 14.702.86 2.801 1.05 5.064 2.807 6.406 5.571 1.639 3.379.733 6.585-2.452 8.721-.297.199-.637.356-.883.605a.869.869 0 00-.205.67c.021.123.346.277.533.275 1.047-.008 1.896-.557 2.711-1.121 2.042-1.413 3.532-3.314 3.853-5.817l.063-.188-.077-1.63c-.031-.094.023-.187.016-.258-.434-3.645-2.381-6.472-5.213-8.688-3.28-2.565-7.153-3.621-11.249-3.788a25.401 25.401 0 00-9.765 1.503c-.897.325-1.786.71-2.688 1.073-.121-.219-.251-.429-.358-.646-.926-1.896-2.048-3.708-2.296-5.882-.176-1.544-.392-3.086-.025-4.613.353-1.469.813-2.913 1.246-4.362.223-.746.066-1.164-.646-1.5a2.854 2.854 0 00-.786-.258c-1.75-.254-3.476-.109-5.171.384-.6.175-1.036.511-1.169 1.175-.076.381-.231.746-.339 1.122-.443 1.563-.757 3.156-1.473 4.645-1.794 3.735-3.842 7.329-5.938 10.897-.227.385-.466.763-.752 1.23-.736-1.54-1.521-2.922-1.759-4.542-.269-1.832-.481-3.661-.025-5.479.339-1.356.782-2.687 1.19-4.025.193-.636.104-.97-.472-1.305-.291-.169-.62-.319-.948-.368a11.643 11.643 0 00-5.354.438c-.543.176-.828.527-.994 1.087-.488 1.652-.904 3.344-1.589 4.915-2.774 6.36-5.628 12.687-8.479 19.013-.595 1.321-1.292 2.596-1.963 3.882-.17.326-.418.613-.63.919-.17-.201-.236-.339-.235-.477.005-.813-.092-1.65.063-2.436a172.189 172.189 0 011.578-7.099c.47-1.946 1.017-3.874 1.538-5.807.175-.647.178-1.252-.287-1.796-.781-.911-2.413-1.111-3.381-.409l-.428.242.083-.69c.204-1.479.245-2.953-.161-4.41-.506-1.816-1.802-2.861-3.686-2.803-.878.027-1.8.177-2.613.497-3.419 1.34-6.048 3.713-8.286 6.568a2.592 2.592 0 01-.757.654c-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41-2.727-2.224-5.498-4.393-8.244-6.592-2.434-1.949-4.792-3.979-6.596-6.56-1.342-1.92-2.207-4.021-2.29-6.395-.105-3.025.753-5.789 2.293-8.362 1.97-3.292 4.657-5.934 7.611-8.327 3.125-2.53 6.505-4.678 10.008-6.639 4.901-2.743 9.942-5.171 15.347-6.774 5.542-1.644 11.165-2.585 16.965-1.929 2.28.258 4.494.78 6.527 1.895 1.557.853 2.834 1.97 3.428 3.716.586 1.718.568 3.459.162 5.204-.825 3.534-2.76 6.447-5.195 9.05-3.994 4.267-8.866 7.172-14.351 9.091a39.478 39.478 0 01-9.765 2.083c-2.729.229-5.401-.013-7.985-.962-1.711-.629-3.201-1.591-4.399-2.987-.214-.25-.488-.521-.887-.287-.391.23-.46.602-.329.979.219.626.421 1.278.762 1.838.857 1.405 2.107 2.424 3.483 3.298 2.643 1.681 5.597 2.246 8.66 2.377 4.648.201 9.183-.493 13.654-1.74 6.383-1.78 11.933-4.924 16.384-9.884 3.706-4.13 6.353-8.791 6.92-14.419.277-2.747-.018-5.438-1.304-7.944-1.395-2.715-3.613-4.734-6.265-6.125C68.756 18.179 64.588 17 60.286 17h-4.31c-5.21 0-10.247 1.493-15.143 3.274-3.706 1.349-7.34 2.941-10.868 4.703-7.683 3.839-14.838 8.468-20.715 14.833-2.928 3.171-5.407 6.67-6.833 10.79a40.494 40.494 0 00-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002-1.858 1.646-3.989 2.818-6.471 3.23-.9.149-1.821.185-2.694-.188-1.245-.532-1.524-1.637-1.548-2.814-.037-1.876.62-3.572 1.521-5.186 1.176-2.104 2.9-3.708 4.741-5.206 2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507zM54.303 70.98c-.235 1.424-.529 2.849-.945 4.229-1.438 4.777-3.285 9.406-5.282 13.973-.369.845-.906 1.616-1.373 2.417a1.689 1.689 0 01-.283.334c-.578.571-1.126.541-1.418-.206-.34-.868-.549-1.797-.729-2.716-.121-.617-.092-1.265-.13-1.897.039-4.494 1.41-8.578 3.736-12.38.959-1.568 2.003-3.062 3.598-4.054a6.27 6.27 0 011.595-.706c.85-.239 1.372.154 1.231 1.006zm17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203zm19.703-4.847c-.436.25-.911.43-1.358.661-.409.212-.544-.002-.556-.354a2.385 2.385 0 01.093-.721c.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <defs>
                            <linearGradient id="bootstrap-original-a" x1="76.079" x2="523.48" y1="10.798" y2="365.95" gradientTransform="translate(1.11 14.613) scale(.24566)" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#9013fe" offset="0"></stop>
                                <stop stop-color="#6610f2" offset="1"></stop>
                            </linearGradient>
                            <linearGradient id="bootstrap-original-b" x1="193.51" x2="293.51" y1="109.74" y2="278.87" gradientTransform="translate(0 52)" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff" offset="0"></stop>
                                <stop stop-color="#f1e5fc" offset="1"></stop>
                            </linearGradient>
                            <filter id="bootstrap-original-c" x="161.9" y="135.46" width="197" height="249" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                <feOffset dy="4"></feOffset>
                                <feGaussianBlur stdDeviation="8"></feGaussianBlur>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                            </filter>
                        </defs>
                        <path d="M14.985 27.712c-.237-6.815 5.072-13.099 12.249-13.099h73.54c7.177 0 12.486 6.284 12.249 13.099-.228 6.546.068 15.026 2.202 21.94 2.141 6.936 5.751 11.319 11.664 11.883v6.387c-5.913.564-9.523 4.947-11.664 11.883-2.134 6.914-2.43 15.394-2.202 21.94.237 6.815-5.072 13.098-12.249 13.098h-73.54c-7.177 0-12.486-6.284-12.249-13.098.228-6.546-.068-15.026-2.203-21.94-2.14-6.935-5.76-11.319-11.673-11.883v-6.387c5.913-.563 9.533-4.947 11.673-11.883 2.135-6.914 2.43-15.394 2.203-21.94z" fill="url(#bootstrap-original-a)"></path>
                        <path transform="translate(1.494 2.203) scale(.24566)" d="M267.1 364.46c47.297 0 75.798-23.158 75.798-61.355 0-28.873-20.336-49.776-50.532-53.085v-1.203c22.185-3.609 39.594-24.211 39.594-47.219 0-32.783-25.882-54.138-65.322-54.138h-88.74v217zm-54.692-189.48h45.911c24.958 0 39.131 11.128 39.131 31.279 0 21.505-16.484 33.535-46.372 33.535h-38.67zm0 161.96v-71.431h45.602c32.661 0 49.608 12.03 49.608 35.49 0 23.459-16.484 35.941-47.605 35.941z" fill="url(#bootstrap-original-b)" filter="url(#bootstrap-original-c)" stroke="#fff"></path>
                    </svg>

                </div>

                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">

                    <svg viewBox="0 0 128 128">
                        <path fill="#6181B6" d="M64 33.039C30.26 33.039 2.906 46.901 2.906 64S30.26 94.961 64 94.961 125.094 81.099 125.094 64 97.74 33.039 64 33.039zM48.103 70.032c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34H41.7c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515a15.118 15.118 0 01-2.972 3.748zM69.414 73l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528L76.772 73h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zm-56.985 0h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458S41.708 54 38.934 54z"></path>
                    </svg>
                    <svg viewBox="0 0 128 128">
                        <path fill="#83CD29" d="M112.771 30.334L68.674 4.729c-2.781-1.584-6.402-1.584-9.205 0L14.901 30.334C12.031 31.985 10 35.088 10 38.407v51.142c0 3.319 2.084 6.423 4.954 8.083l11.775 6.688c5.628 2.772 7.617 2.772 10.178 2.772 8.333 0 13.093-5.039 13.093-13.828v-50.49c0-.713-.371-1.774-1.071-1.774h-5.623C42.594 41 41 42.061 41 42.773v50.49c0 3.896-3.524 7.773-10.11 4.48L18.723 90.73c-.424-.23-.723-.693-.723-1.181V38.407c0-.482.555-.966.982-1.213l44.424-25.561c.415-.235 1.025-.235 1.439 0l43.882 25.555c.42.253.272.722.272 1.219v51.142c0 .488.183.963-.232 1.198l-44.086 25.576c-.378.227-.847.227-1.261 0l-11.307-6.749c-.341-.198-.746-.269-1.073-.086-3.146 1.783-3.726 2.02-6.677 3.043-.726.253-1.797.692.41 1.929l14.798 8.754a9.294 9.294 0 004.647 1.246c1.642 0 3.25-.426 4.667-1.246l43.885-25.582c2.87-1.672 4.23-4.764 4.23-8.083V38.407c0-3.319-1.36-6.414-4.229-8.073zM77.91 81.445c-11.726 0-14.309-3.235-15.17-9.066-.1-.628-.633-1.379-1.272-1.379h-5.731c-.709 0-1.279.86-1.279 1.566 0 7.466 4.059 16.512 23.453 16.512 14.039 0 22.088-5.455 22.088-15.109 0-9.572-6.467-12.084-20.082-13.886-13.762-1.819-15.16-2.738-15.16-5.962 0-2.658 1.184-6.203 11.374-6.203 9.105 0 12.461 1.954 13.842 8.091.118.577.645.991 1.24.991h5.754c.354 0 .692-.143.94-.396.24-.272.367-.613.335-.979-.891-10.568-7.912-15.493-22.112-15.493-12.631 0-20.166 5.334-20.166 14.275 0 9.698 7.497 12.378 19.622 13.577 14.505 1.422 15.633 3.542 15.633 6.395 0 4.955-3.978 7.066-13.309 7.066z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path d="M115.95 2.781c-5.504-4.906-12.16-2.933-18.738 2.902a47.9 47.9 0 00-2.918 2.856c-11.246 11.93-21.684 34.02-24.926 50.895 1.262 2.563 2.25 5.832 2.902 8.328.325 1.238.617 2.488.875 3.746 0 0-.101-.379-.515-1.578l-.266-.777a8.12 8.12 0 00-.176-.426c-.734-1.707-2.761-5.309-3.656-6.875a172.299 172.299 0 00-2.008 6.27c2.582 4.714 4.149 12.8 4.149 12.8s-.133-.527-.782-2.355c-.57-1.617-3.437-6.637-4.117-7.809-1.16 4.29-1.62 7.18-1.207 7.883.813 1.363 1.578 3.723 2.25 6.324 1.528 5.868 2.586 13.016 2.586 13.016l.094 1.192c-.203 4.886-.102 9.781.297 14.656.508 6.113 1.457 11.359 2.668 14.172l.824-.45c-1.781-5.535-2.504-12.792-2.184-21.155.477-12.79 3.422-28.215 8.856-44.29 9.191-24.261 21.938-43.733 33.602-53.034-10.63 9.601-25.023 40.695-29.332 52.203C79.404 74.162 75.99 86.252 73.93 97.84c3.555-10.863 15.043-15.527 15.043-15.527s5.637-6.954 12.223-16.883c-3.945.898-10.426 2.441-12.598 3.351-3.2 1.34-4.063 1.797-4.063 1.797s10.371-6.312 19.27-9.172c12.234-19.27 25.566-46.645 12.145-58.625M16.896 5.681c-5.398.02-9.77 4.39-9.785 9.789v88.574c.016 5.398 4.39 9.765 9.785 9.785h50.227a122.816 122.816 0 01-.277-14.438c-.031-.332-.059-.754-.086-1.067a143.095 143.095 0 00-2.523-12.684c-.645-2.507-1.465-4.789-1.965-5.636-.621-1.051-.524-1.653-.52-2.305 0-.64.082-1.305.2-2.059.316-1.878.73-3.738 1.246-5.574l1.156-.148c-.09-.188-.074-.348-.164-.516l-.219-2.031c.64-2.137 1.316-4.262 2.04-6.371l1.066-.102c-.043-.082-.055-.203-.098-.28l-.23-1.685c3.363-17.496 13.8-39.699 25.601-52.219.352-.37.711-.683 1.055-1.035z"></path>
                    </svg>



                </div>

                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">
                    <svg viewBox="0 0 128 128">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M64.094 126.224c34.275-.052 62.021-27.933 62.021-62.325 0-33.833-27.618-61.697-60.613-62.286C30.85.995 1.894 29.113 1.885 63.21c-.01 35.079 27.612 63.064 62.209 63.014zM63.993 4.63c32.907-.011 59.126 26.725 59.116 60.28-.011 31.679-26.925 58.18-59.092 58.187-32.771.007-59.125-26.563-59.124-59.608.002-32.193 26.766-58.848 59.1-58.859zM39.157 35.896c.538 1.793-.968 2.417-2.569 2.542-1.685.13-3.369.257-5.325.406 6.456 19.234 12.815 38.183 19.325 57.573.464-.759.655-.973.739-1.223 3.574-10.682 7.168-21.357 10.651-32.069.318-.977.16-2.271-.188-3.275-1.843-5.32-4.051-10.524-5.667-15.908-1.105-3.686-2.571-6.071-6.928-5.644-.742.073-1.648-1.524-2.479-2.349 1.005-.6 2.003-1.704 3.017-1.719a849.593 849.593 0 0126.618.008c1.018.017 2.016 1.15 3.021 1.765-.88.804-1.639 2.01-2.668 2.321-1.651.498-3.482.404-5.458.58l19.349 57.56c2.931-9.736 5.658-18.676 8.31-27.639 2.366-8.001.956-15.473-3.322-22.52-1.286-2.119-2.866-4.175-3.595-6.486-.828-2.629-1.516-5.622-1.077-8.259.745-4.469 4.174-6.688 8.814-7.113C74.333.881 34.431 9.317 19.728 34.922c5.66-.261 11.064-.604 16.472-.678 1.022-.013 2.717.851 2.957 1.652zm10.117 77.971c-.118.345-.125.729-.218 1.302 10.943 3.034 21.675 2.815 32.659-.886l-16.78-45.96c-5.37 15.611-10.52 30.575-15.661 45.544zm-8.456-2.078l-25.281-69.35c-11.405 22.278-2.729 56.268 25.281 69.35zm76.428-44.562c.802-10.534-2.832-25.119-5.97-27.125-.35 3.875-.106 8.186-1.218 12.114-2.617 9.255-5.817 18.349-8.899 27.468-3.35 9.912-6.832 19.779-10.257 29.666 16.092-9.539 24.935-23.618 26.344-42.123z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path fill="#7f54b3" d="M116.3 89.1H11.7C5.2 89.1 0 83.9 0 77.4v-40C0 31 5.2 25.8 11.7 25.8h104.7c6.4 0 11.7 5.2 11.7 11.7v40c-.1 6.4-5.3 11.6-11.8 11.6z"></path>
                        <path fill="#FFF" d="M13.8 76.7s2.8 11.8 8.5 3.9 11.2-20.3 11.2-20.3.4-3.1 2 3.7S44 80 44 80s6.3 7.9 8.9-.4c-1-11 2.8-31 6.7-40.6 1.6-8.5-7.3-6.1-8.1-4.1s-6.3 14.8-6.7 28.2c0 0-4.7-12.8-5.1-17.4-.4-4.7-5.3-5.9-8.1-1.4S20.3 66.2 20.3 66.2l-5.5-28.4s-5.5-7.3-8.7 1.6c0 0 5.7 34.9 7.7 37.3zM87 45.7c-8.5-14.2-21.1-3.4-21.1-3.4s-9.6 11.1-5.3 26.2c6.9 14.9 16.6 8.3 19.2 7.1 2.7-1.3 14.1-14.3 7.2-29.9zm-6.5 12.5c0 5.9-4.9 11.4-8.9 10.2-2.2-1.3-3.6-4.8-3.6-10.8 2-9.7 6.4-11 8.7-10.8 4.3 2.3 4.1 7.4 3.8 11.4zM118.9 45.7c-8.5-14.2-21.1-3.4-21.1-3.4s-9.6 11.1-5.3 26.2c6.9 14.9 16.6 8.3 19.2 7.1 2.6-1.3 14.1-14.3 7.2-29.9zm-6.5 12.5c0 5.9-4.9 11.4-8.9 10.2-2.2-1.3-3.6-4.8-3.6-10.8 2-9.7 6.4-11 8.7-10.8 4.2 2.3 4 7.4 3.8 11.4z"></path>
                        <path fill="#7f54b3" d="M61.3 89.1l22.3 13.1-4.7-13.1-12.8-3.6z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <g fill="#179EFF">
                            <path d="M99.85 115.41c-9.96 6.89-21.99 10.97-34.98 11.11-34.14.37-62.64-27.08-63.49-61.22C.5 29.87 28.95.88 64.18.88c15.81 0 30.25 5.84 41.28 15.47 1 .87.27 2.5-1.04 2.35-22.07-2.59-43.67-.18-57.34 10.43C31.3 41.38 29.8 59.97 38.9 76.34c12.84 23.1 41.28 23.33 60.95 36.82.79.54.79 1.71 0 2.25z"></path>
                            <path d="M127 63.7c0 8.54-1.7 16.68-4.79 24.1-15.81-8.45-32.64-14.21-40.19-17.03-8.92-3.35-16.73-12.65-11.52-20.82s18.21-9.66 34.2-5.58c6.82 1.75 13.13 6.22 18.88 11.55 2.15 2 3.42 4.79 3.43 7.73-.01.02-.01.03-.01.05z"></path>
                        </g>
                    </svg>
                </div>

                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240 234" style="enable-background:new 0 0 240 234;" xml:space="preserve">
                        <path fill="#470137" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149
					C0,19,19,0,42.5,0z" />
                        <path fill="#FF61F6" d="M126.2,61.5L96.2,111l32,52.5c0.2,0.4,0.3,0.8,0.2,1.2c-0.1,0.4-0.5,0.1-1.1,0.2h-22.9
				c-1.6,0-2.7-0.1-3.4-1.1c-2.1-4.2-4.3-8.3-6.4-12.5c-2.1-4.1-4.4-8.3-6.8-12.6c-2.4-4.3-4.8-8.6-7.2-13h-0.2
				c-2.1,4.3-4.4,8.6-6.7,12.9c-2.3,4.3-4.6,8.6-6.8,12.8c-2.3,4.2-4.6,8.5-6.9,12.6c-0.4,1-1.2,1.1-2.3,1.1H35.7
				c-0.4,0-0.7,0.2-0.7-0.3c-0.1-0.4,0-0.8,0.2-1.1l31.1-51L36,61.4c-0.3-0.4-0.4-0.8-0.2-1c0.2-0.3,0.6-0.4,1-0.4h22.7
				c0.5,0,1,0.1,1.4,0.2c0.4,0.2,0.7,0.5,1,0.9c1.9,4.3,4.1,8.6,6.4,12.9c2.4,4.3,4.7,8.5,7.2,12.7c2.4,4.2,4.6,8.4,6.7,12.7h0.2
				c2.1-4.4,4.3-8.7,6.5-12.9c2.2-4.2,4.5-8.4,6.8-12.6c2.3-4.2,4.5-8.5,6.7-12.6c0.1-0.4,0.3-0.8,0.6-1c0.4-0.2,0.8-0.3,1.3-0.2
				h21.1c0.5-0.1,1,0.2,1.1,0.7C126.6,60.9,126.4,61.3,126.2,61.5L126.2,61.5z" />
                        <path fill="#FF61F6" d="M172.4,167c-7.4,0.1-14.8-1.4-21.5-4.5c-6.3-2.9-11.5-7.7-15.1-13.6c-3.7-6.1-5.5-13.7-5.5-22.8
				c-0.1-7.4,1.8-14.7,5.5-21.1c3.8-6.5,9.3-11.9,15.9-15.5c7-3.9,15.4-5.8,25.3-5.8c0.5,0,1.2,0,2.1,0.1c0.9,0.1,1.9,0.1,3.1,0.2
				V52.4c0-0.7,0.3-1.1,1-1.1h20.3c0.5-0.1,0.9,0.3,1,0.7c0,0.1,0,0.2,0,0.2v95.2c0,1.8,0.1,3.8,0.2,6c0.2,2.1,0.3,4.1,0.4,5.8
				c0,0.7-0.3,1.3-1,1.6c-5.2,2.2-10.7,3.8-16.3,4.8C182.7,166.5,177.6,167,172.4,167z M182.2,147v-44c-0.9-0.2-1.8-0.4-2.7-0.5
				c-1.1-0.1-2.2-0.2-3.3-0.2c-3.9,0-7.8,0.8-11.3,2.6c-3.4,1.7-6.3,4.2-8.5,7.4c-2.2,3.2-3.3,7.5-3.3,12.7c-0.1,3.5,0.5,7,1.7,10.3
				c1,2.7,2.5,5.1,4.5,7.1c1.9,1.8,4.2,3.2,6.8,4c2.7,0.9,5.5,1.3,8.3,1.3c1.5,0,2.9-0.1,4.2-0.2C179.9,147.6,181,147.4,182.2,147z" />
                    </svg>


                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 240 234">
                        <path fill="#300" d="M42.5 0h155C221 0 240 19 240 42.5v149c0 23.5-19 42.5-42.5 42.5h-155C19 234 0 215 0 191.5v-149C0 19 19 0 42.5 0z" />
                        <path fill="#ff9a00" d="M116 140H78.8l-7.6 23.5c-.2.9-1 1.5-1.9 1.4H50.5c-1.1 0-1.4-.6-1.1-1.8l32.2-92.7c.3-1 .6-2.1 1-3.3.4-2.1.6-4.3.6-6.5-.1-.5.3-1 .8-1.1h25.9c.8 0 1.2.3 1.3.8l36.5 103c.3 1.1 0 1.6-1 1.6h-20.9c-.7.1-1.4-.4-1.6-1.1L116 140zm-31.4-20.3H110c-.6-2.1-1.4-4.6-2.3-7.2-.9-2.7-1.8-5.6-2.7-8.6-1-3.1-1.9-6.1-2.9-9.2s-1.9-6-2.7-8.9c-.8-2.8-1.5-5.4-2.2-7.8H97c-.9 4.3-2 8.6-3.4 12.9-1.5 4.8-3 9.8-4.6 14.8-1.4 5.1-2.9 9.8-4.4 14zM170 77c-3.3.1-6.5-1.2-8.9-3.5-2.3-2.5-3.5-5.8-3.4-9.2-.1-3.4 1.2-6.6 3.6-8.9s5.6-3.5 8.9-3.5c3.9 0 6.9 1.2 9.1 3.5 2.2 2.4 3.4 5.6 3.3 8.9.1 3.4-1.1 6.7-3.5 9.2-2.3 2.4-5.7 3.7-9.1 3.5zm-11.2 86.8v-77c0-1 .4-1.4 1.3-1.4h19.8c.9 0 1.3.5 1.3 1.4v77c0 1.1-.4 1.6-1.3 1.6h-19.6c-1 0-1.5-.6-1.5-1.6z" />
                    </svg>

                    <svg style="enable-background: new 0 0 240 234" version="1.1" viewBox="0 0 240 234" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#00005B" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149 C0,19,19,0,42.5,0z" />
                        <path fill="#9999FF" d="m96.4 140h-37.2l-7.6 23.6c-0.2 0.9-1 1.5-1.9 1.4h-18.8c-1.1 0-1.4-0.6-1.1-1.8l32.2-92.3c0.3-1 0.6-1.9 1-3.1 0.4-2.1 0.6-4.3 0.6-6.5-0.1-0.5 0.3-1 0.8-1.1h0.3 25.6c0.7 0 1.2 0.3 1.3 0.8l36.5 102c0.3 1.1 0 1.6-1 1.6h-20.9c-0.7 0.1-1.4-0.4-1.6-1.1l-8.2-24zm-31.4-19.9h25.4c-0.6-2.1-1.4-4.6-2.3-7.2-0.9-2.7-1.8-5.6-2.7-8.6-1-3.1-1.9-6.1-2.9-9.2s-1.9-6-2.7-8.9c-0.8-2.8-1.5-5.4-2.2-7.8h-0.2c-0.9 4.3-2 8.6-3.4 12.9-1.5 4.8-3 9.8-4.6 14.8-1.3 5.1-2.9 9.8-4.4 14z" />
                        <path fill="#9999FF" d="m187 131h-31.7c0.4 3.1 1.4 6.2 3.1 8.9 1.8 2.7 4.3 4.8 7.3 6 4 1.7 8.4 2.6 12.8 2.5 3.5-0.1 7-0.4 10.4-1.1 3.1-0.4 6.1-1.2 8.9-2.3 0.5-0.4 0.8-0.2 0.8 0.8v15.3c0 0.4-0.1 0.8-0.2 1.2-0.2 0.3-0.4 0.5-0.7 0.7-3.2 1.4-6.5 2.4-10 3-4.7 0.9-9.4 1.3-14.2 1.2-7.6 0-14-1.2-19.2-3.5-4.9-2.1-9.2-5.4-12.6-9.5-3.2-3.9-5.5-8.3-6.9-13.1-1.4-4.7-2.1-9.6-2.1-14.6 0-5.4 0.8-10.7 2.5-15.9 1.6-5 4.1-9.6 7.5-13.7 3.3-4 7.4-7.2 12.1-9.5s10.3-3.1 16.7-3.1c5.3-0.1 10.6 0.9 15.5 3.1 4.1 1.8 7.7 4.5 10.5 8 2.6 3.4 4.7 7.2 6 11.4 1.3 4 1.9 8.1 1.9 12.2 0 2.4-0.1 4.5-0.2 6.4-0.2 1.9-0.3 3.3-0.4 4.2-0.1 0.7-0.7 1.3-1.4 1.3-0.6 0-1.7 0.1-3.3 0.2-1.6 0.2-3.5 0.3-5.8 0.3s-4.7-0.4-7.3-0.4zm-31.7-14.6h21.1c2.6 0 4.5 0 5.7-0.1 0.8-0.1 1.6-0.3 2.3-0.8v-1c0-1.3-0.2-2.5-0.6-3.7-1.8-5.6-7.1-9.4-13-9.2-5.5-0.3-10.7 2.6-13.3 7.6-1.2 2.3-1.9 4.7-2.2 7.2z" />
                    </svg>

                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240 234" style="enable-background:new 0 0 240 234;" xml:space="preserve">

                        <path fill="#001E36" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149
					C0,19,19,0,42.5,0z" />

                        <path fill="#31A8FF" d="M54,164.1V61.2c0-0.7,0.3-1.1,1-1.1c1.7,0,3.3,0,5.6-0.1c2.4-0.1,4.9-0.1,7.6-0.2c2.7-0.1,5.6-0.1,8.7-0.2
				c3.1-0.1,6.1-0.1,9.1-0.1c8.2,0,15,1,20.6,3.1c5,1.7,9.6,4.5,13.4,8.2c3.2,3.2,5.7,7.1,7.3,11.4c1.5,4.2,2.3,8.5,2.3,13
				c0,8.6-2,15.7-6,21.3c-4,5.6-9.6,9.8-16.1,12.2c-6.8,2.5-14.3,3.4-22.5,3.4c-2.4,0-4,0-5-0.1c-1-0.1-2.4-0.1-4.3-0.1v32.1
				c0.1,0.7-0.4,1.3-1.1,1.4c-0.1,0-0.2,0-0.4,0H55.2C54.4,165.4,54,165,54,164.1z M75.8,79.4V113c1.4,0.1,2.7,0.2,3.9,0.2H85
				c3.9,0,7.8-0.6,11.5-1.8c3.2-0.9,6-2.8,8.2-5.3c2.1-2.5,3.1-5.9,3.1-10.3c0.1-3.1-0.7-6.2-2.3-8.9c-1.7-2.6-4.1-4.6-7-5.7
				c-3.7-1.5-7.7-2.1-11.8-2c-2.6,0-4.9,0-6.8,0.1C77.9,79.2,76.5,79.3,75.8,79.4L75.8,79.4z" />
                        <path fill="#31A8FF" d="M192,106.9c-3-1.6-6.2-2.7-9.6-3.4c-3.7-0.8-7.4-1.3-11.2-1.3c-2-0.1-4.1,0.2-6,0.7c-1.3,0.3-2.4,1-3.1,2
				c-0.5,0.8-0.8,1.8-0.8,2.7c0,0.9,0.4,1.8,1,2.6c0.9,1.1,2.1,2,3.4,2.7c2.3,1.2,4.7,2.3,7.1,3.3c5.4,1.8,10.6,4.3,15.4,7.3
				c3.3,2.1,6,4.9,7.9,8.3c1.6,3.2,2.4,6.7,2.3,10.3c0.1,4.7-1.3,9.4-3.9,13.3c-2.8,4-6.7,7.1-11.2,8.9c-4.9,2.1-10.9,3.2-18.1,3.2
				c-4.6,0-9.1-0.4-13.6-1.3c-3.5-0.6-7-1.7-10.2-3.2c-0.7-0.4-1.2-1.1-1.1-1.9v-17.4c0-0.3,0.1-0.7,0.4-0.9
				c0.3-0.2,0.6-0.1,0.9,0.1c3.9,2.3,8,3.9,12.4,4.9c3.8,1,7.8,1.5,11.8,1.5c3.8,0,6.5-0.5,8.3-1.4c1.6-0.7,2.7-2.4,2.7-4.2
				c0-1.4-0.8-2.7-2.4-4c-1.6-1.3-4.9-2.8-9.8-4.7c-5.1-1.8-9.8-4.2-14.2-7.2c-3.1-2.2-5.7-5.1-7.6-8.5c-1.6-3.2-2.4-6.7-2.3-10.2
				c0-4.3,1.2-8.4,3.4-12.1c2.5-4,6.2-7.2,10.5-9.2c4.7-2.4,10.6-3.5,17.7-3.5c4.1,0,8.3,0.3,12.4,0.9c3,0.4,5.9,1.2,8.6,2.3
				c0.4,0.1,0.8,0.5,1,0.9c0.1,0.4,0.2,0.8,0.2,1.2v16.3c0,0.4-0.2,0.8-0.5,1C192.9,107.1,192.4,107.1,192,106.9z" />
                    </svg>

                </div>

                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">

                    <svg viewBox="0 0 128 128">
                        <path fill="#073042" d="M51.3 17.7H23.2C17.6 17.7 13 22.3 13 28c-.2 5.5 4.2 10.1 9.7 10.3h28.9l-.3-20.6z"></path>
                        <path fill="#4285F4" d="M115 109.3H23.2c-5.7 0-10.2-4.6-10.2-10.3V27.9c0 5.7 4.6 10.3 10.2 10.4h76.9s15-1.3 15 10v61z"></path>
                        <path fill="#3870B2" d="M72.2 72.9C76.3 69.8 77.1 64 74 60c-1.7-2.2-4.3-3.6-7.1-3.7h.3c.5-.1 1.1-.1 1.6 0v-5.7c0-.7-.3-1.3-.9-1.6-.9-.5-2-.2-2.5.7-.2.3-.3.6-.2 1v5.8c-5 .8-8.5 5.5-7.7 10.6v.1c.4 2.4 1.7 4.6 3.7 6l-16.9 36.2h11l7.8-16.6c.9-2 3.3-2.9 5.4-1.9.8.4 1.5 1.1 1.9 1.9l8.1 16.6h11.2L72.2 72.9zm-5.7-1.6c-3.2 0-5.7-2.6-5.7-5.8 0-3.2 2.6-5.7 5.8-5.6 1.5 0 2.8.6 3.9 1.6 2.3 2.2 2.3 5.8.1 8.1-1 1-2.5 1.7-4.1 1.7z"></path>
                        <path fill="#FFF" d="M45.2 22.7h39.4v7.2H45.2v-7.2z"></path>
                        <path fill="#073042" d="M63.5 59.8c3.1 0 5.7 2.6 5.6 5.8 0 3.1-2.6 5.7-5.8 5.6-3.1 0-5.6-2.6-5.6-5.7 0-1.5.6-2.9 1.7-4s2.6-1.7 4.1-1.7zm2.2-3.3v-6c0-.7-.3-1.3-.9-1.6-.9-.5-2-.2-2.5.7-.2.3-.3.6-.2 1v5.8c-5 .8-8.5 5.5-7.7 10.6v.1c.4 2.4 1.7 4.6 3.7 6l-21.3 45.7c-.8 1.6-.7 3.6.4 5.1 1.6 2.3 4.7 2.9 7 1.3.8-.5 1.4-1.3 1.8-2.1l14.2-30.4c.9-2 3.3-2.9 5.4-1.9.8.4 1.5 1.1 1.9 1.9L82 122.8c1.2 2.5 4.2 3.5 6.7 2.3 2.5-1.2 3.5-4.2 2.3-6.7L69.1 72.9c4-3.2 4.7-9.1 1.5-13.1-1.2-1.6-2.9-2.7-4.9-3.3"></path>
                        <path fill="#3DDC84" d="M78.8 29.1c-1.5 0-2.7-1.1-2.7-2.6 0-.7.3-1.5.8-2 1.1-1 2.7-1 3.8 0 .5.5.8 1.2.8 1.9-.1 1.5-1.2 2.6-2.7 2.7M49.2 29c-1.5 0-2.7-1.2-2.7-2.6 0-.7.3-1.4.8-1.9.9-1.1 2.6-1.3 3.7-.4h.1c1.1 1 1.2 2.7.2 3.8l-.3.4c-.5.5-1.2.8-1.9.8m30.5-16.2l5.3-9.2c.3-.5.1-1.1-.3-1.5-.5-.2-1-.1-1.3.3L77.8 12C69 8.1 59 8.1 50.3 12l-5.4-9.4c-.2-.3-.6-.6-1-.6s-.8.2-1 .6c-.2.3-.2.8 0 1.1l5.4 9.2C38.9 18 32.8 27.6 31.9 38.2h64.2c-.8-10.7-7-20.2-16.4-25.3"></path>
                        <path fill="#073042" d="M105.6 58.1h-4.2c-.2.1-.4.3-.4.6v66.5c0 .3.2.5.5.5h4.4c5.1 0 9.2-4.2 9.2-9.2V48.8c0 5.1-4.1 9.2-9.2 9.2h-.3z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <linearGradient id="xcode-original-a" gradientUnits="userSpaceOnUse" x1="63.947" y1="114.165" x2="63.947" y2="13.784">
                            <stop offset="0" stop-color="#1578e4"></stop>
                            <stop offset="1" stop-color="#00c3f2"></stop>
                        </linearGradient>
                        <path d="M35.7 13.8h56.5c12.1 0 21.9 9.8 21.9 21.9v56.5c0 12.1-9.8 21.9-21.9 21.9H35.7c-12.1 0-21.9-9.8-21.9-21.9V35.7c0-12.1 9.8-21.9 21.9-21.9z" fill="url(#xcode-original-a)"></path>
                        <path fill="#FFF" d="M90.5 19.2H37.4c-10.1 0-18.3 8.2-18.3 18.3v53.1c0 10.1 8.2 18.3 18.3 18.3h53.1c10.1 0 18.3-8.2 18.3-18.3V37.4c0-10.1-8.2-18.2-18.3-18.2zm16.8 71.6c0 9.2-7.4 16.6-16.6 16.6H37.2c-9.1 0-16.6-7.4-16.6-16.6V37.2c0-9.2 7.4-16.6 16.6-16.6h53.6c9.1 0 16.6 7.4 16.6 16.6v53.6z"></path>
                        <path d="M64.1 22.8c-22.6 0-41 18.4-41 41s18.4 41 41 41c22.7 0 41-18.4 41-41s-18.4-41-41-41zm0 81.4c-22.3 0-40.4-18.1-40.4-40.4s18.1-40.4 40.4-40.4c22.3 0 40.4 18.1 40.4 40.4s-18.1 40.4-40.4 40.4z" fill="#69c5f3"></path>
                        <path d="M64.1 31.2c-18.1 0-32.7 14.6-32.7 32.7S46 96.5 64.1 96.5s32.7-14.6 32.7-32.7-14.7-32.6-32.7-32.6zm0 64.6c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.4 32-32 32z" fill="#68c5f4"></path>
                        <path fill="#FFF" d="M32.8 71.3h62.4c2.6 0 4.6 2.1 4.6 4.6 0 2.6-2.1 4.6-4.6 4.6H32.8c-2.6 0-4.6-2.1-4.6-4.6-.1-2.5 2-4.6 4.6-4.6z"></path>
                        <path d="M32.6 72.2h62.6c2 0 3.7 1.6 3.7 3.7v.1c0 2-1.6 3.7-3.7 3.7H32.6c-2 0-3.7-1.6-3.7-3.7v-.2c.1-2 1.7-3.6 3.7-3.6z" fill="#0a93e9"></path>
                        <path d="M31.1 79.3h65.7l.5-.3H30.6l.5.3z" fill="#1694ea"></path>
                        <path d="M29.6 78.1h68.6l.2-.3h-69l.2.3z" fill="#319dec"></path>
                        <path d="M29 76.2h69.9v-.4H29v.4z" fill="#65b1ee"></path>
                        <path d="M29.7 73.7h68.6l.1.2.1.2h-69l.1-.2.1-.2z" fill="#8ec6f3"></path>
                        <path d="M31.2 72.5h65.6l.3.1.3.2H30.6l.3-.2.3-.1z" fill="#95caf3"></path>
                        <linearGradient id="xcode-original-b" gradientUnits="userSpaceOnUse" x1="94.037" y1="79.666" x2="94.037" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M93.4 72.2h-.5s1.7 1.2 1.7 3.9c0 2.5-1.7 3.6-1.7 3.6h.5s1.7-.8 1.7-3.6c0-3-1.7-3.9-1.7-3.9z" fill="url(#xcode-original-b)"></path>
                        <linearGradient id="xcode-original-c" gradientUnits="userSpaceOnUse" x1="89.042" y1="79.666" x2="89.042" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M88.6 72.2h-.5s1.5 1.4 1.5 3.9c0 2.2-1.5 3.6-1.5 3.6h.5s1.5-1.1 1.5-3.6c-.1-2.7-1.5-3.9-1.5-3.9z" fill="url(#xcode-original-c)"></path>
                        <linearGradient id="xcode-original-d" gradientUnits="userSpaceOnUse" x1="63.947" y1="79.666" x2="63.947" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M63.7 72.2h.5v7.5h-.5v-7.5z" fill="url(#xcode-original-d)"></path>
                        <linearGradient id="xcode-original-e" gradientUnits="userSpaceOnUse" x1="58.952" y1="79.666" x2="58.952" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M58.8 72.2h.5s-.2 1.9-.2 3.9c0 1.8.2 3.6.2 3.6h-.5s-.2-1.8-.2-3.6c0-2 .2-3.9.2-3.9z" fill="url(#xcode-original-e)"></path>
                        <linearGradient id="xcode-original-f" gradientUnits="userSpaceOnUse" x1="53.958" y1="79.666" x2="53.958" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M54 72.2h.5s-.5 1.9-.5 3.9c0 1.8.5 3.6.5 3.6H54s-.5-1.8-.5-3.6c0-2 .5-3.9.5-3.9z" fill="url(#xcode-original-f)"></path>
                        <linearGradient id="xcode-original-g" gradientUnits="userSpaceOnUse" x1="48.963" y1="79.666" x2="48.963" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M49.1 72.2h.5s-.7 1.9-.7 3.9c0 1.8.7 3.6.7 3.6h-.5s-.7-1.8-.7-3.6c0-2 .7-3.9.7-3.9z" fill="url(#xcode-original-g)"></path>
                        <linearGradient id="xcode-original-h" gradientUnits="userSpaceOnUse" x1="43.968" y1="79.666" x2="43.968" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M44.2 72.2h.5s-1 1.6-1 3.9c0 2 1 3.6 1 3.6h-.5s-1-1.6-1-3.6c0-2.3 1-3.9 1-3.9z" fill="url(#xcode-original-h)"></path>
                        <linearGradient id="xcode-original-i" gradientUnits="userSpaceOnUse" x1="38.852" y1="79.666" x2="38.852" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M39.3 72.2h.5s-1.5 1.4-1.5 3.9c0 2.2 1.5 3.6 1.5 3.6h-.5s-1.5-1.1-1.5-3.6c.1-2.7 1.5-3.9 1.5-3.9z" fill="url(#xcode-original-i)"></path>
                        <linearGradient id="xcode-original-j" gradientUnits="userSpaceOnUse" x1="33.857" y1="79.666" x2="33.857" y2="72.184">
                            <stop offset="0" stop-color="#1492e7"></stop>
                            <stop offset="1" stop-color="#dbedfb"></stop>
                        </linearGradient>
                        <path d="M34.5 72.2h.5s-1.7 1.2-1.7 3.9c0 2.5 1.7 3.6 1.7 3.6h-.5s-1.7-.8-1.7-3.6c0-3 1.7-3.9 1.7-3.9z" fill="url(#xcode-original-j)"></path>
                        <path fill="#FFF" d="M62 34.1l31.2 54c1.3 2.2.5 5-1.7 6.3-2.2 1.3-5 .5-6.3-1.7L54 38.7c-1.3-2.2-.5-5 1.7-6.3 2.2-1.3 5-.5 6.3 1.7z"></path>
                        <linearGradient id="xcode-original-k" gradientUnits="userSpaceOnUse" x1="73.58" y1="94.25" x2="73.58" y2="32.642">
                            <stop offset="0" stop-color="#1285e7"></stop>
                            <stop offset="1" stop-color="#00b5ef"></stop>
                        </linearGradient>
                        <path d="M61.2 34.5l31.3 54.2c1 1.7.4 4-1.3 5l-.2.1c-1.7 1-4 .4-5-1.3L54.7 38.2c-1-1.7-.4-4 1.3-5l.1-.1c1.8-1 4.1-.4 5.1 1.4z" fill="url(#xcode-original-k)"></path>
                        <linearGradient id="xcode-original-l" gradientUnits="userSpaceOnUse" x1="87.464" y1="93.978" x2="54.081" y2="36.156">
                            <stop offset="0" stop-color="#2b90e7"></stop>
                            <stop offset="1" stop-color="#00b6ef"></stop>
                        </linearGradient>
                        <path d="M54.2 36.7L87 93.6l.2.1.2.1.2.1-33.4-57.8v.6z" fill="url(#xcode-original-l)"></path>
                        <linearGradient id="xcode-original-m" gradientUnits="userSpaceOnUse" x1="89.073" y1="94.327" x2="54.583" y2="34.589">
                            <stop offset="0" stop-color="#3795ea"></stop>
                            <stop offset="1" stop-color="#49c4f2"></stop>
                        </linearGradient>
                        <path d="M54.5 34.8l34.3 59.4h.4L54.7 34.5l-.1.2-.1.1z" fill="url(#xcode-original-m)"></path>
                        <linearGradient id="xcode-original-n" gradientUnits="userSpaceOnUse" x1="91.026" y1="93.735" x2="56.072" y2="33.193">
                            <stop offset="0" stop-color="#3696ea"></stop>
                            <stop offset="1" stop-color="#90d9f6"></stop>
                        </linearGradient>
                        <path d="M55.9 33.3l35 60.5.3-.2-35-60.5-.3.2z" fill="url(#xcode-original-n)"></path>
                        <linearGradient id="xcode-original-o" gradientUnits="userSpaceOnUse" x1="92.582" y1="92.332" x2="58.065" y2="32.547">
                            <stop offset="0" stop-color="#3097ea"></stop>
                            <stop offset="1" stop-color="#b5e5f9"></stop>
                        </linearGradient>
                        <path d="M58.4 32.7L92.6 92l-.1.2-.1.2-34.5-59.8h.2l.3.1z" fill="url(#xcode-original-o)"></path>
                        <linearGradient id="xcode-original-p" gradientUnits="userSpaceOnUse" x1="93.083" y1="90.686" x2="59.741" y2="32.936">
                            <stop offset="0" stop-color="#3a98ea"></stop>
                            <stop offset="1" stop-color="#bce7fa"></stop>
                        </linearGradient>
                        <path d="M60.2 33.3L93 90.1v.6L59.6 33l.2.1.2.1.2.1z" fill="url(#xcode-original-p)"></path>
                        <path fill="#3c98ea" d="M91.5 86.9l-.2-.4s-.2 2-2.4 3.4c-2.1 1.3-4 .4-4 .4l.2.4s1.6 1.1 4-.4c2.4-1.4 2.4-3.4 2.4-3.4zM89 82.7l-.2-.4s-.5 2-2.6 3.2c-1.9 1.2-3.8.6-3.8.6l.2.4s1.7.7 3.9-.6c2.2-1.3 2.5-3.2 2.5-3.2z"></path>
                        <path d="M86.6 78.5l-.2-.4s-.9 1.7-2.8 2.8c-1.7 1-3.6 1-3.6 1l.2.4s1.8 0 3.6-1c1.9-1.1 2.8-2.8 2.8-2.8z" fill="#4ca4ed"></path>
                        <path d="M84.2 74.3l-.2-.4s-1.3 1.7-3 2.6c-1.6.9-3.5 1.2-3.5 1.2l.2.4s1.9-.3 3.5-1.2c1.6-.9 3-2.6 3-2.6z" fill="#4da7ee"></path>
                        <linearGradient id="xcode-original-q" gradientUnits="userSpaceOnUse" x1="67.981" y1="61.226" x2="74.457" y2="57.487">
                            <stop offset="0" stop-color="#00a4ec"></stop>
                            <stop offset="1" stop-color="#b9dff6"></stop>
                        </linearGradient>
                        <path d="M74.3 57.3l.2.4s-1.7.8-3.4 1.7c-1.6.9-3 2.1-3 2.1l-.2-.4s1.5-1.2 3-2.1c1.7-.9 3.4-1.7 3.4-1.7z" fill="url(#xcode-original-q)"></path>
                        <linearGradient id="xcode-original-r" gradientUnits="userSpaceOnUse" x1="65.487" y1="56.906" x2="71.962" y2="53.167">
                            <stop offset="0" stop-color="#00a4ec"></stop>
                            <stop offset="1" stop-color="#b9dff6"></stop>
                        </linearGradient>
                        <path d="M71.9 53.1l.2.4s-1.9.6-3.5 1.6c-1.6.9-2.9 2.3-2.9 2.3l-.2-.4s1.3-1.4 2.9-2.3c1.6-1.1 3.5-1.6 3.5-1.6z" fill="url(#xcode-original-r)"></path>
                        <path d="M67.4 49.8c1.3-.4 2.3-.6 2.3-.6l-.2-.4s-.9.1-1.9.5c-.6.2-.7.7-.2.5z" fill="#9dd4f7"></path>
                        <linearGradient id="xcode-original-s" gradientUnits="userSpaceOnUse" x1="57.93" y1="43.819" x2="64.364" y2="40.105">
                            <stop offset="0" stop-color="#00b4ef"></stop>
                            <stop offset="1" stop-color="#c3e9fa"></stop>
                        </linearGradient>
                        <path d="M64.6 40.5l.2.4s-1.9-.5-4.1.7c-1.9 1.2-2.3 3.1-2.3 3.1l-.2-.4s.2-1.7 2.3-3c2.2-1.4 4.1-.8 4.1-.8z" fill="url(#xcode-original-s)"></path>
                        <linearGradient id="xcode-original-t" gradientUnits="userSpaceOnUse" x1="55.424" y1="39.477" x2="61.9" y2="35.738">
                            <stop offset="0" stop-color="#00b4ef"></stop>
                            <stop offset="1" stop-color="#c3e9fa"></stop>
                        </linearGradient>
                        <path d="M62.2 36.2l.3.4s-2-.8-4.3.5C56 38.5 56 40.4 56 40.4l-.3-.4s-.2-1.7 2.2-3.2c2.5-1.5 4.3-.6 4.3-.6z" fill="url(#xcode-original-t)"></path>
                        <path fill="#FFF" d="M55.5 71.3c8.7-15 18.7-32.4 18.7-32.4 1.3-2.2.5-5-1.7-6.3-2.2-1.3-5-.5-6.3 1.7 0 0-12.2 21.2-21.4 37h10.7zm-5.4 9.2C45.9 87.7 43 92.9 43 92.9c-1.3 2.2-4.1 3-6.3 1.7s-3-4.1-1.7-6.3c0 0 1.7-3.1 4.4-7.7 3.4-.1 9.6-.1 10.7-.1z"></path>
                        <linearGradient id="xcode-original-u" gradientUnits="userSpaceOnUse" x1="54.566" y1="94.401" x2="54.566" y2="32.794">
                            <stop offset="0" stop-color="#1285e7"></stop>
                            <stop offset="1" stop-color="#00b5ef"></stop>
                        </linearGradient>
                        <path d="M54.4 71.3c8.8-15.2 19-32.9 19-32.9 1-1.7.4-4-1.3-5l-.1-.1c-1.7-1-4-.4-5 1.3 0 0-12 20.8-21.2 36.7h8.6zm-5.3 9.2c-4 7-6.9 12-6.9 12-1 1.7-3.2 2.3-5 1.3H37c-1.7-1-2.3-3.2-1.3-5 0 0 1.9-3.3 4.8-8.3h8.6z" fill="url(#xcode-original-u)"></path>
                        <linearGradient id="xcode-original-v" gradientUnits="userSpaceOnUse" x1="40.681" y1="94.131" x2="74.064" y2="36.311">
                            <stop offset="0" stop-color="#3194e9"></stop>
                            <stop offset="1" stop-color="#71cff4"></stop>
                        </linearGradient>
                        <path d="M54.1 71.3L74 36.9v-.6s-11 19.1-20.2 35h.3zm-5.4 9.2l-7.6 13.2-.3.2-.3.1s3.4-5.9 7.8-13.5h.4z" fill="url(#xcode-original-v)"></path>
                        <linearGradient id="xcode-original-w" gradientUnits="userSpaceOnUse" x1="39.063" y1="94.482" x2="73.557" y2="34.736">
                            <stop offset="0" stop-color="#5aa6ec"></stop>
                            <stop offset="1" stop-color="#a2def8"></stop>
                        </linearGradient>
                        <path d="M52.6 71.3l21-36.3-.1-.2-.1-.2S61.9 54.5 52.3 71.2l.3.1zm-5.3 9.2l-8 13.8h-.4s3.4-5.9 8-13.9c.2.1.4.1.4.1z" fill="url(#xcode-original-w)"></path>
                        <linearGradient id="xcode-original-x" gradientUnits="userSpaceOnUse" x1="37.118" y1="93.885" x2="72.072" y2="33.343">
                            <stop offset="0" stop-color="#66abee"></stop>
                            <stop offset="1" stop-color="#bee8fa"></stop>
                        </linearGradient>
                        <path d="M50.4 71.3c9.9-17.1 21.8-37.8 21.8-37.8l-.3-.2-22 38h.5zM45 80.6C40.6 88.3 37.3 94 37.3 94l-.3-.2s3.2-5.6 7.6-13.2c.2-.1.1-.1.4 0z" fill="url(#xcode-original-x)"></path>
                        <linearGradient id="xcode-original-y" gradientUnits="userSpaceOnUse" x1="35.568" y1="92.482" x2="70.085" y2="32.697">
                            <stop offset="0" stop-color="#7bb6f0"></stop>
                            <stop offset="1" stop-color="#b1e3f9"></stop>
                        </linearGradient>
                        <path d="M48 71.3c9.9-17.1 22.2-38.5 22.2-38.5h-.4S57.5 54.1 47.6 71.3h.4zm-5.8 9.2c-4 6.9-6.7 11.6-6.7 11.6l.1.2.1.2s2.9-5 7-12h-.5z" fill="url(#xcode-original-y)"></path>
                        <linearGradient id="xcode-original-z" gradientUnits="userSpaceOnUse" x1="35.056" y1="90.872" x2="68.415" y2="33.092">
                            <stop offset="0" stop-color="#5aa6ec"></stop>
                            <stop offset="1" stop-color="#afe3f9"></stop>
                        </linearGradient>
                        <path d="M46.5 71.3l22-38.1-.2.1-.2.1-.1.1S55.8 54.6 46.2 71.3h.3zm-5.3 9.2c-3.5 6.1-6 10.4-6 10.4v-.8s2.2-3.8 5.6-9.7c.2.1.2.1.4.1z" fill="url(#xcode-original-z)"></path>
                        <linearGradient id="xcode-original-A" gradientUnits="userSpaceOnUse" x1="66.362" y1="35.689" x2="72.838" y2="39.428">
                            <stop offset="0" stop-color="#c1e7fa"></stop>
                            <stop offset="1" stop-color="#89d4f5"></stop>
                        </linearGradient>
                        <path d="M66 36.2l-.2.4s1.8-.9 4.2.4c2.2 1.2 2.3 3.3 2.3 3.3l.2-.4s.2-1.9-2.3-3.3-4.2-.4-4.2-.4z" fill="url(#xcode-original-A)"></path>
                        <linearGradient id="xcode-original-B" gradientUnits="userSpaceOnUse" x1="63.856" y1="40.03" x2="70.332" y2="43.768">
                            <stop offset="0" stop-color="#c1e7fa"></stop>
                            <stop offset="1" stop-color="#89d4f5"></stop>
                        </linearGradient>
                        <path d="M63.6 40.5l-.2.4s2-.6 4.1.6c2 1.1 2.4 3 2.4 3l.2-.4s-.2-1.8-2.4-3c-2.3-1.3-4.1-.6-4.1-.6z" fill="url(#xcode-original-B)"></path>
                        <linearGradient id="xcode-original-C" gradientUnits="userSpaceOnUse" x1="61.273" y1="44.505" x2="67.748" y2="48.243">
                            <stop offset="0" stop-color="#c1e7fa"></stop>
                            <stop offset="1" stop-color="#89d4f5"></stop>
                        </linearGradient>
                        <path d="M61.1 44.7l-.2.4s1.8-.1 3.8 1.1c1.8 1 2.7 2.6 2.7 2.6l.2-.4s-.9-1.6-2.7-2.6c-1.9-1.1-3.8-1.1-3.8-1.1z" fill="url(#xcode-original-C)"></path>
                        <linearGradient id="xcode-original-D" gradientUnits="userSpaceOnUse" x1="58.761" y1="48.855" x2="65.236" y2="52.594">
                            <stop offset="0" stop-color="#b0dff8"></stop>
                            <stop offset="1" stop-color="#52bdf2"></stop>
                        </linearGradient>
                        <path d="M58.7 49l-.2.4s2 .3 3.7 1.3c1.6.9 2.8 2.4 2.8 2.4l.2-.4s-1.2-1.5-2.8-2.4c-1.7-1-3.7-1.3-3.7-1.3z" fill="url(#xcode-original-D)"></path>
                        <linearGradient id="xcode-original-E" gradientUnits="userSpaceOnUse" x1="56.25" y1="53.204" x2="62.727" y2="56.943">
                            <stop offset="0" stop-color="#b4def8"></stop>
                            <stop offset="1" stop-color="#4eb5f0"></stop>
                        </linearGradient>
                        <path d="M56.2 53.2l-.2.4s1.9.5 3.6 1.5c1.6.9 2.9 2.2 2.9 2.2l.2-.4s-1.3-1.3-2.9-2.2c-1.6-.9-3.6-1.5-3.6-1.5z" fill="url(#xcode-original-E)"></path>
                        <linearGradient id="xcode-original-F" gradientUnits="userSpaceOnUse" x1="53.74" y1="57.553" x2="60.215" y2="61.291">
                            <stop offset="0" stop-color="#b4def8"></stop>
                            <stop offset="1" stop-color="#4eb5f0"></stop>
                        </linearGradient>
                        <path d="M53.8 57.4l-.3.4s1.8.7 3.5 1.7c1.6.9 3 2 3 2l.2-.4s-1.4-1.1-3-2c-1.6-.9-3.4-1.7-3.4-1.7z" fill="url(#xcode-original-F)"></path>
                        <linearGradient id="xcode-original-G" gradientUnits="userSpaceOnUse" x1="51.239" y1="61.886" x2="57.713" y2="65.624">
                            <stop offset="0" stop-color="#b5ddf8"></stop>
                            <stop offset="1" stop-color="#46aeee"></stop>
                        </linearGradient>
                        <path d="M51.1 62.1l.2-.4 6.5 3.7-.2.4-6.5-3.7z" fill="url(#xcode-original-G)"></path>
                        <linearGradient id="xcode-original-H" gradientUnits="userSpaceOnUse" x1="48.735" y1="66.22" x2="55.211" y2="69.959">
                            <stop offset="0" stop-color="#96cef4"></stop>
                            <stop offset="1" stop-color="#46aaee"></stop>
                        </linearGradient>
                        <path d="M48.7 66.4l.2-.4s1.6 1.2 3.3 2.1c1.6.9 3.2 1.6 3.2 1.6l-.2.3s-1.7-.7-3.3-1.6c-1.7-.9-3.2-2-3.2-2z" fill="url(#xcode-original-H)"></path>
                        <path d="M47.1 71.3c-.5-.4-.8-.7-.8-.7l.2-.4s.6.5 1.4 1.1h-.8z" fill="#73b9f1"></path>
                        <linearGradient id="xcode-original-I" gradientUnits="userSpaceOnUse" x1="42.719" y1="80.135" x2="47.681" y2="83">
                            <stop offset="0" stop-color="#8fc1f2"></stop>
                            <stop offset="1" stop-color="#3193ea"></stop>
                        </linearGradient>
                        <path d="M43.2 80.5c.4.3.8.6 1.3.9 1.8 1 3.6.9 3.6.9l-.2.4s-1.8.1-3.6-.9c-.7-.4-1.3-.9-1.7-1.3h.6z" fill="url(#xcode-original-I)"></path>
                        <linearGradient id="xcode-original-J" gradientUnits="userSpaceOnUse" x1="38.634" y1="83.717" x2="45.11" y2="87.456">
                            <stop offset="0" stop-color="#8fc1f2"></stop>
                            <stop offset="1" stop-color="#3193ea"></stop>
                        </linearGradient>
                        <path d="M38.9 83.3l.2-.4s.5 2 2.7 3.2c2 1.1 3.8.5 3.8.5l-.2.4s-1.6.7-3.8-.5c-2.3-1.3-2.7-3.2-2.7-3.2z" fill="url(#xcode-original-J)"></path>
                        <linearGradient id="xcode-original-K" gradientUnits="userSpaceOnUse" x1="36.124" y1="88.063" x2="42.599" y2="91.802">
                            <stop offset="0" stop-color="#8fc1f2"></stop>
                            <stop offset="1" stop-color="#3193ea"></stop>
                        </linearGradient>
                        <path d="M36.4 87.6l.2-.4s.2 2.1 2.6 3.4c2.2 1.2 3.9.3 3.9.3l-.3.4s-1.5 1.1-3.9-.3c-2.5-1.4-2.5-3.4-2.5-3.4z" fill="url(#xcode-original-K)"></path>
                        <linearGradient id="xcode-original-L" gradientUnits="userSpaceOnUse" x1="76.722" y1="64.933" x2="89.179" y2="71.008">
                            <stop offset=".001"></stop>
                            <stop offset="1" stop-opacity="0"></stop>
                        </linearGradient>
                        <path d="M68.8 114.2l42.8-89.9-10.8-5.1-44.6 93.5s1.4.7 3.2 1.5h9.4z" fill="url(#xcode-original-L)"></path>
                        <radialGradient id="xcode-original-M" cx="95.237" cy="25.132" r="16.181" fx="79.585" fy="25.974" gradientTransform="matrix(-.4494 .8933 -1.5457 -.7777 176.886 -40.4)" gradientUnits="userSpaceOnUse">
                            <stop offset="0"></stop>
                            <stop offset="1" stop-opacity="0"></stop>
                        </radialGradient>
                        <path d="M94.1 13.8l20 9.5V52C107.2 48.7 61 26.7 61 26.7s3.2-6.7 6.2-12.9h26.9z" fill="url(#xcode-original-M)"></path>
                        <radialGradient id="xcode-original-N" cx="51.211" cy="114.953" r="7.901" fx="51.196" fy="117.292" gradientTransform="matrix(.8979 .4402 -.2506 .5111 34.032 33.662)" gradientUnits="userSpaceOnUse">
                            <stop offset=".417" stop-color="#0c0c12"></stop>
                            <stop offset="1" stop-color="#3d4651"></stop>
                        </radialGradient>
                        <path d="M44.5 110.2c-.3.6-.8 1.3-.7 2.4.1 4.1 6.8 7.9 10.7 7.9 2.7 0 3.6-1.1 4.6-3.1s-13.5-9.6-14.6-7.2z" fill="url(#xcode-original-N)"></path>
                        <linearGradient id="xcode-original-O" gradientUnits="userSpaceOnUse" x1="84.758" y1="39.174" x2="94.522" y2="44.149">
                            <stop offset="0" stop-color="#344351"></stop>
                            <stop offset=".1" stop-color="#9697a0"></stop>
                            <stop offset=".181" stop-color="#8b8c95"></stop>
                            <stop offset=".351" stop-color="#787a83"></stop>
                            <stop offset=".47" stop-color="#71747d"></stop>
                            <stop offset=".591" stop-color="#777982"></stop>
                            <stop offset=".749" stop-color="#87898f"></stop>
                            <stop offset=".8" stop-color="#8e8f94"></stop>
                            <stop offset=".849" stop-color="#3d3b42"></stop>
                            <stop offset=".9" stop-color="#606e84"></stop>
                        </linearGradient>
                        <path d="M90.6 25.1s10.3 2.5 11.1 3.2-1.3 4.7-1.7 5.3c-3.3 4-13.6 26.1-13.6 26.1l-9.5-5.4s8.5-15.8 11.5-21.4c1.9-3.8 2.2-7.8 2.2-7.8z" fill="url(#xcode-original-O)"></path>
                        <linearGradient id="xcode-original-P" gradientUnits="userSpaceOnUse" x1="117.884" y1="29.257" x2="106.863" y2="14.364">
                            <stop offset=".27" stop-color="#262b33"></stop>
                            <stop offset=".45" stop-color="#74747e"></stop>
                            <stop offset=".54" stop-color="#b0b0bc"></stop>
                            <stop offset=".73" stop-color="#74747e"></stop>
                        </linearGradient>
                        <path d="M114.4 19.9c1.8 1.3 4.2 1 6.1.7 1.3-.2-.7 1.7-2.9 6.1s-2.1 4.7-2.4 4.4c-.3-.3-10.2-5.9-9.9-6.4.4-.5 2-11.4 2.8-11.1 2.9.7 3.4 4.2 6.3 6.3z" fill="url(#xcode-original-P)"></path>
                        <linearGradient id="xcode-original-Q" gradientUnits="userSpaceOnUse" x1="98.542" y1="30.424" x2="114.815" y2="28.322">
                            <stop offset=".14" stop-color="#606e84"></stop>
                            <stop offset=".4" stop-color="#9899a5"></stop>
                            <stop offset=".73" stop-color="#475768"></stop>
                            <stop offset=".92" stop-color="#262b33"></stop>
                        </linearGradient>
                        <path d="M99 32.2c.7-1.1 3.9-7.9 9-7.9 2.3 0 6.7 5.8 7.1 6.6.3.7-.7 3.5-1.2 2.2-.6-1.5-3.1-4.7-5.8-4.7s-6.4 3.1-7.3 4.2c-.9 1-2.5.7-1.8-.4z" fill="url(#xcode-original-Q)"></path>
                        <linearGradient id="xcode-original-R" gradientUnits="userSpaceOnUse" x1="106.128" y1="31.808" x2="104.549" y2="22.854">
                            <stop offset="0" stop-color="#101215" stop-opacity=".1"></stop>
                            <stop offset=".46" stop-color="#101215" stop-opacity=".7"></stop>
                            <stop offset=".7" stop-color="#474951"></stop>
                            <stop offset=".91" stop-color="#7b7d88"></stop>
                        </linearGradient>
                        <path d="M98.8 31.8c.5-.8 2.8-4.3 3.9-5.4s3.9-4 6.3-4.4c2.4-.4 4.9 4.5 4.1 5.5-.6.7-1.6-.1-2.8-1.1-1.2-.9-2-2.7-5.8.2-1.3 1-2.6 1.8-5.6 6.1-.8 1.1-.6-.1-.1-.9z" fill="url(#xcode-original-R)"></path>
                        <linearGradient id="xcode-original-S" gradientUnits="userSpaceOnUse" x1="58.131" y1="81.721" x2="73.237" y2="89.154">
                            <stop offset=".115" stop-color="#2c3952"></stop>
                            <stop offset=".374" stop-color="#3d414e"></stop>
                            <stop offset=".55" stop-color="#474a54"></stop>
                            <stop offset=".754" stop-color="#4e5057"></stop>
                            <stop offset=".892" stop-color="#323945"></stop>
                            <stop offset="1" stop-color="#143052"></stop>
                        </linearGradient>
                        <path d="M86.4 61c.4-.8.9-2-.2-2.9-1.2-.9-6.8-3.9-7.8-4.1-1-.2-1.8 0-2.2.7-.4.7-31.1 53.3-31.7 54.8-.6 1.5-.7 2.6.2 2.9.9.3 11.2 5.2 12.2 6.3 1 1.1 1.5-.1 1.9-.7 1.9-2.4 27.1-56.2 27.6-57z" fill="url(#xcode-original-S)"></path>
                        <linearGradient id="xcode-original-T" gradientUnits="userSpaceOnUse" x1="81.508" y1="31.679" x2="93.19" y2="6.047">
                            <stop offset=".118" stop-color="#6d7078" stop-opacity="0"></stop>
                            <stop offset=".2" stop-color="#6d7078" stop-opacity=".7"></stop>
                            <stop offset=".34" stop-color="#35363a"></stop>
                            <stop offset=".374" stop-color="#1d1f22"></stop>
                            <stop offset=".4" stop-color="#101215"></stop>
                            <stop offset=".5" stop-color="#16171a"></stop>
                            <stop offset=".56" stop-color="#292a2e"></stop>
                            <stop offset=".688" stop-color="#4b4d51"></stop>
                            <stop offset=".807" stop-color="#63666b"></stop>
                            <stop offset=".915" stop-color="#72757b"></stop>
                            <stop offset="1" stop-color="#777a80"></stop>
                        </linearGradient>
                        <path d="M99.5 31.6c.5-.7 1.7-2.7 3.2-4.5 1-1.2 6.4-3.8 7.6-8 .7-2.3-.4-4.6-1.9-5.6-5.1-3.1-13.9-8-26.8-8-8.7 0-12.4 2.9-12.4 2.9h4.4l15.3 6 1.9 8s.2 2.7-.7 5.8c-.6 2.5-.8 4-1.7 6.5.7.3 2.3-.8 4.1-.3 1.6.4 2.6 2.6 3.7 1.3 1.9-2.5 2.5-3 3.3-4.1z" fill="url(#xcode-original-T)"></path>
                        <linearGradient id="xcode-original-U" gradientUnits="userSpaceOnUse" x1="69.064" y1="16.837" x2="91.026" y2="16.837">
                            <stop offset="0" stop-color="#4a4d56"></stop>
                            <stop offset="1" stop-color="#29292d"></stop>
                        </linearGradient>
                        <path d="M90.5 25.4C89.7 18 87.9 11 69.1 11.1c1.2-1.2 4.1-2.4 4.1-2.4l-4.1-.3s.6-.5 1.8-.6c11-.9 20.8 1.4 20.1 15.7-.1 2.3-.3 3.3-.5 1.9z" fill="url(#xcode-original-U)"></path>
                        <linearGradient id="xcode-original-V" gradientUnits="userSpaceOnUse" x1="69.064" y1="11.697" x2="88.054" y2="11.697">
                            <stop offset="0" stop-color="#767880"></stop>
                            <stop offset=".41" stop-color="#0c0a0b"></stop>
                        </linearGradient>
                        <path d="M69.1 11.1c1.3-.5 3.1-.8 6.5-.6 4.2.2 9.5 1.8 11.7 3.8 1.1 1 1 .2-.2-1.1-3.1-3.6-7.8-4.4-13.9-4.5-.7-.1-3 1.2-4.1 2.4z" fill="url(#xcode-original-V)"></path>
                        <linearGradient id="xcode-original-W" gradientUnits="userSpaceOnUse" x1="116.332" y1="34.756" x2="123.707" y2="21.982">
                            <stop offset="0" stop-color="#858997"></stop>
                            <stop offset=".23" stop-color="#244668"></stop>
                            <stop offset=".282" stop-color="#1a3249"></stop>
                            <stop offset=".4" stop-color="#040506"></stop>
                            <stop offset=".464" stop-color="#313236"></stop>
                            <stop offset=".546" stop-color="#65656e"></stop>
                            <stop offset=".607" stop-color="#868691"></stop>
                            <stop offset=".64" stop-color="#92929e"></stop>
                        </linearGradient>
                        <path d="M120.7 20.6l5.5 2.8s-2.1 2.8-3.8 6c-1.8 3.4-3 7.1-3 7.1l-5.3-3.2s1.3-3.6 3.2-7.1c1.5-2.9 3.4-5.6 3.4-5.6z" fill="url(#xcode-original-W)"></path>
                        <path d="M126.2 23.4c.4.2-.9 3.3-2.8 6.9-1.9 3.6-3.7 6.4-4 6.2-.4-.2.9-3.3 2.8-6.9 1.8-3.6 3.6-6.4 4-6.2z" fill="#bfc0d0"></path>
                    </svg>


                </div>

                <div class="flex gap-2 p-2 border-2 rounded grid-of-expertise border-cod-gray-400">

                    <svg viewBox="0 0 128 128">
                        <path fill="#F34F29" d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <g fill="#181616">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M64 5.103c-33.347 0-60.388 27.035-60.388 60.388 0 26.682 17.303 49.317 41.297 57.303 3.017.56 4.125-1.31 4.125-2.905 0-1.44-.056-6.197-.082-11.243-16.8 3.653-20.345-7.125-20.345-7.125-2.747-6.98-6.705-8.836-6.705-8.836-5.48-3.748.413-3.67.413-3.67 6.063.425 9.257 6.223 9.257 6.223 5.386 9.23 14.127 6.562 17.573 5.02.542-3.903 2.107-6.568 3.834-8.076-13.413-1.525-27.514-6.704-27.514-29.843 0-6.593 2.36-11.98 6.223-16.21-.628-1.52-2.695-7.662.584-15.98 0 0 5.07-1.623 16.61 6.19C53.7 35 58.867 34.327 64 34.304c5.13.023 10.3.694 15.127 2.033 11.526-7.813 16.59-6.19 16.59-6.19 3.287 8.317 1.22 14.46.593 15.98 3.872 4.23 6.215 9.617 6.215 16.21 0 23.194-14.127 28.3-27.574 29.796 2.167 1.874 4.097 5.55 4.097 11.183 0 8.08-.07 14.583-.07 16.572 0 1.607 1.088 3.49 4.148 2.897 23.98-7.994 41.263-30.622 41.263-57.294C124.388 32.14 97.35 5.104 64 5.104z"></path>
                            <path d="M26.484 91.806c-.133.3-.605.39-1.035.185-.44-.196-.685-.605-.543-.906.13-.31.603-.395 1.04-.188.44.197.69.61.537.91zm2.446 2.729c-.287.267-.85.143-1.232-.28-.396-.42-.47-.983-.177-1.254.298-.266.844-.14 1.24.28.394.426.472.984.17 1.255zM31.312 98.012c-.37.258-.976.017-1.35-.52-.37-.538-.37-1.183.01-1.44.373-.258.97-.025 1.35.507.368.545.368 1.19-.01 1.452zm3.261 3.361c-.33.365-1.036.267-1.552-.23-.527-.487-.674-1.18-.343-1.544.336-.366 1.045-.264 1.564.23.527.486.686 1.18.333 1.543zm4.5 1.951c-.147.473-.825.688-1.51.486-.683-.207-1.13-.76-.99-1.238.14-.477.823-.7 1.512-.485.683.206 1.13.756.988 1.237zm4.943.361c.017.498-.563.91-1.28.92-.723.017-1.308-.387-1.315-.877 0-.503.568-.91 1.29-.924.717-.013 1.306.387 1.306.88zm4.598-.782c.086.485-.413.984-1.126 1.117-.7.13-1.35-.172-1.44-.653-.086-.498.422-.997 1.122-1.126.714-.123 1.354.17 1.444.663zm0 0"></path>
                        </g>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path fill="#cb3837" d="M2 38.5h124v43.71H64v7.29H36.44v-7.29H2zm6.89 36.43h13.78V53.07h6.89v21.86h6.89V45.79H8.89zm34.44-29.14v36.42h13.78v-7.28h13.78V45.79zm13.78 7.29H64v14.56h-6.89zm20.67-7.29v29.14h13.78V53.07h6.89v21.86h6.89V53.07h6.89v21.86h6.89V45.79z"></path>
                    </svg>

                    <svg viewBox="0 0 128 128">
                        <path d="M3.656 45.043s-3.027-2.191.61-5.113l8.468-7.594s2.426-2.559 4.989-.328l78.175 59.328v28.45s-.039 4.468-5.757 3.976zm0 0" fill="#2489ca"></path>
                        <path d="M23.809 63.379L3.656 81.742s-2.07 1.543 0 4.305l9.356 8.527s2.222 2.395 5.508-.328l21.359-16.238zm0 0" fill="#1070b3"></path>
                        <path d="M59.184 63.531l36.953-28.285-.239-28.297S94.32.773 89.055 3.99L39.879 48.851zm0 0" fill="#0877b9"></path>
                        <path d="M90.14 123.797c2.145 2.203 4.747 1.48 4.747 1.48l28.797-14.222c3.687-2.52 3.171-5.645 3.171-5.645V20.465c0-3.735-3.812-5.024-3.812-5.024L98.082 3.38c-5.453-3.379-9.027.61-9.027.61s4.593-3.317 6.843 2.96v112.317c0 .773-.164 1.53-.492 2.214-.656 1.332-2.086 2.57-5.504 2.051zm0 0" fill="#3c99d4"></path>
                    </svg>
                </div>

            </div>

        </div>

        <ol class="flex flex-col gap-8 border-l-[3px] border-white/10 max-lg:mx-4">
            <li class="flex gap-4 -ml-6 lg:gap-8">
                <div class="flex justify-center w-12 h-12 shrink-0 sticky top-4 lg:top-28 p-3 rounded-full shadow-[0_0_0_8px] bg-cerulean-500 shadow-cod-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.321 28.707">
                        <path d="M44.391,36.656l-3.325,3.313L37.75,36.656l3.316-3.316Zm1.107,1.1L42.17,41.076,45.486,44.4,48.8,41.076Zm-8.84,0L33.33,41.076l7.736,7.731L44.391,45.5Zm20.994,21-4.409-4.409,4.409-4.409L54.326,46.6l-4.409,4.42L45.509,46.6,42.17,49.916l4.409,4.409L42.17,58.733l3.316,3.313,4.409-4.409L54.3,62.047Z" transform="translate(-33.33 -33.34)" fill="currentColor" />
                    </svg>
                </div>
                <div class="flex flex-col items-start gap-3 mt-[5.5px]">
                    <span class="px-3 py-2 rounded-full text-small bg-cerulean">10.2017 - 07.2021</span>

                    <hgroup>
                        <h2 class="text-2xl font-bold">gratis-Bergbahnen.net - Webseite</h2>
                        <p class="text-xl">Hochschule Bremen</p>
                    </hgroup>
                    <p>Der Studiengang stellt die erforderlichen Konzepte, Methoden und Technologien in den Vordergrund und verbindet zu diesem Zweck zentrale Themen der Informatik und Mathematik mit Fragestellungen der Mensch-Computer-Interaktion und Mediengestaltung.

                        Das Studium ist anwendungs- und praxisorientiert und international ausgerichtet. Projekte, Wahlpflichtfächer, Auslandssemester, Praxisphase sowie Bachelorarbeit bieten vielfältige Möglichkeiten, je nach persönlicher Neigung individuelle Schwerpunkte zu setzen. </p>


                </div>
            </li>
            <li class="flex gap-4 -ml-6 lg:gap-8">
                <div class="flex justify-center w-12 h-12 shrink-0 sticky top-4 lg:top-28 p-3 rounded-full shadow-[0_0_0_8px] bg-cerulean-500 shadow-cod-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.321 28.707">
                        <path d="M44.391,36.656l-3.325,3.313L37.75,36.656l3.316-3.316Zm1.107,1.1L42.17,41.076,45.486,44.4,48.8,41.076Zm-8.84,0L33.33,41.076l7.736,7.731L44.391,45.5Zm20.994,21-4.409-4.409,4.409-4.409L54.326,46.6l-4.409,4.42L45.509,46.6,42.17,49.916l4.409,4.409L42.17,58.733l3.316,3.313,4.409-4.409L54.3,62.047Z" transform="translate(-33.33 -33.34)" fill="currentColor" />
                    </svg>

                </div>
                <div class="flex flex-col items-start gap-3 mt-[5.5px]">
                    <span class="px-3 py-2 rounded-full text-small bg-cerulean">10.2017 - 07.2021</span>

                    <hgroup>
                        <h2 class="text-2xl font-bold">gratis-Bergbahnen.net - Webseite</h2>
                        <p class="text-xl">Hochschule Bremen</p>
                    </hgroup>
                    <p>Der Studiengang stellt die erforderlichen Konzepte, Methoden und Technologien in den Vordergrund und verbindet zu diesem Zweck zentrale Themen der Informatik und Mathematik mit Fragestellungen der Mensch-Computer-Interaktion und Mediengestaltung.

                        Das Studium ist anwendungs- und praxisorientiert und international ausgerichtet. Projekte, Wahlpflichtfächer, Auslandssemester, Praxisphase sowie Bachelorarbeit bieten vielfältige Möglichkeiten, je nach persönlicher Neigung individuelle Schwerpunkte zu setzen. </p>


                </div>
            </li>
            <li class="flex gap-4 -ml-6 lg:gap-8">
                <div class="flex justify-center w-12 h-12 shrink-0 sticky top-4 lg:top-28 p-3 rounded-full shadow-[0_0_0_8px] bg-cerulean-500 shadow-cod-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.321 28.707">
                        <path d="M44.391,36.656l-3.325,3.313L37.75,36.656l3.316-3.316Zm1.107,1.1L42.17,41.076,45.486,44.4,48.8,41.076Zm-8.84,0L33.33,41.076l7.736,7.731L44.391,45.5Zm20.994,21-4.409-4.409,4.409-4.409L54.326,46.6l-4.409,4.42L45.509,46.6,42.17,49.916l4.409,4.409L42.17,58.733l3.316,3.313,4.409-4.409L54.3,62.047Z" transform="translate(-33.33 -33.34)" fill="currentColor" />
                    </svg>

                </div>
                <div class="flex flex-col items-start gap-3 mt-[5.5px]">
                    <span class="px-3 py-2 rounded-full text-small bg-cerulean">10.2017 - 07.2021</span>

                    <hgroup>
                        <h2 class="text-2xl font-bold">gratis-Bergbahnen.net - Webseite</h2>
                        <p class="text-xl">Hochschule Bremen</p>
                    </hgroup>
                    <p>Der Studiengang stellt die erforderlichen Konzepte, Methoden und Technologien in den Vordergrund und verbindet zu diesem Zweck zentrale Themen der Informatik und Mathematik mit Fragestellungen der Mensch-Computer-Interaktion und Mediengestaltung.

                        Das Studium ist anwendungs- und praxisorientiert und international ausgerichtet. Projekte, Wahlpflichtfächer, Auslandssemester, Praxisphase sowie Bachelorarbeit bieten vielfältige Möglichkeiten, je nach persönlicher Neigung individuelle Schwerpunkte zu setzen. </p>


                </div>
            </li>
            <li class="flex gap-4 -ml-6 lg:gap-8">
                <div class="flex justify-center w-12 h-12 shrink-0 sticky top-4 lg:top-28 p-3 rounded-full shadow-[0_0_0_8px] bg-cerulean-500 shadow-cod-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.321 28.707">
                        <path d="M44.391,36.656l-3.325,3.313L37.75,36.656l3.316-3.316Zm1.107,1.1L42.17,41.076,45.486,44.4,48.8,41.076Zm-8.84,0L33.33,41.076l7.736,7.731L44.391,45.5Zm20.994,21-4.409-4.409,4.409-4.409L54.326,46.6l-4.409,4.42L45.509,46.6,42.17,49.916l4.409,4.409L42.17,58.733l3.316,3.313,4.409-4.409L54.3,62.047Z" transform="translate(-33.33 -33.34)" fill="currentColor" />
                    </svg>

                </div>
                <div class="flex flex-col items-start gap-3 mt-[5.5px]">
                    <span class="px-3 py-2 rounded-full text-small bg-cerulean">10.2017 - 07.2021</span>

                    <hgroup>
                        <h2 class="text-2xl font-bold">gratis-Bergbahnen.net - Webseite</h2>
                        <p class="text-xl">Hochschule Bremen</p>
                    </hgroup>
                    <p>Der Studiengang stellt die erforderlichen Konzepte, Methoden und Technologien in den Vordergrund und verbindet zu diesem Zweck zentrale Themen der Informatik und Mathematik mit Fragestellungen der Mensch-Computer-Interaktion und Mediengestaltung.

                        Das Studium ist anwendungs- und praxisorientiert und international ausgerichtet. Projekte, Wahlpflichtfächer, Auslandssemester, Praxisphase sowie Bachelorarbeit bieten vielfältige Möglichkeiten, je nach persönlicher Neigung individuelle Schwerpunkte zu setzen. </p>


                </div>
            </li>
            <li class="flex gap-4 -ml-6 lg:gap-8">
                <div class="flex justify-center w-12 h-12 shrink-0 sticky top-4 lg:top-28 p-3 rounded-full shadow-[0_0_0_8px] bg-cerulean-500 shadow-cod-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.321 28.707">
                        <path d="M44.391,36.656l-3.325,3.313L37.75,36.656l3.316-3.316Zm1.107,1.1L42.17,41.076,45.486,44.4,48.8,41.076Zm-8.84,0L33.33,41.076l7.736,7.731L44.391,45.5Zm20.994,21-4.409-4.409,4.409-4.409L54.326,46.6l-4.409,4.42L45.509,46.6,42.17,49.916l4.409,4.409L42.17,58.733l3.316,3.313,4.409-4.409L54.3,62.047Z" transform="translate(-33.33 -33.34)" fill="currentColor" />
                    </svg>

                </div>
                <div class="flex flex-col items-start gap-3 mt-[5.5px]">
                    <span class="px-3 py-2 rounded-full text-small bg-cerulean">10.2017 - 07.2021</span>

                    <hgroup>
                        <h2 class="text-2xl font-bold">gratis-Bergbahnen.net - Webseite</h2>
                        <p class="text-xl">Hochschule Bremen</p>
                    </hgroup>
                    <p>Der Studiengang stellt die erforderlichen Konzepte, Methoden und Technologien in den Vordergrund und verbindet zu diesem Zweck zentrale Themen der Informatik und Mathematik mit Fragestellungen der Mensch-Computer-Interaktion und Mediengestaltung.

                        Das Studium ist anwendungs- und praxisorientiert und international ausgerichtet. Projekte, Wahlpflichtfächer, Auslandssemester, Praxisphase sowie Bachelorarbeit bieten vielfältige Möglichkeiten, je nach persönlicher Neigung individuelle Schwerpunkte zu setzen. </p>


                </div>
            </li>


        </ol>


    </div>
</section>


<section class="bg-cerulean-500">
    <div class="container swiper references">
        <div class="items-center py-8 lg:py-16 swiper-wrapper max-h-36">
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/beziehungs-weberei-logo-white.svg" alt="">
            </div>
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/jde-logo-white.svg" alt="">
            </div>
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/easybeebox-logo-white.svg" alt="">
            </div>
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/gratis-bergbahnen-logo-white.svg" alt="">
            </div>
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/lapiazza-logo-white.svg" alt="">
            </div>
            <div class="flex justify-center swiper-slide">
                <img class="object-cover transition-transform hover:scale-110" src="<? echo get_template_directory_uri() ?>/images/logos/beziehungs-weberei-logo-white.svg" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>

    </div>
</section>

<section id="contact" class="flex items-center">
    <div class="container grid gap-6 rounded-lg lg:gap-12 lg:grid-cols-2">
        <div class="flex flex-col items-start self-start gap-4">
            <div class="badge badge-pumpkin">
                <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path class="uim-tertiary" d="M12 21H4a1 1 0 0 1-.707-1.707l1.675-1.675A9 9 0 1 1 12 21Z"></path>
                    <path class="uim-primary" d="M15.92 10.76a.997.997 0 0 1-.707-.293l-1.92-1.92a1 1 0 0 1 1.414-1.414l1.213 1.213 3.373-3.373a1 1 0 0 1 1.414 1.414l-4.08 4.08a.997.997 0 0 1-.707.293Z"></path>
                </svg>
                Kontakt
            </div>
            <h2 class="text-5xl font-bold">Lets get in touch!</h2>
            <p>
                Hi! Schön, dass du auf meiner Seite vorbeischaust.
                Ich bin Webentwickler und leidenschaftlicher UI/UX-Designer aus Bremen, Deutschland.
                Neben Projekten wie dieser Website, erstelle ich in engem Kundenkontakt Webseiten und Online-Shops - gestalte aber auch Print-Produkte wie Visiten- oder Speisekarten.
            </p>
            <div class="space-y-2">
                <h2 class="text-xl font-bold">Phone</h2>
                <div class="flex items-center justify-center gap-2">
                    <svg class="p-2 rounded-lg bg-cerulean w-9" viewBox="0 0 360 362" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M307.546 52.5655C273.709 18.685 228.706 0.0171895 180.756 0C81.951 0 1.53846 80.404 1.50408 179.235C1.48689 210.829 9.74646 241.667 25.4319 268.844L0 361.736L95.0236 336.811C121.203 351.096 150.683 358.616 180.679 358.625H180.756C279.544 358.625 359.966 278.212 360 179.381C360.017 131.483 341.392 86.4547 307.546 52.5741V52.5655ZM180.756 328.354H180.696C153.966 328.346 127.744 321.16 104.865 307.589L99.4242 304.358L43.034 319.149L58.0834 264.168L54.5423 258.53C39.6304 234.809 31.749 207.391 31.7662 179.244C31.8006 97.1036 98.6334 30.2707 180.817 30.2707C220.61 30.2879 258.015 45.8015 286.145 73.9665C314.276 102.123 329.755 139.562 329.738 179.364C329.703 261.513 262.871 328.346 180.756 328.346V328.354ZM262.475 216.777C257.997 214.534 235.978 203.704 231.869 202.209C227.761 200.713 224.779 199.966 221.796 204.452C218.814 208.939 210.228 219.029 207.615 222.011C205.002 225.002 202.389 225.372 197.911 223.128C193.434 220.885 179.003 216.158 161.891 200.902C148.578 189.024 139.587 174.362 136.975 169.875C134.362 165.389 136.7 162.965 138.934 160.739C140.945 158.728 143.412 155.505 145.655 152.892C147.899 150.279 148.638 148.406 150.133 145.423C151.629 142.432 150.881 139.82 149.764 137.576C148.646 135.333 139.691 113.287 135.952 104.323C132.316 95.5909 128.621 96.777 125.879 96.6309C123.266 96.5019 120.284 96.4762 117.293 96.4762C114.302 96.4762 109.454 97.5935 105.346 102.08C101.238 106.566 89.6691 117.404 89.6691 139.441C89.6691 161.478 105.716 182.785 107.959 185.776C110.202 188.767 139.544 234.001 184.469 253.408C195.153 258.023 203.498 260.782 210.004 262.845C220.731 266.257 230.494 265.776 238.212 264.624C246.816 263.335 264.71 253.786 268.44 243.326C272.17 232.866 272.17 223.893 271.053 222.028C269.936 220.163 266.945 219.037 262.467 216.794L262.475 216.777Z" fill="white" />
                    </svg>
                    <a href="https://wa.me/message/W26MWW6VUYEFD1">+49 (0) 179 4393782</a>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="uim-tertiary" d="M16 22H8a3.003 3.003 0 0 1-3-3V5a3.003 3.003 0 0 1 3-3h8a3.003 3.003 0 0 1 3 3v14a3.003 3.003 0 0 1-3 3Z"></path>
                        <path class="uim-primary" d="M12 18a.99.99 0 0 1-.92-1.38 1.149 1.149 0 0 1 .21-.33 1.01 1.01 0 0 1 .91-.27.653.653 0 0 1 .18.06.739.739 0 0 1 .18.09l.15.12a1.037 1.037 0 0 1 .21.33.99.99 0 0 1-.21 1.09 1.451 1.451 0 0 1-.33.22.99.99 0 0 1-.38.07Z"></path>
                    </svg>
                    <a href="tel:+491794393782">+49 (0) 179 4393782</a>
                </div>
            </div>
            <div class="space-y-2">
                <h2 class="text-xl font-bold">Mail</h2>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-9" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path class="uim-tertiary" d="m21.2 6.71-7.58 7.58a2.994 2.994 0 0 1-4.24 0L1.8 6.71A2.992 2.992 0 0 1 4.5 5h14a2.992 2.992 0 0 1 2.7 1.71z"></path>
                        <path class="uim-quaternary" d="m21.2 6.71-7.58 7.58a2.994 2.994 0 0 1-4.24 0L1.8 6.71c-.197.402-.3.843-.3 1.29v10a3.009 3.009 0 0 0 3 3h14a3.009 3.009 0 0 0 3-3V8c0-.447-.103-.888-.3-1.29z"></path>
                        <path class="uim-primary" d="M17.672 12a1 1 0 0 1-.707-.293l-3.172-3.17a3.243 3.243 0 0 1 3.878-5.124 3.316 3.316 0 0 1 3.879.537 3.246 3.246 0 0 1 0 4.586l-3.171 3.171a1 1 0 0 1-.707.293z"></path>
                    </svg>
                    <a href="mailto:mail@nikolailehbr.ink">mail@nikolailehbr.ink</a>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="35" title="Kontaktformular"]'); ?>
    </div>
</section>

<?php
get_footer();
