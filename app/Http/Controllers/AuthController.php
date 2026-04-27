<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                "email" => "required",
                "password" => "required",
            ]);

            if ($validator->fails()) {
                return response()->json(
                    [
                        "message" => $validator->errors()->first(),
                    ],
                    400,
                );
            } else {
                if (Auth::attempt($request->only("email", "password"))) {
                    return response()->json(
                        [
                            "status" => 1,
                            "redirect_url" => route("absensi.index"),
                        ],
                        200,
                    );
                } else {
                    return response()->json(
                        [
                            "status" => 0,
                            "message" => "Email atau password salah!",
                        ],
                        401,
                    );
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
