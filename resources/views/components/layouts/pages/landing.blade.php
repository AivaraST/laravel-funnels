<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/landing.ts')
  @endprependonce
</x-layouts.master>
