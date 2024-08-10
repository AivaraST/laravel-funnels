<x-layout.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/quiz.js')
  @endprependonce
</x-layout.master>
