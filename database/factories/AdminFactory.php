<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           /* 'name' => 'Bijon Mallik',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'cityguardadmin1719', // password*/
            
            'name' => 'Bijon Mallik',
            'username' => 'bijon1161',
            'national_id' => '123123123123',
            'gender' => 'Male',
            'division' => 'Dhaka',
            'city' => 'Motijheel',
            'email' => 'admin@admin.com',
            'password' => 'cityguardadmin1719',
           // 'password_confirmation' => ['required', 'string', 'min:8', 'confirmed'],
            'about_us' => 'We are admins',
            'birth_date' =>'15-01-1998' , 
            'remember_token' => Str::random(10),
        ];
    }
}
