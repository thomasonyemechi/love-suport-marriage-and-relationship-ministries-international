@extends('layouts.app')
@section('page_title')
    Download Item | {{ env('APP_NAME') }}
@endsection

@php
$scart = \App\Models\Scart::where('track_id', $track_id)->first();
$item = $scart->items[0];
@endphp
@section('page_content')
    {{-- <div class="dz-bnr-inr style-1" style="background-image:url({{ asset('assets/images/banner/shop2.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1 class="text-primary">Checkout Sucessfull</h1>
            </div>
        </div>
    </div> --}}

    <section class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  mb-3 mb-lg-0">
                        <div class="card-body text-center">
                            <h1 class="mb-0" style="font-size:80px"><i class="fa fa-check-circle text-success"></i></h1>

                            <h1> Download Has Started!</h1>
                            <h5>If download has not started, click button to download item manually. </h5>
                            <a href="/" class="btn btn-primary">Home</a>
                            <a href="/down/{{ $scart->id }}?val=1" target="_blank" class="btn btn-secondary">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    @php
                        $book = $item;
                    @endphp
                    <div class="item-box m-b30">
                        <div class="item-img">
                            <img class="simg" style="height: 450px" src="{{ asset('assets/store/' . $book->photo) }}"
                                alt="">
                            <span class="badge bg-success">{{ type($book->type) }}</span>
                            <div class="item-info-in">
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
                                    <li><a href="/store/{{ $book->slug }}"><i class="ti-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-info text-center">
                            <a class="video-title mb-0 pb-0" href="/store/{{ $book->slug }}">{{ $book->item }}</a>
                            {{ money($book->price) }}
                        </div>
                    </div>
                </div>
            </div>





            @php
                $testimonies = App\Models\Testimony::inRandomOrder()
                    ->limit(3)
                    ->get();
            @endphp
            <div class="row">
                <h2>Testimonials</h2>
                @foreach ($testimonies as $test)
                    <div class=" col-lg-4  col-md-6 mb-4 col-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <div data-count={{ $loop->iteration }} class="dz-card style-5 fadeIn wow" data-wow-delay=".2s"
                            data-wow-duration="2s">
                            <div class="dz-info text-center">
                                <div class="dz-meta mb-0">
                                    <div class="testimonial-3 p-0 ">
                                        <div class="testimonial-pic mt-0">
                                            <img src="{{ asset('assets/images/testimonials/' . $test->photo) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-0">{{ $test->name }}</h4>
                                <p class="mb-0 four-lines">{{ $test->testimony }}</p>
                                <a href="javascript:;" class="mt-2 read-testimony" data-data='{{ json_encode($test) }}'>
                                    <i>Read More</i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script>
        $(function() {
            function download() {
                console.log('<?= $scart->id ?>');
                $.ajax({
                    method: 'get',
                    url: '/down/' + "<?= $scart->id ?>"
                }).done(function(res) {
                    console.log(res);
                    var a = $("<a>")
                        .attr("href", 'http://127.0.0.1:802/'+res.path)
                        .attr("download", res.name)
                        .appendTo("body");
                    a[0].click();
                    a.remove();
                }).fail(function(res) {
                    console.log(res);
                    console.log('d failed');
                })
            }

            download();
        })
    </script>
@endsection
