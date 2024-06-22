<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>地域文化シェア</h1>
        <form action="/posts/{{ $post->id}}" method="POST" enctype="multipart/form-data">
        <div>
                <h2 class="title">編集画面</h2>
        </div>    
            @csrf
            @method('PUT')
            <div>{{ Auth::user()->name }}</div>
           <div class="prefecture_id">
                <h2>都道府県</h2>
                <select name="post[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}" {{ $prefecture->id == $post->prefecture_id ? 'selected' : '' }}>{{ $prefecture->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="culture_id">
                <h2>カテゴリー</h2>
                 <select name="post[culture_id]">
                    @foreach($cultures as $culture)
                        <option value="{{ $culture->id }}" {{ $culture->id == $post->culture_id ? 'selected' : '' }}>{{ $culture->name }}</option>
                    @endforeach
            </div>
            <div class="place">
                <h2>場所の詳細</h2>
                <input type="text" name="post[place]" placeholder="〇〇市" value="{{ $post->place }}"/>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="文化を紹介しよう。" >{{ $post->body }}</textarea>
            </div>
            <div class="image">
                <h2>写真</h2>
                <input type="file" name="image_url"/>
                 <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
            <div class="reference">
                <h2>参照</h2>
                <input type="text" name="post[reference]" placeholder="参照" value="{{ $post->reference }}"/>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class='footer'>
            <a href="/posts{{ $post->id}}">戻る</a>
        </div>
    </body>
</html>