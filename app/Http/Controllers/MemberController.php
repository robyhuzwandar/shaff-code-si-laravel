<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

   public function index()
   {
    $member = Member::all();
    return view('member.index', compact('member'));
}


public function create()
{
    return view('member.create');
}


public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'address' => 'required',
        'birtday' => 'required' ,
        'phone' => 'required',
        'email' => 'required|email',
        'about' => 'required',
        'photo' => 'required'  
    ]);

    $member = request()->file('photo');
    dd($member);
    $file_name = $request->name . time() . '.'. $member->getClientOriginalExtension();
    $request->photo->move(public_path('img/photo_member'), $file_name);

    Member::create([
        'name'=> $request->name,
        'address'=> $request->address,
        'birtday'=> $request->birtday,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'about'=> $request->about,
        'photo'=> $file_name
        ]);

    return redirect()->back()->withSuccess('Member Created');
}


public function show()
{
    $member = Member::all();

    $respone = [
    'msg' => ' show all Member',
    'Member' => $member
    ];

    return response()->json($respone, '200');
}

public  function showById($id){
    $member = Member::find($id);

    $respone = [
    'msg' => 'Show Member success',
    'Member' => $member
    ];

    return response()->json($respone, '200');
}

public function edit($id)
{
    $member = Member::find($id);
    return view('member.edit', compact('member'));
}

public function update(Request $request, $id)
{
 $photo = $request->file('photo');
 $data_lama = Member::findOrFail($id);

 if(!empty($photo)){
    $file_name = $request->name .'-'. time() . '.' . $photo->getClientOriginalExtension();
    $request->photo->move(public_path('img/photo_member'), $file_name);
    if (!empty($data_lama->photo)) {
        $file_path = public_path() . '/img/photo_member/' . $data_lama->photo;

        if (is_file($file_path)) {
            unlink($file_path);
        }
    }

    $data_lama->update([
        'name'=> $request->name,
        'address'=> $request->address,
        'birtday'=> $request->birtday,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'about'=> $request->about,
        'photo'=> $file_name
        ]);
}else{
    $data_lama->update([
        'name'=> $request->name,
        'address'=> $request->address,
        'birtday'=> $request->birtday,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'about'=> $request->about
        ]);
}

return redirect(route('member.index'));
}


public function destroy($id)
{
 $member = Member::find($id)->first();
 $file_path = public_path() . '/img/photo_member/' . $member->poster;

 if (is_file($file_path)){
    $img_delete = unlink($file_path);
    if (isset($img_delete)){
        $member->delete();
    }
}else{
    $member->delete();
}

return redirect()->back();
}

}
