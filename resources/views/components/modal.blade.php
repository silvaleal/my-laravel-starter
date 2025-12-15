@props(['name', 'title'])

<x-modal x-data name="{{ $name }}">
    {{$slot}}
</x-modal>

<x-button-primary
    x-on:click="$dispatch('open-modal', '{{ $name }}')">
    {{ $title }}
</x-button-primary>