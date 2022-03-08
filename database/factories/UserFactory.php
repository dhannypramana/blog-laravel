<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function multiexplode ($delimiters,$string) {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

    public function generateSlug($pass)
    {
        $user_name = strtolower($pass);
        $user_name = $this->multiexplode(array(" ",".") , $user_name);
        $slug = "";

        foreach ($user_name as $name) {
            $slug .= $name;

            if(end($user_name) == $name){
                break;
            }
            $slug .= '-';
        }

        return $slug;
    }

    public function definition()
    {
        $user_name = $this->faker->name();

        return [
            'name' => $user_name,
            'email' => $this->faker->unique()->safeEmail(),
            'slug' => $this->generateSlug($user_name),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
