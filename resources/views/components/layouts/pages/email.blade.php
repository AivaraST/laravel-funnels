<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/email.ts')
  @endprependonce
</x-layouts.master>
