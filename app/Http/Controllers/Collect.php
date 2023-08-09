<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class Collect extends Controller{
    public function index(){
        $data = [];

        $numbers = [32, 7, 36, 11, 28, 17, 90];
        $strings = ["one", "two", "three", "fore", "five"];
        $emails = ["user@mail.ru", "bob@gmail.com", "ben@mail.ru", "tom@yandex.ru", "support@gmail.com"];
        $objs = [
            [
                "id" => 1,
                "title" => "computers",
                "count" => 15 
            ],
            [
                "id" => 2,
                "title" => "notebooks",
                "count" => 22 
            ],
            [
                "id" => 3,
                "title" => "phones",
                "count" => 8 
            ],
            [
                "id" => 4,
                "title" => "fax",
                "count" => 35 
            ],
        ];

        $coll_num = collect($numbers);
        $coll_str = collect($strings);
        $coll_obj = collect($objs);
        $coll_email = collect($emails);

        $coll_num_copy = $coll_num->collect();

        $data["num_avg"] = $coll_num->avg();
        $data["count_avg"] = $coll_obj->avg("count");

        $data["coll_num"] = $coll_num;
        $data["coll_str"] = $coll_str;
        $data["coll_obj"] = $coll_obj;
        $data["coll_email"] = $coll_email;
        $data["map_email"] = $coll_email->all();

        return view("collect", $data);
    }
}