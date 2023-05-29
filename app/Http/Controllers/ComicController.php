<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('home', ['comics' => $comics]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'navs' => config('dbOption.navs'),
            'options' => config('dbOption.options'),
            'dcComics' => config('footer-links.dcComics'),
            'shop' => config('footer-links.shop'),
            'dc' => config('footer-links.dc'),
            'sites' => config('footer-links.sites'),
            'socials' => config('footer-links.socials'),
            'comics' => \App\Models\Comic::all(),
            'id' => null,
        ];
        return view('comics.show', $data, compact('comic'));
    }



    //     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Comic  $comic
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Comic $comic)
//     {
//         //
//     }

    //     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Comic  $comic
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Comic $comic)
//     {
//         //
//     }

    //     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Comic  $comic
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Comic $comic)
//     {
//         //
//     }
}