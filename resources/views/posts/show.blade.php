<x-app-layout>
   <head>
        <h1 class="text-yellow-400", "text-2xl ...">地域文化シェア</h1>
    </head>    
    <body>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class="content__post">
                <h3>本文</h3>
                <p>{{$post->body }}</p>
            </div>
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
</x-app-layout>