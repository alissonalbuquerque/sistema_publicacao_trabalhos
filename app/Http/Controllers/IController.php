<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface IController {

    public function index();

    public function create(Request $request);

    public function update(Request $request);

    public function delete(Request $request);

    public function showViewCreate();

    public function showViewUpdate();
}