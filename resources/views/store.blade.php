@extends('layouts.app')
@section('page_title')
    Store | {{ env('APP_NAME') }}
@endsection
@section('page_content')




<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr3.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Store</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Store</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>


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

        <div class="row">
            <h2>Trending Videos</h2>
            @php
                $videos = App\Models\Store::where(['type' => 2])->orderby('id', 'desc')->limit(6)->get();
            @endphp

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

        <div class="row">
            <h2>Audio Messages</h2>
            @php
                $audio = App\Models\Store::where(['type' => 1])->orderby('id', 'desc')->limit(6)->get();
            @endphp

            @foreach ($audio as $aud)
                <div class="col-lg-4 col-sm-6">
                    <div class="item-box m-b30">
                        <div class="item-im">
                            <audio style="width: 100%" controls autoplay>
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
    </div>
</section>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->

<script>
    $(function (){

    })
</script>
@endsection
