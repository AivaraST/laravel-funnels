@props(['value', 'class' => 'button-answer'])

<button class="@twMerge($class)" data-value="{{ $value }}" x-on:click="$store.quiz.handleSingleAnswerClick">
  {{ $slot }}
</button>

