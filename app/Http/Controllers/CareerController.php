<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $meta['title']='Career Sukses Multi Servis';
		$meta['page']='career_sms';

        // META
        $meta['meta_title']='Career Sukses Multi Service';
		$meta['meta_desc']='testing career';

        return view('career', [
            'meta' => $meta,
        ]);
    }

    public function detailsCareer()
    {
        $meta['title']='Detail Career Sukses Multi Servis';
		$meta['page']='detail_career_sms';

        // META
        $meta['meta_title']='Detail Career Sukses Multi Service';
		$meta['meta_desc']='testing detail career';

        return view('detailcareer', [
            'meta' => $meta,
        ]);
    }
}
