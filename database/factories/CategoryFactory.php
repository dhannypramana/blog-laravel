<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
        $title = strtolower($pass);
        $title = $this->multiexplode(array(" ", "."), $title);
        $slug = "";

        if (end($title) == "") { 
            array_pop($title); 
        }

        foreach ($title as $t) {
            $slug .= $t;
            
            if (end($title) == $t) {
                break;
            }
            
            $slug .= '-';
        }

        return $slug;
    }

    public function definition()
    {
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => $this->generateSlug($name)
        ];
    }
}
