<x-app>
<nav class="flex items-center w-full justify-between px-4 sm:px-6 lg:px-12 py-6 bg-[#1b5a4f]" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <span class="text-white font-bold text-lg sm:text-xl">Legalitas<span style="color: #faa743">ku</span></span>
        </a>
    </div>
    <div class="lg:flex lg:flex-1 lg:justify-end lg:items-center gap-2"><a href="profile">
       <div class="rounded-full h-8 w-8 flex items-center justify-center text-[#1b5a4f] border bg-violet-400">R</div>
    </a>
    </div>
</nav>
<section class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-[#1b5a4f]">Rekomendasi Legalitas Usaha</h1>
    <p class="text-gray-600 mt-2">Rekomendasi legalitas yang sesuai dan ikuti panduannya dengan mudah.</p>
</section>
<section class="max-w-6xl mx-auto px-4 py-4 flex flex-col lg:flex-row gap-6">
    <div class="lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow p-4 h-fit order-1 lg:order-2">
        <h3 class="font-bold text-xl text-[#1b5a4f] mb-2">Legalitas yang sudah Selesai</h3>
        <p class="text-base">BPOM</p>
        <p class="text-base">BPOM</p>
        <p class="text-base">BPOM</p>
    </div>
    <div class="lg:w-2/3 order-2 lg:order-1">
        <div class="space-y-4">
            <h1 class="font-bold text-md">Legalitas Wajib</h1>
            <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-3 w-full pointer-events-none">
                        <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto" onclick="event.stopPropagation()" />
                        <span class="font-semibold text-left flex-grow">BPOM (Badan Pengawas Obat dan Makanan)</span>
                    </div>
                    <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="accordion-content p-4 bg-gray-50 hidden">
                    <p class="text-sm mb-2"><strong>Deskripsi:</strong> <br> BPOM adalah lembaga yang bertugas mengawasi peredaran obat dan makanan di Indonesia.</p>
                    <p class="text-sm mb-2"><strong>Syarat:</strong> <br> Fotokopi KTP, Sertifikat Produksi, Label Produk, dsb.</p>
                    <p class="text-sm"><strong>Dokumen:</strong> <br> Surat permohohan, data produk, sertifikasi lainnya.</p>
                </div>
            </div>
            <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-3 w-full pointer-events-none">
                        <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto" onclick="event.stopPropagation()" />
                        <span class="font-semibold text-left flex-grow">BPOM (Badan Pengawas Obat dan Makanan)</span>
                    </div>
                    <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="accordion-content p-4 bg-gray-50 hidden">
                    <p class="text-sm mb-2"><strong>Deskripsi:</strong> <br> BPOM adalah lembaga yang bertugas mengawasi peredaran obat dan makanan di Indonesia.</p>
                    <p class="text-sm mb-2"><strong>Syarat:</strong> <br> Fotokopi KTP, Sertifikat Produksi, Label Produk, dsb.</p>
                    <p class="text-sm"><strong>Dokumen:</strong> <br> Surat permohonan, data produk, sertifikasi lainnya.</p>
                </div>
            </div>
            <h1 class="font-bold text-md">Legalitas Opsional</h1>
            <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-3 w-full pointer-events-none">
                        <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto" onclick="event.stopPropagation()" />
                        <span class="font-semibold text-left flex-grow">BPOM (Badan Pengawas Obat dan Makanan)</span>
                    </div>
                    <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="accordion-content p-4 bg-gray-50 hidden">
                    <p class="text-sm mb-2"><strong>Deskripsi:</strong> <br> BPOM adalah lembaga yang bertugas mengawasi peredaran obat dan makanan di Indonesia.</p>
                    <p class="text-sm mb-2"><strong&Syarat:</strong> <br> Fotokopi KTP, Sertifikat Produksi, Label Produk, dsb.</p>
                    <p class="text-sm"><strong>Dokumen:</strong> <br> Surat permohonan, data produk, sertifikasi lainnya.</p>
                </div>
            </div>
            <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-3 w-full pointer-events-none">
                        <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto" onclick="event.stopPropagation()" />
                        <span class="font-semibold text-left flex-grow">BPOM (Badan Pengawas Obat dan Makanan)</span>
                    </div>
                    <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="accordion-content p-4 bg-gray-50 hidden">
                    <p class="text-sm mb-2"><strong>Deskripsi:</strong> <br> BPOM adalah lembaga yang bertugas mengawasi peredaran obat dan makanan di Indonesia.</p>
                    <p class="text-sm mb-2"><strong>Syarat:</strong> <br> Fotokopi KTP, Sertifikat Produksi, Label Produk, dsb.</p>
                    <p class="text-sm"><strong>Dokumen:</strong> <br> Surat permohonan, data produk, sertifikasi lainnya.</p>
                </div>
            </div>
            <div class="accordion-item border mb-4 border-gray-200 rounded-lg overflow-hidden">
                <div class="accordion-header flex items-center justify-between p-4 bg-white hover:bg-gray-50 cursor-pointer" onclick="toggleAccordion(this)">
                    <div class="flex items-center gap-3 w-full pointer-events-none">
                        <input type="checkbox" class="accent-[#1b5a4f] pointer-events-auto" onclick="event.stopPropagation()" />
                        <span class="font-semibold text-left flex-grow">BPOM (Badan Pengawas Obat dan Makanan)</span>
                    </div>
                    <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="accordion-content p-4 bg-gray-50 hidden">
                    <p class="text-sm mb-2"><strong>Deskripsi:</strong> <br> BPOM adalah lembaga yang bertugas mengawasi peredaran obat dan makanan di Indonesia.</p>
                    <p class="text-sm mb-2"><strong>Syarat:</strong> <br> Fotokopi KTP, Sertifikat Produksi, Label Produk, dsb.</p>
                    <p class="text-sm"><strong>Dokumen:</strong> <br> Surat permohonan, data produk, sertifikasi lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
</script>
</x-app>
