<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    // /**
    //  * Return selected listing by its :id
    //  */
    // public function getListingId (Request $request) {
        
    //     $listing = Listing::where('id', '=', 'req.params')
    //     return response()->json($blogs, 200);

    // }
}
