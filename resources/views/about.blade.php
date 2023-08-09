<x-layout>
    <h2>Список сотрудников:</h2>
    <ul>
        @foreach($employees as $e)
            <li>{{$e->last_name}} {{$e->first_name}} {{$e->salary}} {{$e->department}}</li>
        @endforeach
    </ul>
</x-layout>