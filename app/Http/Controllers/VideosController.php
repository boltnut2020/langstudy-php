<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = Video::all();
        // return $videos;
        return view('videos.index', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // モデルからインスタンスを生成
        $video = new Video;
        // $requestにformからのデータが格納されているので、以下のようにそれぞれ代入する
        $video->title = $request->title;
        $video->video_id = $request->video_id;
        // 保存
        $video->save();
        // 保存後 一覧ページへリダイレクト
        return redirect('/videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // 引数で受け取った$idを元にfindでレコードを取得
        $video = Video::find($id);
        // viewにデータを渡す
        return view('videos.show', ['video' => $video]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $video = Video::find($id);
        return view('videos.edit', ['video' => $video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // idを元にレコードを検索して$videoに代入
        $video = Video::find($id);
        // editで編集されたデータを$articleにそれぞれ代入する
        $video->title = $request->title;
        $video->video_id = $request->video_id;
        // 保存
        $video->save();
        // 詳細ページへリダイレクト
        return redirect("/videos/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // idを元にレコードを検索
       $video = Video::find($id);
       // 削除
       $video->delete();
       // 一覧にリダイレクト
       return redirect('/videos');        
    }
}
