@extends('layouts.app')
@section('page_title')
    Store | {{ env('APP_NAME') }}
@endsection
@section('page_content')


<section class="content-inner">
    <div class="container">
        <div class="row">
            <h2>Books</h2>
            @php
                $books = App\Models\Store::where(['type' => 3])->orderby('id', 'desc')->limit(6)->get();
            @endphp

            @foreach ($books as $book)
                <div class="col-lg-4 col-sm-6">
                    <div class="item-box m-b30">
                        <div class="item-img">
                            <img class="simg" style="height: 450px" src="{{asset('assets/store/'.$book->photo) }}" alt="">
                            <span class="badge bg-success">{{type($book->type)}}</span>
                            <div class="item-info-in">
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
                                    <li><a href="/store/{{$book->slug}}"><i class="ti-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-info text-center">
                            <a class="video-title mb-0 pb-0" href="/store/{{$book->slug}}">{{$book->item}}</a>
                            {{money($book->price)}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        @php
            $videos = App\Models\Store::where(['type' => 2])->orderby('id', 'desc')->limit(6)->get();
        @endphp
        @if (count($videos) > 0)
        
            <div class="row">
                <h2>Trending Videos</h2>
                

                @foreach ($videos as $vid)
                    <div class="col-lg-4 col-sm-6">
                        <div class="item-box m-b30">
                            <div class="item-im videoitem" style="border-radius: 20px">
                                <video style="width: 100%" controls>
                                    <source src="{{asset('assets/store/'.$vid->snippet) }}" type="video/mp4">
                                    {{-- <source src="mov_bbb.ogg" type="video/ogg"> --}}
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                            <div class="item-info text-center">
                                <a class="video-title mb-0 pb-0" href="/store/{{$vid->slug}}">{{$vid->item}}</a>
                                {{money($vid->price)}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @php
            $audio = App\Models\Store::where(['type' => 1])->orderby('id', 'desc')->limit(6)->get();
        @endphp
        @if (count($audio) > 0)
            <div class="row">
                <h2>Audio Messages</h2>
        

                @foreach ($audio as $aud)
                    <div class="col-lg-4 col-sm-6">
                        <div class="item-box m-b30">
                            <div class="item-im">
                                <audio style="width: 100%" controls>
                                    <source src="{{asset('assets/store/perfect.mp3') }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="item-info text-center">
                                <a class="video-title mb-0 pb-0" href="/store/{{$aud->slug}}">{{$aud->item}}</a>
                                {{money($aud->price)}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @endif
    </div>
</section>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->

<script>
    $(function (){

    })
</script>
@endsection
