<?php
namespace App\Http\Controllers\Home;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomenewController
 *
 * @author pc5
 */
class HomenewController extends Controller {
    //put your code here
    public function __construct() {
    }
    
    public function showIndex(){
        echo 'here'; exit;
    }
}
