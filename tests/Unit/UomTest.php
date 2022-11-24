<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Http\Traits\DBOperataionsTrait;
// use PHPUnit\Framework\TestCase;


class UomTest extends TestCase
{
    use DBOperataionsTrait;

    // ./vendor/bin/phpunit --filter test_login
    public function test_login()
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

    /** @test */
    // ./vendor/bin/phpunit --filter test_getUoms
    // public function test_getUoms()
    // {
    //     $response = $this->get('/api/getUoms');
    //     // dd($response['data']);
    //     // if (!empty($response['data'])) {
    //     //     $response->assertStatus(200);
    //     // }
    //     // else
    //     // {
    //     //     $response->assertStatus(400);
    //     // }
    //     $response->assertStatus(200);

    // }

    // ./vendor/bin/phpunit --filter test_addUom_is_authenticated_api
    public function test_addUom_is_authenticated_api()
    {
        // $this->withoutExceptionHandling();
        $this->post('/api/addUom')->assertRedirect('/api/auth/login');
        // $this->actingAs($this->loginData());
        // $token = $this->login();
        // $this->clearTable('uom');

        // $response = $this->post('/api/addUom')->assertStatus(200);
    }

    // ./vendor/bin/phpunit --filter test_addUom_can_be_added
    public function test_addUom_can_be_added()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->post('/api/addUom?token='.$token, $this->uomData() );
        $this->assertCount(1, $this->getTableDataArray('uom'));
    }


    // ./vendor/bin/phpunit --filter test_addUom_uom_is_required
    public function test_addUom_uom_is_required()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->post('/api/addUom?token='.$token, array_merge($this->uomData(), [ 'uom' => '']));
        // $response->assertSessionHasErrors('uom');
        // dd($this->getTableDataArray('uom'));
        $this->assertCount(0, $this->getTableDataArray('uom'));
    }



    // ./vendor/bin/phpunit --filter test_addUom_uom_is_string
    public function test_addUom_uom_is_string()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->post('/api/addUom?token='.$token, array_merge($this->uomData(), [ 'uom' => 12]));
        $this->assertCount(0, $this->getTableDataArray('uom'));
    }

    // ./vendor/bin/phpunit --filter test_editUom_is_authenticated_api
    public function test_editUom_is_authenticated_api()
    {
        $this->post('/api/editUom')->assertRedirect('/api/auth/login');
    }



    // ./vendor/bin/phpunit --filter test_editUom_can_be_updated
    public function test_editUom_can_be_updated()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->test_addUom_can_be_added();
        $response = $this->post('/api/editUom?token='.$token, array_merge($this->uomData(), [ 'uom' => 'kg updated', 'uomId' => $this->getTableDataFirst('uom')->uomId]) );
        $this->assertEquals('kg updated', $this->getTableDataFirst('uom')->uom);
    }


    // ./vendor/bin/phpunit --filter test_editUom_uom_is_required
    public function test_editUom_uom_is_required()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->test_addUom_can_be_added();
        $response = $this->post('/api/editUom?token='.$token, array_merge($this->uomData(), [ 'uom' => '', 'uomId' => $this->getTableDataFirst('uom')->uomId]) );
        $this->assertNotEquals('', $this->getTableDataFirst('uom')->uom);
    }


    // ./vendor/bin/phpunit --filter test_deleteUom_is_authenticated_api
    public function test_deleteUom_is_authenticated_api()
    {
        $this->post('/api/deleteUom/1')->assertRedirect('/api/auth/login');
    }


    // ./vendor/bin/phpunit --filter test_deleteUom_can_be_deleted
    public function test_deleteUom_can_be_deleted()
    {
        $this->withoutExceptionHandling();
        $token = $this->login();
        $this->clearTable('uom');

        $response = $this->test_addUom_can_be_added();
        $response = $this->post('/api/deleteUom/'.(int) $this->getTableDataFirst('uom')->uomId.'?token='.$token );
        $this->assertCount(0, $this->getTableDataArray('uom'));
    }



    private function uomData()
    {
        return [
            'uom' => 'kg'
        ];
    }







}
