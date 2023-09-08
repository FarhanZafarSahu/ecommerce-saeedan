@extends('admin.layouts.admin');
@section('content')
<div class="main-content container-fluid">
    <section class="section">
        <div class="main-content container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Category</h4>
                    </div>
                    <form method="post" action="{{route('category.store')}}" enctype='multipart/form-data'>
                        @csrf
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="basicInput">Category Name:</label><br>
                                        <input type="text" class="form-control" name="name" id="basicInput"
                                            placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="basicInput">Category Icon:</label><br>
                                        <input type="file" class="form-control" name="icon" id="basicInput" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection