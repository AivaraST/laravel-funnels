@props(['key', 'disabledNavigationBack' => 'false', 'disabledProgressBar' => 'false'])

<x-quiz.base-question-intermediate :key="$key" :disabledNavigationBack="$disabledNavigationBack" :disabledProgressBar="$disabledProgressBar">
  <div class="container md:[--container-width:400px]">
    <p>Intermediate example</p>
    <x-ui.button>Next</x-ui.button>
  </div>
</x-quiz.base-question-intermediate>

