<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getallposts()
    {
        $allposts = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $allposts->json();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getonepost($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addpost(Request $request)
    {
        $addrequestpost = Http::post('https://jsonplaceholder.typicode.com/posts',[$request->all()]);
        return $addrequestpost->json();
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('updatepage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $updatepost = Http::put('https://jsonplaceholder.typicode.com/posts/'.$request->id,[$request->all()]);
        return $updatepost->json();
   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroypost = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $destroypost->json();
   
    }
}
