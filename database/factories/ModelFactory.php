<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Model::class, function (Faker $faker) {
   return [
      'name' => $faker->name
   ];
});
