<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta['title']='Contact Us Sukses Multi Servis';
		$meta['page']='contactus_sms';

        // META
        $meta['meta_title']='Contact Us Sukses Multi Service';
		$meta['meta_desc']='testing contactus';

        return view('contactus', [
            'meta' => $meta,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // create validation rules
        $rules = [
            'fullname' => 'required|string',
            'email' => 'required|email|unique:Contactuses',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'subject' => 'required|string',
            'message' => 'required|string|between:5,255',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Error',
                'message' => $validator->errors()
            ], 400);
        }

        $email = $request->input('email');
        $isExistEmail = Contactus::where('email', '=', $email)
                                    ->exists();

        if ($isExistEmail) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Already Sending with This email'
            ], 409);
        }

        $contactUs = Contactus::create($data);

        if ($contactUs) {
            return response()->json([
                'status' => 'Success',
                'message' => 'Success Send Contact'
            ]);
        }
        else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Error Send Contact'
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
