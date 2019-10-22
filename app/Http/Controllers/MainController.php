<?php

namespace App\Http\Controllers;

use App\Contracts\MainInterface;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    protected $main;
    protected $request;

    public function __construct(MainInterface $main, Request $request) {

        $this->main = $main;
        $this->request = $request;
    }

    public function index($user_id) {

        return $this->main->index($user_id);
    }
}
