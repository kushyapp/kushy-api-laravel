<?php 
namespace KushyApi\Traits;

use Illuminate\Support\Facades\Config;
use KushyApi\Categories;
use KushyApi\PostsCategories;
use KushyApi\Posts;
use KushyApi\Http\Helpers\Paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

trait Search
{
    public function search($model, $request)
    {
        // Number of shops to pull from DB
        $count = 10;

        // Grab the config file to load the default API params (orderby, etc)
        $config = Config::get('api');
        
        // Grab Search Query and filter it
        $search = filter_var($request->get('search'), FILTER_SANITIZE_STRING);

        // Grab categories
        $categories = Categories::all();

        // Get optional filters
        // FILTER: GEOLOCATION
        if($request->input('location')) {
            $location = filter_var($request->get('location'), FILTER_SANITIZE_STRING);
        }
        if($request->input('geo_lat')) {
            $geo_lat = filter_var($request->get('geo_lat'), FILTER_SANITIZE_STRING);
            $geo_lng = filter_var($request->get('geo_lng'), FILTER_SANITIZE_STRING);
        }

        // FILTER: CATEGORIES
        $selectedCategories = [];
        if($request->get('categories')) {
            foreach($request->get('categories') as $selectCategory) {
                $selectedCategories[] = $selectCategory;
            }
        }

        // FILTER: ORDER
        if($request->input('order')) {
            switch($request->input('order'))
            {
                case 'latest':
                    $order = 'latest';
                    $orderBy['column'] = 'id';
                    $orderBy['type'] = 'asc';
                    break;
                case 'oldest':
                    $order = 'oldest';
                    $orderBy['column'] = 'id';
                    $orderBy['type'] = 'desc';
                    break;
                case 'top':
                    $order = 'top';
                    $orderBy['column'] = 'rating';
                    $orderBy['type'] = 'desc';
                    break;
                case 'lowest':
                    $order = 'lowest';
                    $orderBy['column'] = 'rating';
                    $orderBy['type'] = 'desc';
                    break;
                default:
                    $order = null;
                    break;
            }
        } else {
            $order = null;
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
            $model->where('name', 'like', "%$search%");


            // Handle ORDER BY
            if($order !== null)
            {
                $model->orderBy($orderBy['column'], $orderBy['type']);
            }

            // Handle Categories
            if(count($selectedCategories) > 0) 
            {
                $model->with('categories');
                $model->whereHas('categories', function ($query) use ($selectedCategories){
                    $query->where('category_id', $selectedCategories[0]);
                });
            }

            return $model->get();
        } 

        return $model->orderBy($config['query']['order']['column'], $config['query']['order']['order'])
                    ->paginate($config['query']['pagination']);

    }
}