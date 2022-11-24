<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Validator,  Redirect;
use Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Request;
use App\User;
class AuthController extends Controller
{

    public function dynamicLogin(Request $request)
    {
        $rules = array(
              'email' => 'required|email', // make sure the email is an actual email
              'password' => 'required'
              );
              // password has to be greater than 3 characters and can only be alphanumeric and);
              // checking all field
              $validator = Validator::make($request->all() , $rules);
              // if the validator fails, redirect back to the form
              if ($validator->fails())
              {
                   return response()->json(['error' => 'Unauthorized'], 401);
              }
              else
              {
                  // create our user data for the authentication
                  $userdata = array(
                    'email' => $request->input('email') ,
                    'password' => $request->input('password')
                  );
                  // attempt to do the login
                  if (Auth::attempt($userdata))
                  {
                  // validation successful
                  // do whatever you want on success
                    return response()->json(['success'], 200);
                    // return Redirect::back();
                  }
                  else
                  {
                    // validation not successful, send back to form
                      return response()->json(['error' => 'Unauthorized'], 401);
                  }
              }
    }


}
