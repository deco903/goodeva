<?php

use Illuminate\Support\Facades\Route;

function set_active($uri) {
    $originUri = Request::segment(1);
    if($uri == $originUri){
        return 'active_sidebar';
    }else {
        return'';
    }
}