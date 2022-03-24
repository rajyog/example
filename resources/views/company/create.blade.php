@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Company</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Company Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Company Name">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Company Email:</strong>
                                <input type="email" name="email" class="form-control" placeholder="Company Email">
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Company Address:</strong>
                                <input type="text" name="address" class="form-control" placeholder="Company Address">
                                @error('address')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection