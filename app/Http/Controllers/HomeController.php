<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeControllerm extends Controller {
     public function home (Request $request): RedirectResponse{
        if ($request->session()->exists("user")){
            return redirect("/todolist");
        }else {
            return redirect("/login");
        }
     }
}