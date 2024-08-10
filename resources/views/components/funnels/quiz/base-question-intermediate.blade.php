@props(['key', 'disabledNavigationBack' => 'false', 'disabledProgressBar' => 'false'])

<x-quiz.base-question type="intermediate" :key="$key" :disabledNavigationBack="$disabledNavigationBack" :disabledProgressBar="$disabledProgressBar">
  {{ $slot }}
</x-quiz.base-question>

