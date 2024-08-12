<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/summary.ts')
  @endprependonce
</x-layouts.master>
