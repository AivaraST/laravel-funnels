<x-pages.quiz>
  <x-funnels.main.quiz.header />
  <x-funnels.main.quiz.container>
    <x-funnels.main.quiz.question-single title="Single" subTitle="Single subtitle" key="single" :answers="[
        [
            'label' => 'Single answer 1',
            'value' => 'single-answer-1',
            'subLabel' => 'Sub label',
        ],
        [
            'label' => 'Single answer 2',
            'value' => 'single-answer-2',
            'subLabel' => null,
        ],
        [
            'label' => 'Single answer 3',
            'value' => 'single-answer-3',
            'subLabel' => 'Sub label',
        ],
    ]" />
    <x-funnels.main.quiz.question-single-manual title="Single manual" subTitle="Single manual subtitle" key="single-manual"
      :answers="[
          [
              'label' => 'Single manual answer 1',
              'value' => 'single-manual-answer-1',
              'subLabel' => 'Sub label',
          ],
          [
              'label' => 'Single manual answer 2',
              'value' => 'single-manual-answer-2',
              'subLabel' => null,
          ],
          [
              'label' => 'Single manual answer 3',
              'value' => 'single-manual-answer-3',
              'subLabel' => 'Sub label',
          ],
      ]" />
    <x-funnels.main.quiz.question-multiple title="Multiple" subTitle="Multiple subtitle" key="multiple"
      :answers="[
          [
              'label' => 'Multiple answer 1',
              'value' => 'multiple-answer-1',
              'subLabel' => 'Sub label',
          ],
          [
              'label' => 'Multiple answer 2',
              'value' => 'multiple-answer-2',
              'subLabel' => null,
          ],
          [
              'label' => 'Multiple answer 3',
              'value' => 'multiple-answer-3',
              'subLabel' => 'Sub label',
          ],
      ]" />
    <x-funnels.main.quiz.question-intermediate key="intermediate" />
  </x-funnels.main.quiz.container>
</x-pages.quiz>
