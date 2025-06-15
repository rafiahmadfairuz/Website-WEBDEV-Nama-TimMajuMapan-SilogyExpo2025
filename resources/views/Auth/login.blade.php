<x-app>
    @section('title', 'Login')


    <section class="min-h-screen flex items-center justify-center bg-[#f5f5f5] px-4 py-10">
        <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8">
            <h2 class="text-3xl font-bold text-center text-[#1b5a4f] mb-2">Selamat Datang</h2>
            <p class="text-sm text-center text-gray-600 mb-6">Silakan masuk untuk melanjutkan ke dashboard.</p>

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pr-3
                            {{ $errors->has('email') ? 'border-red-500 text-red-500' : 'border-[#1b5a4f] text-[#1b5a4f]' }}">
                            <i class="fas {{ $errors->has('email') ? 'fa-exclamation-triangle' : 'fa-envelope' }}"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Masukkan email anda"
                            value="{{ old('email') }}" required
                            class="w-full pl-12 pr-4 py-2 border
                                {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}
                                rounded-lg focus:outline-none focus:ring-2
                                {{ $errors->has('email') ? 'focus:ring-red-500' : 'focus:ring-[#1b5a4f]' }} transition" />
                    </div>
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pr-3
                            {{ $errors->has('password') ? 'border-red-500 text-red-500' : 'border-[#1b5a4f] text-[#1b5a4f]' }}">
                            <i class="fas {{ $errors->has('password') ? 'fa-exclamation-triangle' : 'fa-lock' }}"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi"
                            required
                            class="w-full pl-12 pr-4 py-2 border
                                {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}
                                rounded-lg focus:outline-none focus:ring-2
                                {{ $errors->has('password') ? 'focus:ring-red-500' : 'focus:ring-[#1b5a4f]' }} transition" />
                    </div>
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-start items-center text-sm">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="accent-[#1b5a4f]" />
                        <span>Ingat saya</span>
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-[#1b5a4f] hover:bg-[#13433b] text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                    Masuk
                </button>
            </form>

            <p class="text-sm text-center text-gray-600 mt-6">
                Belum punya akun?
                <a href="{{ route('view.register') }}" class="text-[#1b5a4f] font-medium hover:underline">Daftar sekarang</a>
            </p>
        </div>
    </section>
</x-app>
