<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class GalleryController extends Controller
{
    public function index()
    {
        $album_data = array();
        $collection = app('firebase.firestore')->database()->collection('albums')->documents();
        // $i=0;
        foreach ($collection as $item) {
            if (!empty($item->data()['show_frontend'])) {
                if ($item->data()['show_frontend'] == 'true' || $item->data()['show_frontend'] == 'yes') {
                    array_push($album_data, $item);
                }
            }
        }
        $albums_array = collect($album_data);

        $albums = $this->paginate($albums_array);

        return view('gallery', compact('albums'));
    }

    public function paginate($items, $perPage = 16, $page = null, $options = [])
    {
        $options = ['path' => request()->url()];
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public static function getImage($random_album_id)
    {
        $gallery_items = array();
        $collection = app('firebase.firestore')->database()->collection('gallery')->documents();
        $suffle_gallery = iterator_to_array($collection);
        shuffle($suffle_gallery);

        foreach ($suffle_gallery as $item) {
            if (!empty($item->data()['type'])) {
                if ($item->data()['type'] == 'Image') {
                    foreach ($item->data()['album'] as $data) {

                        if ($data == $random_album_id) {

                            array_push($gallery_items, $item);
                        }
                    }
                }
            }
        }
        if ($gallery_items) {
            $image = $gallery_items[0]->data()['input'];
        } else {
            $image = "";
        }
        return $image;
    }

    public function albumInfo($album_id)
    {

        $album = app('firebase.firestore')->database()->collection('albums')->document($album_id)->snapshot();

        $gallery_items_arr = $this->buildImagesRow($album_id);

        $gallery_items = $this->paginate($gallery_items_arr);

        return view('album-view', compact('gallery_items', 'album'));
    }


    public static function albumCount($album_id)
    {

        $gallery_items = array();
        $collection = app('firebase.firestore')->database()->collection('gallery')->documents();
        $suffle_gallery = iterator_to_array($collection);
        shuffle($suffle_gallery);

        foreach ($collection as $item) {
            if (!empty($item->data()['type'])) {

                if ($item->data()['type'] == 'Image') {
                    foreach ($item->data()['album'] as $data) {

                        if ($data == $album_id) {
                            array_push($gallery_items, $item);
                        }
                    }
                }
            }
        }
        return sizeof($gallery_items);
    }

    public function galleryInfo($album_id, $id)
    {
        $gallery_collection = array();
        $gallery_details = app('firebase.firestore')->database()->collection('gallery')->document($id)->snapshot();
        $collection = app('firebase.firestore')->database()->collection('gallery')->documents();

        foreach ($collection as $item) {
            if (!empty($item->data()['type'])) {
                if ($item->data()['type'] == 'Image') {
                    foreach ($item->data()['album'] as $data) {

                        if ($data == $album_id) {
                            array_push($gallery_collection, $item);
                        }
                    }
                }
            }
        }
        return view('gallery-view', compact('gallery_details', 'gallery_collection'));
    }


    public function galleryView($gallery_id)
    {
        $gallery = app('firebase.firestore')->database()->collection('gallery')->document($gallery_id)->snapshot();
        $image_data = $gallery->data();
        return view('gallery-single-image-view', compact('gallery'));
    }

    public function galleryViewModal($gallery_id, $album_id)
    {
        $gallery = app('firebase.firestore')->database()->collection('gallery')->document($gallery_id)->snapshot();

        $gallery_items = $this->buildImagesRow($album_id, false);

        return view('modals.single-image-view', compact('gallery', 'gallery_items'));
    }


    public function buildImagesRow($album_id, $with_data = true): array
    {
        $gallery_items = array();
        $collection = app('firebase.firestore')->database()->collection('gallery')->documents();

        foreach ($collection as $item) {
            if (!empty($item->data()['type'])) {

                if ($item->data()['type'] == 'Image') {
                    foreach ($item->data()['album'] as $data) {

                        if ($data == $album_id) {
                            if ($with_data) {
                                $gallery_items[] = $item;
                            } else {
                                $gallery_items[] = $item->data();
                            }
                        }
                    }
                }
            }
        }
//        $gallery_items = array_slice($gallery_items, 0, 6);
        return $gallery_items;
    }

}
