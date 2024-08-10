@props(['class' => '', 'type' => 'button'])

<button class="@twMerge('block w-full rounded bg-violet-600 md:hover:bg-violet-500 font-bold text-white text-center text-base py-4 px-2', $class)" type={{ $type }}>
  {{ $slot }}
</button>

