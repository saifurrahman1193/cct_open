<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Exports\AttendanceReportExport;
use Excel;
use Illuminate\Support\Facades\Cache;


class ReportController extends Controller
{

    public function getAttendacesGroupBy()
    {
        $data = Cache::rememberForever('attendances_group_by_view',  function () {
            return DB::table('attendances_group_by_view')->get();
        });

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getAttendanceYearMonths()
    {
        $data = Cache::rememberForever('attendance_years_months_view',  function () {
            return DB::table('attendance_years_months_view')->get();
        });

        $response = ["status" => "Success", "data"=> $data];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function attendanceReportExcelReportDownload(Request $request)
    {

        if (isset($request->today) && $request->today==1)
        {
            return Excel::download(new AttendanceReportExport(1), 'Attendance_Report_Export_Today.xlsx');
        }

        if (isset($request->employee_year_month) && $request->employee_year_month==1 && isset($request->userId) && $request->userId!= null && isset($request->year) && $request->year!= null && isset($request->monthId) &&  $request->monthId!=null)
        {
            return Excel::download(new AttendanceReportExport(null, $request->employee_year_month, null,$request->userId,$request->year, $request->monthId ), 'Att_Rep_u-'.$request->userId.'_y-'.$request->year.'_m-'.$request->monthId.'.xlsx');
        }

        if (isset($request->employee_date_range) && $request->employee_date_range==1 && isset($request->userId) && $request->userId!= null && isset($request->startDate) && $request->startDate!= null && isset($request->endDate) &&  $request->endDate!=null)
        {
            return Excel::download(new AttendanceReportExport(null, null, $request->employee_date_range, $request->userId, null, null, $request->startDate,  $request->endDate), 'Att_Rep_u-'.$request->userId.'_sd-'.$request->startDate.'_ed-'.$request->endDate.'.xlsx');
        }

    }





}
