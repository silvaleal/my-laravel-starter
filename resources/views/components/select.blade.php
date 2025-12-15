@props([
    'field',
    'title',
    ])

<div class="relative flex w-full max-w-xs flex-col gap-1 text-neutral-300">
    <label for="os" class="w-fit pl-0.5 text-sm">{{$title}}</label>
    
    <select name="{{ $field }}" {{ $attributes->merge(['class'=>'class="w-full appearance-none rounded-sm border border-neutral-300 bg-neutral-50 px-4 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"']) }}>
        {{$slot}}
    </select>
</div>
