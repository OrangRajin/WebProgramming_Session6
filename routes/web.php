<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test-koneksi-database', function() {
	$server = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "myschool_app";

$conf = mysqli_connect($server, $db_username, $db_password, $database);

if(mysqli_connect_errno()){
    throw new exception ("My SQL connection error" . mysqli_connect_error());
}else{
    echo '<h1> Connection Succesful</h1>'; 
}
});

Route::get('/', function () {
    return view('Home');
});

// Route::get('/dosen', function(){
//     $nama = 'Budi Pekerti';
//     $KodeDosen = 'D123';
//     $MataKuliah = 'Web Programming';
//     return view('dosen', compact('nama', 'KodeDosen', 'MataKuliah'));
// });

Route::get('/dosen', [TeacherController::class, 'index']);

Route::view('/about', 'about');