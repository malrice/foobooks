<?php
/**
 * Created by PhpStorm.
 * User: Mal
 * Date: 10/21/18
 * Time: 7:39 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Here are all the books...';
    }

    /*public function show($title)
    {
        return view('books.show')->with(['title'=> $title]);
    }*/

    public function show($title)
    {
        return view('books.show')->with(['title' => $title]);
    }

}