@props(['title' => '',  'footerLinks' => ''])

<x-base-layout :$title >
   <x-layouts.header></x-layouts.header>
    {{ $slot }}
</x-base-layout>

