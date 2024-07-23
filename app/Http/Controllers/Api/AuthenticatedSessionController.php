<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();
        $user=$request->user();

        $user->tokens()->delete();
        $token=$user->createToken('hussien harajli');

        return response()->json([
            'Token'=>$token->plainTextToken,
            'user'=>$user]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request):JsonResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json(['status'=>'success']);

    }
}