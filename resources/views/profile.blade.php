<x-app>
<nav class="flex items-center w-full justify-between px-4 sm:px-6 lg:px-12 py-6 bg-[#1b5a4f]" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <span class="text-white font-bold text-lg sm:text-xl">Legalitas<span style="color: #faa743">ku</span></span>
        </a>
    </div>
</nav>
<div class="p-4">
    <button onclick="window.history.back()" class="text-gray-600 hover:text-gray-800 flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        <span>Kembali</span>
    </button>
</div>
<div class="max-w-6xl mx-auto px-4 py-6 flex flex-col md:flex-row gap-6">
    <div class="bg-white rounded-xl shadow-md p-6 w-full md:w-1/3 flex flex-col h-72 items-center relative">
        <img src="https://i.pravatar.cc/150" alt="Foto Profil" class="w-32 h-32 rounded-full border-4 border-[#1b5a4f] object-cover mt-4">
        <h2 class="mt-4 font-semibold text-[#1b5a4f] text-xl">Barikh Zidan</h2>
        <button onclick="location.href='/logout'" class="mt-6 px-4 py-2 bg-[#1b5a4f] text-white rounded hover:bg-[#16463d] text-sm">
            Logout
        </button>
    </div>
    <div class="bg-white rounded-xl shadow-md p-6 w-full md:w-2/3 space-y-6">
        <form id="biodata-form" action="/update-profile" method="POST" class="space-y-4">
            <h3 class="text-lg font-bold text-[#1b5a4f] mb-2">Profil</h3>
            <div>
                <label class="text-sm text-gray-500">Username</label>
                <div class="flex items-center gap-2">
                    <span id="username-display">barikhz</span>
                    <input name="username" id="username-input" type="text" class="hidden border rounded px-2 py-1 text-sm" value="barikhz" />
                    <button type="button" id="username-btn" class="text-blue-600 text-sm hover:underline" onclick="toggleEdit('username')">Edit</button>
                </div>
            </div>
            <div>
                <label class="text-sm text-gray-500">Email</label>
                <div class="flex items-center gap-2">
                    <span id="email-display">barikh@email.com</span>
                    <input name="email" id="email-input" type="email" class="hidden border rounded px-2 py-1 text-sm" value="barikh@email.com" />
                    <button type="button" id="email-btn" class="text-blue-600 text-sm hover:underline" onclick="toggleEdit('email')">Edit</button>
                </div>
            </div>
        </form>
        <h3 class="text-lg font-semibold text-[#1b5a4f] mb-2">Daftar Usaha</h3>
        <div class="space-y-3">
            <div class="p-3 bg-gray-100 rounded-lg flex justify-between items-center">
                <div>
                    <p class="font-medium">Zidan Print Shop</p>
                    <p class="text-sm text-gray-600">Status: <span class="text-[#faa743]">Belum Selesai</span></p>
                </div>
                <a href="/rekomendasi-legalitas" class="text-blue-600 text-sm hover:underline">Lihat Rekomendasi</a>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg flex justify-between items-center">
                <div>
                    <p class="font-medium">Bakso Mantul</p>
                    <p class="text-sm text-gray-600">Status: <span class="text-[#1b5a4f]">Selesai</span></p>
                </div>
                <a href="/rekomendasi-legalitas" class="text-blue-600 text-sm hover:underline">Lihat Rekomendasi</a>
            </div>
        </div>
        <button onclick="location.href='/tambah-usaha'" class="mt-6 px-4 py-2 bg-[#1b5a4f] text-white rounded hover:bg-[#16463d]">
            + Tambah Usaha
        </button>
    </div>
</div>

<!-- Script untuk Edit -->
<script>
    function toggleEdit(field) {
        const display = document.getElementById(`${field}-display`);
        const input = document.getElementById(`${field}-input`);
        const button = document.getElementById(`${field}-btn`);

        if (input.classList.contains('hidden')) {
            // Ganti dari tampilan ke input
            display.classList.add('hidden');
            input.classList.remove('hidden');
            button.textContent = 'Simpan';
            input.focus();
        } else {
            // Simpan ke tampilan (tanpa submit)
            display.textContent = input.value;
            display.classList.remove('hidden');
            input.classList.add('hidden');
            button.textContent = 'Edit';
        }
    }
</script>

</x-app>
