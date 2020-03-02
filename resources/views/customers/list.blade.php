@extends('layouts.layouts')
@section('page-heading','List Customer')
@section('content')

    <div class="col-12" style="!important; vertical-align: middle">
        <div class="row">
            <div class="col-12">
                <h1>{{__('language.list_customer')}}</h1>
            </div>
            <button class="btn btn-outline-success" id="hide-image">Hide Image</button>
            <input type="number" value="2" id="image-thumbnail-customer" class="btn btn-outline-warning">
            <table class="table table-bordered table-hover" style="text-align: center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số Điên Thoại</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Ảnh Đại Diện</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th style="text-align: center;vertical-align: middle" scope="row">{{ ++$key }}</th>
                            <td style="text-align: center;vertical-align: middle">{{ $customer->firstName }}</td>
                            <td style="text-align: center;vertical-align: middle">{{ $customer->lastName }}</td>
                            <td style="text-align: center;vertical-align: middle">{{ $customer->phone }}</td>
                            <td style="text-align: center;vertical-align: middle">{{ $customer->address }}</td>
                            <td style="text-align: center;vertical-align: middle" class="image-customer"><img
                                    src="{{asset('storage/'.$customer->image)}}" class="image-size" alt="" width="100">
                            </td>
                            <td style="text-align: center;vertical-align: middle"><a href="#" class="btn btn-secondary">sửa</a><a
                                    href="{{ route('customer.destroy',$customer->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{$customers->links()}}
        </div>
        <a class="btn btn-primary" href="{{route('customer.create')}}">Thêm mới</a>

    </div>


@endsection
