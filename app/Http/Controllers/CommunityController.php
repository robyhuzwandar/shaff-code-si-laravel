<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $community = Community::all();
        return view('community.index', compact('community'));
    }

    public function create()
    {
        return view('community.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'type'=> 'required',
            'deskription'=> 'required',
            'location'=> 'required',
            'contact'=> 'required',
            'logo'=> 'required'
            ]);

        $logo = $request->file('logo');
        $file_name = 'logo-'.$request->name . '.' . $logo->getClientOriginalExtension();
        $request->logo->move(public_path('img/logo_community'), $file_name);

        Community::create([
            'name' => $request->name,
            'type' => $request->type,
            'deskription' => $request->deskription,
            'location' => $request->location,
            'contact' => $request->contact,
            'user_id' => Auth::user()->id,
            'logo'=> $file_name
            ]);
        return redirect()->back()->withSuccess('Community Created');
    }


    public function show()
    {
        $community = Community::all();

        $respone = [
        'msg' => ' show all Community',
        'Community' => $community
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $community = Community::find($id);

        $respone = [
        'msg' => 'Show Community success',
        'Community' => $community
        ];

        return response()->json($respone, '200');
    }

    public function edit($id)
    {
        $community = Community::find($id);
        return view('community.edit', compact('community'));

    }

    public function update(Request $request, $id)
    {

        $logo = $request->file('logo');
        $data_lama = Community::findOrFail($id);

        if(!empty($logo)){
            $file_name = $request->title . time() . '.'. $logo->getClientOriginalExtension();
            $request->logo->move(public_path('img/logo_community'), $file_name);
            
            if (!empty($data_lama->logo)) {
                $file_path = public_path() . '/img/logo_community/' . $data_lama->logo;

                if (is_file($file_path)) {
                    unlink($file_path);
                }
            }

            $data_lama->update([
                'name' => $request->name,
                'type' => $request->type,
                'deskription' => $request->deskription,
                'location' => $request->location,
                'contact' => $request->contact,
                'logo'=> $file_name
                ]);
        }else{
         $data_lama->update([
            'name' => $request->name,
            'type' => $request->type,
            'deskription' => $request->deskription,
            'contact' => $request->contact,
            'location' => $request->location
            ]);
     }

     return redirect(route('community.index'));
 }

 public function destroy($id)
 {
    $community = Community::find($id)->first();
    $file_path = public_path() . '/img//logo_community/' . $community->logo;

    if (is_file($file_path)){
        $img_delete = unlink($file_path);
        if (isset($img_delete)){
            $community->delete();
        }
    }else{
        $community->delete();
    }

    return redirect()->back();
}
}
