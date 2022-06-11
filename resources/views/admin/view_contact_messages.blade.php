@extends('layouts.admin')
@section('page_title')
    Contact Messages | {{ env('APP_NAME') }}
@endsection
@section('page_content')
    <div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Messages</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Messages</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @php
                        $messages = App\Models\Contact::orderby('id', 'desc')->paginate(50);
                    @endphp
                    <div class="col-md-12">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">All Contact Messages</h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table class="table -sm table-hover">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" id="check_all" value="0" >
                                                        <label for="check_all"> </label>
                                                    </div>
                                                </th>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($messages as $msg)
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="icheck-primary">
                                                            <input type="checkbox" class="checks" id="check{{ $loop->iteration }}" value="{{$msg->id}}">
                                                            <label for="check{{ $loop->iteration }}"> </label>
                                                          </div>
                                                    </td>
                                                    <td class="align-middle">{{ $loop->iteration }} </td>
                                                    <td class="align-middle"> {{ $msg->full_name }} </td>
                                                    <td class="align-middle"> {{ $msg->email }} </td>
                                                    <td class="align-middle"> {{ $msg->phone }} </td>
                                                    <td class="align-middle"> {{ $msg->message }} </td>
                                                    <td class="align-middle"> {{ md($msg->created_at) }} </td>
                                                    <td class="align-middle">

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center">
                                    {{ $messages->links('pagination::bootstrap-4') }}
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
            $('#check_all').on('click', function() {
                inp = $('#check_all');
                if(inp.val() == 0) {
                    $('.checks').attr('checked', '');
                    inp.val(1)
                }else {
                    $('.checks').removeAttr('checked');
                    inp.val(0)
                }
            })
        })
    </script>
@endsection
