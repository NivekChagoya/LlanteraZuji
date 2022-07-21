    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;


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

//Productos
Route::get('registroProducto','App\Http\Controllers\Productos\ProductosController@alta');
Route::post('AltaP','App\Http\Controllers\Productos\ProductosController@altap');
Route::get('verProducto','App\Http\Controllers\Productos\ProductosController@mostrarProducto');
Route::get('editarProducto/{id}','App\Http\Controllers\Productos\ProductosController@editarProducto');
Route::post('actualizarProducto','App\Http\Controllers\Productos\ProductosController@actualizarProducto');
Route::get('eliminarProducto/{id}','App\Http\Controllers\Productos\ProductosController@eliminarProducto');
//ProductoReporte
Route::get('excel-producto','App\Http\Controllers\Productos\ProductosController@exportExcel')->name('excel');
Route::get('csv-producto','App\Http\Controllers\Productos\ProductosController@exportCSV')->name('csv');
Route::get('pdf-producto','App\Http\Controllers\Productos\ProductosController@createPDF');
//Pagos
Route::get('AltaPago','App\Http\Controllers\Pagos\PagosController@altaPag');
Route::post('AltaPA','App\Http\Controllers\Pagos\PagosController@altaPa');
Route::get('verPago','App\Http\Controllers\Pagos\PagosController@mostrarPago');
//ProductoPago
Route::get('excel-pago','App\Http\Controllers\Pagos\PagosController@exportExcel')->name('excel');
Route::get('csv-pago','App\Http\Controllers\Pagos\PagosController@exportCSV')->name('csv');
Route::get('pdf-pago','App\Http\Controllers\Pagos\PagosController@createPDF');
//Usuarios
Route::get('AltaUs','App\Http\Controllers\Usuarios\UsuariosController@altaU');
Route::post('AltaUS','App\Http\Controllers\Usuarios\UsuariosController@altaUs');
Route::get('verUsuario','App\Http\Controllers\Usuarios\UsuariosController@mostrarUsuarios');
Route::get('editarUser/{id}','App\Http\Controllers\Usuarios\UsuariosController@editarUser');
Route::post('actualizarUser','App\Http\Controllers\Usuarios\UsuariosController@actualizarUser');
Route::get('eliminarUser/{id}','App\Http\Controllers\Usuarios\UsuariosController@eliminarUser');
//Vehiculos
Route::get('AltaVehiculo','App\Http\Controllers\Vehiculos\VehiculosController@altaVehiculo');
Route::post('AltaVehicle','App\Http\Controllers\Vehiculos\VehiculosController@altaVehicle');
Route::get('verVehiculo','App\Http\Controllers\Vehiculos\VehiculosController@mostrarVehiculo');
Route::get('editarVehiculo/{id}','App\Http\Controllers\Vehiculos\VehiculosController@editarVehiculo');
Route::post('actualizarVehiculo','App\Http\Controllers\Vehiculos\VehiculosController@actualizarVehiculo');
Route::get('eliminarVehiculo/{id}','App\Http\Controllers\Vehiculos\VehiculosController@eliminarVehiculo');
//Cliente
Route::get('AltaCliente','App\Http\Controllers\Login\LoginController@altaUs');
Route::post('AltaClient','App\Http\Controllers\Clientes\ClientesController@altaClient');
Route::get('verCliente','App\Http\Controllers\Clientes\ClientesController@mostrarCliente');
Route::get('editarC/{id}','App\Http\Controllers\Clientes\ClientesController@editarC');
Route::post('actualizarC','App\Http\Controllers\Clientes\ClientesController@actualizarC');
Route::get('eliminarC/{id}','App\Http\Controllers\Clientes\ClientesController@eliminarC');
//reportes Cliente
Route::get('excel','App\Http\Controllers\Clientes\ClientesController@exportExcel')->name('excel');
Route::get('csv','App\Http\Controllers\Clientes\ClientesController@exportCSV')->name('csv');
Route::get('pdf','App\Http\Controllers\Clientes\ClientesController@createPDF');
//ClienteVistadeUsuario
Route::get('AltaClienteUs','App\Http\Controllers\Clientes\ClientesController@altaCliente');

//Empleado
Route::get('AltaEmpleado','App\Http\Controllers\Empleados\EmpleadosController@altaEmpleado');
Route::post('AltaEmploy','App\Http\Controllers\Empleados\EmpleadosController@altaEmployee');
Route::get('verEmpleado','App\Http\Controllers\Empleados\EmpleadosController@mostrarEmpleado');
Route::get('editarEmpleado/{id}','App\Http\Controllers\Empleados\EmpleadosController@editarEmpleado');
Route::post('actualizarEmpleado','App\Http\Controllers\Empleados\EmpleadosController@actualizarEmpleado');
Route::get('eliminarEmpleado/{id}','App\Http\Controllers\Empleados\EmpleadosController@eliminarEmpleado');
//ProductoReporte
Route::get('excel-empleado','App\Http\Controllers\Empleados\EmpleadosController@exportExcel')->name('excel');
Route::get('csv-empleado','App\Http\Controllers\Empleados\EmpleadosController@exportCSV')->name('csv');
Route::get('pdf-empleado','App\Http\Controllers\Empleados\EmpleadosController@createPDF');
//ProductoVehiculo
Route::get('AltaProductoVehiculo','App\Http\Controllers\ProductoVehiculo\ProductoVehiculoController@altaProductoVehiculo');
Route::post('AltaPV','App\Http\Controllers\ProductoVehiculo\ProductoVehiculoController@altaPV');
Route::get('verProductoVehiculo','App\Http\Controllers\ProductoVehiculo\ProductoVehiculoController@mostrarProductoVehiculo');
//Compra
Route::get('AltaCompra','App\Http\Controllers\Compras\ComprasController@altaCompra');
Route::post('AltaBUY','App\Http\Controllers\Compras\ComprasController@altaBuy');
Route::get('verCompra','App\Http\Controllers\Compras\ComprasController@mostrarCompra');

//Vistas del usuario
Route::get('inicio','App\Http\Controllers\Vistas\Vistas@mostrarV');
Route::get('vistaQuienes','App\Http\Controllers\Vistas\quienesController@mostrarQ');
Route::get('vistaUbicacion','App\Http\Controllers\Vistas\quienesController@mostrarUbi');
Route::get('vistaProductosU','App\Http\Controllers\Vistas\productosUsController@mostrarProductoUsuario');
Route::get('compraUsuario','App\Http\Controllers\Vistas\pagoUsController@altaPa');
Route::post('AltaPag','App\Http\Controllers\Vistas\pagoUsController@altaPago');

Route::get('AltaCliente2','App\Http\Controllers\Login\LoginController@register');
Route::post('AltaClient2','App\Http\Controllers\Login\LoginController@altaUs');

//Login
Route::post('inicio','App\Http\Controllers\Login\LoginController@log');
Route::post('vistaQuienes','App\Http\Controllers\Login\LoginController@log');
Route::post('vistaUbicacion','App\Http\Controllers\Login\LoginController@log');
Route::post('vistaProductosU','App\Http\Controllers\Login\LoginController@log');



//Vistas con Sesion iniciada del Usuario
Route::get('inicio2','App\Http\Controllers\Vistas\Vistas@mostrarV2');
Route::get('vistaProductosU2','App\Http\Controllers\Vistas\productosUsController@mostrarProductoUsuario2');
Route::get('vistaQuienes2','App\Http\Controllers\Vistas\quienesController@mostrarQ2');
Route::get('vistaUbicacion2','App\Http\Controllers\Vistas\quienesController@mostrarUbi2');
Route::get('graciasCompra','App\Http\Controllers\Vistas\graciasController@vistaGra');
//Vistas del admin
Route::get('inicio3','App\Http\Controllers\Vistas\Vistas@mostrarV3');


