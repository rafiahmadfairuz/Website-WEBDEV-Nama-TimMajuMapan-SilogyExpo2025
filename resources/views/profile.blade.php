<x-app>


@section('title', 'Profil Pengguna')

    <div class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-200 font-inter">
        <nav class="flex items-center justify-between px-4 sm:px-6 lg:px-12 py-5 bg-[#1b5a4f] shadow-lg">
            <a href="{{ url('/') }}" class="flex items-center gap-2">

                <span class="text-white font-extrabold text-2xl">Legalitas<span class="text-[#faa743]">ku</span></span>
            </a>
        </nav>

        <div class="px-6 py-4 max-w-6xl mx-auto">
            <button onclick="window.history.back()"
                class="text-gray-700 hover:text-[#1b5a4f] flex items-center gap-2 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span class="font-medium hover:cursor-pointer">Kembali</span>
            </button>
        </div>

        <div class="max-w-6xl mx-auto px-4 py-6 flex flex-col md:flex-row gap-8">
            <div
                class="bg-white rounded-2xl shadow-xl p-8 w-full md:w-1/3 flex flex-col items-center text-center transform hover:scale-[1.01] transition-transform duration-300 ease-in-out">
                @auth
                    <img src="https://i.pravatar.cc/150?u={{ Auth::id() }}" alt="Foto Profil"
                        class="w-36 h-36 rounded-full border-4 border-[#1b5a4f] object-cover mb-6 shadow-lg">
                    <h2 class="text-2xl font-bold text-[#1b5a4f] mb-2">{{ Auth::user()->name }}</h2>
                    <p class="text-base text-gray-600 font-light">{{ Auth::user()->email }}</p>

                    <form method="POST" action="{{ route('logout') }}" class="mt-4">
                        @csrf
                        <button type="submit"
                            class="px-5 py-2 bg-[#1b5a4f] text-white rounded-lg hover:bg-[#16463d] transition-all duration-300 shadow-md flex items-center gap-2 text-base font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="17 16 22 12 17 8"></polyline>
                                <line x1="22" y1="12" x2="10" y2="12"></line>
                            </svg>
                            Keluar
                        </button>
                    </form>
                @else
                    <img src="https://i.pravatar.cc/150?u=guest" alt="Foto Profil"
                        class="w-36 h-36 rounded-full border-4 border-[#1b5a4f] object-cover mb-6 shadow-lg">
                    <h2 class="text-2xl font-bold text-[#1b5a4f] mb-2">Tamu</h2>
                    <p class="text-base text-gray-600 font-light">Silakan login</p>
                @endauth
                <div class="mt-6 flex gap-3">
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow-xl p-8 w-full md:w-2/3 space-y-10 transform hover:scale-[1.005] transition-transform duration-300 ease-in-out">
                <div>
                    <h3
                        class="text-xl font-bold text-[#1b5a4f] mb-5 flex items-center gap-3 border-b-2 border-[#faa743] pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-[#faa743]">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Biodata Pengguna
                    </h3>
                    @auth
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-[#1b5a4f]">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="font-semibold text-lg">{{ Auth::user()->username }}</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-[#1b5a4f]">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="font-semibold text-lg">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                    @else
                        <p class="text-base text-gray-500 italic">Data biodata tidak tersedia. Silakan login.</p>
                    @endauth
                </div>

                <div>
                    <h3
                        class="text-xl font-bold text-[#1b5a4f] mb-5 flex items-center gap-3 border-b-2 border-[#faa743] pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-[#faa743]">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        Daftar Usaha
                    </h3>

                    <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
                        @forelse ($dataUsaha as $usaha)
                            <div
                                class="border border-gray-200 rounded-xl p-5 shadow-sm bg-gray-50 hover:shadow-lg transition-all duration-200 cursor-pointer flex items-start justify-between gap-4">
                                <div class="flex items-start gap-3 flex-grow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-[#1b5a4f] flex-shrink-0 mt-0.5">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="9" y1="18" x2="9" y2="10"></line>
                                        <line x1="15" y1="18" x2="15" y2="10"></line>
                                        <line x1="9" y1="6" x2="9" y2="6"></line>
                                        <line x1="15" y1="6" x2="15" y2="6"></line>
                                    </svg>
                                    <div>
                                        <p class="font-bold text-[#1b5a4f] text-lg mb-1">{{ $usaha->nama_usaha }}</p>
                                        <span
                                            class="text-sm font-medium flex items-center gap-1 {{ $usaha->status_izin === 'Lengkap' ? 'text-green-600' : 'text-yellow-600' }}">
                                            @if ($usaha->status_izin === 'Lengkap')
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-8.8"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                </svg>
                                            @endif
                                            {{ $usaha->status_izin === 'Lengkap' ? 'Selesai' : 'Belum Selesai' }}
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('legalitas', $usaha->id) }}"
                                    class="text-sm text-blue-600 hover:text-blue-800 hover:underline flex items-center gap-1 font-medium transition-colors duration-200 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    Lihat
                                </a>
                            </div>
                        @empty
                            <p class="text-base text-gray-500 italic col-span-full">Belum ada usaha terdaftar.</p>
                        @endforelse
                    </div>

                    <div class="mt-8 text-center">
                        <a href="{{ route('view.legalitas.form') }}"
                            class="inline-flex items-center gap-3 bg-[#faa743] hover:bg-[#e29336] text-white px-7 py-3 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105 font-semibold text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                            Tambah Usaha Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>

