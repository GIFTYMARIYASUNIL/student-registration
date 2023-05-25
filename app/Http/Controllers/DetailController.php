<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;





class DetailController extends Controller
{

    public function create()
    {
        return view('add');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'phoneno' => 'required|min:10|max:10',
            'email' => 'required||regex:/(.+)@(.+)\.(.+)/i',
            'country' => 'required',
            'language' => 'required',
            'username' => 'required',
            'emailid' => 'required||regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'schoolname' => 'required',
            'boardname' => 'required',
            'universityname' => 'required',
            'coursename' => 'required',
            'experience1' => 'required',
            'position1' => 'required',
            'experience2' => 'required',
            'position2' => 'required',
            'experience3' => 'required',
            'position3' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Validation error occur',
                'error' => $validator->errors()->toArray(),
            ]);
        } else {
            Detail::create($request->except('_token'));
            return response()->json([
                'status' => 200,
                'message' => 'Successfully created the student'
            ]);
        };
    }
    public function show()
    {
        $list = Detail::all();
        return view('list', compact('list'));
    }

    public function destroy($id)
    {
        $user = Detail::find($id);
        $user->delete();
        return redirect('/list-student');
    }
    public function edit($id)
    {
        $user = Detail::find($id);
        return view('edit', compact('user'));
    }

    public function update($id)
    {
        $user = Detail::find($id);
        $user->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'phoneno' => request('phoneno'),
            'email' => request('email'),
            'country' => request('country'),
            'language' => request('language'),
            'username' => request('username'),
            'emailid' => request('emailid'),
            'schoolname' => request('schoolname'),
            'boardname' => request('boardname'),
            'universityname' => request('universityname'),
            'coursename' => request('coursename'),
            'experience1' => request('experience1'),
            'position1' => request('position1'),
            'experience2' => request('experience2'),
            'position2' => request('position2'),
            'experience3' => request('experience3'),
            'position3' => request('position3')
        ]);
        //    return redirect('/list-student');
    }

    public function logout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('/'); // redirection to login screen
    }

    public function user()
    {
        return view('user');
    }



    public function usercreate(Request $request)
    {
        // ($request->all());
        $rules = [
            'email' => [
                'required',
                'email',
                Rule::exists('users') 
                
            ]
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator) {
            return redirect('/user')->with('success','email does not exist');
        }
    
        $data = $request->except('_token', 'confirmpassword');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/user');
    }
}






