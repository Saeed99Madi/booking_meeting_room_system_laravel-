<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index',compact(
            [
                'rooms'
            ]));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $inputs = request()->validate(
            [
                'name'=>'required|min:6|max:100',
                'image'=>'mimes:jpeg,png',
                'description'=>'min:8|max:255',
                'wifi' => 'required',
                'board' => 'required',
                'seats' => 'required',
                'projector' => 'required',

            ]);
        if($request->file('image')) {
            $file = $request->file('image');
            $path = $file->getClientOriginalName();
            $file->move('roomImg',$path);
            $inputs['image'] = $path;
        }

        Room::create($inputs);
        return redirect()->route('rooms.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit',compact(['room']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Room $room , Request $request)
    {
        $inputs = request()->validate(
            [
                'name'=>'required|min:6|max:100',
                'image'=>'file:jpeg,png',
                'description'=>'min:8|max:255',
                'wifi' => 'required',
                'board' => 'required',
                'seats' => 'required',
                'projector' => 'required',
            ]);
        if($request->file('image')) {
            $file = $request->file('image');
            $path = $file->getClientOriginalName();
            $file->move('roomImg',$path);
            $inputs['image'] = $path;
        }
        $room->update($inputs);
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index');
    }
}
