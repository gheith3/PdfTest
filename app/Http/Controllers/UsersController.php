<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = $this->GetUsers();
        return view("users", compact('users'));
    }

    public function export()
    {
        $data = [
            'users' => $this->GetUsers(),
            'title' => "here we go"
        ];

        return \PDF::loadView('export', $data, [], [
            'margin' => 2,
        ])->download($data['title'].'.pdf');
    }

    private function GetUsers() : array
    {
        $users = [];
        for ($i = 1; $i <= 100; $i++){
            $users[] = [
                "name" => "محمد أحمد علي",
                "address" => "العينين/عبري",
                "phone" => 97365353,
                "email" => "what@to.con"
            ];
        }
        return $users;
    }


}
