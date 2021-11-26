@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <h1>自己紹介一覧</h1>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="body mx-auto">名前：　{{ str_limit($headline->name, 20) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">年齢：　{{ str_limit($headline->gender, 20) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">趣味：　{{ str_limit($headline->hobby, 200) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">一言：　{{ str_limit($headline->introduction, 200) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    名前：　　{{ str_limit($post->name, 20) }}
                                </div>
                                <div class="body mt-3">
                                    性別：　{{ str_limit($post->gender, 6) }}
                                </div>
                                <div class="body mt-3">
                                    趣味：　{{ str_limit($post->hobby, 1000) }}
                                </div>
                                <div class="body mt-3">
                                    一言：　{{ str_limit($post->introduction, 1000) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection