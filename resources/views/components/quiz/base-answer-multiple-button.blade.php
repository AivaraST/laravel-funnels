@props(['value', 'class'])

<button class="@twMerge($class)" data-value="{{ $value }}">
  {{ $slot }}
</button>

