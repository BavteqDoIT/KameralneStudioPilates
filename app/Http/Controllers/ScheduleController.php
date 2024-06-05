<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $today = Carbon::now();
        $startOfWeek = $today->startOfWeek(Carbon::MONDAY)->toDateString();
        $endOfWeek = $today->endOfWeek(Carbon::SUNDAY)->toDateString();

        $schedules = Schedule::with('class', 'users')
            ->join('classes', 'schedules.class_id', '=', 'classes.id')
            ->select('schedules.*', 'classes.name as class_name', 'classes.slots')
            ->whereBetween('date', [$startOfWeek, $endOfWeek])
            ->get();

        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $hours = range(6, 22);

        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        } else {
            $username = 'Nieznajomy';
        }

        return view('schedules.index', compact('schedules', 'daysOfWeek', 'hours', 'username', 'startOfWeek', 'endOfWeek'));
    }

    public function create()
    {
        $classes = Classes::all();
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        } else {
            $username = 'Nieznajomy';
        }
        return view('schedules.create', compact('classes','username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);


        $class = Classes::findOrFail($request->class_id);


        $schedule = Schedule::create([
            'class_id' => $class->id,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'schedule_slots' => $class->slots,
        ]);

        return redirect()->route('schedule.index')->with('success', 'Schedule created successfully.');
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return response()->json(['success' => 'Schedule deleted successfully.']);
    }

    public function joinSchedule($scheduleId)
    {
        $user = Auth::user();
        $schedule = Schedule::findOrFail($scheduleId);

        if (!$schedule->users->contains($user->id) && $schedule->schedule_slots > 0) {
            $schedule->users()->attach($user->id);
            $schedule->decrement('schedule_slots');
        }

        return redirect()->back();
    }

public function leaveSchedule($scheduleId)
    {
        $user = Auth::user();
        $schedule = Schedule::findOrFail($scheduleId);

        if ($schedule->users->contains($user->id)) {
            $schedule->users()->detach($user->id);
            $schedule->increment('schedule_slots');
        }

        return redirect()->back();
    }
}
