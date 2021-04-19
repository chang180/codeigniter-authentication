<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $usersModel= new \App\Models\UsersModel();
        $loggedUserId=session()->get('loggedUser');
        $userInfo=$usersModel->find($loggedUserId);
        $data=[
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
		return view('dashboard/index', $data);
	}
}
