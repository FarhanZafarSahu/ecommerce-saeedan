@extends('admin.layouts.admin');
@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Category</h4>
                </div>
                @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                @endif
                <div class="card-content">
                    <a href="{{route('category.create')}}" class="btn btn-primary ml-4">Add New</a>
                    <!-- table striped -->
                    <div class="table-responsive">
                    
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NAME</th>
                                <th>ICON</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @isset($category)
                                @foreach($category as $categorys)
                                    <tr>
                                    <td class="text-bold-500"> {{$categorys->id}} </td>
                                        <td class="text-bold-500"> {{$categorys->name}} </td>
                                        <td>{{$form->visibility}}</td>
                                        <td class="text-bold-500">{{$categorys->icon}}</td>

                                        <td>
                                            <a  href=""><i data-feather="edit" width="20"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href=""><i data-feather="trash-2" width="20"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection