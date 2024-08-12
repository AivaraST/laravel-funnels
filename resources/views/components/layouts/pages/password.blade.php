<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/password.ts')
  @endprependonce
</x-layouts.master>
