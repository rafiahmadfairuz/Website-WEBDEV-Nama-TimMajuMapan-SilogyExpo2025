<x-app>
    @section('title', 'Legalitas')

    <nav class="flex items-center w-full justify-between px-4 sm:px-6 lg:px-12 py-6 bg-[#1b5a4f]" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <span class="text-white font-bold text-lg sm:text-xl">Legalitas<span
                        style="color: #faa743">ku</span></span>
            </a>
        </div>
        <a href="{{ route('profile') }}" class="lg:flex lg:flex-1 lg:justify-end lg:items-center gap-2">
            <div
                class="rounded-full h-8 w-8 flex items-center justify-center text-[#1b5a4f] border bg-[#faa743] font-bold uppercase">
                {{ strtoupper(Auth::user()->username[0]) }}
            </div>
            <span class="text-sm text-[#1b5a4f] font-semibold hidden lg:inline">{{ Auth::user()->username }}</span>
        </a>
    </nav>
    <div class="px-6 py-4 max-w-6xl mx-auto">
        <button onclick="window.history.back()"
            class="text-gray-700 hover:text-[#1b5a4f] flex items-center gap-2 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span class="font-medium hover:cursor-pointer">Kembali</span>
        </button>
    </div>
    <section class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-[#1b5a4f]">Rekomendasi Legalitas Usaha</h1>
        <p class="text-gray-600 mt-2">Rekomendasi legalitas yang sesuai dan ikuti panduannya dengan mudah.</p>
    </section>
    <section class="max-w-6xl mx-auto px-4 py-4 flex flex-col lg:flex-row gap-6">
        <div class="lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow p-4 h-fit order-1 lg:order-2">
            <h3 class="font-bold text-xl text-[#1b5a4f] mb-2">Legalitas yang sudah selesai</h3>
            <ul id="checkedList" class="space-y-1 text-base text-gray-700"></ul>
        </div>

        <div class="lg:w-2/3 order-2 lg:order-1">
            <div class="space-y-4">
                <h1 class="font-bold text-md">Legalitas Wajib</h1>
                @foreach ($izin_wajib as $izin)
                    <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                        <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer"
                            onclick="toggleAccordion(this)">
                            <div class="flex items-center gap-3 w-full pointer-events-none">
                                <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto izin-checkbox"
                                    data-nama="{{ $izin['nama'] }}" onclick="event.stopPropagation()" />
                                <span class="font-semibold text-left flex-grow izin-nama">{{ $izin['nama'] }}</span>
                            </div>
                            <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div class="accordion-content p-4 bg-gray-50 hidden">
                            <p class="text-sm mb-2"><strong>Deskripsi:</strong><br>{{ $izin['deskripsi'] }}</p>
                            <p class="text-sm mb-2"><strong>Syarat:</strong><br>{{ implode(', ', $izin['syarat']) }}</p>
                            <p class="text-sm"><strong>Dokumen:</strong><br>{{ implode(', ', $izin['dokumen']) }}</p>
                        </div>
                    </div>
                @endforeach

                <h1 class="font-bold text-md mt-6">Legalitas Opsional</h1>
                @foreach ($izin_opsional as $izin)
                    <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                        <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer"
                            onclick="toggleAccordion(this)">
                            <div class="flex items-center gap-3 w-full pointer-events-none">
                                <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto izin-checkbox"
                                    data-nama="{{ $izin['nama'] }}" onclick="event.stopPropagation()" />
                                <span class="font-semibold text-left flex-grow izin-nama">{{ $izin['nama'] }}</span>
                            </div>
                            <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div class="accordion-content p-4 bg-gray-50 hidden">
                            <p class="text-sm mb-2"><strong>Deskripsi:</strong><br>{{ $izin['deskripsi'] }}</p>
                            <p class="text-sm mb-2"><strong>Syarat:</strong><br>{{ implode(', ', $izin['syarat']) }}
                            </p>
                            <p class="text-sm"><strong>Dokumen:</strong><br>{{ implode(', ', $izin['dokumen']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <div class="max-w-6xl mx-auto px-4 pb-8">
        <form id="izinLengkapForm" method="POST" action="{{ route('izin.update', ['id' => $id]) }}">
            @csrf
            <button type="submit"
                class="mt-4 bg-[#1b5a4f] hover:bg-[#144239] text-white font-bold py-2 px-6 rounded transition">
                {{ $status === 'Lengkap' ? 'Tandai Belum Lengkap' : 'Tandai Izin Lengkap' }}
            </button>
        </form>
    </div>



    <script>
        function toggleAccordion(headerEl) {
            const allItems = document.querySelectorAll('.accordion-item');
            allItems.forEach(item => {
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('svg');
                if (item.contains(headerEl)) {
                    const isHidden = content.classList.contains('hidden');
                    allItems.forEach(i => {
                        i.querySelector('.accordion-content').classList.add('hidden');
                        i.querySelector('svg').classList.remove('rotate-180');
                    });
                    if (isHidden) {
                        content.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    }
                }
            });
        }

        const checkboxes = document.querySelectorAll('.izin-checkbox');
        const submitButton = document.querySelector('#izinLengkapForm button');

        function updateCheckboxState() {
            const list = document.getElementById('checkedList');

            checkboxes.forEach(cb => {
                const nama = cb.getAttribute('data-nama');
                const span = cb.closest('.accordion-header').querySelector('.izin-nama');

                if (cb.checked && !list.querySelector(`[data-nama="${nama}"]`)) {
                    const li = document.createElement('li');
                    li.textContent = nama;
                    li.setAttribute('data-nama', nama);
                    list.appendChild(li);
                    span.classList.add('line-through', 'text-gray-400');
                } else if (!cb.checked) {
                    const target = list.querySelector(`[data-nama="${nama}"]`);
                    if (target) target.remove();
                    span.classList.remove('line-through', 'text-gray-400');
                }
            });

            const allChecked = Array.from(checkboxes).every(cb => cb.checked);
            submitButton.disabled = !allChecked;

            if (allChecked) {
                submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
            } else {
                submitButton.classList.add('opacity-50', 'cursor-not-allowed');
            }
        }

        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateCheckboxState);
        });

        window.addEventListener('DOMContentLoaded', updateCheckboxState);
    </script>

</x-app>
