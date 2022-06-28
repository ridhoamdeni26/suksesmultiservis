<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use Illuminate\Support\Facades\Route;
use DataTables;
use Illuminate\Support\Facades\Validator;

class OutletController extends Controller
{
    public function index(Request $request)
    {

        if ((session('session')['token_'] != null)) {

            $title = "Outlet";

            $outlets = Request::create('/api/data-outlet', 'GET',[
                'address' => $request->address
            ]);

            $outlets = json_decode( Route::dispatch($outlets)->getContent() );

            return view('admin.outlets.index', [
                'outlets' => $outlets,
                'title' => $title,
            ]);

        }else {
            return redirect()->route('login-admin')
                             ->with('error', 'Session expired, please login')
                             ->withInput();
        }
    }

    public function create()
    {
        if ((session('session')['token_'] != null)) {

            // Params
            $title = array(
                'breadcrumb' => "Outlets",
                'title' => "Create Outlets"
            );

            return view('admin.outlets.create', [
                'title' => $title,
            ]);

        }else {
            return redirect()->route('login-admin')
                             ->with('error', 'Session expired, please login')
                             ->withInput();
        }
    }

    public function store(Request $request)
    {

        if ((session('session')['token_'] != null)) {

            $rules = [
                'address' => 'required|string|max:255|min:5',
                'city' => 'required|string|max:50|min:5',
                'province' => 'required|string|max:50|min:5',
                'latitude'  => 'required|max:50',
                'longitude' => 'required|max:50',
            ];

            $data = $request->all();

            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {

                return redirect()->back()
                                 ->withInput($request->input())
                                 ->withErrors($validator);

            } else {

                $newRequest = Request::create('/api/outlets-creates', 'POST',[
                    'address' => $request->address,
                    'city' => $request->city,
                    'province' => $request->province,
                    'longitude' => $request->longitude,
                    'longitude' => $request->longitude,
                    'latitude' => $request->latitude,
                    'creator_id' => session('session')['id_'],
                ]);
    
                $result = json_decode( Route::dispatch($newRequest)->getContent() );
    
                if ($result->status_code == 500) {
                    $notification=array(
                        'messege'=> $result->status_code.' - ' . $result->message,
                        'alert-type'=>'error'
                    );

                    return Redirect()->back()
                                     ->with($notification)
                                     ->withInput($request->input());

                }elseif ($result->status_code == 200) {
                    $notification=array(
                        'messege'=> $result->message,
                        'alert-type'=>'success'
                    );

                    return redirect()->route('outlets.index')
                                     ->with($notification)
                                     ->withInput();
                }
            }


        }else {
            return redirect()->route('login-admin')
                             ->with('error', 'Session expired, please login')
                             ->withInput();
        }
    }

    public function show(Outlet $outlet)
    {
        return view('outlets.show', compact('outlet'));
    }

    public function edit(Outlet $outlet)
    {
        $this->authorize('update', $outlet);

        return view('outlets.edit', compact('outlet'));
    }

    public function update(Request $request, Outlet $outlet)
    {
        $this->authorize('update', $outlet);

        $outletData = $request->validate([
            'name'      => 'required|max:60',
            'address'   => 'nullable|max:255',
            'latitude'  => 'nullable|required_with:longitude|max:15',
            'longitude' => 'nullable|required_with:latitude|max:15',
        ]);
        $outlet->update($outletData);

        return redirect()->route('outlets.show', $outlet);
    }

    public function destroy(Request $request, Outlet $outlet)
    {
        $this->authorize('delete', $outlet);

        $request->validate(['outlet_id' => 'required']);

        if ($request->get('outlet_id') == $outlet->id && $outlet->delete()) {
            return redirect()->route('outlets.index');
        }

        return back();
    }

    public function outletData(Request $request)
    {
        if ($request->ajax()) {

            $outlets = Request::create('/api/data-outlet', 'GET',[
                'address' => $request->address
            ]);

            $outlets = json_decode( Route::dispatch($outlets)->getContent() );

            return Datatables::of($outlets->data)
                ->addIndexColumn()
                ->addColumn('action', function ($outlets) {
                
                    //create links for edit and delete functionality
                    return '<a href="'.route("dashboard.all",['uuid' => $outlets->id]).'" class="btn btn-primary btn-sm">edit</a>
                    <a href="'.route("dashboard.all",['uuid' => $outlets->id]).'" onclick="deleteRecord('.$outlets->id.',this,event);   " class="btn btn-danger btn-sm">delete</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
