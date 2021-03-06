@extends('layouts.admin')
@section('page_title')
    Store | {{ env('APP_NAME') }}
@endsection
@section('page_content')
    <div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Store</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Store</li>
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
                                <h3 class="card-title">Add New Item</h3>
                            </div>
                            <div class="card-body p-2">
                                <ul>
                                    @foreach ($errors as $er)
                                    <li>{{$er}}</li>
                                @endforeach
                                </ul>
                                <form class="row" id="addProduct" method="POST" enctype="multipart/form-data" >@csrf
                                    <div class="col-md-8 form-group">
                                        <label>Item Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="item" class="form-control" placeholder="Name Of Product">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Item Price </label>
                                        <input type="number" name="price" class="form-control" placeholder="price">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Item Details</label>
                                        <textarea name="details" class="form-control" rows="4"></textarea>
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
                                <h3 class="card-title">Store Item List</h3>
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

                                        <tbody class="item_body">

                                        </tbody>
                                    </table>
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
            function fetchStoreItem()
            {
                $.ajax({
                    method: 'get',
                    url: '/control/get_item_list'
                }).done(function(res) {
                    tbody = $('.item_body')
                    tbody.html('');

                    res.data.data.map((item, index) => {
                        console.log(item);
                        tbody.append(`
                            <tr>
                                <td class="align-middle">${index+1}</td>
                                <td class="align-middle">${item.item}</td>
                                <td class="align-middle">${money(item.price)}</td>
                                <td class="align-middle">${type(item.type)}</td>
                                <td class="align-middle">${delivery(item.on_del)}</td>
                                <td class="align-middle">${formatDate(item.created_at)}</td>
                                <td class="align-middle">
                                    <a href="/control/store/${item.slug}" class="btn btn-xs btn-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        `)
                    })

                    console.log(res);


                }).fail(function(res) {
                    salat('An error occured while trying to load your data, Try again by reloading this page', 1);
                })
            }

            fetchStoreItem();


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
                        btn(sbtn, 'submit', 'before');
                    },
                }).done(function(res) {
                    salat(res.message)
                    btn(sbtn, 'submit', 'after');
                    fetchStoreItem();
                    $(this)[0].reset();
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    btn(sbtn, 'submit', 'after');
                })
            })
        })
    </script>
@endsection
