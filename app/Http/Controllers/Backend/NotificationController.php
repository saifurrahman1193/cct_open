<?php
namespace App\Http\Controllers\Backend;
use App\Uom;

use Validator;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class NotificationController extends Controller
{
    public function getAdminNotifications()
    {
        $data = Cache::rememberForever('getAdminNotifications', function () {
            return DB::table('notifications_admin')->where('read_at', null)->get();
        });

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function setAdminNotificationsReadAt($notificationId)
    {
        DB::table('notifications_admin')->where('notificationId', $notificationId)->where('read_at', null)->update([
            'read_at' => now()
        ]);

        cacheRemove();

        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



}
