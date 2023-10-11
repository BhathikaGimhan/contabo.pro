<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class MiscellaniaController extends Controller
{

    public function index($category)
    {

        $data = array();
        $collection = app('firebase.firestore')->database()->collection('news_story')->documents();

        foreach ($collection as $details) {
            if ($category != "all") {
                foreach ($details->data()['category'] as $itemt) {
                    $cat = $this->getCategory($itemt);
                    if ($cat->data()['news_story_category'] == $category) {

                        array_push($data, $details);
                    }

                }
            } else {
                array_push($data, $details);
            }
        }

        $miscellania_news = $this->paginate($data);
        return view('miscellanea', compact('miscellania_news'));
    }

    public function getCategory($category_id)
    {
        $category = app('firebase.firestore')->database()->collection('news_story_category')->document($category_id)->snapshot();
        return $category;
    }

    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $options = ['path' => request()->url()];
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function show($id){

        $post = app('firebase.firestore')->database()->collection('news_story')->document($id)->snapshot();
        $post = $post->data();

        $post_array = array();
        $featured_posts =  $collection = app('firebase.firestore')->database()->collection('news_story')->documents();

        foreach ($featured_posts as $key => $item) {
            array_push($post_array, $item);
        }

        $post_array = collect($post_array)->values();
//        ->sortBy('createdAt', 1, true);

        return view('miscellanea-post', compact('post', 'post_array'));

    }

}
