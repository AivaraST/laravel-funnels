@props(['value', 'label', 'subLabel' => null])

<x-quiz.base-answer-single-button
  class="flex h-[56px] w-full items-center gap-4 rounded bg-slate-100 px-4 text-left md:hover:bg-slate-200"
  :value="$value">
  <div class="flex flex-1 flex-col">
    <span class="text-base font-bold">{{ $label }}</span>
    @if ($subLabel)
      <span class="text-xs">{{ $subLabel }}</span>
    @endif
  </div>
  <x-svg.quiz.right-chevron />
</x-quiz.base-answer-single-button>

