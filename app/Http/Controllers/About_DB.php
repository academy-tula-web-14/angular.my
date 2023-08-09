<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class About extends Controller{
    
    public function show(){
        $data = [];

        //$data["employees"] = DB::table("employees")->get();
        // SELECT * FROM employees
        /*
        $data["employees"] = DB::table("employees")
                                    ->select('first_name', 'last_name')
                                    ->where("level", "<=", 3)
                                    ->where(function($query){
                                        $query->where("salary", ">=", 10000)
                                                ->where("salary", "<=", 20000)
                                                ->orWhere(function($subquery){
                                                    $subquery->where("salary", ">=", 40000)
                                                    ->where("salary", "<=", 50000);
                                                });
                                    })

                                    //->whereNot("salary", ">", 50000)
                                    //->orWhereNot("level", "<", 3)
                                    ->get();
                                    // ->first();
        */
        // SELECT first_name, last_name 
            // FROM employees
            // WHERE salary > 50000;

        // $sql_str = DB::table("employees")->where("salary", ">", 50000)->toSql();
        // dump($sql_str);

        // $empls = [
        //     [
        //         'first_name' => 'Егор',
        //         'last_name' => 'Егоров',
        //         'birth_date' => '1987-11-22',
        //         'level' => '2',
        //         'salary' => '39000',
        //     ],
        //     // [
        //     //     'first_name' => 'Дмитрий',
        //     //     'last_name' => 'Дмитриев',
        //     //     'birth_date' => '2001-08-11',
        //     //     'level' => '5',
        //     //     'salary' => '43000',
        //     // ]
        //     ];

        // DB::table("employees")->insert($empls);

        // DB::table("employees")->where("level", ">=", 4)->update([
        //     'salary' => '60000',
        // ]);

        //$oldman = DB::table("employees")->oldest("birth_date")->first();
        //dump($oldman);

        //DB::table("employees")->where("id", $oldman->id)->delete();


        // DB::table("departmens")->insert([
        //     [
        //         'title' => 'developers'
        //     ],
        //     [
        //         'title' => 'buhgalters'
        //     ],
        //     [
        //         'title' => 'managers'
        //     ],
        // ]);

        $data["employees"] = DB::table("employees AS e")
                                ->rightJoin("departmens AS d", "e.department_id", "=", "d.id")
                                ->select("e.*", "d.title AS department")
                                ->get();

        dump($data["employees"]);
        return view('about', $data);


        //$data["title"] = "About";
        // $data["red_class"] = "red";
        // $data["year"] = 1985;

        // $data["str"] = "<b>Hello</b>";
        // $data["day"] = 2;

        // $data["admin"] = true;

        // $menu = ["Home", "About", "Gallery"];
        // $data["menu"] = $menu;

        // $menu_main = [ "Home" => "/",
        //                 "About" => "/about",
        //                 "Gallery" => "/gallery",
        //                 "Contacts" => "/contacts"
        //             ];

        // $menu_full = [
        //     [
        //         "id" => 1,
        //         "title" => "Home",
        //         "href" => ""
        //     ],
        //     [
        //         "id" => 2,
        //         "title" => "About",
        //         "href" => "about"
        //     ],
        //     [
        //         "id" => 3,
        //         "title" => "Gallery",
        //         "href" => "gallery"
        //     ],
        //     [
        //         "id" => 4,
        //         "title" => "Contacts",
        //         "href" => "contacts"
        //     ],
        // ];

        // $data["menu_main"] = $menu_full;

        // $users = [
        //     [
        //         "id" => 1,
        //         "name" => "Bob",
        //         "age" => 35,
        //         "code" => "435234"
        //     ],
        //     [
        //         "id" => 2,
        //         "name" => "Joe",
        //         "age" => 27,
        //         "code" => "xdfg54654"
        //     ],
        //     [
        //         "id" => 3,
        //         "name" => "Tom",
        //         "age" => 41,
        //         "code" => "7978fgnhf"
        //     ],
        // ];
        
        // $data["users"] = $users;

        // $data["news"] = ["Новость 1", "Новость 2", "Новость 3", "Новость 4", "Новость 5", "Новость 6",];

        //return view('about', $data);

        //return view('about', ["title" => "About"]);
    }

}