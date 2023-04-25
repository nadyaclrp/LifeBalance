<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDetail;
use App\Http\Requests\StoreWorkoutDetailRequest;
use App\Http\Requests\UpdateWorkoutDetailRequest;
use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkoutDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // workoutDetails data
        $workout_id = $request->post('workout_id');
        $workout = DB::table('workouts')
                        ->where('id', '=', $workout_id)
                        ->get();
        $workout_days = DB::table('workout_days')
                        ->where('workout_id', '=', $workout_id)
                        ->get();

        // if(!$request->post('workout_value')){
        //     $is_done = -1;
        // } else {
        //     $is_done = $request->post('workout_value');
        // }
        // finished value +1, if user clicked done

        // temporary:
        // if day_count is 0 in workouts, do this:
        if(Workout::where('day_count', 0)){
            DB::table('workouts')
            ->join('workout_days', 'workout_days.workout_id', '=', 'workouts.id')
            ->where('workout_id', '=', $workout_id)
            ->update(['day_count' => $workout_days->count()]);
        }

        return view('backend.workoutDetails', [
            "workout_id" => $workout_id,
            "workout" => $workout,
            "workout_days"=> $workout_days
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorkoutDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutDetailRequest  $request
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutDetailRequest $request, WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutDetail $workoutDetail)
    {
        //
    }
}
