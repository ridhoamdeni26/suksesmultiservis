<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Outlet as OutletResource;
use App\Models\Outlet;
use Exception;
use Illuminate\Support\Facades\Validator;

class OutletController extends Controller
{
    public function Index(Request $request)
    {
        $outlets = Outlet::all();

        $geoJSONdata = $outlets->map(function ($outlet) {
            return [
                'type'       => 'Feature',
                'properties' => new OutletResource($outlet),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $outlet->longitude,
                        $outlet->latitude,
                    ],
                ],
            ];
        });

        return response()->json([
            'type'     => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
    }

    public function getData(Request $request)
    {
        try {

            $address = $request->query('address');

            $outlets = Outlet::join('users', 'users.id', '=', 'outlets.creator_id')
            ->where('users.status', 'active')
            ->where('outlets.address', 'like', '%' . $address . '%')
            ->get(['outlets.*', 'users.name as creator_name']);

            return response()->json([
                'status' => 'Success',
                'status_code' => 200,
                'message' => 'Outlet get successfully',
                'data' => $outlets
            ]);

        } catch (Exception $eror) {
            return response()->json([
                'status' => 'Error',
                'status_code' => 500,
                'message' => 'Something Went Wrong',
                'data' => $eror
            ], 500);
        }
    }

    public function storeData(Request $request)
    {
        try {

            $rules = [
                'address' => 'required|string|max:255|min:5',
                'city' => 'required|string|max:50|min:5',
                'province' => 'required|string|max:50|min:5',
                'latitude'  => 'required|max:15',
                'longitude' => 'required|max:15',
            ];

            $data = $request->all();

            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'Error',
                    'status_code' => 400,
                    'message' => $validator->errors()
                ], 400);
            } else {

                $outletCreate = Outlet::create($data);

                return response()->json([
                    'status' => 'Success',
                    'status_code' => 200,
                    'message' => 'Outlet create successfully',
                    'data' => $outletCreate
                ], 200);
            }

        } catch (Exception $eror) {
            return response()->json([
                'status' => 'Error',
                'status_code' => 500,
                'message' => 'Something Went Wrong',
                'data' => $eror
            ], 500);
        }
    }
}
