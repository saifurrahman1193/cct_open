<?php

use Illuminate\Http\Request;

Route::get('getFingerprint/{userId}', 'Backend\DeviceController@getFingerprint')->name('getFingerprint');
// Route::get('setFingerprint', 'DeviceController@setFingerprint')->name('setFingerprint');



Route::group([

    // 'middleware' => 'api',
    'prefix' => 'auth',

// ], function ($router) {
], function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('resetPassword', 'AuthController@resetPassword')->name('resetPassword');
    Route::post('dynamicChangepasswordFromEncryption', 'AuthController@dynamicChangepasswordFromEncryption')->name('dynamicChangepasswordFromEncryption');


    Route::post('loginAdmin', 'AuthController@loginAdmin')->name('loginAdmin');
    Route::get('getCurrentUserRoles', 'AuthController@getCurrentUserRoles')->name('getCurrentUserRoles');
    Route::get('getCurrentUserModules', 'AuthController@getCurrentUserModules')->name('getCurrentUserModules');

    Route::post('logout', 'AuthController@logout')->name('api.logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('getUserWithToken', 'AuthController@getUserWithToken');
    Route::post('meAdmin', 'AuthController@meAdmin');
    Route::post('meAdminWithUserModules', 'AuthController@meAdminWithUserModules');
    Route::post('payload', 'AuthController@payload');
    Route::post('/changePassword', 'AuthController@changePassword')->name('changePassword');
});



// super admin
Route::group([

    'middleware' => 'auth:api',
    'namespace' => 'Backend'

], function () {

    // users
    Route::get('getUsers', 'SuperAdminController@getUsers')->name('getUsers');
    Route::post('getUsersView', 'SuperAdminController@getUsersView')->name('getUsersView');
    Route::post('getUsersView_p', 'SuperAdminController@getUsersView_p')->name('getUsersView_p');
    Route::get('getUsersWithRoles', 'SuperAdminController@getUsersWithRoles')->name('getUsersWithRoles');

    Route::get('getUser/{userId}', 'SuperAdminController@getUser')->name('getUser');
    Route::post('addUser', 'SuperAdminController@addUser')->name('addUser');
    Route::post('editUser', 'SuperAdminController@editUser')->name('editUser');
    Route::post('deleteUser/{userId}', 'SuperAdminController@deleteUser')->name('deleteUser');

    Route::post('userFilesUploadPost', 'SuperAdminController@userFilesUploadPost');
    Route::post('getUserFiles', 'SuperAdminController@getUserFiles');
    Route::post('deleteUserFile', 'SuperAdminController@deleteUserFile');



    // block list
    Route::post('getBlocklist_p', 'SuperAdminController@getBlocklist_p')->name('getBlocklist_p');
    Route::post('getBlocklistHistory_p', 'SuperAdminController@getBlocklistHistory_p')->name('getBlocklistHistory_p');


    // user device
    Route::get('getUserDevices', 'SuperAdminController@getUserDevices')->name('getUserDevices');

    // roles
    Route::get('getRoles', 'SuperAdminController@getRoles')->name('getRoles');
    Route::get('getRole/{roleId}', 'SuperAdminController@getRole')->name('getRole');
    Route::post('addRole', 'SuperAdminController@addRole')->name('addRole');
    Route::post('editRole', 'SuperAdminController@editRole')->name('editRole');
    Route::post('deleteRole/{roleId}', 'SuperAdminController@deleteRole')->name('deleteRole');

    // modules
    Route::get('/getModules', 'SuperAdminController@getModules')->name('getModules');
    Route::get('/getModule/{moduleId}', 'SuperAdminController@getModule')->name('getModule');
    Route::get('/getRoleModules', 'SuperAdminController@getRoleModules')->name('getRoleModules');

    // backups
    Route::post('storageBackup', 'SuperAdminController@storageBackup')->name('storageBackup');
    Route::post('storageBackupDelete', 'SuperAdminController@storageBackupDelete')->name('storageBackupDelete');
    Route::post('serverDBBackup', 'SuperAdminController@serverDBBackup')->name('serverDBBackup');
    Route::post('dbBackupDelete', 'SuperAdminController@dbBackupDelete')->name('dbBackupDelete');

    // pdf downloads
    Route::get('RFIDCardDownload', 'PDFController@RFIDCardDownload');
});






// chat
Route::group([

    'middleware' => 'auth:api',
    'namespace' => 'Backend'

], function () {
    Route::get('getContacts', 'ChatController@getContacts')->name('getContacts');
    Route::get('getAdminContacts', 'ChatController@getAdminContacts')->name('getAdminContacts');
    Route::get('getMessages', 'ChatController@getMessages')->name('getMessages');
    Route::get('getAContactMessages/{userId1}/{userId2}', 'ChatController@getAContactMessages')->name('getAContactMessages');
    Route::post('sendMessage', 'ChatController@sendMessage')->name('sendMessage');


});
Route::get('getMongodbMessages', 'Backend\ChatController@getMongodbMessages');





Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Frontend'
], function () {
    Route::post('/profileUpdate', 'HomeController@profileUpdate')->name('profileUpdate');

});


// Devices

Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Backend'
], function () {

    Route::get('/getDevices', 'DeviceController@getDevices');
    Route::get('/getDevice/{deviceId}', 'DeviceController@getDevice');
    Route::post('/addDevice', 'DeviceController@addDevice');
    Route::post('/editDevice', 'DeviceController@editDevice');
    Route::post('/deleteDevice/{deviceId}', 'DeviceController@deleteDevice');

    Route::post('/checkDeviceConnectivity', 'DeviceController@checkDeviceConnectivity');
    Route::post('/syncDevice', 'DeviceController@syncDevice');
    Route::post('/deviceRestart', 'DeviceController@deviceRestart');
    Route::post('/resetDevice', 'DeviceController@resetDevice');

    Route::get('/getDeviceRoles', 'DeviceController@getDeviceRoles');


    Route::post('/clearAdmin', 'DeviceController@clearAdmin');
    Route::post('/setDeviceTimeNow', 'DeviceController@setDeviceTimeNow');

    Route::post('/setUserAccess', 'DeviceController@setUserAccess');

});

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/RatsConnect/{ip}/{port}', 'DeviceController@RatsConnect');
    Route::get('/getFP', 'DeviceController@getFP');
    Route::get('/getRFIDCard', 'DeviceController@getRFIDCard');

});

// Department
// Department
Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Backend'
], function () {

    Route::get('/getDepartments', 'DepartmentController@getDepartments');
    Route::get('/getDepartment/{departmentId}', 'DepartmentController@getDepartment');
    Route::post('/addDepartment', 'DepartmentController@addDepartment');
    Route::post('/editDepartment', 'DepartmentController@editDepartment');
    Route::post('/deleteDepartment/{departmentId}', 'DepartmentController@deleteDepartment');
});

// Card Types
// Card Types
Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Backend'
], function () {

    Route::get('/getCardtypes', 'CardtypeController@getCardtypes');
    Route::get('/getCardtype/{cardtypeId}', 'CardtypeController@getCardtype');
    Route::post('/addCardtype', 'CardtypeController@addCardtype');
    Route::post('/editCardtype', 'CardtypeController@editCardtype');
    Route::post('/deleteCardtype/{cardtypeId}', 'CardtypeController@deleteCardtype');
});


// Designation
// Designation
Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Backend'
], function () {

    Route::get('/getDesignations', 'DesignationController@getDesignations');
    Route::get('/getDesignation/{designationId}', 'DesignationController@getDesignation');
    Route::post('/addDesignation', 'DesignationController@addDesignation');
    Route::post('/editDesignation', 'DesignationController@editDesignation');
    Route::post('/deleteDesignation/{designationId}', 'DesignationController@deleteDesignation');
});


// Employment Types
// Employment Types
Route::group([
    'middleware' => 'auth:api',
    'namespace' => 'Backend'
], function () {

    Route::get('/getEmploymentTypes', 'EmploymentTypesController@getEmploymentTypes');
    Route::get('/getEmploymentType/{employmentTypeId}', 'EmploymentTypesController@getEmploymentType');
    Route::post('/addEmploymentType', 'EmploymentTypesController@addEmploymentType');
    Route::post('/editEmploymentType', 'EmploymentTypesController@editEmploymentType');
    Route::post('/deleteEmploymentType/{employmentTypeId}', 'EmploymentTypesController@deleteEmploymentType');
});




// Gender

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getGenders', 'GenderController@getGenders')->name('getGenders');
    Route::get('/getGender/{genderId}', 'GenderController@getGender')->name('getGender');
});




// uom

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getUoms', 'UomController@getUoms')->name('getUoms');
    Route::get('/getUom/{uomId}', 'UomController@getUom')->name('getUom');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('/addUom', 'UomController@addUom')->name('addUom');
        Route::post('/editUom', 'UomController@editUom')->name('editUom');
        Route::post('/deleteUom/{uomId}', 'UomController@deleteUom')->name('deleteUom');
    });
});


// shiftings

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getShiftings', 'ShiftingController@getShiftings')->name('getShiftings');
    Route::get('/getShifting/{shiftingId}', 'ShiftingController@getShifting')->name('getShifting');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('/addShifting', 'ShiftingController@addShifting')->name('addShifting');
        Route::post('/editShifting', 'ShiftingController@editShifting')->name('editShifting');
        Route::post('/deleteShifting/{shiftingId}', 'ShiftingController@deleteShifting')->name('deleteShifting');
    });
});


// areas

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getAreas', 'AreaController@getAreas')->name('getAreas');
    Route::get('/getArea/{areaId}', 'AreaController@getArea')->name('getArea');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('/addArea', 'AreaController@addArea')->name('addArea');
        Route::post('/editArea', 'AreaController@editArea')->name('editArea');
        Route::post('/deleteArea/{areaId}', 'AreaController@deleteArea')->name('deleteArea');
    });
});



// reports related

Route::group([
    'namespace' => 'Backend'
], function () {

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('/getAttendacesGroupBy', 'ReportController@getAttendacesGroupBy');
        Route::get('/getAttendanceYearMonths', 'ReportController@getAttendanceYearMonths');

        // Report Excel
        Route::get('/attendanceReportExcelReportDownload', 'ReportController@attendanceReportExcelReportDownload');

    });
});



// dashboard
Route::group([
    'namespace' => 'Backend'
], function () {

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('/getDashboardData', 'DashboardController@getDashboardData');

    });
});


// =============================front end==================================
// =============================front end==================================
Route::group([
    // 'middleware' => 'auth:api',
    'namespace' => 'Frontend'
], function () {


    Route::get('/getCompanyInfo', 'HomeController@getCompanyInfo')->name('getCompanyInfo');
    Route::post('/updateCompanyInfo', 'HomeController@updateCompanyInfo')->name('updateCompanyInfo');

    Route::get('/getCardsettings', 'HomeController@getCardsettings');
    Route::post('/updateCardsettings', 'HomeController@updateCardsettings');


    // Route::get('/getAreas', 'HomeController@getAreas')->name('getAreas');

});



// in admin frontend group -> pages

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getPages', 'PageController@getPages')->name('getPages');
    Route::get('/getPage/{pageId}', 'PageController@getPage')->name('getPage');
    Route::get('/getPageWithSlug/{pageSlug}', 'PageController@getPageWithSlug')->name('getPageWithSlug');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('/editPage', 'PageController@editPage')->name('editPage');
    });
});


// in admin frontend group -> seo

Route::group([
    'namespace' => 'Backend'
], function () {
    Route::get('/getSeoDefault', 'SEOController@getSeoDefault')->name('getSeoDefault');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('/editSeoDefault', 'SEOController@editSeoDefault')->name('editSeoDefault');
    });
});







Route::post('cacheRemove', 'Backend\CacheController@cacheRemove');





// notifications
Route::group([
    'namespace' => 'Backend'
], function () {
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('/getAdminNotifications', 'NotificationController@getAdminNotifications');
        Route::post('/setAdminNotificationsReadAt/{notificationId}', 'NotificationController@setAdminNotificationsReadAt');
    });
});







// test
// test
// test
// Route::get('getToday', function(){
//     return  date('Y-m-d', strtotime('last day of '.getMonthLongLowerCase(10).' '.'2020'));
// });
// trait test
Route::get('getTestTrait', 'Backend\TestController@getTestTrait');
Route::get('testFunction', 'Backend\TestController@testFunction');

// image caching
Route::get('getImage', 'Backend\CacheController@getImage')->name('getImage');
Route::get('testOneToOneRelationsShips', 'Backend\TestController@testOneToOneRelationsShips');
Route::get('testOneToManyRelationsShips', 'Backend\TestController@testOneToManyRelationsShips');
Route::get('testManyToManyRelationsShips', 'Backend\TestController@testManyToManyRelationsShips');

Route::get('testAccessor', 'Backend\TestController@testAccessor');



