@extends('layouts.layouts')
@section('page-heading','List Users')
@section('content')

    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control"  name="email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('user.list')}}" class="btn btn-secondary">Cancel</a>
    </form>
    @endsection
