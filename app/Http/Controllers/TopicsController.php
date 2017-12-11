<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\SubTopic;
use Illuminate\Http\Request;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function addSubTopic(Request $request, Topic $topic)
    {
        $new_subtopic = new SubTopic($request->all());
        $new_subtopic->topic_id = $topic->id;

        if (!$new_subtopic->save()) {
            return redirect()->back()->withInput($request->all())
                ->withErrors($errors);
        }
        return redirect()->back();
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
