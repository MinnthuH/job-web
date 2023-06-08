@extends('layouts.app')

@section('content')
<div class="section-header">
    <h1>Edit Category</h1>
</div>
<div class="row">
    <div class="col-lg-8 col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('update.category',$category->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-info sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



@endsection

