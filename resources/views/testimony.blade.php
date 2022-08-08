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
                            <a href="javascript:;" class="mt-2 read-testimony"  data-data='{{ json_encode($test) }}' > <i>Read More</i> </a>
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



<div class="modal fade" id="readmore">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-end" >
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-3 ">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    $(function() {
        $('body').on('click', '.read-testimony', function(){
            data = $(this).data('data');
            console.log(data);

            modal = $('#readmore');
            modal.modal('show')

            $(modal).find('.testimonial-3').html(`
                <div class="testimonial-pic">
                    <img src="assets/images/testimonials/${data.photo}" alt="">
                </div>
                <div class="testimonial-info">
                    <div class="info">
                        <h4 class="testimonial-name">${data.name}</h4>
                    </div>
                    <div class="testimonial-text">
                        <p>${data.testimony}</p>
                    </div>
                </div>
            `)
        })

        $('.btn-close').on('click', function() {
            $('#readmore').modal('hide')
        })
    })



</script>



@endsection
