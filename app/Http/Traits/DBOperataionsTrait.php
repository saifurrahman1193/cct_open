<?php

    use Illuminate\Support\Facades\DB;
    namespace App\Http\Traits;

    trait DBOperataionsTrait
    {
        public function login()
        {
            $response = $this->post('/api/auth/login',[
                'email' => 'admin@laravelvuecrud.com',
                'password' => '123456'
            ]);

            // dd($response);
            // dd($response['access_token']);
            $token = $response['access_token'];
            $response->assertStatus(200);
            return $token;
        }

        public function loginData()
        {
            $data = [
                'email' => 'admin@laravelvuecrud.com',
                'password' => '123456'
            ];

            return $data;
        }

        public function clearTable($tableName)
        {
            \DB::table($tableName)->delete();
        }

        public function getTableDataArray($tableName)
        {
            return \DB::table($tableName)->get()->toArray();
        }

        public function getTableDataFirst($tableName)
        {
            return \DB::table($tableName)->first();
        }


    }
