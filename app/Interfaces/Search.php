<?php

namespace KushyApi\Interfaces;

interface SearchInterface
{
    public function search($model, $request)
    {
        // Grab Search Query and filter it
        $search = filter_var($request->get('search'), FILTER_SANITIZE_STRING);

        // Get optional filters
        // FILTER: GEOLOCATION
        if($request->input('location')) {
            $location = filter_var($request->get('location'), FILTER_SANITIZE_STRING);
        }
        if($request->input('geo_lat')) {
            $geo_lat = filter_var($request->get('geo_lat'), FILTER_SANITIZE_STRING);
            $geo_lng = filter_var($request->get('geo_lng'), FILTER_SANITIZE_STRING);
        }

        /**
         * Get current page number for location manual Pagination
         */
        $page = $request->get('page') ? $request->get('page') : 1;


        // Location first, since it's a special query
        if(isset($geo_lat) && isset($geo_lng)) {
            
            $location_data = Posts::location($geo_lat, $geo_lng, $search, 25, 100); 

            // Hard and dirty search function through collection
            // since search with location method doesn't work still
            if($search !== '') {
                $location_data = $location_data->filter(function ($item) use ($search) {
                    return stripos($item->name, $search) !== false;
                });
            }

            // Paginate results because location method can't
            $paginate = new Paginate;
            return $paginate->paginate($location_data, 15, $page, [
                'path' => '/search/'
            ]);

        } 
        // Section selection handler (brands/shops/prods/strains)
        elseif($search)
        {
            return $model->where('name', 'like', "%$search%");
        }

    }
}
