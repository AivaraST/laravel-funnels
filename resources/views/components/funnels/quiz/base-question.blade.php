@props(['type', 'key', 'disabledNavigationBack' => 'false', 'disabledProgressBar' => 'false'])

<section class="question" data-type="{{ $type }}" data-key="{{ $key }}"
  data-disabled-navigation-back="{{ $disabledNavigationBack }}" data-disabled-progress-bar="{{ $disabledProgressBar }}">
  {{ $slot }}
</section>

