<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    private function get_listing($listing)
    {
        $model = $listing->toArray();
        $path = public_path('images/'.$listing->id.'/');
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));
        $files = array_values($files);
        //$elements = count($files);
        
        $i = 1;
        foreach ($files as $file) {
            $model['image_' . $i] = asset('images/' . $listing->id . '/'.$file);
            $i++;
        }
        // for($i = 1; $i <= $elements; $i++) {
        //     $model['image_' . $i] = asset('images/' . $listing->id . '/Image_' . $i . '.jpg');
        // }
        return collect(['listing' => $model]);
    }

    public function get_listing_api(Listing $listing)
    {
        $data = $this->get_listing($listing);
        return response()->json($data);
    }

    private function add_meta_data($collection, $request)
    {
        return $collection->merge([
            'path' => $request->getPathInfo(),
            'auth' => Auth::check(),
            'saved' => Auth::check() ? Auth::user()->saved : []
        ]);
    }

    public function get_listing_web(Listing $listing, Request $request)
    {
        $data = $this->get_listing($listing);
        $data = $this->add_meta_data($data, $request);
        //error_log('Some message here.');
        //Log::info('This is some useful information.');
        return view('app', ['data' => $data]);
    }

    private function get_listing_summaries()
    {
        $collection = Listing::all([
            'id', 'address', 'title', 'price_per_night'
        ]);
        
        $collection->transform(function($listing) {
            $listing->thumb = asset(Storage::disk('public')->files('images/' . $listing->id)[0]);
            return $listing;
        });
        // $collection2 = Listing::all([
        //     'country'
        // ]);
        // $collection2 = $collection2->pluck('country')->unique()->values();
        // print_r($collection2->toArray());
        //print_r(collect(['listings' => $collection->toArray(), 'countries' => array_values($collection2->toArray())]));
        return collect(['listings' => $collection->toArray()]);
    }

    public function get_home_web(Request $request)
    {
        $data = $this->get_listing_summaries();
        $data = $this->add_meta_data($data, $request);
        $countries = Listing::all([
            'country'
        ]);
        $countries = $countries->pluck('country')->unique()->values();
        return view('app', ['data' => $data, 'countries' => $countries]);
    }

    public function get_home_api()
    {
        $data = $this->get_listing_summaries();
        return response()->json($data);
    }

    public function get_listing_create_web(Request $request)
    {
        return view('app', ['data' => []]);
    }

    public function post_listing_create_web(Request $request) {
        if($request->has('amenity_wifi')) {
            $amenity_wifi = 1;
        } else {
            $amenity_wifi = 0;
        }

        if($request->has('amenity_pets_allowed')) {
            $amenity_pets_allowed = 1;
        } else {
            $amenity_pets_allowed = 0;
        }

        if($request->has('amenity_tv')) {
            $amenity_tv = 1;
        } else {
            $amenity_tv = 0;
        }

        if($request->has('amenity_kitchen')) {
            $amenity_kitchen = 1;
        } else {
            $amenity_kitchen = 0;
        }

        if($request->has('amenity_breakfast')) {
            $amenity_breakfast = 1;
        } else {
            $amenity_breakfast = 0;
        }

        if($request->has('amenity_laptop')) {
            $amenity_laptop = 1;
        } else {
            $amenity_laptop = 0;
        }
        
        $last_id = Listing::find(\DB::table('listings')->max('id'));
        $last_id = $last_id->id;
        print($last_id);
        $new_last_id = $last_id + 1;
        print($new_last_id);
        $new_listing = Listing::create([
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'about' => $request->input('about'),
            'amenity_wifi' => $amenity_wifi,
            'amenity_pets_allowed' => $amenity_pets_allowed,
            'amenity_tv' => $amenity_tv,
            'amenity_kitchen' => $amenity_kitchen,
            'amenity_breakfast' => $amenity_breakfast,
            'amenity_laptop' => $amenity_laptop,
            'price_per_night' => $request->input('price_per_night'),
            'price_extra_people' => $request->input('price_extra_people'),
            'price_weekly_discount' => $request->input('price_weekly_discount'),
            'price_monthly_discount' => $request->input('price_monthly_discount'),
            'country' => $request->input('country')
        ]);


        
        
         $path = public_path().'/images/'.$new_listing->id;
         File::makeDirectory($path);
        print($new_listing->id);
        $files = $request->file('files');
        $i = 1;
        foreach ($files as $file) {
            
            $image_name = 'Image_'.$i;
            $guessExtension = $file->guessExtension();
            
            $image_path = '/images/'.$new_listing->id;
            
            
            $file->storeAs($image_path, $image_name.'.'.$guessExtension, 'public');
            $i++;
            
            print($file->guessExtension());
            
        }
        return redirect('/');
        
    }
}
