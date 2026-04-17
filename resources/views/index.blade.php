<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek Kelompok 3</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./input.css">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-Outfit leading-8 dark:bg-darkTheme dark:text-white">
    <div class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden">
        <img src="./assets/header-bg-color.png" alt="" class="w-full" />
    </div>

    <nav id="navbar" class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-4 flex items-center justify-between z-50">
        <p class="bg-white bg-opacity-50 backdrop-blur-lg shadow-sm dark:bg-darkTheme dark:shadow-white/20 sr-only">
            Hidden</p>
        <a href="#!" class="mr-14 cursor-pointer">
            <span class="text-xl font-bold text-gray-800 dark:text-white">
                Kelompok 3
            </span>
        </a>


        <ul id="navLink"
            class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white shadow-sm bg-opacity-50 font-Ovo dark:border dark:border-white/30 dark:bg-transparent ">
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#Hero">Beranda</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#About">Tentang Kami</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#Biodata">Biodata</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#Pendidikan">Riwayat Pendidikan</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="/#PrestasiExperience">Experience dan Prestasi</a></li>
        </ul>

        <div class="flex items-center gap-4">
            <button onclick="toggleTheme()">
                <img src="./assets/moon_icon.png" alt="" class="w-5 dark:hidden" />
                <img src="./assets/sun_icon.png" alt="" class="w-5 hidden dark:block" />
            </button>

            <a href="#contact"
                class="hidden lg:flex items-center gap-3 px-8 py-1.5 border border-gray-300 hover:bg-slate-100/70 dark:hover:bg-darkHover rounded-full ml-4 font-Ovo dark:border-white/30">
                Kontak
                <img src="./assets/arrow-icon.png" alt="" class="w-3 dark:hidden" />
                <img src="./assets/arrow-icon-dark.png" alt="" class="w-3 hidden dark:block" />
            </a>

            <button class="block md:hidden ml-3" onclick="openMenu()">
                <img src="./assets/menu-black.png" alt="" class="w-6 dark:hidden" />
                <img src="./assets/menu-white.png" alt="" class="w-6 hidden dark:block" />
            </button>

        </div>
        <!-- ----- mobile menu ------ -->
        <ul id="mobileMenu"
            class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0 bottom-0 w-64 z-50 h-screen bg-rose-50 transition duration-500 font-Ovo dark:bg-darkHover dark:text-white">

            <div class="absolute right-6 top-6" onclick="closeMenu()">
                <img src="./assets/close-black.png" alt="" class="w-5 cursor-pointer dark:hidden" />
                <img src="./assets/close-white.png" alt="" class="w-5 cursor-pointer hidden dark:block" />
            </div>

            <li><a href="#Hero" onclick="closeMenu()">Home</a></li>
            <li><a href="#About" onclick="closeMenu()">About</a></li>
            <li><a href="#Biodata" onclick="closeMenu()">Biodata</a></li>
            <li><a href="#Pendidikan" onclick="closeMenu()">Riwayat Pendidikan</a></li>
            <li><a href="/#PrestasiExperience" onclick="closeMenu()">Experience dan Prestasi</a></li>
        </ul>
    </nav>
    @include('home')
    @include('about')
    @include('biodata')
    @include('pendidikan')
    @include('experience')

    <!-- Contact me section -->
    <div id="contact"
        class="w-full px-[12%] py-10 scroll-mt-20 bg-[url('./assets/footer-bg-color.png')] bg-no-repeat bg-[length:90%_auto] bg-center dark:bg-none">
        <h4 class="text-center mb-2 text-lg font-Ovo">Terhubung dengan Kami</h4>
        <h2 class="text-center text-5xl font-Ovo">Hubungi Kami</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12 font-Ovo">Kami dengan senang hati menerima pertanyaan, saran, maupun masukan.
            Silakan hubungi kami melalui formulir di bawah ini.
        </p>
        <form class="max-w-2xl mx-auto">
            <input type="hidden" name="subject" value="Eliana Jade - New form Submission">
            <div class="grid grid-cols-auto gap-6 mt-10 mb-8">
                <input type="text" placeholder="Masukkan nama anda" ]
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30"
                    ] required="" name="name">
                <input type="email" placeholder="Masukkan email anda" ]
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30"
                    required="" name="email">
            </div>
            <textarea rows="6" placeholder="Tulis pesan anda di sini..."
                class="w-full px-4 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white mb-6 dark:bg-darkHover/30"
                required="" name="message"></textarea>
            <button type="submit"
                class="py-2 px-8 w-max flex items-center justify-between gap-2 bg-black/80 text-white rounded-full mx-auto hover:bg-black duration-500 dark:bg-transparent dark:border dark:border-white/30 dark:hover:bg-darkHover">
                Kirim pesan
                <img src="./assets/right-arrow-white.png" alt="" class="w-4">
            </button>
            <p class="mt-4"></p>
        </form>
    </div>

    <!-- Footer -->
    <div class="mt-5">
        <div class="text-center">
            <a href="#!">
            </a>
            <div class="w-max flex items-center gap-2 mx-auto">
                <img src="./assets/mail_icon.png" alt="" class="w-5 dark:hidden">
                <img src="./assets/mail_icon_dark.png" alt="" class="w-5 hidden dark:block">
                <a href="#!">Kelompok_3@gmail.com</a>
            </div>
        </div>
        <div class="text-center flex flex-col items-center border-t border-gray-400 mx-[10%] mt-12 py-3">
            <p class="w-full text-center">© 2025 <a href="https://prebuiltui.com/" target="_blank">PrebuiltUI</a>. All rights reserved. Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
            <ul class="flex items-center gap-10 justify-center mt-4">
            </ul>
        </div>
    </div>

    <script src="./script.js"></script>

</body>

</html>