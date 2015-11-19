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

    $app->post('read/{origin:\d+}/{destination:\d+}/{passage}', 'TextCommanderController@read');

    $app->get('users', 'TextCommanderController@users');

    $app->get('settings/{code}', 'SettingController@getSetting');

    $app->post('settings/{project}/{key}', 'SettingController@setSetting');

});

$app->group(['prefix' => 'ph', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->get('islandgroups', 'Philippines\IslandGroupController@index');
    $app->get('{islandgroup_id}/regions', 'Philippines\RegionController@getRegionsWithinIslandGroup');
    $app->get('{region_code}/provinces', 'Philippines\ProvinceController@getProvincesWithinRegion');
    $app->get('{province_code}/towns', 'Philippines\TownController@getTownsWithinProvince');

    $app->get('regions', 'Philippines\RegionController@index');
    $app->post('regions', 'Philippines\RegionController@store');

    $app->get('regions/{id:\d{9}}', 'Philippines\RegionController@show');
    $app->get('regions/{code}', 'Philippines\RegionController@getRegionFromCode');

    $app->get('provinces', 'Philippines\ProvinceController@index');
    $app->get('provinces/{id:\d{9}}', 'Philippines\ProvinceController@getProvince');

    $app->get('towns', 'Philippines\TownController@index');
    $app->get('towns/{id:\d{9}}', 'Philippines\TownController@getTown');

});

$app->group(['prefix' => 'bible', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->get('passage/{passage}', 'BibleController@getPassage');

    $app->get('passage', 'BibleController@getRandom');
});


