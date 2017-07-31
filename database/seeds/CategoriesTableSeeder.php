<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    	Category::create([
    		"name" => "Category A1",
    		"description" => "",
    		"project_id"  => 1
    	]);

    	Category::create([
    		"name" => "Category A2",
    		"description" => "",
    		"project_id"  => 1
    	]);

    	Category::create([
    		"name" => "Category B1",
    		"description" => "",
    		"project_id"  => 2
    	]);

    	Category::create([
    		"name" => "Category B2",
    		"description" => "",
    		"project_id"  => 2
    	]);



    }
}
