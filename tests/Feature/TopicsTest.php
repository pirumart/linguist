<?php

namespace Tests\Feature;

use Auth;
use Tests\TestCase;
use App\Models\User;
use App\Models\Topic;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TopicsTest extends TestCase
{
    use DatabaseTransactions;

    private const TOPIC_NAME        = 'new topic';
    private const TOPIC_DESCRIPTION = 'new topic description';

    private function createTopic()
    {
        $new_topic = new Topic;
        $new_topic->_token      = csrf_token();
        $new_topic->name        = self::TOPIC_NAME;
        $new_topic->description = self::TOPIC_DESCRIPTION;

        $this->post('/topics', $new_topic->getAttributes());
    }

    public function testUserCanViewTopics()
    {
        $this->get("/topics")->assertRedirect('/login');

        Auth::login(User::first());
        // $this->get("/topics")->assertStatus(200)->assertSee('Topics');

        Auth::logout();
    }

    public function testNewTopicCanBeAdded()
    {
        Auth::login(User::first());

        $initial_no_of_topics = Topic::count();

        // $this->get('/topics/create')->assertStatus(200)->assertSee('New Topic');

        $this->createTopic();

        $this->assertEquals(Topic::count(), $initial_no_of_topics + 1);
        $this->get('/topics')->assertStatus(200)->assertSee(self::TOPIC_NAME);
        $this->assertDatabaseHas('topics', [
            'name'          => self::TOPIC_NAME,
            'description'   => self::TOPIC_DESCRIPTION
        ]);

        Auth::logout();
    }

    public function testTopicCanBeDeleted()
    {
        Auth::login(User::first());

        $this->createTopic();
        $topic = Topic::all()->last();

        $this->delete("/topics/$topic->id", [ '_token' => csrf_token() ])
                ->assertRedirect('/topics');

        $this->assertDatabaseMissing('topics', [
            'name'          => self::TOPIC_NAME,
            'description'   => self::TOPIC_DESCRIPTION
        ]);

        Auth::logout();
    }

    public function testTopicWithSubTopicsCannotBeDeleted()
    {
        Auth::login(User::first());

        $topic = Topic::first();
        $no_of_topics = Topic::count();

        $this->delete("/topics/$topic->id", [ '_token' => csrf_token() ]);

        $this->assertEquals($no_of_topics, Topic::count());
        $this->assertDatabaseHas('topics', [
            'name'          => $topic->name,
            'description'   => $topic->description
        ]);

        Auth::logout();
    }
}
