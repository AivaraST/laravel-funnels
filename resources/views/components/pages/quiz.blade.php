<x-layout.master>
  {{ $slot }}

  @prepend('body::js::scripts')
    @vite('resources/js/pages/quiz.js')
  @endprepend
</x-layout.master>
