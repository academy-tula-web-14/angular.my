<x-layout>
    <h2>{{$title}} page with controller and view! Full set!</h2>
    <x-slot:title_slot>
        {{$title ?? "Title"}} | good
    </x-slot>
</x-layout>