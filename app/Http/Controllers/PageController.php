<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Nama : Salma Annissa Azizi <br> NIM : 2141720137";
    }

    public function articles($id) {
        echo 'Halaman artikel dengan ID '; return $id;
    }
    
    public function product()
    {
        echo " Daftar Produk Unggulan Kami <br>
        <ul>
            <li>
                <a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/riri-story-books'>Product 3</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a>
            </li>
        </ul>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
