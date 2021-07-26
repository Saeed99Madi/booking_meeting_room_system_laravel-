<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
class BookingController extends Controller
{
    public function index(Room $room)
    {
        $rooms = Room::all();
        return view('custumer.booking',compact(['room',
            'rooms']));
    }
    public function bookings()
    {
        $rooms = Room::all();
        return view('booking',compact(
            [
            'rooms'
            ]
        ));
    }


    public function create(Room $room)
    {
        $bookings=$room->Bookings()->get();
        $inputs = \request()->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'note' => 'max:150',
        ]);
//        $dt1 = Carbon::createMidnightDate(2021, 7, 12);
//        $dt2 = Carbon::createMidnightDate(2021, 7, 12);
//        $dt1->addHours(10);
//        $dt2->addHours(14);
//        $start = Carbon::parse(request('start_time'))->isBetween($dt1,$dt2,false);
//        echo ($dt1);
//        echo ($dt2);
//        dd($start);
//        $d1=new DateTime("2012-07-08 11:14:15");
//        $d2=new DateTime("2012-07-08 14:14:15");
//        $d = $d1->diff($d2);
        $inputs['room_id'] = $room->id;
        $inputs['user_id'] = auth()->user()->id;
        $start = Carbon::parse(request('start_time'));
        $end = Carbon::parse(request('end_time'));
        $period = CarbonPeriod::create($start, $end, CarbonPeriod::EXCLUDE_END_DATE);
        $bool =true;
        if($start->diffInHours($end)<3)
        {
        foreach ($bookings as $book)
        {
            $sf = $period->getStartDate();
            $ef = $period->getEndDate();

//            dd('assasasas');
            $startf = Carbon::parse($book->start_time);
            $endf = Carbon::parse($book->end_time);
            $periodf = CarbonPeriod::create($startf, $endf, CarbonPeriod::EXCLUDE_END_DATE);


                if($period->overlaps($startf ,$endf))
                {
                    $bool =false;
                    break;
                }
                elseif($periodf->overlaps($period)) {
                    $bool =false;
                    break;
                }
                elseif($sf<$end && $sf>$start){$bool =false;
                    break;
                }
                elseif($ef>$start && $ef<$end){$bool =false;
                    break;
                }
            }
            if($bool==true){
                Booking::create($inputs);
                return redirect()->route('home');
            }
        }
        dd('لا يمكنك ان تقوم بهذه العملية... يوجد تداخل في وقت الحجز مع حجوزات اخرى');
//        echo $period->getStartDate();
//        echo ("\n");
//        echo $period->getEndDate();
//        echo ("\n");
//        dd($start->diff($end));
//        $period->getStartDate();
//        $period->getEndDate();
//        $period->getDateInterval();

    }
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
    }
    public function showAll(Booking $booking)
    {
        //
        $bookings = Booking::all();
        return view('admin.bookings.index',compact('bookings'));
    }
    public function edit(Booking $booking)
    {
        return view('admin.bookings.edit',compact('booking'));
    }
    public function update(Booking $booking)
    {
        $inputs = request()->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'description' => 'max:150',
        ]);
        $r_id = \request('room_id');
        $bookings= Room::find($r_id)->Bookings()->get();
//        dd($bookings);

//        $bookings= $room->Bookings()->get();
//        dd($room);
        $inputs['room_id'] = $r_id;
        $inputs['user_id'] = request('user_id');
        $start = Carbon::parse($inputs['start_time']);
        $end = Carbon::parse($inputs['end_time']);
        $period = CarbonPeriod::create($start, $end, CarbonPeriod::EXCLUDE_END_DATE);
        $bool =true;
        if($start->diffInHours($end)<3)
        {
            foreach ($bookings as $book)
            {
                if($book->id == $booking->id){continue;}
                $sf = $period->getStartDate();
                $ef = $period->getEndDate();
                $startf = Carbon::parse($book->start_time);
                $endf = Carbon::parse($book->end_time);
                $periodf = CarbonPeriod::create($startf, $endf, CarbonPeriod::EXCLUDE_END_DATE);
                if($period->overlaps($startf ,$endf))
                {
                    $bool =false;
                    break;
                }
                elseif($periodf->overlaps($period)) {
                    $bool =false;
                    break;
                }
                elseif($sf<$end && $sf>$start){$bool =false;
                    break;
                }
                elseif($ef>$start && $ef<$end){$bool =false;
                    break;
                }
            }
            if($bool==true){
                $booking->update($inputs);
                return redirect()->route('bookings.showall');
            }
        }
//        if($role->isDirty('name')){
//            session()->flash('update-role','The Role - '.$name .' - Updated');
//            $role->save();
//        }
        dd('لا يمكنك ان تقوم بهذه العملية... يوجد تداخل في وقت الحجز مع حجوزات اخرى');
    }
}
