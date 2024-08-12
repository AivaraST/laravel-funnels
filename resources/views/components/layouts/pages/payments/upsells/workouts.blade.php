<x-layouts.master>
  {{ $slot }}

  @prependOnce('scripts')
    @vite('resources/js/pages/payments/upsells/workouts.ts')
  @endprependonce
</x-layouts.master>
