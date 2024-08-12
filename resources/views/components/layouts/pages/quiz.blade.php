<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/quiz.ts')
  @endprependonce
</x-layouts.master>
