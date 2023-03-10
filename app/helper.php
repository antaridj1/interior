<?php

use Illuminate\Support\Facades\Auth;

const IS_TERKIRIM = 0;
const IS_DIPROSES = 1;
const IS_SELESAI_DIPROSES = 2;
const IS_TUNTAS = 3;

function role($role){
    if ($role === 'admin'){
        return auth()->guard('employee')->user()->isAdmin == true;
    } else {
        return auth()->guard('employee')->user()->isAdmin == false;
    }
    
}

function roleController($role){
    if ($role === 'admin'){
        return Auth::guard('employee')->user()->isAdmin == true;
    } else {
        return Auth::guard('employee')->user()->isAdmin == false;
    }
    
}



?>