<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Posting;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class HomePostsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Home.Posts.index',[
            "title" => "My Website | Dashboard - Home",
            "Posts" =>Home::where('user_id' , auth()->User()->id)->get()
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.Posts.Create',[
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
    'T_Home' => 'required|max:255',
    'img' => 'image|file|max:2024',
    'category_id' => 'required',
    'J_Home' => 'required','max:255',
    'slug' => 'required',
    'B_Home' => 'required'
    ]);

    if ($request->file('img')) {
        $validateData['img'] = $request->file('img')->store('post-images');
    }

    $validateData['user_id'] = auth()->User()->id;
    $validateData['e_Home'] = Str::limit(strip_tags($request->B_Home, 250));
    Home::create($validateData);

    return redirect('/Dashboard/Home/Posts')->with('success','New Posts has been added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home $Post
     * @return \Illuminate\Http\Response
     */
    public function show(Home $Post)
    {
    if($Post->User->id !== auth()->User()->id) {
     abort(403);
    }

        return view ('Home.Posts.Show',[
        "Post" => $Post


        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $Post)
    {



        return view('Home.Posts.Edit',[
            'Post' => $Post,
            "Categories" => Category::all()
             ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $Post)
    {
     $rules = [
    'T_Home' => 'required|max:255',
    'img' => 'required',
    'category_id' => 'required',
    'J_Home' => 'required','max:255',
    'B_Home' => 'required'
    ];

    if ($request->slug != $Post->slug) {
        $rules['slug']= 'required';

    }
    $validateData =$request->validate($rules);
    $validateData['user_id'] = auth()->User()->id;

    $validateData['e_Home'] = Str::limit(strip_tags($request->B_Home,250));
    Home::where('id', $Post->id)
        ->update ($validateData);

    return redirect('/Dashboard/Home/Posts')->with('success','Post has been Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $Post)
    {

   Home::destroy($Post->id);

    return redirect('/Dashboard/Home/Posts')->with('success','New Posts has been deleted!!');
    }

    public function homeCheckSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posting::class, 'slug', $request->Title);
        return response()->json(['slug'=> $slug ]);
    }

}
