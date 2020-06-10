<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'task' => $faker->text(100),
        'task_description' => $faker->text(2000),
        'task_date' => $faker->date('Y-m-d'),
        'task_time' => $faker->time,
        'task_status' => $faker->numberBetween(0,1),
        'priority_id' => $faker->numberBetween(1,4),
        'user_id' => $faker->numberBetween(1,5),
    ];
});
