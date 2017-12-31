<?php

namespace Tests\Feature;

use Auth;
use Tests\TestCase;
use App\Models\User;
use App\Models\Topic;
use App\Models\SubTopic;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubTopicTest extends TestCase
{
    use DatabaseTransactions;

    private const SUB_TOPIC_NAME = 'new sub topic string';

    public function testViewSubTopics()
    {
        $topic = Topic::first();

        // test unauthorized users can view topics
        $this->get("/topics/$topic->id")->assertRedirect('/login');

        //login user cause only authorized users can view dashboard
        Auth::login(User::first());
        // $this->get("/topics/$topic->id")
        // ->assertStatus(200)
        //     ->assertSee($topic->name);

        //todo find a better option for user sessions
        Auth::logout(); //logout user
    }

    public function testNewSubTopicCanBeAdded()
    {
        $topic = Topic::first();

        // test unauthorized users cannot create sub topics
        $this->get("/topics/$topic->id/sub-topic/create")->assertRedirect('/login');

        Auth::login(User::first());
        // $this->get("/topics/$topic->id/sub-topic/create")
        //         // ->assertStatus(200)
        //         ->assertSee("Add a new Sub Topic in $topic->name");

        //creating a new sub topic
        $url = "/topics/$topic->id/sub-topic/store";

        $new_sub_topic          = new SubTopic;
        $new_sub_topic->_token  = csrf_token();
        $new_sub_topic->name    = self::SUB_TOPIC_NAME;

        $this->post($url, $new_sub_topic->getAttributes());


        // test for existence of new sub topic name in database
        $this->assertDatabaseHas('sub_topics', [
            'name' => self::SUB_TOPIC_NAME
        ]);

        // user can see new sub topic when viewing the topic details
        // $this->get("/topics/$topic->id")
        //         ->assertStatus(200)
        //         ->assertSee(self::SUB_TOPIC_NAME);

        Auth::logout();
    }
}
