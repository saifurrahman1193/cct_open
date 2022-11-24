<template>
    <v-app  >

        <subheading></subheading>

        <v-sheet
                class=" ma-2"
                elevation="0"
                 color="grey lighten-5"

            >


            <v-content>
                <v-card elevation="2" >
                    <v-card-title primary-title >
                        <v-spacer></v-spacer>
                        Attendance Report
                        <v-spacer></v-spacer>

                    </v-card-title>

                    <v-card-text>

                        <v-tabs
                            color="deep-purple accent-4"
                            show-arrows
                            >

                            <v-tab @click="tabChage()">Today all employees attendance report</v-tab>
                            <v-tab @click="tabChage()">Monthly employee wise attendance report</v-tab>
                            <v-tab @click="tabChage()">Single employee's date range wise attendance report</v-tab>

                            <v-tab-item>
                                <v-container fluid>
                                    <v-row>
                                        <v-btn color="orange" outlined  class="mb-2 ml-5" @click="get_attendances_today()" v-if="!get_attendances_today_genereting">Generate</v-btn>
                                        <v-btn color="orange"  class="mb-2 ml-5" outlined v-if="get_attendances_today_genereting">
                                            Generating.. &nbsp;
                                            <v-progress-circular
                                                indeterminate
                                                color="orange"
                                                size="20"
                                            ></v-progress-circular>
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            class="mx-0 mr-2"
                                            target="_blank"
                                            :href="'/api/attendanceReportExcelReportDownload?token='+token+'&today=1'"
                                        >
                                            <v-img src="/uploads/system/excel-50.jpg" max-width="20" class="mr-2"></v-img>
                                            Excel Export
                                        </v-btn>
                                    </v-row>
                                </v-container>
                            </v-tab-item>


                            <v-tab-item>
                                <v-container fluid>
                                    <v-row>
                                        <v-col    md="6" sm="12" xs="12">
                                            <v-autocomplete
                                                label="Employee"
                                                :items="users"
                                                item-text="deviceUserName"
                                                item-value="id"
                                                dense
                                                v-model="monthlyReportUserId"
                                                clearable
                                            >

                                                <template v-slot:item="data" >
                                                        <v-list-item-avatar>
                                                            <img :src="data.item.photoPath" v-if="data.item.photoPath">
                                                        </v-list-item-avatar>
                                                        <v-list-item-content>
                                                            <v-list-item-title v-html="data.item.deviceUserName"></v-list-item-title>
                                                            <v-list-item-subtitle>{{ string_to_normalbehaviour((data.item.email||'') +', ' + (data.item.department||'') +', ' +(data.item.phone || '') +', ')}}</v-list-item-subtitle>
                                                        </v-list-item-content>
                                                </template>
                                            </v-autocomplete>
                                        </v-col>


                                        <v-col   md="3" sm="12" xs="12">
                                            <v-select
                                                label="Year"
                                                :items="monthlyReportYears"
                                                dense
                                                v-model="monthlyReportYear"
                                                clearable
                                            ></v-select>
                                        </v-col>
                                        <v-col   md="3" sm="12" xs="12">
                                            <v-autocomplete
                                                label="Month"
                                                :items="monthlyReportMonths"
                                                item-text="attendanceMonth"
                                                item-value="attendanceMonthId"
                                                dense
                                                v-model="monthlyReportMonthId"
                                                clearable

                                            >
                                            </v-autocomplete>
                                        </v-col>


                                    </v-row>
                                    <v-row v-if="monthlyReportUserId && monthlyReportYear && monthlyReportMonthId">
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            class="mx-0 mr-2"
                                            target="_blank"
                                            :href="'/api/attendanceReportExcelReportDownload?token='+token+'&employee_year_month=1&userId='+monthlyReportUserId+'&year='+monthlyReportYear+'&monthId='+monthlyReportMonthId"
                                        >
                                            <v-img src="/uploads/system/excel-50.jpg" max-width="20" class="mr-2"></v-img>
                                            Excel Export
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                    </v-row>

                                </v-container>
                            </v-tab-item>


                            <v-tab-item>
                                <v-container fluid>
                                    <v-row>
                                        <v-col    md="4" sm="12" xs="12">
                                            <v-autocomplete
                                                label="Employee"
                                                :items="users"
                                                item-text="deviceUserName"
                                                item-value="id"
                                                dense
                                                v-model="filter3_userId"
                                                clearable
                                            >
                                                <template v-slot:item="data" >
                                                        <v-list-item-avatar>
                                                            <img :src="data.item.photoPath" v-if="data.item.photoPath">
                                                        </v-list-item-avatar>
                                                        <v-list-item-content>
                                                            <v-list-item-title v-html="data.item.deviceUserName"></v-list-item-title>
                                                            <v-list-item-subtitle>{{ string_to_normalbehaviour((data.item.email||'') +', ' + (data.item.department||'') +', ' +(data.item.phone || '') +', ')}}</v-list-item-subtitle>
                                                        </v-list-item-content>
                                                </template>
                                            </v-autocomplete>
                                        </v-col>

                                        <v-col md="4" sm="6" xs="12">
                                            <v-menu
                                                v-model="startDateMenu"
                                                transition="scale-transition"
                                                offset-y
                                                max-width="290px"
                                                min-width="290px"
                                                :close-on-content-click="false"
                                                clearable
                                            >
                                                <template v-slot:activator="{ on }">
                                                    <v-text-field
                                                        label="Start Date"
                                                        append-icon="event"
                                                        v-model="formattedStartDate"
                                                        v-on="on"
                                                    ></v-text-field>
                                                </template>

                                                <v-date-picker
                                                v-model="startDate"
                                                no-title
                                                dense
                                                >
                                                    <v-spacer></v-spacer>
                                                    <v-btn @click="startDateMenu=false" icon>Ok</v-btn>
                                                </v-date-picker>
                                            </v-menu>
                                        </v-col>

                                        <v-col md="4" sm="6" xs="12" >
                                            <v-menu
                                                v-model="endDateMenu"
                                                transition="scale-transition"
                                                offset-y
                                                max-width="290px"
                                                min-width="290px"
                                                :close-on-content-click="false"
                                                clearable
                                            >
                                                <template v-slot:activator="{ on }">
                                                    <v-text-field
                                                        label="End Date"
                                                        append-icon="event"
                                                        v-model="formattedEndDate"
                                                        v-on="on"
                                                    ></v-text-field>
                                                </template>

                                                <v-date-picker
                                                v-model="endDate"
                                                no-title
                                                dense
                                                >
                                                    <v-spacer></v-spacer>
                                                    <v-btn @click="endDateMenu=false" icon>Ok</v-btn>
                                                </v-date-picker>
                                            </v-menu>
                                        </v-col>


                                    </v-row>

                                    <v-row >

                                        <v-btn color="orange" outlined  class="mb-2 ml-5" @click="single_emp_date_range_wise_rep_generate()" :disabled="!(filter3_userId && startDate)" v-if="!get_attendances_today_genereting_f3">Generate</v-btn>
                                        <v-btn color="orange"  class="mb-2 ml-5" outlined v-else>
                                            Generating.. &nbsp;
                                            <v-progress-circular
                                                indeterminate
                                                color="orange"
                                                size="20"
                                            ></v-progress-circular>
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            class="mx-0 mr-2"
                                            target="_blank"
                                            :href="'/api/attendanceReportExcelReportDownload?token='+token+'&employee_date_range=1&userId='+filter3_userId+'&startDate='+startDate+'&endDate='+endDate"
                                        >
                                            <v-img src="/uploads/system/excel-50.jpg" max-width="20" class="mr-2"></v-img>
                                            Excel Export
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                    </v-row>


                                </v-container>
                            </v-tab-item>



                        </v-tabs>


                        <v-row>
                            <v-spacer></v-spacer>
                            <v-text-field
                                v-model="search"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                            ></v-text-field>
                        </v-row>

                        <v-data-table
                        :headers="headers"
                        :items="attendance_table_data"
                        :search="search"
                        >

                            <template v-slot:[`item.out_time_short`]="{ item }">
                                <v-chip color="pink" dark
                                    v-if="item.in_time_short==item.out_time_short"
                                >Didn't Punch</v-chip>
                                <span v-else>{{ item.out_time_short }}</span>
                            </template>

                            <template v-slot:[`item.photoPath`]="{ item }">
                                <v-img
                                    :src="item.photoPath || '/uploads/no_image.png'"
                                    lazy-src="/uploads/loader.gif"
                                    max-height="40"
                                    max-width="40"
                                    aspect-ratio contain
                                    @click="imageZoom(item.photoPath || '/uploads/no_image.png')"
                                    class="image-hover-cursor-change"
                                ></v-img>
                            </template>

                        </v-data-table>


                    </v-card-text>
                </v-card>
            </v-content>

        </v-sheet>

        <v-spacer></v-spacer>
        <footer_b></footer_b>

        <zoom_modal
            :zoomDialog="zoomDialog"
            :zoomPath="zoomPath"
            @cancelZoom="cancelZoom()"
        ></zoom_modal>


    </v-app>
</template>


<script>
    import subheading from '../subheading.vue'

    // zoom
    import zoom_modal from './../../../frontend/components/zoom/zoom.vue'
    import zoom_mixin from './../../../frontend/components/zoom/zoomMixins.vue'

    import lists from '../lists.vue'
    import footer_b from '../footer.vue'

    export default {
        components:{
            subheading, zoom_modal, lists, footer_b
        },
        mounted() {
            this.getAttendacesGroupBy()
            this.getAttendanceYearMonths()
            this.getUsers();
        },
        mixins: [ zoom_mixin ],
        data() {
            return {
                token: localStorage.getItem('token'),
                search: '',

                headers: [
                    { text: 'User ID', value: 'userId' },
                    { text: 'Photo', value: 'photoPath' },
                    { text: 'Name', value: 'deviceUserName' },
                    { text: 'Department', value: 'department' },
                    { text: 'Check In', value: 'in_time_short' },
                    { text: 'Check out', value: 'out_time_short' },
                    // { text: 'Late Min', value: 'lateMin' },
                    // { text: 'Early Min', value: 'earlyMin' },
                    { text: 'Date', value: 'attendanceDateDMY' },
                ],


                attendances: [],
                attendance_table_data: [],

                users: [],


                // get_attendances_today
                get_attendances_today_genereting : false,


                yearsmonths:[],

                // monthlyReport
                monthlyReportUserId:'',
                monthlyReportYear:'',
                monthlyReportMonthId:'',

                // single employee date range wise report
                filter3_userId:'',
                startDate:'',
                startDateMenu:false,
                endDate:'',
                endDateMenu:false,
                get_attendances_today_genereting_f3 : false
            }
        },
        methods: {

            tabChage(){
                this.attendance_table_data = []

                // monthlyReport
                this.monthlyReportUserId=''
                this.monthlyReportYear=''
                this.monthlyReportMonthId=''

                // single employee date range wise report
                this.filter3_userId = ''
                this.startDate = ''
                this.endDate = ''

            },

            getAttendacesGroupBy(params=''){
                var _this = this;
                axios.get('/api/getAttendacesGroupBy'+'?token='+ _this.token+params)
                .then(function (response) {
                    _this.attendances = _this.objectToArray(response.data.data);
                    // _this.get_attendances_today()
                })
                .catch(function (error) {
                    _this.attendances = []
                    // _this.get_attendances_today()
                })
            },

            get_attendances_today(){
                this.get_attendances_today_genereting = true;

                this.attendances_today = []
                var todayDateYmd = this.getTodayDateYmd()


                this.attendance_table_data = this.attendances.filter((attendance) => {
                    // console.log(todayDateYmd)
                    // console.log(attendance.attendanceDate)

                    return attendance.attendanceDate == todayDateYmd;
                });

                this.get_attendances_today_genereting = false;
            },

            getAttendanceYearMonths(){
                var _this = this;
                axios.get('/api/getAttendanceYearMonths'+'?token='+ _this.token)
                .then(function (response) {
                    _this.yearsmonths = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getUsers(){
                var _this = this;
                axios.post('/api/getUsersView'+'?token='+ _this.token)
                .then(function (response) {
                    _this.users = response.data.data;
                })
                .catch(function (error) {
                })
            },

            monthlyReportGenerate(){
                if(this.monthlyReportUserId && this.monthlyReportYear && this.monthlyReportMonthId){
                    this.attendance_table_data = this.attendances.filter((attendance) => {
                        return (attendance.userId == this.monthlyReportUserId) && (attendance.attendanceYear == this.monthlyReportYear) && (attendance.attendanceMonth == this.monthlyReportMonthId);
                    });
                }
                else{
                    this.attendance_table_data = []
                }
            },

            single_emp_date_range_wise_rep_generate(){
                this.get_attendances_today_genereting_f3 = true

                if(this.filter3_userId && this.startDate && !this.endDate){
                    this.attendance_table_data = this.attendances.filter((attendance) => {
                        return (attendance.userId == this.filter3_userId) && this.checkDate1IsGEThanDate2(attendance.attendanceDate, this.startDate) ;
                    });
                }
                else if(this.filter3_userId && this.startDate && this.endDate){
                    this.attendance_table_data = this.attendances.filter((attendance) => {
                        return (attendance.userId == this.filter3_userId) && this.dateToCheckIfInside2Dates(this.startDate, this.endDate, attendance.attendanceDate);
                    });
                }

                this.get_attendances_today_genereting_f3 = false
            }

        },
        computed: {

            monthlyReportYears: function(){
                var years = [];
                if (this.monthlyReportUserId) {
                    this.yearsmonths.forEach(yearsmonth => {
                        if (yearsmonth.userId==this.monthlyReportUserId)
                        {
                            years.push(yearsmonth.attendanceYear)
                        }
                    });
                }
                return years;
            },

            monthlyReportMonths: function(){
                this.monthlyReportMonthId = ''
                if (this.monthlyReportYear>0)
                {
                    return this.yearsmonths.filter(yearsmonth => {
                        return this.monthlyReportYear == yearsmonth.attendanceYear
                    });
                }
                else{
                    return [];
                }
            },

            formattedStartDate: {
                get(){
                    return this.formatDate(this.startDate);
                },
                set(val){
                    this.startDate = this.formatDate(val);
                }
            },
            formattedEndDate: {
                get(){
                    return this.formatDate(this.endDate);
                },
                set(val){
                    this.endDate = this.formatDate(val);
                }
            },

        },
        watch: {
            monthlyReportUserId: function(){
                this.monthlyReportYear = ''
                this.monthlyReportMonthId = ''
                this.monthlyReportGenerate()
            },

            monthlyReportYear: function(){
                this.monthlyReportGenerate()
            },

            monthlyReportMonthId: function(){
                this.monthlyReportGenerate()
            },

            // startDate: function (newValue) {
            //     if (newValue) {
            //         this.single_emp_date_range_wise_rep_generate();
            //     }
            // },

            // endDate: function (newValue) {
            //     if (newValue) {
            //         this.single_emp_date_range_wise_rep_generate();
            //     }
            // },

        },


    }
</script>

