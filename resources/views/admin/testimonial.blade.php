@extends('layouts.admin')
@section('page_title')
    Testmonial | {{ env('APP_NAME') }}
@endsection
@section('page_content')
    <div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Testimonial</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Testimonial</li>
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
                                <h3 class="card-title">Add New Testimony</h3>
                            </div>
                            <div class="card-body">
                                <form class="row" method="POST" enctype="multipart/form-data"
                                    action="testimonial/add_new">@csrf
                                    <div class="col-md-6 form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="name" class="form-control" placeholder="Testifier Name">
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
                                        <button class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @php
                        $testimonies = App\Models\Testimony::orderby('id', 'desc')->paginate(25);
                    @endphp
                    <div class="col-md-8">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Testimony List</h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table class="table -sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Testifier</th>
                                                <th>Testimony</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($testimonies as $test)
                                                <tr>
                                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                                    <td class="align-middle"> {{ $test->name }} </td>
                                                    <td class="align-middle"> {{ $test->testimony }} </td>
                                                    <td class="align-middle"> {{ md($test->created_at) }} </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex">
                                                            <a href="testimonial/delete/{{ $test->id }}"
                                                                class="btn btn-danger btn-xs"
                                                                onclick="return confirm('Testimony will be deleted')"> <i
                                                                    class="fa fa-trash" aria-hidden="true"></i> </a>
                                                            <button data-data="{{ json_encode($test) }}"
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
                                    {{ $testimonies->links('pagination::bootstrap-4') }}
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
            $('body').on('click', '.editTestimony', function() {
                data = $(this).data('data');
                modal = $('#editTestimonyModal');
                modal.modal('show');
                $(modal).find('input[name="testimony_id"]').val(data.id);
                $(modal).find('input[name="name"]').val(data.name);
                $(modal).find('textarea').html(data.testimony);
            })
        })
    </script>
@endsection
