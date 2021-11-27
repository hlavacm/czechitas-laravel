<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Page::factory(10)->create();

        Page::create([
            'title' => 'About',
            'slug' => 'about',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Etiam enim neque, consequat id risus sit amet, congue maximus justo. Sed ut sem ligula.',
        ]);

        Page::create([
            'title' => 'Contact',
            'slug' => 'contact',
            'description' => 'Ut nec ullamcorper tortor. Sed lacus urna, facilisis eu mi non, condimentum sodales diam.',
            'content' => 'Mauris non est sit amet sapien aliquet suscipit. Pellentesque tristique commodo mauris a malesuada.',
        ]);
    }
}
