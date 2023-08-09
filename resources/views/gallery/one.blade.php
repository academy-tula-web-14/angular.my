<x-layout>
    <h2>{{$title}} page with controller and view!</h2>
    <h3>{{$id}}</h3>
    <x-slot:title_slot>
        {{$title}}
    </x-slot>
</x-layout>
