@extends('layouts.layouts')
@section('page-heading','Create Customers')
@section('content')


    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới Khách Hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Enter firs Name" required>
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Enter last Name " required>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone numbers" required>
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label for="">thanh pho</label>
                        <select name="city_id" class="custom-select mr-sm-2">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->cityName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>


@endsection
