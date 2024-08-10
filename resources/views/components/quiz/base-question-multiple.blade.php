@props(['key', 'disabledNavigationBack' => 'false', 'disabledProgressBar' => 'false'])

<x-quiz.base-question type="multiple" :key="$key" :disabledNavigationBack="$disabledNavigationBack" :disabledProgressBar="$disabledProgressBar">
  {{ $slot }}
</x-quiz.base-question>

