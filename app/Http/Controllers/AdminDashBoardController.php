<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of AdminDashBoardController
 *
 * @author Wins
 */
class AdminDashBoardController extends Controller{
    
    function __construct() {
      $this->middleware('auth');
    }

    
    public function dashBoard() {
        return view('admin.dashboard');
        
    }
}
