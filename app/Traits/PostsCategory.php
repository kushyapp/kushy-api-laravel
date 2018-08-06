<?php 
namespace KushyApi\Traits;

use KushyApi\Categories;

trait PostsCategory
{
    /**
     * Searches the post model (via the PostsCategories relationship)
     * for a category (provided as a slug, and queried as ID)
     *
     * @param string $category
     * @return json
     */
    public function category($category)
    {
        $config = $this->config::get('api');

        $categoryId = Categories::whereSlug($category)->firstOrFail()->id;

        // $shops = Posts::with('categories.relationships')
        //             ->whereSection('shop')
        //             ->paginate($config['query']['pagination']);

        $shops = $this->model::category($categoryId)
        ->whereSection($this->section)
        ->with('categories')
        ->paginate($config['query']['pagination']);

        return (new $this->resourceCollection($shops))
            ->response()
            ->setStatusCode(200);

    }
}