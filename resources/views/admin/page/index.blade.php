@extends('admin.share.master_page')
@section('noi_dung')
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center"><b> Thêm Mới Chuyên Mục </b></div>
                <div class="card-body">
                    <form action="/admin/chuyen-muc/index" method="POST">
                        @csrf
                        <div class="col-12 mb-2">
                            <label class="form lable"><b>Tên Chuyên Mục</b></label>
                            <input name="name_column" class="form-control" placeholder="Nhập vào tên chuyên mục">
                        </div>

                        <div class="col-12 mb-2">
                            <label class="form lable"><b>Tình Trạng</b></label>
                            <select name="status" class="form-control">
                                <option value="1">Hoàn Thành</option>
                                <option value="0">Chưa Xong</option>
                            </select>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary"><b>Thêm Chuyên Mục</b></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center"><b> Danh Sách Chuyên Mục </b></div>
            <div class="card-body">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên Chuyên Mục</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $key => $value )
                            <tr>
                                <th class="text-center align-middle ">{{ $key + 1 }}</th>

                                <td class="align-middle text-center " style=" @if ($value->status == 1) text-decoration: line-through; @endif">{{ $value->name_column }}</td>

                                <td class="align-middle text-center text-nowrap">
                                    @if ($value->status == 1)
                                         <a class="btn btn-danger" style="text-decoration: line-through;" href="/change-status/{{$value->id}}">Hoàn Thành</a>
                                    @else
                                          <a class="btn btn-primary" href="/change-status/{{$value->id}}">Chưa Xong</a>
                                    @endif


                                </td>

                                <td class="text-center">
                                    <a class="btn btn-danger" href="/admin/chuyen-muc/delete/{{$value->id}}">Xóa Bỏ</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
<script>

</script>
@endsection
