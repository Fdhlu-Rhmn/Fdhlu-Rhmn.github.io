<footer class="footer-color text-white">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <!-- Logo and company name -->
        <div class="flex justify-between items-center flex-wrap">
            <div class="flex items-center justify-items-start">
                <img src="{{ asset('assets/ecohub-removebg.png') }}" alt="Logo" class="h-14 w-16 mr-3">
                <span class=" tracking-widest font-semibold text-2xl text-white font-roboto-serif" style="letter-spacing: 0.5em;">Eco  Hub</span>
            </div>

            <!-- Navigation links -->
            <div class="order-3 md:order-2">
                <ul class="flex flex-wrap justify-center items-center space-x-4 mt-4 md:mt-0">
                    <li>
                        <a href="/" class="hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">Home </a>
                    </li>
                    <li>
                        <a href="/books" class="hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">Article</a>
                    </li>
                    <li>
                        <a href="/books" class="hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">Donation</a>
                    </li>
                    <li>
                        <a href="/about" class="hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">About us</a>
                    </li>
                    <li>
                        <a href="/about" class="hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">Profile</a>
                    </li>
                </ul>
            </div>

            <!-- Contact and social media -->
            <div class="order-2 md:order-3 mb-4 md:mb-0">
                <h3 class="font-bold border-b-2 border-white-600 pb-1 me-10 my-3">Hubungi Kami</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="https://www.facebook.com/yayasanmasagena"
                            class="flex items-center space-x-2 hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">
                            <x-bi-facebook class="fill-current" />
                            <span>ECOHUB Makassar</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:masagenapress@gmail.com"
                            class="flex items-center space-x-2 hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">
                            <x-bi-envelope-at-fill class="fill-current" />
                            <span>EcoHUbMks@gmail.com</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2 hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">
                        <x-bi-instagram class="fill-current" />
                        <span>Instagram : Eco   Hub Mks</span>
                    </li>
                    <li class="flex items-center space-x-2 hover:hover-color hover:bg-custom-green-dark p-2 rounded-full">
                        <x-bi-youtube class="fill-current" />
                        <span>Youtube : EcoHub Makassar</span>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
        <hr class="my-4" />
        <div class="text-center">
            <span>© 2024 ECOHUB. All Rights Reserved.</span>
        </div>
    </div>
</footer>


@vite('resources/js/app.js')
@livewireScripts

</body>
