<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->group(['prefix' => 'txtcmdr', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->post('challenge/{origin:\d+}/{mobile:\d+}', 'TextCommanderController@challenge');

    $app->post('confirm/{origin:\d+}/{mobile:\d+}/{pin:\d+}', 'TextCommanderController@confirm');

    $app->post('load/{origin:\d+}/{mobile:\d+}/{amount:\d+}', 'TextCommanderController@load');

    $app->post('ask4questions/survey/store/{code}', 'SurveyController@store'); //store 4 questions

    $app->post('ask4questions/response/store/{code}/{question}/{answer}', 'ResponseController@store');

});

$app->group(['prefix' => 'ph', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->get('/', 'GeoPoliticalController@index');
    $app->get('regions', 'GeoPoliticalController@getRegions');
    $app->get('provinces', 'GeoPoliticalController@getProvinces');
    $app->get('towns', 'GeoPoliticalController@getTowns');

    $app->get('region/{id:\d{9}}', 'GeoPoliticalController@getRegion');
    $app->get('region/{code}', 'GeoPoliticalController@getRegionFromCode');

    $app->get('province/{id:\d{9}}', 'GeoPoliticalController@getProvince');
    $app->get('town/{id:\d{9}}', 'GeoPoliticalController@getTown');

});