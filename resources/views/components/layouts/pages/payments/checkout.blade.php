<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/payments/checkout.ts')
  @endprependonce
</x-layouts.master>
