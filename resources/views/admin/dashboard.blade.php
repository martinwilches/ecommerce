<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
    ],
]">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center">
                <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
                <div class="ml-4 flex-1">
                    <h2 class="font-semibold sm:text-lg">
                        Bienvenido, {{ Auth::user()->name }}
                    </h2>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text-sm hover:text-blue-500" type="submit">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center bg-white rounded-lg shadow-lg p-6">
            <h2 class="font-semibold sm:text-xl">
                Mi Tienda
            </h2>
        </div>
    </div>
</x-admin-layout>
