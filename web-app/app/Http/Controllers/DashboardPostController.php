<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Dashboard.Posts.index',[
            "title" => "My Website | Dashboard - Post",
            "Posts" => Posting::where('user_id' , auth()->User()->id)->get()
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Posts.Create',[
            "Categories" => Category::all()
             ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validateData = $request->validate([
    'Title' => 'required|max:255',
    'img' => 'image|file|max:2024',
    'category_id' => 'required',
    'Judul_Posting' => 'required','max:255',
    'slug' => 'required',
    'Body' => 'required'
    ]);

    if ($request->file('img')) {
        $validateData['img'] = $request->file('img')->store('post-images');
    }

    $validateData['user_id'] = auth()->User()->id;
    $validateData['excerpt'] = Str::limit(strip_tags($request->Body, 250));
    Posting::create($validateData);

    return redirect('/Dashboard/Posts')->with('success','New Posts has been added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function show( Posting $Post)
    {
    if($Post->User->id !== auth()->User()->id) {
     abort(403);
    }

        return view ('Dashboard.Posts.Show',[
        "Post" => $Post


        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $Post)
    {

    if($Post->User->id !== auth()->User()->id) {
     abort(403);
    }

        return view('Dashboard.Posts.Edit',[
            'Post' => $Post,
            "Categories" => Category::all()
             ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posting $Post)
    {
     $rules = [
    'Title' => 'required|max:255',
    'img' => 'required',
    'category_id' => 'required',
    'Judul_Posting' => 'required','max:255',
    'Body' => 'required'
    ];

    if ($request->slug != $Post->slug) {
        $rules['slug']= 'required';

    }
    $validateData =$request->validate($rules);
    $validateData['user_id'] = auth()->User()->id;

    $validateData['excerpt'] = Str::limit(strip_tags($request->Body,250));
    Posting::where('id', $Post->id)
        ->update ($validateData);

    return redirect('/Dashboard/Posts')->with('success','Post has been Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $Post)
    {

    Posting::destroy($Post->id);

    return redirect('/Dashboard/Posts')->with('success','New Posts has been deleted!!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posting::class, 'slug', $request->Title);
        return response()->json(['slug'=> $slug ]);
    }


}
