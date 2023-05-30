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
    public function create()
    {
        $data = [
            'navs' => config('dbOption.navs'),
            'options' => config('dbOption.options'),
            'dcComics' => config('footer-links.dcComics'),
            'shop' => config('footer-links.shop'),
            'dc' => config('footer-links.dc'),
            'sites' => config('footer-links.sites'),
            'socials' => config('footer-links.socials'),
            'comics' => Comic::all(),
            'id' => null,
        ];

        $comic = new Comic();
        return view('comics.create', $data, compact('comic'));

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail_url' => 'required',
            'series' => 'required',
            'price' => 'required|numeric',
            'sale_date' => 'required',
            'type' => 'required',
        ]);


        $data['writers'] = json_encode(['Default Writer']);
        $data['artists'] = json_encode(['Default Artist']);

        $comic = Comic::create($data);

        return redirect()->route('comics.index')->with('success', 'Comic added successfully.');
    }


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
            'comics' => Comic::all(),
            'id' => null,
        ];
        return view('comics.show', $data, compact('comic'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $data = [
            'navs' => config('dbOption.navs'),
            'options' => config('dbOption.options'),
            'dcComics' => config('footer-links.dcComics'),
            'shop' => config('footer-links.shop'),
            'dc' => config('footer-links.dc'),
            'sites' => config('footer-links.sites'),
            'socials' => config('footer-links.socials'),
            'comics' => Comic::all(),
            'id' => null,
        ];
        return view('comics.edit', $data, compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail_url' => 'required',
            'series' => 'required',
            'price' => 'required|numeric',
            'sale_date' => 'required',
            'type' => 'required',
        ]);


        $data['writers'] = json_encode(['Default Writer']);
        $data['artists'] = json_encode(['Default Artist']);

        $comic->update($data);

        return redirect()->route('comics.show', $comic)->with('success', 'Fumetto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully.');
    }
}