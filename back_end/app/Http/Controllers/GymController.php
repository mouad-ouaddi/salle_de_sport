<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    public function getMembers()
    {
        // Example data (replace with database logic if needed)
        $members = [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Smith'],
            ['id' => 3, 'name' => 'Alex Johnson'],
        ];

        return response()->json($members);
    }
}
