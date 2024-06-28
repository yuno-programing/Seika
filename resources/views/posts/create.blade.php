<x-app-layout>
    <body>
        <h1 class="text-yellow-400">地域文化シェア</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>{{ Auth::user()->name }}</div>
           <div class="prefecture_id">
                <h2>都道府県</h2>
                <select name="post[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value={{ $prefecture->id }}>{{ $prefecture->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="culture_id">
                <h2>カテゴリー</h2>
                 <select name="post[culture_id]">
                    @foreach($cultures as $culture)
                        <option value={{ $culture->id }}>{{ $culture->name }}</option>
                    @endforeach
            </div>
            <div class="place">
                <h2>場所の詳細</h2>
                <input type="text" name="post[place]" placeholder="〇〇市"/>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="文化を紹介しよう。"></textarea>
            </div>
            <div class="image">
                <h2>写真</h2>
                <input type="file" name="image">
            </div>
            <div class="reference">
                <h2>参照</h2>
                <input type="text" name="post[reference]" placeholder="参照"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
</x-app-layout>