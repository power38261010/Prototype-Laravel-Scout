<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class SearchController extends Controller {

    public function index(Request $request) {
        $query = $request->input('query');

        // basic
        $results['basic'] = Image::search($query)->get();
        dump('$results basic ', $results['basic']);

        // // score
        // $results['score'] = Image::search($query)->get()->searchable();

        // pagination
        $results['pagination'] = Image::search($query)->paginate(8);

        // filters
        // $results['filters'] = Image::search($query)
        // ->where('slug', '=', 'messi')
        // ->get();
        
        dump('$results filters ', $results['pagination']);


        // // highlight
        // $results['highlight'] = Image::search($query)
        //     ->highlight()
        //     ->get();

        // // fuzzy
        // $results['fuzzy'] = Image::search($query)
        //     ->fuzzy()
        //     ->get();

        // // customOrder
        // $results['customOrder'] = Image::search($query)
        //     ->orderBy('date_insert', 'desc')
        //     ->get();

        return view('search-results.index', compact('results'));
    }

}
