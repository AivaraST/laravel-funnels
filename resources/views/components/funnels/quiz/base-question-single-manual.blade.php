@props(['key', 'disabledNavigationBack' => 'false', 'disabledProgressBar' => 'false'])

<x-quiz.base-question type="single-manual" :key="$key" :disabledNavigationBack="$disabledNavigationBack" :disabledProgressBar="$disabledProgressBar">
  {{ $slot }}
</x-quiz.base-question>

