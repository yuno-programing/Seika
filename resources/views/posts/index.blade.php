<x-app-layout>
        <span class="box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 ...">
            地域文化<br />
            シェア
        </span>
        <div>{{ Auth::user()->name }}</div>
                <div class="search">
                        <form action="{{ route('index') }}" method="GET">
                            @csrf
                            <div class="form-group">
                                <div>
                                    <label for="">キーワード
                                        <div>
                                                <input type="text" name="keyword" value="{{ $keyword }}">
                                        </div>
                                    </label>
                                </div>
                                <div>
                                    <label for="">都道府県
                                        <div>
                                            <select name="prefecture" data-toggle="select">
                                                <option value="">全て</option>
                                                @foreach ($prefectures as $prefecture)
                                                    <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>s
                                                @endforeach
                                            </select>
                                        </div>
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" class="btn" value="検索">
                                </div>
                            </div>
                        </form>
               </div>  
        
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href='/posts/create'>投稿する</a>
            </span>
        </button>
        
        <div class="relative">
                <div class='posts'>
                    @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                    @endforeach
                </div>
        </div>
</x-app-layout>