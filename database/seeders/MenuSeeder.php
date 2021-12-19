<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    public const menu = [
        array("name"=>'ორმაგი ბიგ მაკი', "price"=>2, 'category'=>'სენდვიჩები', 
        'calories'=>2000, "description"=>"გემრიელი და ნოყიერი ორმაგი ჰამბურგერი"),
        array("name"=>'ბიგ მაკი ბეკონით', "price"=>2, 'category'=>'სენდვიჩები', 
        'calories'=>2000, "description"=>"გემრიელი ჰამბურგერი"),
        array("name"=>'მაესტრო ჩიზი', "price"=>2.7, 'category'=>'სენდვიჩები', 
        'calories'=>3000, "description"=>"ყველის მოყვარულთათვის"),
        array("name"=>'ფიშ როლები', "price"=>2.7, 'category'=>'როლები', 
        'calories'=>1000, "description"=>"გერიელი როლი"),
        array("name"=>'ჩიქენი როლები', "price"=>2.7, 'category'=>'როლები', 
        'calories'=>1200, "description"=>"გერიელი როლი"),
    ];


    public function run()
    {
        for($i=0; $i<5; $i++){
            DB::table('menus')->insert([
                'name'=>$this::menu[$i]['name'],
                'price'=>$this::menu[$i]['price'],
                'category'=>$this::menu[$i]['category'],
                'calories'=>$this::menu[$i]['calories'],
                'description'=>$this::menu[$i]['description']
            ]);
        }
    }
}
