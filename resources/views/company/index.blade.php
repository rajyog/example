@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Company</h3>
            <div class="section-header-button">
              <a href="{{ route('companies.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Company Name</th>
                                    <th>Company Email</th>
                                    <th>Company Address</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->address }}</td>
                                    <td>
                                        <form id="delete-company-{{$company->id}}" action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                                    <!-- <button type="submit" class="btn btn-danger" >Delete</button> -->
                                                            <a href="{{ route('companies.destroy', $company->id) }}" class="action-item"  data-original-title="{{__('Delete')}}" data-confirm="{{__('Are You Sure?').'|'.__('This action can not be undone. Do you want to continue?')}}" data-confirm-yes="document.getElementById('delete-company-{{$company->id}}').submit();"><i class="fas fa-trash-alt"></i>
                    </a>
                                        </form>





                                        </td>
                                </tr>
                                @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection