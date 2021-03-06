@extends('admin_home')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<form method="POST" action="{{URL::to("/admin/forum/insert-cate-forum")}}">
				{{csrf_field()}}
				<div class="form-group">
					<label>Tên Chủ Đề</label>
					<input class="form-control" type="text" name="name_cate">
					<br>
					<button class="btn btn-success" type="submit" name=""><i class="fas fa-plus"></i> Thêm</button>
				</div>
			</form>
			<div class="table-responsive">       
				  <table class="table table-striped">
				    <thead>
				      <tr>
				      	<th><input type="checkbox" name=""></th>
				        <th>Tên Chủ Đề</th>
				        <th>Chức Năng</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($data as $key=>$value)
				      <tr>
				        <td><input type="checkbox" value="{{$value['id_cate']}}" name=""></td>
				        <td>{{$value['name_cate']}}</td>
				        <td><a class="btn btn-warning" href="{{URL::to('/edit-cate-forum/'.$value['id_cate'])}}"><i class="far fa-edit"></i> Sửa</a>
				        <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?');" class="btn btn-danger" href="{{URL::to('/del-cate-forum/'.$value['id_cate'])}}"><i class="far fa-trash-alt"></i> Xóa</a>
				        </td>
				      </tr>
				    @endforeach
				    </tbody>
				  </table>
  			</div>
		</div>
		{{-- <div class="col-lg-12">
			<label>Bài viết diễn dàn</label>  
			<div class="table-responsive">
			<br>       
				  <table class="table">
				    <thead>
				      <tr>
				        <th><input type="checkbox" name=""></th>
				        <th>Tiêu đề bài viết</th>
				        <th>Tình trạng</th>
				        <th>Chức Năng</th>
				      </tr>
				    </thead>
				    <tbody>
					   @foreach($blog as $key=>$value)
					   <tr>
					   <td><input type="checkbox" value="{{$value['id_blog']}}" name=""></td>
					   <td>{{$value['title_blog']}}</td>
					   <td>Đã đăng</td>
				        <td><a class="btn btn-warning" href="{{URL::to('/edit-blog/'.$value['id_blog'])}}"><i class="far fa-edit"></i> Sửa</a>
				        <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?');" class="btn btn-danger" href="{{URL::to('/del-blog/'.$value['id_blog'])}}"><i class="far fa-trash-alt"></i>Xóa</a>
				        </td>
				        </tr>
					   @endforeach
				    </tbody>
				  </table>
  			</div>
		</div> --}}
	</div>
</div>
@endsection