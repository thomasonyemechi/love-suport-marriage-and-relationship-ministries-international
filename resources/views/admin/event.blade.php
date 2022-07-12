@extends('layouts.admin')
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
                        <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Events</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="mt-3">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Add Event</h3>
                            </div>
                            <div class="card-body">
                                <form class="row" method="POST" action="event/add_new" enctype="multipart/form-data"
                                    action="testimonial/add_new">@csrf
                                    <div class="col-md-12 form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="event" class="form-control" placeholder="Event Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Event Picture <span class="text-danger">*</span></label>
                                        <input type="file" name="photo" accept="image/*" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Date <span class="text-danger">*</span></label>
                                        <input type="date" name="date" class="form-control">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label>Event Tags </label>
                                        <input type="text" name="tags" class="form-control" placeholder="e.g Relationship, Family ">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label>Event Details <span class="text-danger">*</span> </label>
                                        <textarea name="description" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class=" col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @php
                        $events = App\Models\Event::orderby('id', 'desc')->paginate(25);
                    @endphp
                    <div class="col-md-8">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Event List</h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table class="table -sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Tags</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($events as $event)
                                                <tr>
                                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                                    <td class="align-middle"> {{ $event->name }} </td>
                                                    <td class="align-middle"> {{ $event->tag }} </td>
                                                    <td class="align-middle"> {{ date('j M , Y',$event->date) }} </td>
                                                    <td class="align-middle"> {{ $event->description }} </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex">
                                                            <a href="event/delete/{{ $event->id }}"
                                                                class="btn btn-danger btn-xs"
                                                                onclick="return confirm('Testimony will be deleted')"> <i
                                                                    class="fa fa-trash" aria-hidden="true"></i> </a>
                                                            <button data-data="{{ json_encode($event) }}"
                                                                class="editTestimony btn ms-2 btn-xs btn-primary"> <i
                                                                    class="fas fa-edit"></i> </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center">
                                    {{ $events->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <div class="modal fade" id="editTestimonyModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Testimony</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row" method="POST" enctype="multipart/form-data" action="testimonial/edit">@csrf
                        <div class="col-md-6 form-group">
                            <label>Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" class="form-control" placeholder="Testifier Name">
                            <input type="hidden" name="testimony_id">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Pics </label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Testimony <span class="text-danger">*</span> </label>
                            <textarea name="testimony" class="form-control" rows="3"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <button class="btn btn-secondary float-right">Update Testimony</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            // $('body').on('click', '.editTestimony', function() {
            //     data = $(this).data('data');
            //     modal = $('#editTestimonyModal');
            //     modal.modal('show');
            //     $(modal).find('input[name="testimony_id"]').val(data.id);
            //     $(modal).find('input[name="name"]').val(data.name);
            //     $(modal).find('textarea').html(data.testimony);
            // })
        })
    </script>
@endsection
