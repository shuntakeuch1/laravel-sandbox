<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function update(Request $request){
        // 取得
        $post = new Post();
        $post->select('posts.*')
            ->join('users','users.id','=','posts.user_id')
            ->where('posts.id',$request->id)
            ->first();
        // 更新
        $update_columns = [
            'posts.title' => 'おはようございます',
            'posts.body' => '本日も晴天なり',
        ];
        $post->update($update_columns);
//        $post->title = 'おはようございます';
//        $post->body = '本日も晴天なり';
//        $post->save();

    }
}
