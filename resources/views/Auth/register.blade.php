<x-app>
    @section('title', 'Register')

    <section class="min-h-screen flex items-center justify-center bg-[#f5f5f5] px-4 py-10">
        <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-10">
            <h2 class="text-3xl font-bold text-center text-[#1b5a4f] mb-2">Daftar Akun Baru</h2>
            <p class="text-sm text-center text-gray-600 mb-6">Buat akun Legalitasku untuk mengelola legalitas usaha Anda.</p>

            <form action="{{ route('store.register') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pr-3
                            {{ $errors->has('username') ? 'text-red-500' : 'text-[#1b5a4f]' }}">
                            <i class="fas {{ $errors->has('username') ? 'fa-exclamation-triangle' : 'fa-user' }}"></i>
                        </div>
                        <input type="text" id="username" name="username" placeholder="Masukkan username"
                            value="{{ old('username') }}" required
                            class="w-full pl-12 pr-4 py-2 border
                                {{ $errors->has('username') ? 'border-red-500' : 'border-gray-300' }}
                                rounded-lg focus:outline-none focus:ring-2
                                {{ $errors->has('username') ? 'focus:ring-red-500' : 'focus:ring-[#1b5a4f]' }} transition" />
                    </div>
                    @error('username')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pr-3
                            {{ $errors->has('email') ? 'text-red-500' : 'text-[#1b5a4f]' }}">
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
                            {{ $errors->has('password') ? 'text-red-500' : 'text-[#1b5a4f]' }}">
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

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pr-3 text-[#1b5a4f]">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            required
                            class="w-full pl-12 pr-4 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1b5a4f] transition" />
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-[#1b5a4f] hover:bg-[#13433b] text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                    Daftar
                </button>
            </form>

            <p class="text-sm text-center text-gray-600 mt-6">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-[#1b5a4f] font-medium hover:underline">Masuk di sini</a>
            </p>
        </div>
    </section>
</x-app>
