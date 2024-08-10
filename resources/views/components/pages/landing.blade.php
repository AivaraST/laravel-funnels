<x-layout.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/landing.js')
  @endprependonce
</x-layout.master>
