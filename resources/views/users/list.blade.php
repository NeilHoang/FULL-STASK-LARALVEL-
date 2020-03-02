@extends('layouts.layouts')
@section('page-heading','List Users')
@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                @foreach($users as $key => $user)
                    <tbody>
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><img src="{{asset('storage/'.$user->image)}}" alt="" width="100"></td>
                        <td ><a href="{{route('user.destroy',$user->id)}}" class="btn btn-danger">Delete</a><a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-success">Show</a></td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
            <a href="{{route('user.create')}}" class="btn btn-primary">Create</a>

        </div>
    </div>
@endsection
