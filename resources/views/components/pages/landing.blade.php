<x-layout.master>
  {{ $slot }}

  @prepend('body::js::scripts')
    @vite('resources/js/pages/landing.js')
  @endprepend
</x-layout.master>
