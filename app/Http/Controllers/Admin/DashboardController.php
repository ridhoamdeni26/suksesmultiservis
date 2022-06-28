<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        if ((session('session')['token_'] != null)) {
            $meta['title']='Sukses Multi Servis';
            $meta['page']='dashboard_sms';

            // META
            $meta['meta_title']='Sukses Multi Service';
            $meta['meta_desc']='Sukses Multi Service';

            return view('admin.dashboard.dashboard', [
                'meta' => $meta,
            ]);
        }else {
            return redirect()->route('login.admin')
                             ->with('error', 'Session expired, please login')
                             ->withInput();
        }

    }
}
