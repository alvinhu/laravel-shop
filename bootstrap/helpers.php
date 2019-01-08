<?php
/**
 * Created by PhpStorm.
 * User: alvinhu
 * Date: 2019/1/8
 * Time: 18:45
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}