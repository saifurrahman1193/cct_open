<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Facades\JWTException;
use Tymon\JWTAuth\Facades\JWTSubject;
use Tymon\JWTAuth\Facades\PayloadFactory;
use Tymon\JWTAuth\Facades\JWTManager as JWT;
use Validator;
use Response;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Crypt;

use Laravel\Socialite\Facades\Socialite;



class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','getUserWithToken','loginAdmin','resetPassword','dynamicChangepasswordFromEncryption','register', 'socialLoginRedirectToProvider', 'socialLoginHandleProviderCallback']]);
    }

    /**
     * Register
     * @group authentication
     * @login
     */

    public function register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password'=> 'required',
            'name'=> 'required',
            'phone'=> 'required',
            // 'areaId' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        User::create([
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'areaId' => $request->get('areaId'),
        ]);
        $user = User::where('email', $request->email)->first();
        $access_token = JWTAuth::fromUser($user);

        return Response::json(compact('access_token'));
    }

    /**
     * Login
     * Get a JWT via given credentials.
     * @group authentication
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|min:6',
            'password'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // session('token', $token);

        return $this->respondWithToken($token);
    }


    public function getUserWithToken(Request $request)
    {
        if(isset(auth()->user()->id) and auth()->user()->id!=null){
            return $this->respondWithToken($request->token);
        }
        else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }



    /**
     * Send Reset Password Email
     * send email to verify
     * @group authentication
     *
     */

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|min:6',
            'password'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $isUserExist = DB::table('users')->where('email', strtolower($request->email))->count();

        if ($isUserExist==0) {
            return response()->json(['error' => 'Email not found'], 401);
        }

        $userData = DB::table('users')->where('email', strtolower($request->email))->first();

        // ===============mail========================
        $companyData = DB::table('company')->first();

        $mailReceiverEmail = $userData->email;
        $mailReceiverName = $userData->name;
        $mailSenderEmail = $companyData->mailSenderEmail;
        $mailSenderName  = $companyData->mailSenderName;
        $subject = 'Change password request!';
        $bodyMessage =  'You have requested to change password. Please click below link to confirm.';
        $bodyMessage =  $bodyMessage . ' <br><br>'.'<strong><h2> <a href="'.url('/').'/dynamicChangepasswordFromEncryption'.'/'.Crypt::encrypt($request->email).'/'.Crypt::encrypt($request->password).'">Click this link!</a></strong></h2>'.'Or'.'<br> copy the link and paste in the url : '.'<strong> <a href="'.url('/').'/dynamicChangepasswordFromEncryption'.'/'.Crypt::encrypt($request->email).'/'.Crypt::encrypt($request->password).'">'.url('/').'/dynamicChangepasswordFromEncryption'.'/'.Crypt::encrypt($request->email).'/'.Crypt::encrypt($request->password).'</a></strong>';
        $website = $companyData->website;
        $contactMails = $companyData->contactMails;
        $numberTitle = $companyData->numberTitle;
        $number = $companyData->number;

        mailformat2($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number);
        // ===============mail========================



        $response = ["status" => "Success", "message" => "Email sent." ];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    /**
     * Reset Password From Eamil
     * Reset Password after clicking email verification link
     * @group authentication
     *
     */

    public function dynamicChangepasswordFromEncryption(Request $request)
    {
        // dd(Crypt::decrypt($email));
        $email = Crypt::decrypt($request->email);
        $password = Crypt::decrypt($request->password);

        DB::table('users')->where('email', $email)->update([
          'password' => bcrypt($password),
        ]);

        $response = ["status" => "Success", "message" => "Password successfully changed!" ];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    /**
     * Admin Login
     * Only with authenticated with admin role user can access the admin portion
     * @group authentication
     *
     */
    public function loginAdmin(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }


    /**
     * getCurrentUserRoles
     * get current user roles
     * @authenticated
     * @group authentication
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCurrentUserRoles(Request $request)
    {
        $roles = DB::table('userroles')->where('userId', auth()->user()->id)->pluck('roleId');

        $response = ["status" => "Success", "data" => $roles];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    /**
     * getCurrentUserModules
     * To get current user modules that a user can access
     * @authenticated
     * @group authentication
     * @return \Illuminate\Http\JsonResponse
     */

    public function getCurrentUserModules(Request $request)
    {
        $modules = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('moduleId');
        $routenames = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('routeName');

        $response = ["status" => "Success", "modules" => $modules,  "routenames" => $routenames];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }






    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $userData = DB::table('admin_view')->where('email', auth()->user()->email)->first();
        $modules = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('moduleId');
        $routenames = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('routeName');

        $response = ["status" => "Success", "modules" => $modules,  "routenames" => $routenames,  'userData' => $userData];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function meAdmin()
    {
        $userData = DB::table('admin_view')->where('email', auth()->user()->email)->first();
        return response()->json($userData);
    }

    public function meAdminWithUserModules()
    {
        $userData = DB::table('admin_view')->where('email', auth()->user()->email)->first();
        $modules = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('moduleId');
        $routenames = DB::table('user_roles_modules_view')->where('userId', auth()->user()->id)->pluck('routeName');

        $response = ["status" => "Success", "modules" => $modules,  "routenames" => $routenames,  'userData' => $userData];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function webLogout()
    {
        auth()->logout();
        return redirect(route('login'));
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken( $token)
    {
        $token = ((isset($token) and $token != null) ? $token : request()->header('X-XSRF-TOKEN'));
        return response()->json([
            'data'=>auth()->user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'meta' =>
                [
                    'token' => $token
                ]
        ]);
    }

    protected function payload()
    {
        return auth()->payload();
    }

    public function changePassword(Request $request)
    {
        // prerequisite validation
        $validator = Validator::make($request->all(), [
            'password'=> 'required|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // previous password check
        $existingPassword = User::find(auth()->user()->id)->pluck('password')->first(); // db password already in bcrypt
        if (Hash::needsRehash($existingPassword))
        {
            $existingPassword = Hash::make($existingPassword);
        }

        $currentPassword = $request->currentPassword;

        if ( Hash::check($currentPassword, $existingPassword) )
        {
            User::find(auth()->user()->id)->update(
                [
                    'password'=>bcrypt($request->password)
                ]
            );
        }
        else
        {
            return response()->json(["message" => "Invalid current password given!"], 401);
        }

        $response = ["status" => "Success", "message" => "Password successfully changed !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    // =========================social login actions======================
    // =========================social login actions======================
    public function socialLoginRedirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function socialLoginHandleProviderCallback($service)
    {
        if ($service == 'twitter') {
        $user = Socialite::driver($service)->user();
        }else{
        $user = Socialite::driver($service)->stateless()->user();
        }
        $findUser = User::where('email',$user->getEmail())->first();
        $access_token='';
        if ($findUser) {
            $access_token = JWTAuth::fromUser($findUser);
            // localStorage.setItem('token', $access_token);
        }else{
            $newUser = new User;
            $newUser->email = $user->getEmail();
            $newUser->name = $user->getName();
            $newUser->password = bcrypt('@@@___123Ro!T');
            $newUser->isSocialLogin = 1;
            $newUser->save();
            $access_token = JWTAuth::fromUser($newUser);
            // localStorage.setItem('token', $access_token);
        }
        return redirect('/'.'?'. http_build_query(['token' => $access_token]));
    }
    // =========================social login actions======================
    // =========================social login actions======================

}
