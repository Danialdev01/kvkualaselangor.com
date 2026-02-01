<?php $type = "top-menu"; get_header();?>

<main class="">

    <style>
        .video-blur {
            filter: blur(12px);
            transform: scale(1.1);
        }
        .main-text {
            font-size: 6rem;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        /* Regular text styling */
        .regular-text {
            color: white;
            text-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
            position: relative;
            letter-spacing: 2px;
        }

        /* Cedarville Cursive text styling */
        .cursive-text {
            font-family: 'Cedarville Cursive', cursive;
            font-weight: 400;
            font-size: 7.5rem;
            color: #ec1e24;
            position: relative;
            display: inline-block;
            margin: 0 20px;
            text-shadow: 0 5px 25px rgba(255, 193, 7, 0.4);
            transform: rotate(-2deg);
        }
    </style>

    <section style="margin-top: -1.9dvh;height:90dvh" class="relative flex items-center justify-center overflow-hidden" id="home">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover video-blur">
                <source src="<?php echo esc_url( get_template_directory_uri());?>/src/video/promo.mp4" type="video/mp4">
                <source src="<?php echo esc_url( get_template_directory_uri());?>/src/video/promo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 via-blue-900/60 to-blue-900/50"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4 max-w-4xl">
            <div class="mb-10">
                <div class="main-text">
                    <span class="regular-text">Shine With</span>
                    <span class="cursive-text">Skills</span>
                    <!-- Sparkle effects -->
                </div>
                <p class="text-xl md:text-2xl font-light opacity-90">Peneraju pendidikan teknikal dan vokasional yang unggul.</p>
            </div>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 mt-12">
                <a style="background-color: #2b266d;" href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-white font-bold rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
                    <i class="fas fa-phone-alt mr-3"></i> Hubungi Kami
                </a>
                <a href="#about" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
                    <i class="fas fa-info-circle mr-3"></i> Infomasi Lanjut
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white opacity-80 z-10">
            <p class="text-sm mb-2">Scroll to explore</p>
            <i class="fas fa-chevron-down text-2xl animate-bounce-slow"></i>
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
        });
    </script>


    <div class="hidden md:block pt-20">
        <?php get_template_part('components/aktiviti'); ?>
    </div>

    <br><br><br><br><br>
    <section class="py-20 px-4 bg-blue-50" id="experience">
        <h2 class=" mb-4 text-center">
            <center>
                <h3 class="text-5xl font-bold text-blue-900 relative inline-block">Pengalaman Kami</h3>
            </center>
            
            <div class="h-1 w-20 bg-yellow-400 mx-auto mt-4"></div>
        </h2>
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Dengan kecemerlangan selama berdekad-dekad dalam pendidikan vokasional, kami berbangga dengan pencapaian serta sumbangan kami terhadap pendidikan teknikal.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="text-blue-900 mb-6">
                        <i class="fas fa-user-graduate text-5xl"></i>
                    </div>
                    <div class="text-5xl font-bold text-yellow-500 mb-2">5,000+</div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Graduan</h3>
                    <p class="text-gray-600">Profesional mahir yang menyumbang kepada tenaga kerja Malaysia</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="text-blue-900 mb-6">
                        <i class="fas fa-calendar-alt text-5xl"></i>
                    </div>
                    <div class="text-5xl font-bold text-yellow-500 mb-2"><?php echo date("Y") - $founded_date = 1999; ?></div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Tahun</h3>
                    <p class="text-gray-600">Menyediakan pendidikan vokasional berkualiti sejak <?php echo $founded_date?></p>
                </div>
                
                <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="text-blue-900 mb-6">
                        <i class="fas fa-handshake text-5xl"></i>
                    </div>
                    <div class="text-5xl font-bold text-yellow-500 mb-2">50+</div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Kolaborasi Industri</h3>
                    <p class="text-gray-600">Kerjasama erat untuk penempatan dan latihan industri pelajar</p>
                </div>
            </div>
        </div>
    
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4" style="#203864" id="cta">
        <div class="container mx-auto max-w-4xl text-center text-blue-900">
            <h2 class="text-4xl font-bold mb-6">Bersedia untuk Memulakan Perjalanan Vokasional Anda?</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">
                Sertailah Kolej Vokasional Kuala Selangor dan lengkapi diri anda dengan kemahiran yang diperlukan demi kerjaya yang cemerlang dalam pasaran kerja yang kompetitif masa kini.
            </p>
            <br><br>
            
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="https://sptv.moe.gov.my/" class="inline-flex items-center justify-center px-8 py-4 bg-blue-900 text-white font-bold rounded-full hover:bg-blue-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
                    <i class="fas fa-file-alt mr-3"></i> Sijil Vokasional
                </a>
                <a href="https://semakdvm.kvkualaselangor.com/" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-900 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
                    <i class="fas fa-file-alt mr-3"></i> Diploma Vokasional
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>