<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');
Route::post('/usuarios/destroy{usu_id}','UsuariosController@destroy')->name('usuarios.destroy');
Route::get('/usuarios/edit/{usu_id}','UsuariosController@edit')->name('usuarios.edit');
Route::post('usuarios/update/{usu_id}','usuariosController@update')->name('usuarios.update');

Route::get('/proveedor','ProveedorController@index')->name('proveedor');
Route::get('/proveedor/create','ProveedorController@create')->name('proveedor.create');
Route::post('/proveedor/store','proveedorController@store')->name('proveedor.store');
Route::get('/proveedor/edit/{prov_id}','proveedorController@edit')->name('proveedor.edit');
Route::post('proveedor/update/{prov_id}','proveedorController@update')->name('proveedor.update');
Route::post('proveedor/destroy/{prov_id}','proveedorController@destroy')->name('proveedor.destroy');

Route::get('/producto','ProductoController@index')->name('producto');
Route::get('/producto/create','ProductoController@create')->name('producto.create');
Route::post('/producto/store','productoController@store')->name('producto.store');
Route::get('/producto/edit/{pro_id}','productoController@edit')->name('producto.edit');
Route::post('producto/update/{pro_id}','productoController@update')->name('producto.update');
Route::post('producto/destroy/{pro_id}','productoController@destroy')->name('producto.destroy');


Route::get('/cliente','ClienteController@index')->name('cliente');
Route::get('/cliente/create','ClienteController@create')->name('cliente.create');
Route::post('/cliente/store','ClienteController@store')->name('cliente.store');
Route::get('/cliente/edit/{cli_id}','ClienteController@edit')->name('cliente.edit');
Route::post('cliente/update/{cli_id}','ClienteController@update')->name('cliente.update');
Route::post('cliente/destroy/{cli_id}','ClienteController@destroy')->name('cliente.destroy'); 
 






// Route::get('/permisos','PermisosController@index')->name('permisos');
// Route::get('/permisos/create','PermisosController@create')->name('permisos.create');
// Route::post('/permisos/store','PermisosController@store')->name('permisos.store');
// Route::get('/permisos/edit/{per_id}','PermisosController@edit')->name('permisos.edit');
// Route::post('permisos/update/{per_id}','permisosController@update')->name('permisos.update');
// Route::post('permisos/destroy{per_id}','permisosController@destroy')->name('permisos.destroy');