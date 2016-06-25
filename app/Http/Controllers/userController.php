<?php
/**
 * Created by PhpStorm.
 * User: Khalid
 * Date: 6/21/2016
 * Time: 5:01 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\employee;
use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
class userController extends BaseController
{

    public function userSingUp(Request $request){

        $validate = Validator::make($request->all(),[
            'name' => 'required|max:120',
            'password' => 'required|min:5',
            'repassword' => 'required|same:password',
            'Email' => 'required|email|unique:employee',
            'reemail' => 'required|same:Email',
            'Address' => 'required|max:100',
            'Mobile' => 'required|min:7|unique:employee|integer'
        ]);

        if($validate->fails()){
            return redirect('/')
                ->withErrors($validate)
                ->withInput();
        }


        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $address = $request['address'];
        $phoneNumber = $request['phonenumber'];

        $emp = new employee();
        $emp->name = $name;
        $emp->Email = $email;
        $emp->password = $password;
        $emp->Address = $address;
        $emp->Mobile = $phoneNumber;

        $emp->save();
        return redirect()->route('Weblogin');

    }

    public function userSignIN()
    {

    }

}