<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;


use App\Libraries\zklib\zklib;
use App\Libraries\kamshory_zklib\zklibrary;


use Illuminate\Http\Request;
use Exception;
use Attendance;

use App\Device;
use DB;
use Validator;
use Rats\Zkteco\Lib\ZKTeco;

class DeviceController extends Controller
{

    public function RatsConnect($deviceIP, $devicePort)
    {

        try {

            $zk = new ZKTeco($deviceIP, $devicePort);

            $zk->connect();


            $fmVersion = $zk->fmVersion();
            $platform = $zk->platform();
            $workCode = $zk->workCode();
            $ssr = $zk->ssr();
            $serialNumber = $zk->serialNumber();
            $deviceName = $zk->deviceName();
            $deviceTime = $zk->getTime();
            $pinWidth = $zk->pinWidth();


            $device =  [
                "fmVersion" => $fmVersion,
                "platform" => $platform,
                "workCode" => $workCode,
                "ssr" => $ssr,
                "serialNumber" => $serialNumber,
                "deviceName" => $deviceName,
                "lastDeviceTime" => $deviceTime,
                "pinWidth" => $pinWidth,
            ];

            // $device->sizeUser = $sizeUser;

            $response = ["status" => "Success", "data"=> $device];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $device =  [
                "fmVersion" => '',
                "platform" => '',
                "workCode" => '',
                "ssr" => '',
                "serialNumber" => '',
                "deviceName" => '',
                "lastDeviceTime" => '',
                "pinWidth" => '',
            ];

            $response = ["status" => "Failure"];
            return response(json_encode($response), 401, ["Content-Type" => "application/json"]);

            return response()->json([
                "message" => "Failure",
            ]);
        }





        // dd(gettype($device));



    }


    public function checkDeviceConnectivity(Request $request)
    {

        try {
            // dd(ini_get('max_execution_time'));
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;


            $zk = new ZKLib($deviceIP, $devicePort);
            // dd($zk);
            // set_time_limit ( 10 );
            // ini_set('time_limit', '10');
            // ini_set('max_execution_time', '10');
            // ini_set("default_socket_timeout", 0.5);

            // dd(ini_get('default_socket_timeout'));

            // dd(ini_get('safe_mode'));

            $zk->connect();


            $fmVersion = $zk->fmVersion();
            $platform = $zk->platform();
            $workCode = $zk->workCode();
            $ssr = $zk->ssr();
            $serialNumber = $zk->serialNumber();
            $deviceName = $zk->deviceName();
            $deviceTime = $zk->getTime();
            $pinWidth = $zk->pinWidth();


            Device::where('deviceId', $deviceId)->update( [
                "fmVersion" => $fmVersion,
                "platform" => $platform,
                "workCode" => $workCode,
                "ssr" => $ssr,
                "serialNumber" => $serialNumber,
                "deviceName" => $deviceName,
                "lastDeviceTime" => $deviceTime,
                "pinWidth" => $pinWidth,
            ]);

            $device = DB::table('device')->where('deviceId', $deviceId)->first();
            // $device->sizeUser = $sizeUser;

            $response = ["status" => "Success", "data"=> $device];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (Excemption $e) {
            Device::where('deviceId', $deviceId)->update( [
                "fmVersion" => '',
                "platform" => '',
                "workCode" => '',
                "ssr" => '',
                "serialNumber" => '',
                "deviceName" => '',
                "lastDeviceTime" => null,
                "pinWidth" => '',
            ]);

            $response = ["status" => "Failure", "error" => $e->getMessage()];
            return response(json_encode($response), 401, ["Content-Type" => "application/json"]);

            return response()->json([
                "message" => "Failure",
            ]);
        }





        // dd(gettype($device));



    }


    public function getDevices()
    {
        $devices = DB::table('device_view')->get();

        $response = ["status" => "Success", "data"=> $devices];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getDevice($deviceId)
    {
        $device = DB::table('device')->where('deviceId', $deviceId)->first();
        $response = ["status" => "Success", "data"=> $device];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getDeviceRoles()
    {
        $deviceroles = DB::table('deviceroles')->get();

        $response = ["status" => "Success", "data"=> $deviceroles];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function setDeviceTimeNow(Request $request)
    {
        $deviceId = $request->deviceId;
        $deviceIP = $request->deviceIP;
        $devicePort = $request->port;

        try {
            $zk = new ZKLib($deviceIP, $devicePort);
            $zk->connect();
            $zk->setTime(\Carbon\Carbon::now());

            $response = ["status" => "Success"];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $e) {
            return response(401)->json([
                "message" => "Failure"
            ]);
        }
    }







    public function syncDevice(Request $request)
    {
        $deviceId = $request->deviceId;
        $deviceIP = $request->deviceIP;
        $devicePort = $request->port;

        $zk = new ZKLib($deviceIP, $devicePort);
        $ratszk = new ZKTeco($deviceIP, $devicePort);
        try {
            $zk->connect();
            sleep(1);

            $zk->disableDevice(); // disable all others works in the device
            sleep(1);



            // ============device to software, user card data update========== no need this portion == all things will be handled from software
            // $deviceusers = $zk->getUser();
            // // $zk->clearUser();
            // foreach ($deviceusers as $deviceuser) {
            //     $deviceUserId = (int) $deviceuser[0];
            //     $cardNo = trim($deviceuser[2]);
            //     $cardNoInt = (int) $deviceuser[2];

            //     $deviceUserData = DB::table('users')->where('id', $deviceUserId)->first();

            //     if (isset($deviceUserData->id) && $deviceUserData->id != null && $cardNoInt>0)
            //     // if (isset($deviceUserData->id) && $deviceUserData->id != null && $cardNoInt>0)
            //     {
            //         DB::table('users')->where('id', $deviceUserId)->update([ 'cardNo' => $cardNo ]);
            //     }
            // }
            // ============device to software, user card data update==========

            $attendances = $zk->getAttendance();
            // $zk->clearUser();

            $zk->enableDevice();
            $zk->disconnect();


            $ratszk->connect();
            // $ratszk->clearUsers();

            // $zk->clearUser();  // removing all the users from the device including fingerprint. Please don't use it

            // $uid, $userid, $name, $password, $role
            $usersdata = DB::table('userdevice_view')->where('deviceId', $deviceId)->orWhere('email', null)->get();
            // $zk->clearUser();  // removing all the users from the device including fingerprint. Please don't use it

            // dd($usersdata);

            foreach ($usersdata as $user) {

                // if ($user->userStatusInDevice==1)
                // {
                    // $zk->setUser($user->id, $user->id, $user->deviceUserName, $user->devicePassword, $user->deviceRoleId);
                    // if ($user->userStatusInDevice==1) {
                    //     $ratszk->setUser($user->id, $user->id, $user->deviceUserName, $user->devicePassword, $user->deviceRoleId, $user->cardNo);
                    // }

                    // $fingerprint = '';

                    // $fingerprint = $ratszk->getFingerprint($user->id);
                    // DB::table('users')->where('id', $user->id)->update([ 'fingerprint' => $fingerprint ]);

                    if ($user->userStatusInDevice==1 && getUserDeviceValidity($user->validDateStart, $user->validDateEnd)) {
                        // dd($user);
                        $ratszk->setUser($user->userId, $user->userId, $user->deviceUserName, $user->devicePassword, $user->deviceRoleId, $user->cardNo);

                        // db to device fingerprint set
                        try {
                            $fingerprint = $user->fingerprint;
                            if(strlen($fingerprint)>0)
                            {
                                // dd(unserialize($fingerprint));
                                // $strtoarr =  unserialize($arrtostr);
                                // dd($fingerprint);
                                // $fingerprint["6"] = $fingerprint;
                                // dd(explode(" ", $fingerprint));
                                $unserialized_arr_of_fingerprint =  unserialize($fingerprint);

                                $ratszk->setFingerprint($user->userId, $unserialized_arr_of_fingerprint);
                                // $fingerprint = $ratszk->getFingerprint($user->userId);
                                // dd($fingerprint);

                            }
                        } catch (\Throwable $th) {
                        }

                        // device to db fingerprint set
                        $fingerprint = [];
                        try {
                            $fingerprint = $ratszk->getFingerprint($user->userId);
                            if (\count($fingerprint)>0) {
                                $arr =  $fingerprint;
                                $serialized_str_of_fingerprint =  serialize($fingerprint);
                                // $strtoarr =  unserialize($arrtostr);
                                // dd($arr);
                                // dd($strtoarr);
                                // dd($arr==$strtoarr);
                                // dd(\json_decode($fingerprint));
                                // dd(implode("\n", $fingerprint));
                                DB::table('users')->where('id', $user->userId)->update([
                                    'fingerprint' => $serialized_str_of_fingerprint
                                ]);
                            }
                        } catch (\Throwable $th) {
                        }

                    }
                    else {
                        // $ratszk->setUser($user->userId, $user->userId, $user->deviceUserName, $user->devicePassword, $user->deviceRoleId, null);
                        $ratszk->removeUser($user->userId);
                    }
                // }
                // $zk->enroll($user->id);
            }
            // $zk->setUser($user->deviceUserId, $user->deviceUserId, $user->email, $user->password, $user->deviceRoleId);
            // $zk->setUser($user->id, $user->id, $user->deviceUserName, $user->password, 0);
            // dd(1);
            $ratszk->enableDevice();
            $ratszk->disconnect();

            $zk->connect();

            $users = $zk->getUser();
            // $attendances = $zk->getAttendance();

            $zk->clearattendance();     // clearing attendance data from the device to free up memory

            $lastSyncTime = DB::table('device')->where('deviceId', $deviceId)->pluck('lastSyncTime')->first();

            foreach ($attendances as $attendance)
            {
                if ($attendance[3] > $lastSyncTime)
                {
                    DB::table('attendance')->insert(
                        [
                            'entryById' => $attendance[1], // $attendance[1] = id
                            'attendanceType' => $attendance[2], // $attendance[2] =  check-in, check-out, overtime-in, overtime-out,
                            'attendanceTime' => $attendance[3] // $attendance[3] =  time
                        ]
                    );
                }

                // DB::table('attendance')->insert(
                //         ['entryById' => $attendance[1], 'attendanceTime' => $attendance[3] ]
                //     );

            }

            Device::where('deviceId', $deviceId)->update(['lastSyncTime' => \Carbon\Carbon::now()->toDateTimeString()]);

            $zk->enableDevice();

            cacheRemove();

             // $response = ["users" => $users, "attendances"=>$attendances];
             $response = ["users" => $users, "attendances"=>$attendances];

            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);



            // return response()->json([
            //     "message" => "Success"
            // ]);
        }
        catch (\Throwable $th) {
            $response = ["status" => "Failure", "data" => "Failure"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }

    }




    public function deviceIndex()
    {

        // $zk = new ZKLib('192.168.1.102', 4370);
        // try {
        //     $zk->connect();
        //     return 'success';
        // } catch (Exception $e) {
        //     return 'failure';
        // }
        // $zk->disableDevice();

        // $zk->testVoice();
        // $zk->enableDevice();
        // $zk->disconnect();

        // return $zk;
        // if ($zk!=null) {
        //     $ret = $zk->connect();
        //     $ret = 'connected';
        // } else {
        //     $ret = 'disconnected';
        // }



        // $zk->setUser(1, '100001', 'Kamshory', 'password1', 14); // as super manager
        // $zk->setUser(2, '100002', 'Mas Roy', 'password2', 0); // as user



        return view('device.device');
    }

    public function addDevice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deviceCustomizedName' => 'required|string|unique:device',
            'deviceIP' => 'required|string|unique:device',
            'port' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->all();
        Device::create($inputs);

        cacheRemove();

        $response = ["status" => "Success", "data" => "Uom successfully saved!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }





    public function editDevice(Request  $request)
    {

        $validator = Validator::make($request->all(), [
            'deviceCustomizedName' => 'required|string|unique:device,deviceCustomizedName,'.$request->deviceId.',deviceId',
            'deviceIP' => 'required|string|unique:device,deviceIP,'.$request->deviceId.',deviceId',
            'port' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Device::where('deviceId', $request->deviceId)->update($request->except(['token', '_token', '_method']));

        cacheRemove();

        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteDevice($deviceId)
    {
        Device::find($deviceId)->delete();
        cacheRemove();
        $response = ["status" => "Success", "data" => "Device Successfully Deleted!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function clearAdmin(Request  $request){
        try {
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;

            $zk = new ZKLib($deviceIP, $devicePort);
            $zk->connect();
            $zk->clearAdmin();

            $response = ["status" => "Success", "data" => "Device Successfully Cleared Admin"];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success", "data" => "Device Clearing Admin Failed"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }


    }


    public function deviceRestart(Request $request){
        try {
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;

            $zk = new zklibrary($deviceIP, $devicePort);
            $zk->connect();
            $zk->disableDevice();
            $users = $zk->getUser();
            $zk->restartDevice();

            $response = ["status" => "Success", "data" => "Device Successfully Restarted", 'users' => $users];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success", "data" => "Device Clearing Admin Failed"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }


    }

    public function getFP(Request $request)
    {
        try {
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;

            $zk = new zklibrary($deviceIP, $devicePort);
            $zk->connect();
            $zk->disableDevice();


            $response = ["status" => "Success" ];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }

    }


    public function getRFIDCard(Request $request)
    {
        try {
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;

            $zk = new zklibrary($deviceIP, $devicePort);
            $zk->connect();
            $zk->disableDevice();


            $response = ["status" => "Success" ];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }

    }

    public function setUserAccess(Request $request)
    {
        $block = $request->block;
        $user = $request->userData;

        $userId = $user['id'];

        DB::table('users')->where('id', $userId)->update([ 'userStatusInDevice' => $block['userStatusInDevice'] ]);
        // dd($userId);

        DB::table('blocklisthistory')->insert(
            [
                'userStatusInDevice' => $block['userStatusInDevice'] ,
                'reason' => $block['reason'] ,
                'userId' => $userId
            ]
        );

        cacheRemove();

        $response = ["status" => "Success" ];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getFingerprint($userId)
    {
        try {
            $deviceIP = '192.168.1.12';
            $devicePort = 4370;

            $zk = new ZKTeco($deviceIP, $devicePort);
            $zk->connect();
            $zk->disableDevice();

            $Fingerprint = $zk->getFingerprint($userId);


            $zk->enbleDevice();
            $zk->disconnect();


            $response = ["status" => "Success" ];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }
    }


    public function resetDevice(Request $request)
    {
        try {
            $deviceId = $request->deviceId;
            $deviceIP = $request->deviceIP;
            $devicePort = $request->port;

            $zk = new ZKLib($deviceIP, $devicePort);
            $zk->connect();
            $zk->disableDevice();


            $zk->clearAdmin();
            $zk->clearAttendance();
            $zk->clearUser();
            $zk->setTime(\Carbon\Carbon::now());

            $zk->enableDevice();
            $zk->disconnect();


            $response = ["status" => "Success" ];
            return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        } catch (\Throwable $th) {
            $response = ["status" => "Success"];
            return response(json_encode($response), 404, ["Content-Type" => "application/json"]);
        }
    }







}



