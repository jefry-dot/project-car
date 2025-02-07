@props(['title' => '',  'footerLinks' => ''])

<x-base-layout :$title >
   <x-layouts.header></x-layouts.header>
    {{ $slot }}
    
        <footer>
            <a href="#">Footer Link 5</a>
            <a href="#">Footer Link 6</a>
            {{ $footerLinks }}
        </footer>

</x-base-layout>

