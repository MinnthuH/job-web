<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = ['Progammer','Web Developer','Software Engineer'];

        foreach ($cates as $key => $cat) {
        Category::create([
                'name'=>$cat,
            ]);
            }
    }
}
