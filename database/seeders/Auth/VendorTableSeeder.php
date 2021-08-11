<?php

namespace Database\Seeders\Auth;

use App\Events\Backend\UserCreated;
use App\Models\City;
use App\Models\Type;
use App\Models\Vendor;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

/**
 * Class UserTableSeeder.
 */
class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $faker = \Faker\Factory::create();

        $city = [
            'name'        => 'Delhi',
            'slug'        => 'delhi',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        City::create($city);

        $type = [
            'name'        => 'Wedding Photographers',
            'slug'        => 'wedding-photographers',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        Type::create($type);

        $vendor = [
            'user_id'        => 3,
            'city_id'        => 1,
            'type_id'        => 1,
            'business_name'  => 'Business name',
            'slug'           => 'business_name',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        Vendor::create($vendor);

        $vendor = [
                'user_id'        => 3,
                'city_id'        => 1,
                'type_id'        => 1,
                'business_name'  => 'Business name',
                'slug'           => 'business_name',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
        ];

        Vendor::create($vendor);

        Schema::enableForeignKeyConstraints();
    }
}
