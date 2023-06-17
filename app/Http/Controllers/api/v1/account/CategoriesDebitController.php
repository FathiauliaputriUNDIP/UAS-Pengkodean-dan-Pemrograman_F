<?php

namespace App\Http\Controllers\api\v1\account;

use App\CategoriesDebit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoriesDebitController extends Controller
{
    /**
     * CategoriesDebitController constructor.
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
        $categories = CategoriesDebit::where('user_id', Auth::user()->id)
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
                'name.required'    => 'Masukkan Nama KATEGORI !',
            ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'data'    => $validator->errors()
            ],401);

        } else {

            $check_KATEGORI = DB::table('categories_debit')
                ->where('user_id', Auth::user()->id)
                ->where('name', $request->input('name'))
                ->first();

            if ($check_KATEGORI) {
                return response()->json([
                    'success' => false,
                    'data'    => 'Nama KATEGORI Sudah Ada !'
                ],401);
            } else {

                CategoriesDebit::create([
                    'user_id'       => Auth::user()->id,
                    'name'          => $request->input('name')
                ]);

                return response()->json([
                    'success' => true,
                    'data'    => 'Nama KATEGORI Berhasil Disimpan !'
                ],200);

            }

        }
    }

}
