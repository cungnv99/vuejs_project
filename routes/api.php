<?php
use App\Http\Controllers\Api\EmployeeDataController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\DepartmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/countries', [EmployeeDataController::class, 'countries']);
Route::get('/employees/{country}/states', [EmployeeDataController::class, 'states']);
Route::get('/employees/{state}/cities', [EmployeeDataController::class, 'cities']);
Route::get('/employees/departments', [EmployeeDataController::class, 'departments']);

Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees', [EmployeeController::class, 'index']);
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);
Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

// Route::apiResource('employees', EmployeeController::class);

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{country}', [CountryController::class, 'show']);
Route::put('/countries/{country}', [CountryController::class, 'update']);
Route::post('/countries', [CountryController::class, 'store']);
Route::delete('/countries/{country}', [CountryController::class, 'destroy']);


Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{state}', [StateController::class, 'show']);
Route::put('/states/{state}', [StateController::class, 'update']);
Route::post('/states', [StateController::class, 'store']);
Route::delete('/states/{state}', [StateController::class, 'destroy']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{city}', [CityController::class, 'show']);
Route::put('/cities/{city}', [CityController::class, 'update']);
Route::post('/cities', [CityController::class, 'store']);
Route::delete('/cities/{city}', [CityController::class, 'destroy']);

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/{department}', [DepartmentController::class, 'show']);
Route::put('/departments/{department}', [DepartmentController::class, 'update']);
Route::post('/departments', [DepartmentController::class, 'store']);
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);
