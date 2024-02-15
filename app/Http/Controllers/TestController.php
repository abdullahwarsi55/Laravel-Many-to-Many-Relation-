<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TestController extends Controller
{
public function create()
{
    $post=new Post();
    $post->title = "Political";
    $post->body="Political issues";
    $post->save();
    $post=Post::find(1);
    $post->tag()->save(new Tag(['tag_name'=>'Economic News']));
}
public function read(){
    $post=Post::find(1);
    foreach($post->tag as $tag){
        echo $tag->tag_name;
    }
}

public function update(){
  $post=Post::find(1);
  if($post->has('tag')){
    foreach($post->tag as $tag){
        if($tag->tag_name=='Economic News'){
            $tag->tag_name= 'economic news';
            $tag->save();
        }
    }
  }

}

public function delete(){
    $post=Post::find(1);
    foreach($post->tag as $tag){
        $tag->whereId(3)->delete();
    }
}

public function attach(){
 $post=Post::find(2);
 $post->tag()->attach(2);   
}

public function detach(){
    $post=Post::find(2);
    $post->tag()->detach(2);   
   }

   public function sync(){
    $post=Post::find(2);
    $post->tag()->sync([1,2]);
   }


}
