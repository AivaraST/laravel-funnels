<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/finished.ts')
  @endprependonce
</x-layouts.master>
