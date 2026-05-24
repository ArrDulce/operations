<?php

use App\Http\Controllers\ConversionUtilityController;
use App\Http\Controllers\ExponenteController;
use App\Http\Controllers\GenerateHashController;
use App\Http\Controllers\McdMcmController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\PitagorasController;
use App\Http\Controllers\PromedioController;
use Illuminate\Support\Facades\Route;

// Menú Principal
Route::get('/', function () {
    return view('welcome');
});

// --- 1. SUMA ---
Route::get('/suma', [OperationsController::class, 'mostrarVista']);
Route::post('/suma', [OperationsController::class, 'procesarSuma']);

// --- 2. EXPONENTE ---
Route::get('/exponente', [ExponenteController::class, 'mostrarVista']);
Route::post('/exponente', [ExponenteController::class, 'procesarExponente']);

// --- 3. PITÁGORAS ---
Route::get('/pitagoras', [PitagorasController::class, 'mostrarVista']);
Route::post('/pitagoras', [PitagorasController::class, 'procesarPitagoras']);

// --- 4. CONVERSIÓN °C A °F ---
Route::get('/conversion', [ConversionUtilityController::class, 'mostrarVista']);
Route::post('/conversion', [ConversionUtilityController::class, 'procesarConversion']);

// --- 5. HASH SHA256 ---
Route::get('/hash', [GenerateHashController::class, 'mostrarVista']);
Route::post('/hash', [GenerateHashController::class, 'procesarHash']);

// --- 6. MCD Y MCM ---
Route::get('/mcd-mcm', [McdMcmController::class, 'mostrarVista']);
Route::post('/mcd-mcm', [McdMcmController::class, 'procesarMcdMcm']);

// --- 7. PROMEDIO DE 6 NÚMEROS ---
Route::get('/promedio', [PromedioController::class, 'mostrarVista']);
Route::post('/promedio', [PromedioController::class, 'procesarPromedio']);
