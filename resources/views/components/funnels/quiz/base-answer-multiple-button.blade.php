@props(['value', 'class'])

<button class="@twMerge($class)" data-value="{{ $value }}" x-on:click="$store.quiz.handleMultipleAnswerClick">
  {{ $slot }}
</button>

