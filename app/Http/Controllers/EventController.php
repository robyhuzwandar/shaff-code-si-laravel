<?php

namespace  App\Http\Controllers;

use App\Event; 
use App\Community;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $event = Event::all();
        $community = Community::all();
        return view('event.index', compact('event', 'community'));
    }


    public function create()
    {
        $community = Community::where('user_id', Auth::user()->id)->get();
        return view('event.create', compact('community'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'event_type' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'location' => 'required',
            'fee' => 'required',
            'poster' => 'required',
            'more_info' => 'required',
        ]);
        
        $poster = $request->file('poster');
        $file_name = $request->title . time() . '.'. $poster->getClientOriginalExtension();
        $request->poster->move(public_path('img/poster_event'), $file_name);

        Event::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'event_type' => $request->event_type,
            'date' => $request->date,
            'time' => $request->time,
            'address' => $request->address,
            'location' => $request->location,
            'fee' => $request->fee,
            'community_id' => $request->community,
            'poster' => $file_name,
            'body' => $request->more_info,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back()->withSuccess('Publised Success');
    }

    public  function showById($id){
        $event = Event::find($id);

        $respone = [
            'msg' => 'Show Event success',
            'Event' => $event
        ];

        return response()->json($respone, '200');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        $community = Community::all();
        return view('event.edit', compact('event','community'));
    }

    public function update(Request $request, $id)
    {   
        $poster = $request->file('poster');
        $data_lama = Event::findOrFail($id);

        if(!empty($poster)){
            $file_name = $request->title . time() . '.'. $poster->getClientOriginalExtension();
            $request->poster->move(public_path('img/poster_event'), $file_name);
            if (!empty($data_lama->poster)) {
                $file_path = public_path() . '/img/poster_event/' . $data_lama->poster;

                if (is_file($file_path)) {
                    unlink($file_path);
                }
            }

            $data_lama->update([
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'event_type' => $request->event_type,
                    'date' => $request->date,
                    'time' => $request->time,
                    'address' => $request->address,
                    'location' => $request->location,
                    'fee' => $request->fee,
                    'community_id' => $request->community,
                    'body' => $request->more_info,
                    'poster' => $file_name,
                    'user_id' => Auth::user()->id
                ]);
        }else{
            $data_lama->update([
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'event_type' => $request->event_type,
                    'date' => $request->date,
                    'time' => $request->time,
                    'address' => $request->address,
                    'location' => $request->location,
                    'fee' => $request->fee,
                    'community_id' => $request->community,
                    'body' => $request->more_info,
                    'user_id' => Auth::user()->id
                ]);
        }

        return redirect(route('event.index'));
    }

    public function destroy($id)
    {
        $event = Event::find($id)->first();
        $file_path = public_path() . '/img/poster_event/' . $event->poster;

        if (is_file($file_path)){
            $img_delete = unlink($file_path);
            if (isset($img_delete)){
                $event->delete();
            }
        }else{
            $event->delete();
        }

        return redirect()->back();
    }
}
