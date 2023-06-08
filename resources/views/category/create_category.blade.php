@extends('layouts.app')

@section('content')
 <div class="section-header">
        <h1>Add Category</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store.category')}}" method="post"  id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" name="name"
                                    class="form-control @error('name') is-invalid
                                @enderror">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-info sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
