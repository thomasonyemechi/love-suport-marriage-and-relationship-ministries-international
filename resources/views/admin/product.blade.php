@extends('layouts.admin')
@section('page_title')
    Store | {{$item->item}}
@endsection
@section('page_content')
    <div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/store/'.$item->photo) }}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Store</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Manage Store</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$item->item}}</li>
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
                                <h3 class="card-title">Edit Item Details</h3>
                            </div>
                            <div class="card-body p-2">
                                <form class="row" id="addProduct" method="POST" enctype="multipart/form-data" >@csrf
                                    <div class="col-md-8 form-group">
                                        <label>Item Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="item" value="{{$item->item}}" class="form-control" placeholder="Name Of Product">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Item Price </label>
                                        <input type="number" name="price" value="{{$item->price}}"" class="form-control" placeholder="price">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="2"> {{$item->description}}</textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Item Details</label>
                                        <textarea name="details" class="form-control" rows="4"> {{$item->more}} </textarea>
                                    </div>


                                    <div class="col-md-6 form-group">
                                        <label>Display Pics <span class="text-danger">*</span> </label>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="type">
                                            <option selected disabled>...Select Item Type</option>
                                            <option value="1">Audio Format</option>
                                            <option value="2">Video Format</option>
                                            <option value="3">TEXT Format</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label>Snippet File<span class="text-danger">*</span> </label>
                                        <input type="file" name="snippet" class="form-control">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Main Item File<span class="text-danger">*</span> </label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Delivery<span class="text-danger">*</span></label>
                                        <select class="form-control" name="delivery">
                                            <option selected disabled>...Select Item Type</option>
                                            <option value="1">Online (Download & Attachment)</option>
                                            <option value="2">Others (Form Hard Copies)</option>
                                        </select>
                                    </div>


                                    <div class=" col-md-12">
                                        <button class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Purchase History</h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table class="table -sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Type</th>
                                                <th>Delivery</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center">
                                    {{-- {{ $products->links('pagination::bootstrap-4') }} --}}
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
            $('#addProduct').on('submit', function(e) {
                e.preventDefault()
                data = $(this);
                sbtn = $(data).find('button');
                formData = new FormData(this);
                $.ajax({
                    method: 'POST',
                    url: `/control/store/add_new`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: () => {
                        sbtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> processing Request ');
                    },
                }).done(function(res) {
                    console.log(res);
                    alert('done')
                }).fail(function(res) {
                    console.log(res);
                    alert('Submission Failed Retry');
                })
            })
        })
    </script>
@endsection
