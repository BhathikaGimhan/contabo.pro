<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TimelineController extends Controller
{
    public function index()
    {
        $timeline=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {

                array_push($timeline,$item);

        }

        collect($timeline)->sortBy('createdAt')->values();
        $timeline_latest=[];
        if($timeline){
            $timeline_latest=$timeline[0];
        }

        return view('timeline', compact('collection','timeline_latest'));
    }

    public function explore()
    {
        $id = null;
        $x=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {

            array_push($x,$item);

        }
        $timeline=collect($x)->sortBy('year')->values();

        $last_year2=$timeline[count($timeline) - 1]->data()['year'];
        $first_year=$timeline[0]->data()['year'];

        $display_data = collect($timeline);
        $last_year=$last_year2;

        return view('timeline-explore', compact('display_data','first_year','last_year', 'id'));
    }

    public function exploreById($id)
    {
        $x=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {

            array_push($x,$item);

        }
        $timeline=collect($x)->sortBy('year')->values();

        $last_year2=$timeline[count($timeline) - 1]->data()['year'];
        $first_year=$timeline[0]->data()['year'];

        $display_data = collect($timeline);
        $last_year=$last_year2;

        return view('timeline-explore', compact('display_data','first_year','last_year', 'id'));
    }

    public function nextRangeData($year_range){
        $x=explode("-",$year_range);
        $timeline=array();
        $values=$this->year();
        $year_array=$values['year'];

        $first_year=$x[0];
        $last_year=$x[1];

        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {
            if($item->data()['year']>=$x[0] && $item->data()['year']<$x[1]){

                array_push($timeline,$item);
            }

        }
        $current_year_range="$first_year-$last_year";
        $display_data = collect($timeline);
        return view('timeline-explore', compact('year_array','display_data','first_year','last_year'));
    }
    public function timeline_30_years()
    {
        $year_30_array=array();
        $splitted_array=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();

        $timeline=collect($collection)->sortBy('year')->values();

        $last_year2=$timeline[count($timeline) - 1]->data()['year'];
        $first_year=$timeline[0]->data()['year'];

        for($i = $first_year; $i < $last_year2; $i++){

            $y=$i+30;
            $year_range="$i-$y";
            array_push($year_30_array,$year_range);

            $temp_array = array();
            foreach ($timeline as $timeline_item) {
                if ($timeline_item->data()['year'] >= $i && $timeline_item->data()['year'] < $y) {
                    array_push($temp_array,$timeline_item);
                }
            }

            array_push($splitted_array,$temp_array);

            $i=$i+29;

        }

        $display_data = collect($splitted_array);
        $last_year=$last_year2;

        return view('timeline_30_years', compact('year_30_array','display_data','first_year','last_year'));
    }

    public function filter30YearData($year_range){
        $x=explode("-",$year_range);
        $timeline=array();
        $values=$this->year30();
        $year_30_array=$values['year'];

        $first_year=$x[0];
        $last_year=$x[1];

        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {
            if($item->data()['year']>=$x[0] && $item->data()['year']<$x[1]){

                array_push($timeline,$item);
            }

        }
        $display_data = collect($timeline);
        return view('timeline_30_years', compact('year_30_array','display_data','first_year','last_year'));
    }

    public function year30(){
        $year_array=array();
        $x=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {

            array_push($x,$item);

        }
        $timeline=collect($x)->sortBy('year')->values();

        $last_year=$timeline[count($timeline) - 1]->data()['year'];
        $first_year=$timeline[0]->data()['year'];
        for($i = $first_year; $i < $last_year; $i++){

            $y=$i+30;
            $year_range="$i-$y";
            array_push($year_array,$year_range);
            $i=$i+29;

        }
        $pass_data=[];
        $pass_data['year']=$year_array;
        $pass_data['first_year']=$first_year;
        $pass_data['last_year']=$last_year;

        return $pass_data;
    }
    public function filterData($year_range){
        $x=explode("-",$year_range);
        $timeline=array();
        $values=$this->year();
        $year_array=$values['year'];

        $first_year=$x[0];
        $last_year=$x[1];

        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {
            if($item->data()['year']>=$x[0] && $item->data()['year']<$x[1]){

                array_push($timeline,$item);
            }

        }
        $display_data = collect($timeline);
        return view('timeline-explore', compact('year_array','display_data','first_year','last_year'));
    }

    public function filterByType($type){
        $timeline = array();
        $year_30_array=array();
        $splitted_array=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();

        foreach($collection as $item) {
            if($type!="All"){
                foreach($item->data()['timeline_category'] as $itemt) {
                     $cat=$this->getCategory($itemt);

                    if($cat->data()['timeline_category']==$type){

                        array_push($timeline,$item);
                    }
                }
            }else{
                array_push($timeline,$item);
            }

        }



        $t_sorted = collect($timeline)->sortBy('year')->values();


        $last_year2=$t_sorted[count($t_sorted) - 1]->data()['year'];
        $first_year=$t_sorted[0]->data()['year'];

        $display_data = collect($t_sorted);
        $last_year=$last_year2;

        return view('timeline-explore', compact('display_data','first_year','last_year'));
    }

    public function filterByType30Years($type){
        $timeline = array();
        $year_30_array=array();
        $splitted_array=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();

        foreach($collection as $item) {
            if($type!="All"){
                foreach($item->data()['timeline_category'] as $itemt) {
                     $cat=$this->getCategory($itemt);

                    if($cat->data()['timeline_category']==$type){

                        array_push($timeline,$item);
                    }
                }
            }else{
                array_push($timeline,$item);
            }

        }



        $t_sorted = collect($timeline)->sortBy('year')->values();


        $last_year2=$t_sorted[count($t_sorted) - 1]->data()['year'];
        $first_year=$t_sorted[0]->data()['year'];

        for($i = $first_year; $i < $last_year2; $i++){

            $y=$i+30;
            $year_range="$i-$y";
            array_push($year_30_array,$year_range);

            $temp_array = array();
            foreach ($t_sorted as $timeline_item) {
                if ($timeline_item->data()['year'] >= $i && $timeline_item->data()['year'] < $y) {
                    array_push($temp_array,$timeline_item);
                }
            }

            array_push($splitted_array,$temp_array);

            $i=$i+29;

        }

        $display_data = collect($splitted_array);
        $last_year=$last_year2;

        return view('timeline_30_years', compact('year_30_array','display_data','first_year','last_year'));
    }

    public function getCategory($category_id){
        $category = app('firebase.firestore')->database()->collection('timeline_category')->document($category_id)->snapshot();
       return $category;
    }

    public function year(){
        $year_array=array();
        $x=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();
        foreach($collection as $item) {

            array_push($x,$item);

        }
        $timeline=collect($x)->sortBy('year')->values();

        $last_year=$timeline[count($timeline) - 1]->data()['year'];
        $first_year=$timeline[0]->data()['year'];
        for($i = $first_year; $i < $last_year; $i++){

            $y=$i+15;
            $year_range="$i-$y";
            array_push($year_array,$year_range);
            $i=$i+14;

        }
        $pass_data=[];
        $pass_data['year']=$year_array;
        $pass_data['first_year']=$first_year;
        $pass_data['last_year']=$last_year;

        return $pass_data;
    }

    public function info($path)
    {
        $info_data=array();
        $timeline = app('firebase.firestore')->database()->collection('timeline')->documents();
        if($path=="All" || $path=="Places" ||$path=="Events" ||$path=="People" ){
            if($path=="Places"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                        $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="Places"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
            if($path=="Events"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                            $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="Events"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
            if($path=="People"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                        $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="People"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
                $values=$this->year();

                $first_year=$values['first_year'];
                $last_year=$values['last_year']+1;
        }else{
            $x=explode("-",$path);
            $year_filter=array();


            $first_year=$x[0];
            $last_year=$x[1];
            foreach($timeline as $item) {
                if($item->data()['year']>=$x[0] && $item->data()['year']<$x[1]){

                    array_push($year_filter,$item);
                }

            }
            $timeline=collect($year_filter);
            $first_year=$x[0];
            $last_year=$x[1];
        }


        return view('timeline-info', compact('timeline','first_year','last_year'));
    }

    public function timelineDetails($id)
    {
        $categories=array();
        $timeline_details = app('firebase.firestore')->database()->collection('timeline')->document($id)->snapshot();
        foreach($timeline_details->data()['timeline_category'] as $item_cat) {
            $cat=$this->getCategory($item_cat);


                array_push($categories,$cat);

        }
        $timeline_categories=collect($categories);
        return view('timeline_details', compact('timeline_details','timeline_categories'));
    }
    public function info1Year($path)
    {
        $info_data=array();
        $timeline = app('firebase.firestore')->database()->collection('timeline')->documents();
        if($path=="All" || $path=="Places" ||$path=="Events" ||$path=="People" ){
            if($path=="Places"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                        $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="Places"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
            if($path=="Events"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                            $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="Events"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
            if($path=="People"){

                foreach($timeline as $item) {
                    foreach($item->data()['timeline_category'] as $item_cat) {
                        $cat=$this->getCategory($item_cat);
                        if($cat->data()['timeline_category']=="People"){

                            array_push($info_data,$item);
                        }
                    }
                }
                 $timeline=collect($info_data);
            }
                $values=$this->year();

                $first_year=$values['first_year'];
                $last_year=$values['last_year']+1;
        }else{
            $x=explode("-",$path);
            $year_filter=array();


            $first_year=$x[0];
            $last_year=$x[1];
            foreach($timeline as $item) {
                if($item->data()['year']==$x[0]){

                    array_push($year_filter,$item);
                }

            }
            $timeline=collect($year_filter);
            $first_year=$x[0];
            $last_year=$x[1];
        }


        return view('timeline_info_1_year', compact('timeline','first_year','last_year'));
    }
    public function filterByYear($year){
        $array_data=array();
        $collection = app('firebase.firestore')->database()->collection('timeline')->documents();

        foreach($collection as $item) {
            if($item->data()['year']>=$year-1 && $item->data()['year']<$year){

                array_push($array_data,$item);
            }
        }
        $timeline=collect($array_data);
        $first_year=$year-1;
        $last_year=$year+11;
        return view('timeline-info', compact('timeline','first_year','last_year'));
    }
}
