@props([
    'id' => 'alertModal',
    'type' => 'success',
    'title' => null,
    'message' => 'Pesan default',
])

@php
    $types = [
        'success' => ['icon' => 'fas fa-check-circle', 'iconColor' => 'text-green-600', 'bgIcon' => 'bg-green-100'],
        'error' => ['icon' => 'fas fa-times-circle', 'iconColor' => 'text-red-600', 'bgIcon' => 'bg-red-100'],
        'warning' => [
            'icon' => 'fas fa-exclamation-triangle',
            'iconColor' => 'text-yellow-600',
            'bgIcon' => 'bg-yellow-100',
        ],
        'info' => ['icon' => 'fas fa-info-circle', 'iconColor' => 'text-blue-600', 'bgIcon' => 'bg-blue-100'],
    ];

    $config = $types[$type] ?? $types['info'];
    $modalTitle = $title ?? ucfirst($type);
@endphp

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden overflow-y-auto" role="dialog" aria-modal="true"
    aria-labelledby="{{ $id }}-title">
    <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

    <div class="flex items-center justify-center min-h-full p-4 text-center sm:p-0">
        <div
            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full {{ $config['bgIcon'] }} sm:mx-0 sm:size-10">
                        <i class="{{ $config['icon'] }} {{ $config['iconColor'] }} text-xl"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-base font-semibold text-gray-900" id="{{ $id }}-title">
                            {{ $modalTitle }}</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">{{ $message }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button"
                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto"
                    onclick="document.getElementById('{{ $id }}').classList.add('hidden')">
                    OK
                </button>
                <button type="button"
                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto"
                    onclick="document.getElementById('{{ $id }}').classList.add('hidden')">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
