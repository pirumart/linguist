<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\SubTopic;
use App\Http\Requests\StoreTopic;
use App\Http\Requests\StoreSubTopic;

class TopicsController extends Controller
{
    public function index()
    {
        $topics_count = Topic::count();
        $topics = Topic::all()->load('subTopics');
        return view('topics.index', compact('topics_count', 'topics'));
    }

    public function create()
    {
        return view('topics.new');
    }

    public function store(StoreTopic $request)
    {
        $new_topic =  new Topic($request->all());
        if (!$new_topic->save()) {
            return redirect()->back()->withInput($request->all())
                ->withErrors($errors);
        }
        return redirect('/topics')->with('status', "$request->name has been saved successfully.");
    }

    /**
     * return view for adding a new sub topic
     */
    public function newSubTopic(Topic $topic)
    {
        return view('topics.sub-topic.new', compact('topic'));
    }

    /**
     * saves a new sub topic to database
     * @param $request, $topic (parent topic)
     */
    public function addSubTopic(StoreSubTopic $request, Topic $topic)
    {
        $new_subtopic = new SubTopic($request->all());
        $new_subtopic->topic_id = $topic->id;

        if (!$new_subtopic->save()) {
            return redirect()->back()->withInput($request->all())
                ->withErrors($errors);
        }
        return redirect("/topics/$topic->id")->with('status', "$request->name has been added to $topic->name");
    }

    public function show($id)
    {
        $topic = Topic::find($id)->load('subTopics');
        return view('topics.show', compact('topic'));
    }

    public function edit($id)
    {
        //
    }

    public function update(StoreTopic $request, Topic $id)
    {
        //todo give tutors the power to edit topics
    }

    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);

        if ($topic->subTopics->count() > 0) {
            return redirect("/topics/$id")->with('status', "You cannot delete $topic->name because it has sub topics.");
        }

        $topic->delete();
        return redirect('/topics')->with('status', "$topic->name has been successfully deleted.");
    }
}
