<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 11/10/2018
 * Time: 1:19 PM
 */

$schedule->call(function () {
    DB::table('recent_users')->delete();
})->daily();