<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

class CouponController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('coupons.index', [
            'users' => Splade::onInit(fn () => User::all()),
            'coupon' => Splade::onLazy(fn () => Coupon::generateCode())
        ]);
    }
}
