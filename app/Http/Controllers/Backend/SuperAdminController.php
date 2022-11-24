<?php
namespace App\Http\Controllers\Backend;
use Config;

use App\User;
use App\Files;
use App\Roles;

use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class SuperAdminController extends Controller
{

    // ======================== users ==============================
    // ======================== users ==============================
    public function getUsers()
    {
        $users = DB::table('users')->get();
        $response = ["status" => "Success", "data"=> $users];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getUsersView(Request $request)
    {
        $users = DB::table('users_view')->get();
        $response = ["status" => "Success", "data"=> $users];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getUsersView_p(Request $request)
    {
        // search
        $search = $request->search;
        if ($search!=null) {

            $data = DB::table('users_view')
                    ->orWhere('name',   'like', '%'.$search.'%')
                    ->orWhere('deviceUserName',   'like', '%'.$search.'%')
                    ->orWhere('email',   'like', '%'.$search.'%')
                    ->orWhere('nid',   'like', '%'.$search.'%')
                    ->orWhere('phone',   'like', '%'.$search.'%')
                    ->orWhere('cardNo',   'like', '%'.$search.'%')
                    ->paginate(10);
            // dd($data);
        }
        else{
            $data = DB::table('users_view')->paginate(10);
        }

        $data = [
            'paginator' => [
                'current_page' => $data->currentPage(),
                'total_pages' => $data->lastPage(),
                'previous_page_url' => $data->previousPageUrl(),
                'next_page_url' => $data->nextPageUrl(),
                'record_per_page' => $data->perPage(),
                'current_page_items_count' => $data->count(),
                'total_count' => $data->total(),
                'pagination_last_page' => $data->lastPage(),
            ],
            'data' => $data->items(),
        ];

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getUsersWithRoles()
    {
        $users_with_roles = DB::table('user_roles_view')->get();
        $response = ["status" => "Success", "data"=> $users_with_roles];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getUser($userId)
    {
        $user = DB::table('users_view')->where('id', $userId)->first();
        $response = ["status" => "Success", "data"=> $user];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'deviceUserName' => 'required|min:4|max:20|unique:users',
            'nid' => 'required|min:10|max:20|unique:users',
            'membershipNumber' => 'requiredunique:users',
            'name' => 'required',
            'nameBN' => 'required',
            'id' => 'required|unique:users',
            // 'deviceId' => 'required|numeric',
            'deviceUserName' => 'required|min:4|max:20',
            // 'email' => 'required|email|unique:users',
            // 'password'=> 'required|min:6',
            'deviceRoleId' => 'required|numeric',
            // 'shiftingId' => 'required|numeric',
            // 'devicePassword' => 'required|min:4|max:8',
            'cardNo' => 'nullable|unique:users',
            'address' => 'required',
            'addressBN' => 'required',

        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }



        $inputs = $request->except(['token', '_method']);


        // $userId = User::create($inputs)->id;

        // User::where('id', $userId)->update([ 'password' => bcrypt($request->password) ]);
        DB::table('users')->insert([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            // 'email' => $request->get('email'),
            'deviceUserName' => $request->get('deviceUserName'),
            // 'deviceId' => $request->get('deviceId'),
            'deviceRoleId' => $request->get('deviceRoleId'),
            'departmentId' => $request->get('departmentId'),
            'designationId' => $request->get('designationId'),
            'cardNo' => $request->get('cardNo'),

            'issueDate' => $request->get('issueDate'),
            'validDateStart' => $request->get('validDateStart'),
            'validDateEnd' => $request->get('validDateEnd'),
            // 'password' => bcrypt($request->get('password')),
            'devicePassword' => '123321',
        ]);

        $userId = $request->get('id');

        if($request->has('userDeviceIds')  )
        {
            // dd($request->userDeviceIds);
            DB::table('userdevice')->where('userId', $userId)->delete();

            foreach ($request->userDeviceIds as $deviceId)
            {
                DB::table('userdevice')->insert([
                    'userId' => $userId,
                    'deviceId' => $deviceId,
                ]);
            }
        }



        // if($request->has('roleIds')  )
        // {
        //     DB::table('userroles')->where('userId', $request->id)->delete();

        //     foreach ($request->roleIds as $roleId)
        //     {
        //         DB::table('userroles')->insert([
        //             'userId' => $userId,
        //             'roleId' => $roleId,
        //         ]);
        //     }
        // }

        cacheRemove();

        $response = ["status" => "Success", "data" => "User successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function editUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'deviceUserName' => 'required|min:4|max:20|unique:users,deviceUserName,'.$request->id.',id',
            // 'id' => 'required|unique:users,id,'.$request->id.',id',
            // 'deviceId' => 'required|numeric',
            'name' => 'required',
            'nameBN' => 'required',
            'membershipNumber' => 'required|unique:users,id,'.$request->id.',id',
            'nid' => 'required|min:10|max:20|unique:users,id,'.$request->id.',id',
            'deviceRoleId' => 'required|numeric',
            'deviceUserName' => 'required|min:4|max:20',
            // 'email' => 'email|unique:users,email,'.$request->id.',id',
            // 'shiftingId' => 'required|numeric',
            'cardNo' => 'nullable|unique:users,cardNo,'.$request->id.',id',
            'address' => 'required',
            'addressBN' => 'required',

        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // User::where('id', $request->id)->update($request->except(['token', '_method', 'id', 'password',  'roleIds']));
        User::find($request->id)->update($request->all());

        if($request->has('password') and $request->password != null )
        {
            User::where('id', $request->id)->update([ 'password' => bcrypt($request->password) ]);
        }

        if($request->has('devicePassword') and $request->devicePassword != null )
        {
            User::where('id', $request->id)->update([ 'devicePassword' => $request->devicePassword ]);
        }


        if($request->has('roleIds')  )
        {
            // dd($request->roleIds);
            DB::table('userroles')->where('userId', $request->id)->delete();

            foreach ($request->roleIds as $roleId)
            {
                DB::table('userroles')->insert([
                    'userId' => $request->id,
                    'roleId' => $roleId,
                ]);
            }
        }


        if($request->has('userDeviceIds')  )
        {
            // dd($request->userDeviceIds);
            DB::table('userdevice')->where('userId', $request->id)->delete();

            foreach ($request->userDeviceIds as $deviceId)
            {
                DB::table('userdevice')->insert([
                    'userId' => $request->id,
                    'deviceId' => $deviceId,
                ]);
            }
        }


        cacheRemove();

        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteUser($userId)
    {
        DB::table('users')->where('id', $userId)->delete();

        cacheRemove();
        $response = ["status" => "Success", "data" => "User Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function userFilesUploadPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fileName' => 'required|string',
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fileId = Files::create($request->except(['token', 'file']))->fileId;


        if ( $request->has('file') && $request->file !=null &&  strlen($request->file)>100)
        {
            $randomnumber = rand(99, 9999);
            $png_url = "fileId-".$fileId.'-'.$randomnumber.".png";
            $path = public_path().'/uploads/files/' . $png_url;
            $data = substr($request->file, strpos($request->file, ',') + 1);
            $data = base64_decode($data);

            Storage::disk('filesuploads')->put($png_url, $data);

            Files::where('fileId', $fileId)->update(['filePath' => '/uploads/files/'.$png_url]);
        }


        cacheRemove();
        $response = ["status" => "Success", "data" => "User files Successfully added !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);

    }

    public function getUserFiles(Request $request)
    {
        $files = DB::table('files')->where('userId', $request['user']['id'])->get();

        $response = ["status" => "Success", "data" => $files];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function deleteUserFile(Request $request)
    {
        $file = DB::table('files')->where('fileId', $request['fileId'])->first();
        DB::table('files')->where('fileId', $request['fileId'])->delete();

        try {
            \unlink(\substr($file->filePath, 1));
        } catch (\Throwable $th) {
            //throw $th;
        }
        cacheRemove();
        $response = ["status" => "Success", "data" => "User file Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




    // ======================== users ==============================
    // ======================== users ==============================



    // ======================== Block List ==============================
    // ======================== Block List ==============================
    public function getBlocklist_p(Request $request)
    {
        // search
        $search = $request->search;
        if ($search!=null) {
            $data = DB::table('users_view')
                    ->where('userStatusInDevice', 0)
                    ->orWhere('name',   'like', '%'.$search.'%')
                    ->orWhere('deviceUserName',   'like', '%'.$search.'%')
                    ->orWhere('email',   'like', '%'.$search.'%')
                    ->orWhere('nid',   'like', '%'.$search.'%')
                    ->orWhere('phone',   'like', '%'.$search.'%')
                    ->orWhere('cardNo',   'like', '%'.$search.'%')
                    ->paginate(10);
        }
        else{
            $data = DB::table('users_view')->where('userStatusInDevice', 0)->paginate(10);
        }

        $data = [
            'paginator' => [
                'current_page' => $data->currentPage(),
                'total_pages' => $data->lastPage(),
                'previous_page_url' => $data->previousPageUrl(),
                'next_page_url' => $data->nextPageUrl(),
                'record_per_page' => $data->perPage(),
                'current_page_items_count' => $data->count(),
                'total_count' => $data->total(),
                'pagination_last_page' => $data->lastPage(),
            ],
            'data' => $data->items(),
        ];

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getBlocklistHistory_p(Request $request)
    {
        // search
        $search = $request->search;
        if ($search!=null) {
            $data = DB::table('blocklisthistory_view')
                    ->orWhere('name',   'like', '%'.$search.'%')
                    ->orWhere('deviceUserName',   'like', '%'.$search.'%')
                    ->orWhere('email',   'like', '%'.$search.'%')
                    ->orWhere('nid',   'like', '%'.$search.'%')
                    ->orWhere('phone',   'like', '%'.$search.'%')
                    ->orWhere('cardNo',   'like', '%'.$search.'%')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        }
        else{
            $data = DB::table('blocklisthistory_view')->orderBy('created_at', 'desc')->paginate(10);
        }

        $data = [
            'paginator' => [
                'current_page' => $data->currentPage(),
                'total_pages' => $data->lastPage(),
                'previous_page_url' => $data->previousPageUrl(),
                'next_page_url' => $data->nextPageUrl(),
                'record_per_page' => $data->perPage(),
                'current_page_items_count' => $data->count(),
                'total_count' => $data->total(),
                'pagination_last_page' => $data->lastPage(),
            ],
            'data' => $data->items(),
        ];

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    // ======================== Block List ==============================
    // ======================== Block List ==============================






    // ======================== user devices ==============================
    // ======================== user devices ==============================
    public function getUserDevices()
    {
        $userdevice = DB::table('userdevice_view')->get();
        $response = ["status" => "Success", "data"=> $userdevice];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }
    // ======================== user devices ==============================
    // ======================== user devices ==============================




    // ======================== roles ==============================
    // ======================== roles ==============================
    public function getRoles()
    {
        $roles = DB::table('roles')->get();
        $response = ["status" => "Success", "data"=> $roles];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getRole($roleId)
    {
        $role = DB::table('roles')->where('roleId', $roleId)->first();
        $response = ["status" => "Success", "data"=> $role];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'roleName' => 'required|string|unique:roles',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except(['token', '_method']);
        Roles::create($inputs);

        cacheRemove();
        $response = ["status" => "Success", "data" => "Role successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'roleName' => 'required|string|unique:roles,roleName,'.$request->roleId.',roleId',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Roles::where('roleId', $request->roleId)->update($request->except(['token', '_method', 'roleId']));
        Roles::find( $request->roleId)->update($request->all());

        if($request->has('moduleIds')  )
        {
            DB::table('rolemodules')->where('roleId', $request->roleId)->delete();

            foreach ($request->moduleIds as $moduleId)
            {
                DB::table('rolemodules')->insert([
                    'roleId' => $request->roleId,
                    'moduleId' => $moduleId,
                ]);
            }
        }


        cacheRemove();
        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteRole($roleId)
    {
        DB::table('roles')->where('roleId', $roleId)->delete();

        cacheRemove();
        $response = ["status" => "Success", "data" => "Role Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




    // ======================== roles ==============================
    // ======================== roles ==============================


    // ======================== modules ==============================
    // ======================== modules ==============================
    public function getModules()
    {
        $modules = DB::table('modules')->get();
        $response = ["status" => "Success", "data"=> $modules];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getModule($moduleId)
    {
        $module = DB::table('modules')->where('moduleId', $moduleId)->get();

        $response = ["status" => "Success", "data"=> $module];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getRoleModules()
    {
        $rolemodules = DB::table('rolemodules_view')->get();
        $response = ["status" => "Success", "data"=> $rolemodules];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }
    // ======================== modules ==============================
    // ======================== modules ==============================


    // ======================== backup ==============================
    // ======================== backup ==============================
    public function storageBackup()
    {

        // php.ini has enabled extension called ext-zip.
        $zip_file = 'storage_backup.zip';

            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            $path = 'uploads' ;

            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file)
            {
                // We're skipping all subfolders
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();

                    // extracting filename with substr/strlen
                    $relativePath = 'uploads/' . substr($filePath, strlen($path) + 1);

                    $zip->addFile($filePath, $relativePath);
                }
            }
            $zip->close();



        return response()->download($zip_file);
        // $response = ["status" => "Success"];
    }

    public function storageBackupDelete()
    {
        try {
            \unlink('storage_backup.zip');
        } catch (\Throwable $th) {
        }
    }

    public function serverDBBackup()
    {
        try {
            $database = config('app.db');

            // dd(config('app.db'));
            $user = config('app.dbuser');
            $pass = config('app.dbpass');
            $host = config('app.dbhost');
            $dir = 'server_db_backup.sql';

            try {
                unlink($dir);
            } catch (\Throwable $th) {
            }

            // echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";
            // mysqldump -u [user name] –p [password] [options] [database_name] [tablename] > [dumpfilename.sql]
            // --add-drop-database --databases
            exec("mysqldump  --user={$user} --password={$pass} --host={$host} --events --routines --triggers  {$database}  --result-file={$dir} 2>&1", $output);

            $tableViewsCounts = DB::select('SELECT count(TABLE_NAME) AS TOTALNUMBEROFTABLES FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ?', [$database]);
            $tableViewsCounts = $tableViewsCounts[0]->TOTALNUMBEROFTABLES;

            $viewsCounts = DB::select('SELECT count(TABLE_NAME) AS TOTALNUMBEROFVIEWS FROM INFORMATION_SCHEMA.TABLES WHERE  TABLE_TYPE LIKE "VIEW" AND TABLE_SCHEMA = ?', [$database]);
            $viewsCounts = $viewsCounts[0]->TOTALNUMBEROFVIEWS;

            $tablesCount = $tableViewsCounts-$viewsCounts;


            $proceduresCounts = DB::select('SELECT count(TYPE) AS proceduresCounts FROM mysql.proc WHERE  TYPE="PROCEDURE" AND db = ?', [$database]);
            $proceduresCounts = $proceduresCounts[0]->proceduresCounts;

            $functionsCounts = DB::select('SELECT count(TYPE) AS functionsCounts FROM mysql.proc WHERE  TYPE="FUNCTION" AND db = ?', [$database]);
            $functionsCounts = $functionsCounts[0]->functionsCounts;


            $init_command = PHP_EOL.'-- '.$database.' Database Backup Generated time = '.YmdTodmYPmDay(\Carbon\Carbon::now()). PHP_EOL.PHP_EOL.PHP_EOL.
                            '-- =============Objects Counting================= '.PHP_EOL.PHP_EOL.
                            '-- Total Tables + Views = '.$tableViewsCounts.PHP_EOL.
                            '-- Total Tables = '.$tablesCount.PHP_EOL.
                            '-- Total Views = '.$viewsCounts.PHP_EOL.PHP_EOL.
                            '-- Total Procedures = '.$proceduresCounts.PHP_EOL.
                            '-- Total Functions = '.$functionsCounts.PHP_EOL.
                            PHP_EOL.PHP_EOL.
                            'SET FOREIGN_KEY_CHECKS=0; '. PHP_EOL.
                            'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";'. PHP_EOL.
                            'START TRANSACTION;'. PHP_EOL.
                            'SET time_zone = "+06:00";'.PHP_EOL.
                            'drop database if exists '.$database.';'. PHP_EOL.
                            'CREATE DATABASE IF NOT EXISTS '.$database.' DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;'. PHP_EOL.
                            'use '.$database.';'.PHP_EOL;

            $data = file_get_contents($dir);

            $append_command = PHP_EOL.'SET FOREIGN_KEY_CHECKS=1;'.PHP_EOL.'COMMIT;'.PHP_EOL;
            // dd($data);
            file_put_contents ( $dir , $init_command.$data.$append_command);


            return response()->download($dir);
        } catch (\Throwable $th) {
        }
    }

    public function dbBackupDelete()
    {
        try {
            \unlink('server_db_backup.sql');
        } catch (\Throwable $th) {
        }
    }


    // ======================== backup ==============================
    // ======================== backup ==============================



}
