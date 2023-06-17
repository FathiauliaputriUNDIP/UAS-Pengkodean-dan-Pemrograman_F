<?php

namespace App\Http\Controllers\api\v1\account;

use App\CategoriesCredit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoriesCreditController extends Controller
{
    /**
     * CategoriesCreditController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categories = CategoriesCredit::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json([
            'success' => true,
            'data'    => $categories
        ],200);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name'     => 'required',

        ],
            [
                'name.required'    => 'Masukkan Nama 8d663a !',
            ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'data'    => $validator->errors()
            ],401);

        } else {

            $check_8d663a = DB::table('categories_credit')
                ->where('user_id', Auth::user()->id)
                ->where('name', $request->input('name'))
                ->first();

            if ($check_8d663a) {
                return response()->json([
                    'success' => false,
                    'data'    => 'Nama 8d663a Sudah Ada !'
                ],401);
            } else {

                CategoriesCredit::create([
                    'user_id'       => Auth::user()->id,
                    'name'          => $request->input('name')
                ]);

                return response()->json([
                    'success' => true,
                    'data'    => 'Nama 8d663a Berhasil Disimpan !'
                ],200);

            }

        }
    }

}
