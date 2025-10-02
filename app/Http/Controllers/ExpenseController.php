<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function store(){
        //
    }

    public function create(){
        //
    }

    public function show(){
        dump(Expense::all());
        return view('dashboard');
    }

    public function update(){
        //
    }

    public function destroy(){
        //
    }
}
