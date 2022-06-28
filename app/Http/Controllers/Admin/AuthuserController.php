<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

class AuthuserController extends Controller
{
    public function index()
    {
        $meta['title']='Login Sukses Multi Servis';
		$meta['page']='login_sms';

        // META
        $meta['meta_title']='Login Sukses Multi Service';
		$meta['meta_desc']='Login Sukses Multi Service';

        return view('admin.auth.login', [
            'meta' => $meta,
        ]);
    }

    public function login(Request $request)
    {

        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:3',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator);

        } else {
            
            $newRequest = Request::create('/api/login', 'POST',[
                'email' => $request->email,
                'password' => $request->password
            ]);

            $result = json_decode( Route::dispatch($newRequest)->getContent() );

            if ($result->status_code == 401) {
                return redirect()->back()
                                 ->with('error', $result->message)
								 ->withInput();
            }else if ($result->status_code == 400) {
                return redirect()->back()
                                 ->with('error', $result->message)
								 ->withInput();
            }else if ($result->status_code == 200) {
                if ($result->data->status == "active") {
                    Session::put('session', 
                    [
                        'token_' => $result->access_token,
                        'id_' => $result->data->id,
                        'name_' => $result->data->name,
                        'email_' => $result->data->email,
                        'status_' => $result->data->status,
                    ]);
                    Session::save();

                    return redirect()->route('dashboard.all');

                }else {
                    return redirect()->back()
                                 ->with('error', $result->message)
								 ->withInput();
                }
            }

        }
    }
}
