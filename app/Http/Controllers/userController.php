<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //this is the add user function to add the users to the system
    public function addUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'phoneNo' => 'required|string|max:15',
                'role' => 'required|string|max:50',
            ]);

            $user = new User();
            $user->name = $validatedData['username'];
            $user->email = $validatedData['email'];
            $user->teli_number = $validatedData['phoneNo'];
            $user->user_role = $validatedData['role'];
            $user->save();

            return redirect()->route('userList')->with([
            'message' => 'User created successfully!',
            'user' => $user
            ]);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        }
    }
    //this is the user list function, when go to the user list this function is exicute to retrive the users
    public function userList()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('userList', compact('users')); // Pass users to the view
    }
    //this is the function to delete the user when click the delete button of the user's list
    public function deleteUser($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->delete();
            return redirect()->route('userList')->with('message', 'User deleted successfully!');
        }
        return redirect()->route('userList')->with('message', 'User not found!');
    }
}
