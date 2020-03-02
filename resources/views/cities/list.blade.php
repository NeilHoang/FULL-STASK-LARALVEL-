@extends('layouts.layouts')
@section('page-heading','List Cities')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>{{__('language.list_city')}}</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($cities as $key => $citie)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $citie->cityName }}</td>
                            <td>{{$citie->customer->count()}}</td>
                            <td><a href="{{route('cities.edit',$citie->id)}}" class="btn btn-secondary">sửa</a><a
                                    href="{{route('cities.destroy',$citie->id)}}" class="btn btn-danger"
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            <td></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{$cities->links()}}
        </div>
        <a class="btn btn-primary" href="{{route('cities.create')}}">Thêm mới</a>

    </div>


@endsection
