<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class AttendanceReportExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    protected $today = 0;
    protected $employee_year_month = 0;
    protected $employee_date_range = 0;
    protected $userId = 0;
    protected $year = 0;
    protected $monthId = 0;
    protected $startDate = '';
    protected $endDate = '';

    function __construct($today=0, $employee_year_month=0, $employee_date_range=0, $userId=0, $year=0, $monthId=0, $startDate='', $endDate='') {
        $this->today = $today;
        $this->employee_year_month = $employee_year_month;
        $this->employee_date_range = $employee_date_range;
        $this->userId = $userId;
        $this->year = $year;
        $this->monthId = $monthId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $attendances = DB::table('attendances_group_by_view')
        // ->select('userId', 'name', 'department', 'in_time_short', 'out_time_short', 'attendanceDateDMY' )
        ->get();


        if ($this->today==1)
        {
            $attendances = $attendances->where('attendanceDate', getToday());
        }


        if ( $this->employee_year_month==1 && $this->userId>0 && $this->year>0 && $this->monthId>0)
        {
            $attendances = $attendances->where('userId', $this->userId)->where('attendanceYear', $this->year)->where('attendanceMonth', $this->monthId);
        }

        if ( $this->employee_date_range==1 )
        {
            $attendances = $attendances->where('userId', $this->userId)->where('attendanceDate','>=', $this->startDate)->where('attendanceDate','<=', $this->endDate);
        }

        // dd($attendances);

        $attendances = $attendances->map(function ($item, $key) {
            return [
                'userId' => $item->userId,
                'name' => $item->deviceUserName,
                'department' => $item->department,
                'in_time_short' => $item->in_time_short,
                'out_time_short' => ($item->in_time_short==$item->out_time_short) ? '' : $item->out_time_short,
                // 'lateMin' => $item->lateMin,
                // 'earlyMin' => $item->earlyMin,
                'attendanceDateDMY' => $item->attendanceDateDMY,
            ];
        });
        // dd($attendances);

        return $attendances;
    }


    public function headings(): array
    {
        return [
	           'User Id'  ,
               'Name',
               'Department',
               'In-Time',
               'Out-Time',
            //    'Late Min',
            //    'Early Min',
               'Date',

        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:N1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);
            },
        ];
    }


}
