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
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
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
                    <div class="col-md-6">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Add New Testimony</h3>
                            </div>
                            <div class="card-body">
                                <form class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="email" class="form-control" placeholder="Testifier Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>User Pics </label>
                                        <input type="file" class="form-control" >
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Testimony <span class="text-danger">*</span> </label>
                                        <textarea name="testimony"  class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class=" col-md-12">
                                        <button class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary ">
                            <div class="card-header p-2">
                                <h3 class="card-title">Testimony List</h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="tabel-responsive">
                                    <table class="table table-sm table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Testifier</th>
                                                <th>Testimony</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
