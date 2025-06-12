<x-app>
    <nav class="flex items-center justify-between px-4 sm:px-6 lg:px-8 py-5 box-border bg-[#1b5a4f]"
        aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <span class="text-white font-bold text-2xl sm:text-[18px]">Legalitas<span
                        style="color: #faa743">ku</span></span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="mobile-menu-toggle -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>
  <section class="flex items-center justify-center bg-[#f5f5f5] px-4 py-10">
    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8">
      <h2 class="text-2xl font-bold text-[#1b5a4f] mb-2">Masuk ke Akun Anda</h2>
      <p class="text-sm text-gray-600 mb-6">Silakan masuk untuk melanjutkan ke dashboard.</p>

      <!-- Form Login -->
      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" required
                 class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1b5a4f]" />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
          <input type="password" id="password" name="password" required
                 class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1b5a4f]" />
        </div>

        <div class="flex justify-between items-center text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="text-[#1b5a4f]" />
            <span>Ingat saya</span>
          </label>
          <a href="#" class="text-[#1b5a4f] hover:underline">Lupa kata sandi?</a>
        </div>

        <button type="submit"
                class="w-full bg-[#1b5a4f] hover:bg-[#103d36] text-white font-semibold py-2 px-4 rounded-lg transition duration-300 cursor-pointer">
          Masuk
        </button>
      </form>
                  <div class="flex items-center my-6">
                <hr class="flex-grow border-gray-300" />
                <span class="mx-3 text-gray-500 text-sm">Atau masuk dengan</span>
                <hr class="flex-grow border-gray-300" />
            </div>
                        <button class="w-full border border-gray-300 rounded-md py-2 flex items-center justify-center gap-2 font-medium mb-3 hover:bg-gray-50">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google" />
                Masuk dengan Google
            </button>
            <button class="w-full border border-gray-300 rounded-md py-2 flex items-center justify-center gap-2 font-medium hover:bg-gray-50">
                <img src="https://www.svgrepo.com/show/303229/microsoft-logo.svg" class="w-5 h-5" alt="Microsoft" />
                Masuk dengan Google
            </button>
      <p class="text-sm text-center text-gray-600 mt-6">
        Belum punya akun?
        <a href="#" class="text-[#1b5a4f] font-medium hover:underline">Daftar sekarang</a>
      </p>
    </div>
  </section>
  <footer class="bg-[#1b5a4f] text-white text-center py-4 mb-0">
    <p class="text-sm">&copy; 2025 LegalEase. All rights <span class="text-[#faa743]">reserved.</span></p>
  </footer>
</x-app>
