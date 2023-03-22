<?php

namespace Modules\Cms\Database\Seeders;

use Artisan;
use Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Cms\Entities\Page;

class CmsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::loginUsingId(1);

        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Pages Seed
         * ------------------
         */
        DB::table('pages')->truncate();
        echo "Truncate: pages \n";

        // Populate the pivot table
        Page::factory()
                ->has(Tag::factory()->count(rand(1, 5)))
                ->count(25)
                ->create();
        echo " Insert: pages \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
