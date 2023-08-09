<x-layout>
    
    <h2 class="{{$red_class}}">About page with controller and view!</h2>
    Current date: {{$year ?? date("Y")}}<br>
    
    menu 1: {{$menu[0]}}<br>
    menu 2: {{$menu[1]}}<br>
    menu 3: {{$menu[2]}}<br>

    {!! $str !!}<br>

    @if($admin)
        Hello admin
    @else
        Hello user
    @endif

    <br>
    @if($day == 1)
        Понедельник
    @elseif($day == 2)
        Вторник
    @elseif($day == 3)
        Среда
    @else
        Не пойму какой день
    @endif
    <br>
    <ul>
    @foreach($menu as $item)
        <li>{{$item}}</li>
    @endforeach
    </ul><br>

    <ul>
    @foreach($menu_main as $item)
        <li><a href="/public/{{$item['href']}}">{{$item["title"]}}</a></li>
    @endforeach
    </ul><br>

    {{-- @break, @continue --}}

    <div>
    @forelse($news as $news_item)
        <p>
        @if($loop->first)
            Первая Новость&nbsp;
        @endif

        @if($loop->last)
            Последняя Новость&nbsp;
        @endif

        @if($loop->even)
            Четная Новость&nbsp;
        @endif

        @if($loop->odd)
            Нечетная Новость&nbsp;
        @endif

        | индекс: {{$loop->index}} 
        | номер: {{$loop->iteration}} 
        | осталось: {{$loop->remaining}} из {{$loop->count}} | 

        {{$news_item}}</p>
    @empty
        <p>Новостей нет</p>
    @endforelse
    </div><br>

    @for($i = 0; $i < 10; $i++)
        i = {{$i}}
    @endfor
    <br>
    @php
        for($i = 0; $i < 10; $i++)
            echo "<p>i = $i</p>";
    @endphp

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
        </thead>
        @foreach($users as $user)
            <tr>
                <td>{{$user["id"]}}</td>
                <td>{{$user["name"]}}</td>
                <td>{{$user["age"]}}</td>
            </tr>
        @endforeach
    </table>


    <table border="1">
        <thead>
            @foreach($users[0] as $key => $value)
                <th>{{$key}}</th>
            @endforeach
        </thead>
        @foreach($users as $user)
            <tr>
            @foreach($user as $prop)
                <td>{{$prop}}</td>
            @endforeach
            </tr>
        @endforeach
    </table>

    <x-slot:title_slot>
        {{$title ?? "Title"}} | good
    </x-slot>
</x-layout>
