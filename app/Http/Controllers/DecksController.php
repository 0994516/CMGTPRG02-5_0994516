<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecksController extends Controller
{
    public function index ()
    {
        return view('decks.index');
    }
}

/*
create /blog/create

read /blog

update PUT or PATCH
/blog/{slug}

Delete - DELETE
/blog/{id}

show - GET
/bolg/{id}

Edit -GET
/blog/{id}/edit