@php
    $user = filament()->auth()->user();
@endphp

<x-filament::dropdown
    placement="bottom-end"
    teleport
    class="fi-user-menu"
>
    <x-slot name="trigger">
        <button
            aria-label="{{ __('filament-panels::layout.actions.open_user_menu.label') }}"
            type="button"
            class="block"
        >
            <x-filament::avatar
                :src="filament()->getUserAvatarUrl($user)"
                :alt="__('filament-panels::layout.actions.open_user_menu.label')"
            />
        </button>
    </x-slot>

    @if ($user)
        <x-filament::dropdown.header
            :color="filament()->getColor()"
            icon="heroicon-m-user-circle"
            :heading="filament()->getUserName($user)"
            :subheading="filament()->getUserSubheading($user)"
        />
    @endif

    <x-filament::dropdown.list>
        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::USER_MENU_PROFILE_BEFORE) }}

        @if (filament()->hasProfile())
            <x-filament::dropdown.list.item
                :href="filament()->getProfileUrl()"
                icon="heroicon-m-user-circle"
                tag="a"
            >
                {{ __('filament-panels::layout.actions.profile.label') }}
            </x-filament::dropdown.list.item>
        @endif

        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::USER_MENU_PROFILE_AFTER) }}

        {{-- INI ADALAH BAGIAN YANG AKAN ANDA GANTI --}}
        <form method="POST" action="{{ filament()->getLogoutUrl() }}" class="w-full">
            @csrf

            <button
                type="submit"
                class="flex w-full items-center gap-x-2 rounded-md p-2 text-sm text-gray-700 outline-none transition-colors duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5"
            >
                <x-filament::icon
                    icon="heroicon-m-power"
                    class="h-5 w-5 text-gray-400 dark:text-gray-500"
                />

                <span>
                    Keluar dari Sistem
                </span>
            </button>
        </form>
        {{-- BATAS AKHIR BAGIAN YANG AKAN DIGANTI --}}

    </x-filament::dropdown.list>
</x-filament::dropdown>
