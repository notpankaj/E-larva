<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "LG mobile",
                "price" => "200",
                "description" => "A smartphone with 4GB ram with trash performace",
                "category" => "mobile",
                "gallery" => "https://images.unsplash.com/photo-1524856076870-0d765c831d68?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            ],
            [
                "name" => "Oppo mobile",
                "price" => "100",
                "description" => "A smartphone with 6GB ram with trash performace",
                "category" => "mobile",
                "gallery" => "https://images.unsplash.com/photo-1562254492-377a3ac576f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            ],
            [
                "name" => "Panasonic Tv",
                "price" => "90",
                "description" => "A smart tv or what",
                "category" => "tv",
                "gallery" => "https://images.unsplash.com/photo-1571415060716-baff5f717c37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1047&q=80"
            ],
            [
                "name" => "soni Tv",
                "price" => "1000",
                "description" => "not so smart tv",
                "category" => "tv",
                "gallery" => "https://images.unsplash.com/photo-1565335020653-1d1c4fc20bbc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHR2fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
            ],
            [
                "name" => "Samsung Fridge",
                "price" => "200",
                "description" => "A fridge without cooling",
                "category" => "Fridge",
                "gallery" => "https://images.unsplash.com/photo-1599622423290-d93ae9627f14?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fHJlZnJpZ2VyYXRvcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
            ],

        ]);
    }
}
