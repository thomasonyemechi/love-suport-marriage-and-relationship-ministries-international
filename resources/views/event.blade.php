@extends('layouts.app')
@section('page_title')
Events | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Events</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@php
$events = App\Models\Event::paginate(12);
@endphp

<section class="content-inner">
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
                <div class=" col-lg-4  col-md-6 mb-4 col-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" >
                    <div class="dz-card style-5 fadeIn wow" data-wow-delay=".2s" data-wow-duration="2s">
                        <div class="dz-media">
                            <img src="{{ asset('assets/store/'.$event->photo)}}" alt="">
                        </div>
                        <div class="dz-info">
                            {{-- <span class="badge bg-success">Upcoming</span> --}}
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">{{ date('j', $event->date) }} <br> {{ date('F', $event->date) }} </li>
                                    <li class="post-catagory"><a href="javascript:void(0);">{{$event->tag}}</a></li>

                                </ul>

                            </div>
                            <h4 class="dz-title two-lines"><a href="javscript:;">{{ $event->name }}</a></h4>
                            <p class="four-lines">{{ $event->description }}</p>
                            <a class="link-icon read-event" href="javscript:;" data-data='{{ json_encode($event) }}'>Read More<i class="las la-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center mt-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" >
                {{$events->links('pagination::bootstrap-4')}}
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



                <div class="dz-card blog-single style-5">

                </div>

            </div>
        </div>
    </div>
</div>



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    $(function() {

        function toDateTime(secs) {
    var t = new Date(Date.UTC(1970, 0, 1)); // Epoch
    t.setUTCSeconds(secs);
    return t;
}





        $('body').on('click', '.read-event', function(){
            data = $(this).data('data');
            console.log(data);

            modal = $('#readmore');
            modal.modal('show')

            tags = ''

            tag = data.tag.split(',');
            tag.map(ta => {
                console.log(ta);
                tags += `
                    <a href="javascript:;">#${ta}</a>
                `
            })

            console.log(tag);


            $(modal).find('.blog-single').html(`
                <div class="dz-info">
                    <img src="assets/store/${data.photo}" style="width:100%; object-fit: cover;  height: 300px;" >
                    <h2 class="dz-title">${data.name}</h2>
                    <div class="dz-meta">
                        <ul>
                            <li class="post-category">${formatDate(toDateTime(data.date))}</li>
                            <li class="post-author"><i class="las la-user"></i><a href="javascript:void(0);">Admin</a></li>
                        </ul>
                    </div>
                    <p>${data.description}</p>
                </div>
                <div class="dz-share-post wow fadeIn" data-wow-delay=".2s" data-wow-duration="2s">

                    <div class="post-tags">
                        ${tags}
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
