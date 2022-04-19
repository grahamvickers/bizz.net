<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Listing;

class ListingController extends Controller
{
    /**
     * Return all instances of the listing model
     *
     * @return Illuminate\Http\JsonResponse
     *
     */

    public function index(Request $request){

        if ($request->q) {
            $listings = Listing::where('id', '=', $request->q)
                ->get()
                ->map->only([
                    'id',
                    'name',
                    'address',
                    'city',
                    'price',
                    'profit',
                    'income',
                    'img',
                    'content'
            ]);
        } else {
            $listings = Listing::all()->map->only([
                'id',
                'name',
                'address',
                'city',
                'price',
                'profit',
                'income',
                'img',
                'content'
            ]);
        }
   
        return response()->json($listings, 200);
    }

    /**
     * Store a newly created listing in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'price' => 'required|string',
            'profit' => 'required|string',
            'income' => 'required|string',
            'content' => 'required|string',
            'img' => 'required|image|max:50000000'
        ]);

        $imgName = Storage::putFile('public', $request->img);

        Listing::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'price' => $request->price,
            'profit' => $request->profit,
            'income' => $request->income,
            'content' => $request->content,
            'img' => $imgName
        ]);


        return redirect('/home');
    }

  
}
