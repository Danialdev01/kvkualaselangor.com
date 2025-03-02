<footer class="p-4 sm:p-6" style="background-color: #203864;">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <center>
                <div class="hidden md:block mb-6 md:mb-0">
                    <a href="https://kvkualaselangor.com" class="flex items-center bg-white px-2 pb-2 rounded-lg">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/images/logo-banner.png" class="mt-3 mr-3 h-10 sm:h-12" alt="Kolej Vokasional Kuala Selangor Logo" />
                    </a>
                </div>
            </center>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Info Rasmi</h2>
                    <ul class="text-gray-400">
                        <li class="mb-4">
                            <a href="https://kvkualaselangor.com" class="hover:underline">Laman Utama</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://ms.wikipedia.org/wiki/Kolej_Vokasional_Kuala_Selangor" class="hover:underline">Wikipedia</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Hubungi Kami</h2>
                    <ul class="text-gray-400">
                        <li class="mb-4">
                            Kolej Vokasional Kuala Selangor
                            <br>
                            Bestari jaya, 45600
                            <br>
                            Selangor, Malaysia 
                        </li>
                        <li>
                            Telefon 03-32718370
                            <br>
                            Fax 03-32718371
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white">Social Media</h2>
                    <ul class="text-gray-400">
                        <li class="mb-4">
                            <a target="_blank" href="https://web.facebook.com/kvks.sel" class="hover:underline">Facebook</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/kvkualaselangor_official/?hl=en" class="hover:underline">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="items-center sm:justify-between">
            <center>
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© <?php echo date("Y")?> <a href="https://flowbite.com" class="hover:underline">Kolej Vokasional Kuala Selangor</a>. Hak Cipta Terpelihara.
                </span>
            </center>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<?php wp_footer(); ?>