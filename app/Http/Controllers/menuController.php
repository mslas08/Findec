<?php

namespace finDec\Http\Controllers;

use Illuminate\Http\Request;
use View;


class menuController extends Controller
{
    public function index(){
    	$menu = "superUserMenu";
    	$userType = "superUser";


    	if($userType == "user"){ 
    		
    		return View('bienvenidos', ['menu'=> $menu]);

    	}elseif($userType == "attorney"){
    		
    		return View('attorney/attorneyIndex', ['menu'=> $menu]);

    	}elseif($userType == "superUser"){
    		
    		return View('superuser/superUserIndex', ['menu'=> $menu]);

    	}


    }

    public function dataInput(){
    	return View::make('FinDec/dataInput');

    }
}
