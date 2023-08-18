<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class Activities extends Controller
{
    //

    public function store(Request $request)
    {

        $data = $request->validate
        ([
                'title' => 'required',
                'description' => 'required',
                'schedule' => 'required',
                'status' => 'required'



            ]);

        $newdata = Activity::create($data);

        return redirect(route('activities.create')); //redirect to create activity which view all data

    }

    public function view()
    {
        $matchthese = ['status' => 'not done'];
        $activities = Activity::where($matchthese)->get();
        return view('dashboard', ['activities' => $activities]);
        //view all products to index.blade.php
    }

    public function mark($id)
    {

        // $title = $activity->input('title');
        // $description = $activity->input('description');
        // $time = $activity->input('schedule');
        // $status = "done";

        // Activity::update('update activities set title=?, description = ?, schedule = ?, status =? where id =?',[$title,$description,$time,$status,$id]);

        $update = Activity::find($id);
        $update->status = 'done';
        $update->save();
        // $updateAct = Activity::where(['status' => $id])->update(['status'=>"done"])->save();
        return redirect(route('dashboard'));
    }

    public function create()
    {

        return view('activities.create');
    }




    public function remove(Activity $activity)
    {

        $activity->delete();
        return redirect(route('dashboard'));

    }


}