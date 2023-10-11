<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class StoryBoardController extends Controller
{
    public function index()
    {
        $data=array();
        $collection = app('firebase.firestore')->database()->collection('news_story')->documents();

        foreach($collection as $stu) {
            if($stu->data()['type']=='story'){

                array_push($data,$stu);
            }
        }

          $story_boards = $this->paginate($data);
          $story_boards->setPath('index');
          shuffle($data);
          $random_order = array_slice($data, 0, 3);

        return view('story-board', compact('story_boards','random_order'));
    }

    public function storyBoardInfo($id){
        $story_board_info = app('firebase.firestore')->database()->collection('news_story')->document($id)->snapshot();

        return view('story-board-info',compact('story_board_info'));
    }


    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
