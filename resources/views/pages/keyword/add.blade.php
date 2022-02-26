@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h5 class="font-14">Thêm từ khóa</h5>
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{route('admin.keyword.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Từ khóa</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Từ khóa...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="example-email">Loại sản phẩm</label>
                        <div class="col-md-10">
                            <select name="category" class="form-control">
                                @foreach ($categories  as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success">Thêm</button>
                        <a href="{{route('admin.keyword.list')}}" class="btn btn-primary">Trở lại</a>
                    </center>
                </form>
            </div>

        </div>
        <!-- end -->

    </div>
</div>
@endsection