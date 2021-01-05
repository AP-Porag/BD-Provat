<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Term;
use App\Models\TermTypes;
use App\Models\Type;
use App\Models\wpnb_post;
use App\Models\wpnb_term_taxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
//    public function fetchTexonomy()
//    {
//        $texonomy_count = DB::table('wpnb_term_taxonomies')
//            ->select('taxonomy', DB::raw('count(*) as total'))
//            ->groupBy('taxonomy')
//            ->get();
//        $texonomy('category')= total term = 25 => Type id = 1
//        $texonomy('nav_menu')= total term = 2 => Type id = 2
//        $texonomy('post_tag')= total term = 1032 => Type id = 3
//
//        $texonomy_gorup = wpnb_term_taxonomy::groupBy('taxonomy')->get();
//        $texonomy_array[] = wpnb_term_taxonomy::where('taxonomy','post_tag')->get();
//
//        foreach ($texonomy_array as $texonomy){
//            foreach ($texonomy as $column => $value){
//                //echo $value->term_id.'</br>';
//                //term_id,type_id
//                TermTypes::create([
//                    'term_id'=>$value->term_id,
//                    'type_id'=>'3',
//                ]);
//
//            }
//
//        }
//        return response($texonomy_gorup);
//
//    }

//    public function createType()
//    {
//        Type::create([
//            'name'=>'category'
//        ]);
//        Type::create([
//            'name'=>'nav_menu'
//        ]);
//        Type::create([
//            'name'=>'post_tag'
//        ]);
//    }

//    public function fetchThumbnail()
//    {
//        $all_post[] = wpnb_post::where('post_type', 'attachment')->orderBy('ID', 'DESC')->get();
//
//
//        foreach ($all_post as $post) {
//            foreach ($post as $column => $value) {
//                $post_parent = $value->post_parent;
//                //echo 'post-parent = '. $post_parent.' | '.'Thumbnail = '.$value->guid . '</br>';
//
//                $post_id = Post::find($post_parent);
//                if ($post_id != null){
//                    //echo 'ase ='.$post_parent.'||'.$value->guid.'<br>';
//                    $post_id->thumbnail = $value->guid;
//                    $post_id->save();
//                }else{
//                    //echo 'nai'.'<br>';
//                }
//                //term_id,type_id
////                TermTypes::create([
////                    'term_id'=>$value->term_id,
////                    'type_id'=>'3',
////                ]);
//
//            }
//
//        }
//        //return response($all_post);
//    }
}
