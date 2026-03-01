@php
    $links = [
        [
            'icon' => 'fa-solid fa-table-columns',
            'name' => 'Dashboard',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'), // validar si la ruta actual corresponde a la ruta con nombre `admin.dashboard`
        ],
    ];
@endphp

<aside id="top-bar-sidebar"
    class="fixed left-0 z-40 w-64 h-full bg-white transition-transform -translate-x-full sm:translate-x-0"
    :class="{
        'translate-x-0 ease-in': siderbarOpen,
        '-traslate-x-full ease-out': !siderbarOpen
    }"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 mt-14 overflow-y-auto bg-neutral-primary-soft border-e border-default">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['route'] }}"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group {{ $link['active'] ? 'bg-gray-100' : '' }}">
                        <span class="inline-flex w-6 h-6 justify-center items-center">
                            <i class="{{ $link['icon'] }}"></i>
                        </span>
                        <span class="ms-3">{{ $link['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
