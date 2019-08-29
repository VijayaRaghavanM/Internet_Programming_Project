<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarParts;
use Faker\Generator as Faker;

$factory->define(CarParts::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "description" => $faker->sentence,
        "photopath" => $faker->randomElement([
            "https://extremeautopart.com/images/slider_car12.png",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV58cE_qLK6Ysc8QzfDB8HiOGxxxvYjCntnHxdPS-tTBdQbDaP",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlPOCnLVTMOpSSdlGcp8BqZZw-0EuvBx8Qkbf-F0eZwcAqojMG",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJQVh1ACrCTMOccKbB6q78YOIHTS2QeSLCOusut6cLSxCz0TbZ",
            "https://thumbs.dreamstime.com/z/spare-parts-car-pads-white-background-32591263.jpg"
        ]),
        "price" => $faker->randomFloat
    ];
});
