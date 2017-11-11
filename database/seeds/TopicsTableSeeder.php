<?php

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    const TOPICS = [
        [
            'name' => 'Basics',
            'description' => 'Basics on getting started.'
        ],
        [
            'name' => 'Numbers',
            'description' => 'Get comfortable with numbers.'
        ],
        [
            'name' => 'Animals',
            'description' => 'Pets, Domestic and wild animals.'
        ],
        [
            'name' => 'People',
            'description' => 'Learn how to keep the conversation going.'
        ],
        [
            'name' => 'Date & Time',
            'description' => 'Did someone ask what time it was! '
        ],
        [
            'name' => 'Miscellaneous',
            'description' => 'Random topics to get you more acquainted.'
        ]
    ];


    public function run()
    {
        foreach (self::TOPICS as $key => $value) {
            Topic::create([
                'name'          => $value['name'],
                'description'   => $value['description']
            ]);
        }
    }
}
