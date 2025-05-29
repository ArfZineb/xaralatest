<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function index(): JsonResponse
    {
        try {
            $users = User::select('id', 'name', 'email', 'created_at')->get();
            Log::info('Users retrieved successfully', ['count' => $users->count()]);
            return response()->json($users);
        } catch (\Exception $e) {
            Log::error('Error retrieving users', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
} 