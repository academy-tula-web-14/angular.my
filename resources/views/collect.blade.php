<x-layout>
    nums avg {{$num_avg}}<br>
    count avg {{$count_avg}}<br>

    <table border="1">
        @foreach ($coll_num->chunk(3) as $row)
            <tr>
                @foreach($row as $item)
                    <td>{{$item}}</td>
                @endforeach        
            </tr>
        @endforeach
    </table>

    @if($coll_obj->contains(function($value, $key){
        return $value["count"] > 30;
    }))
        Yes
    @else
        No
    @endif
    <br>
    <pre>{{print_r($coll_email->all())}}</pre>
    <pre>{{print_r(
        $coll_email->countBy(function($email){
            return substr(strrchr($email, "@"), 1);
        })->all()
    )}}</pre>

    <pre>
        {{print_r(
            $coll_str->crossJoin($coll_email)->all()
        )}}
    </pre>
    <pre>
        {{
            $coll_email->countBy(function($email){
                return substr(strrchr($email, "@"), 1);
            })->dump()
        }}
    </pre>
    <pre>
    {{
        $coll_email->each(function($item, $key){
            echo "email: $item<br>";
        })
    }}
    </pre>
    <pre>
        {{
            print_r($coll_obj->firstWhere("count", ">=", 30))
        }}
    </pre>
    <pre>
        {{
            print_r(
                $coll_obj->flatMap(function($item){
                    return array_map("ucfirst", $item);
                })->all()
            )
        }}
    </pre>
    <pre>
        {{
            $coll_obj->filter(function($value, $key){
                return $value["count"] > 20;
            })->isNotEmpty();
        }}
    </pre>
    <pre>
        {{
            $collection = collect([
                ['product_id' => 'prod-100', 'name' => 'Desk'],
                ['product_id' => 'prod-200', 'name' => 'Chair'],
                ['product_id' => 'prod-300', 'name' => 'Chair'],
            ])
        }}
        {{
            $collection->keyBy('name')->dump()
        }}
    </pre>

    <pre>
        <table border="1">
            <thead>
                @foreach(collect($coll_obj[0])->keys() as $key)
                    <th>{{$key}}</th>
                @endforeach
            </thead>
            @foreach($coll_obj as $item)
                <tr>
                    @foreach($item as $field)
                        <td>{{$field}}</td>
                    @endforeach            
                </tr>
            @endforeach
        </table>
    </pre>
</x-layout>