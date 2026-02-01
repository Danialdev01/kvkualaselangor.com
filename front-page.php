<?php $type = "top-menu"; get_header();?>

<main class="">

    <style>
        .video-blur {
            filter: blur(12px);
            transform: scale(1.1);
        }
        .main-text {
            font-size: clamp(2.5rem, 8vw, 6rem);
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            margin-bottom: 20px;
            position: relative;
            display: block;
            width: 100%;
        }

        /* Regular text styling */
        .regular-text {
            color: white;
            text-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
            position: relative;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 5px;
        }

        /* Cedarville Cursive text styling */
        .cursive-text {
            font-family: 'Cedarville Cursive', cursive;
            font-weight: 400;
            font-size: clamp(3.5rem, 9vw, 7.5rem);
            color: #ec1e24;
            position: relative;
            display: inline-block;
            margin: 0 10px;
            text-shadow: 0 3px 15px rgba(255, 193, 7, 0.4);
            transform: rotate(-2deg);
            line-height: 1;
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            .video-blur {
                filter: blur(8px);
                transform: scale(1.05);
            }
            
            .cursive-text {
                margin: 0 5px;
                transform: rotate(-1deg);
            }
            
            .regular-text {
                letter-spacing: 0.5px;
            }
            
            /* Improve button tap targets */
            .cta-button {
                min-height: 48px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            /* Adjust section spacing for mobile */
            section {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }

        /* Prevent text size adjustment on orientation change */
        html {
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }

        /* Improve touch targets */
        a, button {
            min-height: 44px;
            min-width: 44px;
        }

        /* Better video performance on mobile */
        video {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }
    </style>

    <section style="margin-top: -1.9dvh; height: 100dvh; max-height: -webkit-fill-available;" class="relative flex items-center justify-center overflow-hidden" id="home">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover video-blur" preload="metadata" poster="<?php echo esc_url( get_template_directory_uri());?>/src/video/poster.jpg">
                <source src="<?php echo esc_url( get_template_directory_uri());?>/src/video/promo.mp4" type="video/mp4">
                <source src="<?php echo esc_url( get_template_directory_uri());?>/src/video/promo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 via-blue-900/60 to-blue-900/50"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4 max-w-4xl w-full">
            <div class="mb-8 md:mb-10 px-2">
                <div class="main-text">
                    <span class="regular-text">Shine With</span>
                    <span class="cursive-text">Skills</span>
                </div>
                <p class="text-lg md:text-xl lg:text-2xl font-light opacity-90 px-4 max-w-2xl mx-auto leading-relaxed">
                    Peneraju pendidikan teknikal dan vokasional yang unggul.
                </p>
            </div>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 md:gap-6 mt-8 md:mt-12 px-4">
                <a style="background-color: #2b266d;" href="#contact" class="cta-button inline-flex items-center justify-center px-6 py-3 md:px-8 md:py-4 text-white font-bold rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg text-sm md:text-base w-full sm:w-auto">
                    <i class="fas fa-phone-alt mr-2 md:mr-3"></i> Hubungi Kami
                </a>
                <a href="#about" class="cta-button inline-flex items-center justify-center px-6 py-3 md:px-8 md:py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg text-sm md:text-base w-full sm:w-auto">
                    <i class="fas fa-info-circle mr-2 md:mr-3"></i> Informasi Lanjut
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 md:bottom-10 left-1/2 transform -translate-x-1/2 text-white opacity-80 z-10 hidden sm:block">
            <p class="text-xs md:text-sm mb-2">Scroll to explore</p>
            <i class="fas fa-chevron-down text-xl md:text-2xl animate-bounce-slow"></i>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            const icon = this.querySelector('i');
            
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.add('hidden');
                document.querySelector('#mobileMenuBtn i').classList.remove('fa-times');
                document.querySelector('#mobileMenuBtn i').classList.add('fa-bars');
            });
        });
        
        // Video fallback handling
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('video');
            
            // Try to play the video
            const playPromise = video.play();
            
            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    console.log("Autoplay was prevented, showing fallback");
                    // If autoplay is blocked, we could show a play button here
                });
            }
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.querySelector('nav');
                if (window.scrollY > 50) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                }
            });

            // Mobile video optimization
            if ('connection' in navigator) {
                if (navigator.connection.saveData === true) {
                    video.removeAttribute('autoplay');
                }
            }

            // Handle mobile orientation change
            window.addEventListener('orientationchange', function() {
                setTimeout(function() {
                    window.scrollTo(0, 0);
                }, 100);
            });
        });

        // Prevent zoom on double tap (iOS)
        let lastTouchEnd = 0;
        document.addEventListener('touchend', function(event) {
            const now = (new Date()).getTime();
            if (now - lastTouchEnd <= 300) {
                event.preventDefault();
            }
            lastTouchEnd = now;
        }, false);
    </script>


    <div class="hidden md:block pt-10 md:pt-20">
        <?php get_template_part('components/aktiviti'); ?>
    </div>

    <br><br><br><br>
    <section class="py-12 md:py-20 px-4 md:px-6 bg-blue-50" id="experience">
        <div class="container mx-auto max-w-6xl">
            <h2 class="mb-4 text-center px-2">
                <center>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-blue-900 relative inline-block">
                        Pengalaman Kami
                    </h3>
                    <div class="h-1 w-16 md:w-20 bg-yellow-400 mx-auto mt-3 md:mt-4"></div>
                </center>
            </h2>
            <div class="text-center mb-10 md:mb-16 px-2">
                <p class="text-gray-600 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                    Dengan kecemerlangan selama berdekad-dekad dalam pendidikan vokasional, kami berbangga dengan pencapaian serta sumbangan kami terhadap pendidikan teknikal.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 px-2 md:px-0">
                <div class="bg-white rounded-xl p-6 md:p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 md:hover:-translate-y-2">
                    <div class="text-blue-900 mb-4 md:mb-6">
                        <i class="fas fa-user-graduate text-4xl md:text-5xl"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">5,000+</div>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-900 mb-3 md:mb-4">Graduan</h3>
                    <p class="text-gray-600 text-sm md:text-base">Profesional mahir yang menyumbang kepada tenaga kerja Malaysia</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 md:p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 md:hover:-translate-y-2">
                    <div class="text-blue-900 mb-4 md:mb-6">
                        <i class="fas fa-calendar-alt text-4xl md:text-5xl"></i>
                    </div>
                    <?php 
                        $founded_date = 1999;
                        $years = date("Y") - $founded_date;
                    ?>
                    <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2"><?php echo $years; ?></div>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-900 mb-3 md:mb-4">Tahun</h3>
                    <p class="text-gray-600 text-sm md:text-base">Menyediakan pendidikan vokasional berkualiti sejak <?php echo $founded_date; ?></p>
                </div>
                
                <div class="bg-white rounded-xl p-6 md:p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 md:hover:-translate-y-2">
                    <div class="text-blue-900 mb-4 md:mb-6">
                        <i class="fas fa-handshake text-4xl md:text-5xl"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">50+</div>
                    <h3 class="text-xl md:text-2xl font-bold text-blue-900 mb-3 md:mb-4">Kolaborasi Industri</h3>
                    <p class="text-gray-600 text-sm md:text-base">Kerjasama erat untuk penempatan dan latihan industri pelajar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 md:py-20 px-4md:px-6" style="color: #203864;" id="cta">
        <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 px-2">Bersedia untuk Memulakan Perjalanan Vokasional Anda?</h2>
            <p class="text-base md:text-lg lg:text-xl mb-8 md:mb-12 max-w-3xl mx-auto px-2 leading-relaxed">
                Sertailah Kolej Vokasional Kuala Selangor dan lengkapi diri anda dengan kemahiran yang diperlukan demi kerjaya yang cemerlang dalam pasaran kerja yang kompetitif masa kini.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 md:gap-6 px-2">
                <a href="https://sptv.moe.gov.my/" class="cta-button inline-flex items-center justify-center px-6 py-3 md:px-8 md:py-4 bg-blue-900 text-white font-bold rounded-full hover:bg-blue-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg text-sm md:text-base w-full sm:w-auto">
                    <i class="fas fa-file-alt mr-2 md:mr-3"></i> Sijil Vokasional
                </a>
                <a href="https://semakdvm.kvkualaselangor.com/" class="cta-button border-black inline-flex items-center justify-center px-6 py-3 md:px-8 md:py-4 bg-white text-blue-900 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg text-sm md:text-base w-full sm:w-auto">
                    <i class="fas fa-file-alt mr-2 md:mr-3"></i> Diploma Vokasional
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>