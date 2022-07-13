@extends('layouts.app')
@section('page_title')
Testimonies | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Testimonies</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonies</li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@php
$testimonies = App\Models\Testimony::paginate(12);
@endphp

<section class="content-inner c ">
    <div class="container">
        <div class="row">
            @foreach ($testimonies as $test)
                <div class=" col-lg-4  col-md-6 mb-4 col-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" >
                    <div data-count={{ $loop->iteration }}
                        class="dz-card style-5 fadeIn wow" data-wow-delay=".2s" data-wow-duration="2s">
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
                            <a href="javascript:;" class="mt-2"> <i>Read More</i> </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center mt-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" >
                {{$testimonies->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</section>



@endsection
