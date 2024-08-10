@props([
    'key',
    'disabledNavigationBack' => 'false',
    'disabledProgressBar' => 'false',
    'title' => null,
    'subTitle' => null,
    'answers' => [],
])

<x-quiz.base-question-single-manual :key="$key" :disabledNavigationBack="$disabledNavigationBack" :disabledProgressBar="$disabledProgressBar">
  <div class="container md:[--container-width:400px]">
    <div class="mb-4 flex flex-col items-center gap-2 text-center">
      @if ($title)
        <h2 class="text-5xl">{{ $title }}</h2>
      @endif
      @if ($subTitle)
        <p>{{ $subTitle }}</p>
      @endif
    </div>
    <div class="mb-4 flex flex-col gap-2">
      @foreach ($answers as $answer)
        <x-funnels.main.quiz.answer-single-button :value="$answer['value']" :label="$answer['label']" :subLabel="$answer['subLabel']" />
      @endforeach
    </div>
    <x-ui.button>Next</x-ui.button>
  </div>
</x-quiz.base-question-single-manual>

