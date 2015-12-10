<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Members;

class UserController extends Controller
{

    public function people_page()
    {
        $users = User::where('Access','=','1')->get();
        return view('home.people',['users'=>$users]);
    }

    public function registerpage()
    {
        return view('user.register');
    }

    public function signin()
    {
        return view('user.sign_in');
    }

    public function admin_page()
    {
        $user = session('user');
        if($user==null)
        {
            session(['back'=>'admin_page']);
            return redirect('sign_in');
        }

        $users = User::all();
        return view('user.admin',['users'=>$users]);
    }

    public function login()
    {
        $input = Request::all();
        $Username = $input['Username'];
        $Password = md5($input['pwd']);
        $user = User::where('Username','=',$Username)->first();

        if($user != null && $Password == $user->Password)
        {
            session(['user'=>$user]);
            $redirect = '/home';
            if(session('back'))
            {
                $redirect = session('back');
                session(['back'=>null]);
            }
            return redirect($redirect);
        }
        return view('user.sign_in',['error'=>'You have entered wrong password. Please try again']);
    }

    public function logout()
    {
        session()->clear();
        return redirect('home');
    }


    public function signup()
    {
        $input = Request::all();
        $Username = $input['Username'];
        $Password = md5($input['pwd']);
        $Name = $input['first_name'].' '.$input['last_name'];
        $DOB = $input['year'].'-'.$input['month'].'-'.$input['day'];
        $Email = $input['email'];
        $now = date("Y-m-d h:i:s");

        $user = User::where('Username','=',$Username)->get();
        if(count($user) != 0)
        {
            return view('user.register',['error'=>'Already registered,please Login']);
        }
        $user = User::create(['Username'=>$Username, 'Email'=>$Email, 'Name'=>$Name, 'Password'=>$Password, 'Created'=>$now, 'Access'=>2]);
        $user->DOB = $DOB;
        $user->save();

        session(['user'=>$user]);
        return redirect('home');
    }

    public function my_page()
    {
        $user = session('user');
        if($user==null)
        {
            session(['back'=>'my_page']);
            return redirect('sign_in');
        }
        return view('user.my');
    }

    public function my_page_edit()
    {
        $input = Request::all();
        $Username = $input['Username'];
        $Name = $input['name'];
        $DOB = $input['DOB'];
        $Email = $input['email'];

        $user = User::where('Username','=',$Username)->first();
        $user->update(['Name'=>$Name, 'Email'=>$Email]);
        $user->DOB=$DOB;
        $user->save();

        session(['user'=>$user]);
        return view('user.my');
    }

    public function change_access()
    {
        $Accesses = Request::all();

        $users = User::all();
        $index = 1;
        foreach($users as $user)
        {
            $user->Access = $Accesses[$index];
            $index++;
            $user->save();
        }

        return redirect('admin_page');
    }

    public function add_member()
    {
        $input = Request::all();
        $lastname = $input['last_name'];
        $firstname = $input['first_name'];
        $gender = $input['gender'];
        $email = $input['email'];
        $state = $input['state'];

        Members::create(['Lastname'=>$lastname, 'Firstname'=>$firstname, 'email'=>$email, 'state'=>$state, 'gender'=>$gender]);
        return view('home.member', ['res'=>'Submit Succesful']);
    }
}






