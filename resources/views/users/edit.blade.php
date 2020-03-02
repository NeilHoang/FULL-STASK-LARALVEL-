@extends('layouts.layouts')
@section('page-heading','List Users')
@section('content')

    <form action="{{route('user.update',$users->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  name="name" value="{{$users->name}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control"  name="email"value=" {{$users->email}}">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="text" class="form-control" name="password" value="{{$users->password}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
            <img src="{{asset('storage/'.$users->image)}}" alt="" width="100">

        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('user.list')}}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
