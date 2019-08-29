<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "photopath" => $faker->randomElement([
            "https://images.unsplash.com/photo-1523676060187-f55189a71f5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80",
            "https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "https://cdn.pixabay.com/photo/2012/05/29/00/43/car-49278__340.jpg",
            "https://amp.businessinsider.com/images/592f4169b74af41b008b5977-750-563.jpg",
            "https://specials-images.forbesimg.com/imageserve/5c80416531358e35dd283ac5/960x0.jpg?fit=scale"
        ]),
        "mileage" => $faker->randomFloat,
        "price" => $faker->randomFloat,
        "mileage" => $faker->randomFloat,
        "transmission" => $faker->randomElement(["Automatic", "Manual", "Hybrid"]),
        "fuel_type" => $faker->randomElement(["Petrol", "Diesel"]),
        "gear_box" => "CVT"
    ];
});
