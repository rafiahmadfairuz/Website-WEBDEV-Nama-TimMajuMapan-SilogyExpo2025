<x-app>
    <div class="">
        <header class="absolute inset-x-0 top-0 z-50">
            <div class="mx-auto mt-4 relative isolate px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between px-4 sm:px-6 lg:px-8 py-4 rounded-2xl box-border bg-[#1b5a4f]"
                    aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <span class="text-white font-bold text-lg sm:text-xl">Legalitas<span
                                    style="color: #faa743">ku</span></span>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="mobile-menu-toggle -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-6 xl:gap-x-10">
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">Beranda</a>
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">Tentang Kami</a>
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">Layanan Kami</a>
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">Benefit</a>
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">Cara Daftar</a>
                        <a href="#" class="text-sm font-semibold text-white hover:text-[#faa743]">FAQ</a>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <a href="#"
                            class="text-sm font-semibold bg-white py-2 px-4 rounded-3xl hover:bg-[#faa743] hover:text-[#1b5a4f] transition">Coba
                            Sekarang</a>
                    </div>
                </nav>
                -               <div class="hidden lg:hidden" id="mobile-menu" role="dialog" aria-modal="true">
                    <div class="fixed inset-0 z-50 bg-black/50"></div>
                    <div
                        class="fixed inset-y-0 right-0 z-50 w-full sm:w-80 overflow-y-auto bg-white px-4 sm:px-6 py-6 sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <span class="text-[#1b5a4f] font-bold text-lg">Legalitas<span
                                        style="color: #faa743">ku</span></span>
                            </a>
                            <button type="button" class="mobile-menu-toggle -m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Beranda</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Tentang
                                        Kami</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Layanan
                                        Kami</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Benefit</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Cara
                                        Daftar</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">FAQ</a>
                                </div>
                                <div class="py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Coba
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="relative isolate px-4 sm:px-6 lg:px-8 pt-12 sm:pt-10">
            <div class="mx-auto w-full">
                <div class="w-full mt-10 sm:mt-14 rounded-2xl bg-[#1b5a4f] -pb-1 sm:pb-2 overflow-hidden relative">
                    <div class="relative w-full">
                        <h1
                            class="font-bold absolute top-2 sm:top-2 left-1/2 -translate-x-1/2 transform z-0 tracking-wide font-['Poppins'] text-[#faa743] text-6xl sm:text-8xl md:text-9xl lg:text-[12rem] xl:text-[14rem]">
                            Legalitas
                        </h1>
                        <img src="{{ asset('images/jas2.png') }}" alt="Logo"
                            class="absolute z-50 object-contain top-10 sm:top-14 md:top-20 left-1/2 -translate-x-1/2 transform w-full max-w-[300px] sm:max-w-[500px] md:max-w-[700px] lg:max-w-[882px] h-auto">
                        <div
                            class="max-w-4xl mx-auto flex flex-row sm:flex-row justify-center gap-20 sm:gap-30 md:gap-30 lg:gap-96 pt-[80px] sm:pt-[120px] md:pt-[200px] lg:pt-[230px] xl:pt-[300px]">
                            <div class="flex items-center justify-between w-28 sm:w-36 md:w-40">
                                <div
                                    class="w-6 h-6 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center bg-[#f5bddb]">
                                    <svg class="h-4 w-4 sm:h-8 sm:w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round"
                                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                                    </svg>
                                </div>
                                <h2 class="text-white sm:text-base text-sm md:text-lg">Lorem Ipsum</h2>
                            </div>
                            <div class="flex items-center justify-between w-28 sm:w-36 md:w-40">
                                <div
                                    class="w-6 h-6 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center bg-[#abe1ca]">
                                    <svg class="h-4 w-4 sm:h-8 sm:w-8" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </div>
                                <h2 class="text-white text-sm sm:text-base md:text-lg">Lorem Ipsum</h2>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-6xl mx-auto flex flex-row lg:flex-row mt-8 sm:mt-12 md:mt-16 lg:mt-30 px-4 sm:px-6 pb-6 sm:pb-8 justify-between">
                            <div class="text-[10px] sm:w-44 md:w-50 lg:w-80 w-28 sm:text-base md:text-lg lg:text-xl">
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                                    itaque!</p>
                            </div>
                            <div>
                                <button
                                    class="hover:bg-[#faa743] font-semibold py-2 px-3 sm:px-5 rounded-2xl text-xs flex items-center sm:text-base md:text-lg lg:text-xl bg-[#faa743] text-[#1b5a4f] transition whitespace-nowrap">
                                    Coba Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto w-full">

            <h2 class="w-max mx-auto mt-20 -mb-10 font-['Poppins'] text-3xl font-bold text-[#1b5a4f]">Tentang Kami</h2>
            <p class="text-gray-600 mt-12 w-max mx-auto">Bagaimana Kami Membantu UMKM</p>
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col-reverse lg:flex-row items-start gap-12">
                    -                    <div class="lg:w-1/2">
                        <h2 class="text-4xl font-bold text-[#1b5a4f] mb-6 leading-snug">
                            Legalitas Mudah Untuk UMKM
                        </h2>
                        <p class="text-gray-700 text-lg mb-6">
                            LegalinAja! hadir karena kami percaya bahwa setiap pelaku UMKM di Indonesia berhak memiliki
                            usaha yang sah, terlindungi, dan tumbuh lebih besar. Namun, kenyataannya, banyak dari mereka
                            kesulitan mengurus perizinan usaha karena prosesnya rumit, tidak tahu harus mulai dari mana,
                            atau merasa biayanya mahal.
                        </p>
                        <p class="text-gray-700 text-lg mb-4">
                            Kami membangun platform ini untuk menjawab masalah tersebut. Dengan panduan interaktif, form
                            generator otomatis, hingga layanan konsultasi.
                        </p>
                        <br>
                        <button
                            class="hover:bg-[#faa743] font-semibold py-4 px-6 sm:px-15 rounded-2xl text-xs flex items-center sm:text-base md:text-lg lg:text-xl bg-[#1b5a4f] text-white transition whitespace-nowrap">
                            Coba Sekarang
                        </button>
                    </div>


                    <div class="lg:w-1/2 flex flex-col items-center gap-6">
                        <img src="{{ asset('images/about.png') }}" alt="Tentang Kami"
                            class="rounded-xl shadow-lg max-w-[410px]" />

                        <div class="grid grid-cols-2 gap-2 w-full -mt-2">
                            <div class="bg-white rounded-xl px-2 pt-2 text-center">
                                <p class="text-2xl font-bold text-[#1b5a4f]">2024</p>
                                <p class="text-gray-500 text-sm">Tahun Berdiri</p>
                            </div>
                            <div class="bg-white rounded-xl px-2 pt-2 text-center">
                                <p class="text-2xl font-bold text-[#1b5a4f]">10+</p>
                                <p class="text-gray-500 text-sm">Jenis Legalitas</p>
                            </div>
                            <div class="bg-white rounded-xl px-2 pt-2 text-center">
                                <p class="text-2xl font-bold text-[#1b5a4f]">15+</p>
                                <p class="text-gray-500 text-sm">Tim Ahli</p>
                            </div>
                            <div class="bg-white rounded-xl px-2 pt-2 text-center">
                                <p class="text-2xl font-bold text-[#1b5a4f]">1 Juta</p>
                                <p class="text-gray-500 text-sm">Target UMKM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="bg-white py-20 px-4">
            <div class="max-w-7xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-[#1b5a4f]">Layanan Kami</h2>
                <p class="text-gray-600 mt-2">Kami bantu UMKM mengurus legalitas usaha dengan cepat dan mudah</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="Panduan"
                        class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-opacity-30 group-hover:bg-opacity-40 transition duration-300 z-0"
                        style="background-color: rgba(27,90,79,0.2)"></div>

                    <div class="absolute inset-0 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-white text-xl font-semibold">Panduan Interaktif</h3>
                            <p class="text-white text-sm mt-1">Langkah-langkah praktis mengurus NIB, PIRT, Halal, dll
                            </p>
                        </div>
                        <div class="self-end">
                            <div class="w-15 h-15 bg-white flex rounded-xl items-center justify-center z-50">
                                <svg class="w-5 h-5 text-[#1b5a4f]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="Panduan"
                        class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-opacity-30 group-hover:bg-opacity-40 transition duration-300 z-0"
                        style="background-color: rgba(27,90,79,0.2)"></div>

                    <div class="absolute inset-0 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-white text-xl font-semibold">Panduan Interaktif</h3>
                            <p class="text-white text-sm mt-1">Langkah-langkah praktis mengurus NIB, PIRT, Halal, dll
                            </p>
                        </div>
                        <div class="self-end">
                            <div class="w-15 h-15 bg-white flex rounded-xl items-center justify-center z-50">
                                <svg class="w-5 h-5 text-[#1b5a4f]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="Panduan"
                        class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-opacity-30 group-hover:bg-opacity-40 transition duration-300 z-0"
                        style="background-color: rgba(27,90,79,0.2)"></div>

                    <div class="absolute inset-0 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-white text-xl font-semibold">Panduan Interaktif</h3>
                            <p class="text-white text-sm mt-1">Langkah-langkah praktis mengurus NIB, PIRT, Halal, dll
                            </p>
                        </div>
                        <div class="self-end">
                            <div class="w-15 h-15 bg-white flex rounded-xl items-center justify-center z-50">
                                <svg class="w-5 h-5 text-[#1b5a4f]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset('images/laptop.jpg') }}" alt="Panduan"
                        class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-opacity-30 group-hover:bg-opacity-40 transition duration-300 z-0"
                        style="background-color: rgba(27,90,79,0.2)"></div>

                    <div class="absolute inset-0 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-white text-xl font-semibold">Panduan Interaktif</h3>
                            <p class="text-white text-sm mt-1">Langkah-langkah praktis mengurus NIB, PIRT, Halal, dll
                            </p>
                        </div>
                        <div class="self-end">
                            <div class="w-15 h-15 bg-white flex rounded-xl items-center justify-center z-50">
                                <svg class="w-5 h-5 text-[#1b5a4f]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-16">
            <div class="max-w-6xl mx-auto px-4 ">
                <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center">Benefit <span
                        class="text-[#1b5a4f]">Legalitasku</span></h2>
                <p class="text-gray-600 mb-12 text-center">Nikmati berbagai kemudahan dalam mengurus legalitas usaha
                    UMKM Anda.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="px-6 py-6 rounded-lg shadow hover:shadow-lg transition duration-300 group bg-[#1b5a4f] w-full max-w-sm">
                        <div class="w-15 h-15 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                class="w-full h-full text-white transition duration-300" fill="currentColor">
                                <path d="M60,52V4c0-2.211-1.789-4-4-4H14v51v3h42v8H10c-2.209,0-4-1.791-4-4s1.791-4,4-4h2v-3V0H8  C5.789,0,4,1.789,4,4v54c0,3.313,2.687,6,6,6h49c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-8C59.104,54,60,53.104,60,52z
                                M23,14h12 c0.553,0,1,0.447,1,1s-0.447,1-1,1H23c-0.553,0-1-0.447-1-1S22.447,14,23,14z
                                M42,28H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h19 c0.553,0,1,0.447,1,1S42.553,28,42,28z
                              M49,22H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h26c0.553,0,1,0.447,1,1S49.553,22,49,22z" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-semibold text-white mb-1">Panduan Lengkap &
                            Terarah</h3>
                        <p class="text-md text-white pb-1">
                            Dapatkan step-by-step mudah mengurus NIB, PIRT, Halal, dan legalitas lainnya. Cocok untuk
                            pemula tanpa pengalaman.
                        </p>

                    </div>
                    <div
                        class="px-6 py-6 rounded-lg shadow hover:shadow-lg transition duration-300 group bg-white hover:bg-[#1b5a4f] w-full max-w-sm">
                        <div class="w-15 h-15 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                class="w-full h-full text-[#1b5a4f] group-hover:text-white transition duration-300"
                                fill="currentColor">
                                <path d="M60,52V4c0-2.211-1.789-4-4-4H14v51v3h42v8H10c-2.209,0-4-1.791-4-4s1.791-4,4-4h2v-3V0H8  C5.789,0,4,1.789,4,4v54c0,3.313,2.687,6,6,6h49c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-8C59.104,54,60,53.104,60,52z
                                M23,14h12 c0.553,0,1,0.447,1,1s-0.447,1-1,1H23c-0.553,0-1-0.447-1-1S22.447,14,23,14z
                                M42,28H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h19 c0.553,0,1,0.447,1,1S42.553,28,42,28z
                              M49,22H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h26c0.553,0,1,0.447,1,1S49.553,22,49,22z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-black group-hover:text-white mb-1">Panduan Lengkap &
                            Terarah</h3>
                        <p class="text-md text-gray-600 group-hover:text-white pb-1">
                            Dapatkan step-by-step mudah mengurus NIB, PIRT, Halal, dan legalitas lainnya. Cocok untuk
                            pemula tanpa pengalaman.
                        </p>

                    </div>
                    <div
                        class="px-6 py-6 rounded-lg shadow hover:shadow-lg transition duration-300 group bg-white hover:bg-[#1b5a4f] w-full max-w-sm">
                        <div class="w-15 h-15 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                class="w-full h-full text-[#1b5a4f] group-hover:text-white transition duration-300"
                                fill="currentColor">
                                <path d="M60,52V4c0-2.211-1.789-4-4-4H14v51v3h42v8H10c-2.209,0-4-1.791-4-4s1.791-4,4-4h2v-3V0H8  C5.789,0,4,1.789,4,4v54c0,3.313,2.687,6,6,6h49c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-8C59.104,54,60,53.104,60,52z
                                M23,14h12 c0.553,0,1,0.447,1,1s-0.447,1-1,1H23c-0.553,0-1-0.447-1-1S22.447,14,23,14z
                                M42,28H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h19 c0.553,0,1,0.447,1,1S42.553,28,42,28z
                              M49,22H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h26c0.553,0,1,0.447,1,1S49.553,22,49,22z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-black group-hover:text-white mb-1">Panduan Lengkap &
                            Terarah</h3>
                        <p class="text-md text-gray-600 group-hover:text-white pb-1">
                            Dapatkan step-by-step mudah mengurus NIB, PIRT, Halal, dan legalitas lainnya. Cocok untuk
                            pemula tanpa pengalaman.
                        </p>

                    </div>
                    <div
                        class="px-6 py-6 rounded-lg shadow hover:shadow-lg transition duration-300 group bg-white hover:bg-[#1b5a4f] w-full max-w-sm">
                        <div class="w-15 h-15 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                class="w-full h-full text-[#1b5a4f] group-hover:text-white transition duration-300"
                                fill="currentColor">
                                <path d="M60,52V4c0-2.211-1.789-4-4-4H14v51v3h42v8H10c-2.209,0-4-1.791-4-4s1.791-4,4-4h2v-3V0H8  C5.789,0,4,1.789,4,4v54c0,3.313,2.687,6,6,6h49c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-8C59.104,54,60,53.104,60,52z
                                M23,14h12 c0.553,0,1,0.447,1,1s-0.447,1-1,1H23c-0.553,0-1-0.447-1-1S22.447,14,23,14z
                                M42,28H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h19 c0.553,0,1,0.447,1,1S42.553,28,42,28z
                              M49,22H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h26c0.553,0,1,0.447,1,1S49.553,22,49,22z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-black group-hover:text-white mb-1">Panduan Lengkap &
                            Terarah</h3>
                        <p class="text-md text-gray-600 group-hover:text-white pb-1">
                            Dapatkan step-by-step mudah mengurus NIB, PIRT, Halal, dan legalitas lainnya. Cocok untuk
                            pemula tanpa pengalaman.
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20" id="cara-daftar">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-[#1b5a4f] mb-4">Bagaimana Cara Mengurus Legalitas Usaha?
                </h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    Ikuti langkah mudah berikut untuk mulai mengurus legalitas usaha Anda melalui LegalinAja!
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class=" p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12H3m0 0l4-4m-4 4l4 4m13-4a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">1. Buat Akun / Masuk</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Mulailah dengan mendaftar atau masuk ke akun Anda agar data
                            usaha tersimpan.</p>
                    </div>
                    <div class=" p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.121 17.804A9.004 9.004 0 0112 15c2.21 0 4.222.802 5.879 2.138M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">2. Isi Profil Usaha</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Masukkan nama, jenis usaha, dan lokasi. Sistem akan
                            menyesuaikan legalitas.</p>
                    </div>
                 <div class="p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17v-2a4 4 0 014-4h6m-6 0l-3-3m3 3l-3 3m13 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3v-1" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">3. Rekomendasi Legalitas</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Sistem menampilkan legalitas wajib & opsional sesuai usaha
                            Anda.</p>
                    </div>
                 <div class=" p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20h9M3 20h9M4 4h16v16H4z" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">4. Ikuti Panduan</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Pelajari cara mengurus NIB, PIRT, Halal, dll melalui panduan
                            interaktif.</p>
                    </div>
                    <div class=" p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 13l4 4L19 7M9 21h6a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">5. Checklist & Pantau</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Tandai dokumen yang sudah diurus dan dapatkan pengingat jadwal
                            izin.</p>
                    </div>

                    <div class=" p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="p-3 rounded-full mr-3">
                                <svg class="w-6 h-6 text-[#1b5a4f]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 8h10M7 12h4m1 8a9 9 0 100-18 9 9 0 000 18zm0 0v-3m0 0h3m-3 0h-3" />
                                </svg>
                            </div>
                            <h3 class="text-[#1b5a4f] text-lg font-semibold">6. Konsultasi Bila Perlu</h3>
                        </div>
                        <p class="text-gray-700 text-sm">Tim kami siap membantu jika Anda mengalami kendala di proses
                            legalitas.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-16" id="faq">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">
                        Frequently <br><span class="text-[#1b5a4f]">Ask Questions</span>
                    </h2>
                    <p class="text-gray-500 text-lg">
                        Kami membantu menjawab pertanyaan umum terkait proses legalitas usaha dan penggunaan platform.
                    </p>
                </div>
                <div class="space-y-4">
                    <details class="group rounded-lg bg-[#1b5a4f] text-white px-6 py-4 cursor-pointer shadow-md">
                        <summary class="flex justify-between items-center text-lg font-semibold">
                            Bagaimana cara daftar dan membuat akun?
                            <span class="transition-transform duration-300 group-open:rotate-180">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm text-white text-opacity-90 leading-relaxed">
                            Buat akun dengan email aktif, isi profil usaha Anda, dan sistem kami akan menyarankan
                            legalitas yang sesuai.
                        </p>
                    </details>
                    <details class="group rounded-lg bg-gray-100 px-6 py-4 cursor-pointer shadow">
                        <summary class="flex justify-between items-center text-gray-800 text-lg font-semibold">
                            Apakah layanan ini gratis?
                            <span class="transition-transform duration-300 group-open:rotate-180">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                            Sebagian besar panduan dasar tersedia secara gratis. Namun tersedia juga paket premium
                            dengan fitur lanjutan.
                        </p>
                    </details>
                    <details class="group rounded-lg bg-gray-100 px-6 py-4 cursor-pointer shadow">
                        <summary class="flex justify-between items-center text-gray-800 text-lg font-semibold">
                            Apakah layanan ini gratis?
                            <span class="transition-transform duration-300 group-open:rotate-180">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                            Sebagian besar panduan dasar tersedia secara gratis. Namun tersedia juga paket premium
                            dengan fitur lanjutan.
                        </p>
                    </details>
                    <details class="group rounded-lg bg-gray-100 px-6 py-4 cursor-pointer shadow">
                        <summary class="flex justify-between items-center text-gray-800 text-lg font-semibold">
                            Apakah layanan ini gratis?
                            <span class="transition-transform duration-300 group-open:rotate-180">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                            Sebagian besar panduan dasar tersedia secara gratis. Namun tersedia juga paket premium
                            dengan fitur lanjutan.
                        </p>
                    </details>
                </div>
            </div>
        </section>
        <footer class="bg-[#1b5a4f] text-white py-12 px-6 md:px-12 lg:px-24">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
 <div class="flex flex-col space-y-10">
    <span class="text-white font-bold text-3xl sm:text-3xl">
        Legalitas<span style="color: #faa743">ku</span>
    </span>
    <p class="text-gray-300 text-sm">
        Platform yang membantu UMKM memahami dan mengurus legalitas usaha secara mudah, cepat, dan terarah.
    </p>
</div>

                <div>
                    <h3 class="font-semibold mb-3">Navigasi</h3>
                    <ul class="space-y-2 text-gray-300 text-sm">
                        <li><a href="#beranda" class="hover:underline">Beranda</a></li>
                        <li><a href="#benefit" class="hover:underline">Manfaat</a></li>
                        <li><a href="#cara-daftar" class="hover:underline">Cara Daftar</a></li>
                        <li><a href="#faq" class="hover:underline">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-3">Bantuan</h3>
                    <ul class="space-y-2 text-gray-300 text-sm">
                        <li><a href="#" class="hover:underline">Panduan Pengguna</a></li>
                        <li><a href="#" class="hover:underline">Konsultasi</a></li>
                        <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-3">Kontak Kami</h3>
                    <p class="text-gray-300 text-sm mb-2">Email: support@legalease.com</p>
                    <p class="text-gray-300 text-sm">WhatsApp: +62 812-3456-7890</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="hover:text-gray-100"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-100"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-100"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-[#d1e2dd] pt-6 text-center text-sm text-gray-400">
                © 2025 LegalEase. All rights reserved.
            </div>
        </footer>
    </div>
    <script>
        document.querySelectorAll('.mobile-menu-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
                const isOpen = !menu.classList.contains('hidden');
                button.setAttribute('aria-expanded', isOpen);
                button.querySelector('svg').innerHTML = isOpen ?
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />' :
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />';
            });
        });
    </script>
</x-app>
