@extends('welcome')
@if(isset($course))
@section('title',"Khóa học")
@elseif(isset($course_cate))
@foreach($course_cate as $key=>$value)
@section('title',$value->name)
@endforeach
@endif
@section('content')
<br>
	<div class="container-fluid bg_course">
		<br>
		<br>
	        <div class="head-course hide-on-mobile" style="background:#d4d5f5 url({{asset('public/frontend/img/course-head.png')}})center right 3%/contain no-repeat;">
	            <h1>Học tập cùng <span>chuyên gia</span>,</h1>
	            <h2>tham gia khoá học lập trình để nâng cao kỹ năng bản thân!</h2>
	            <div id="search" class="block-top-head">
	                <div class="input-group">
	                    <form id="form-search" action="/learning?">
	                        <span class="fa fa-search"></span>
	                        <input Name="name" id="search-course" type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm">
	                    </form>
	                </div>
	            </div>
			</div>
		<div class="container mobile-container"  style="padding: 0;">
			<div id="list">
				<?php
				$id_cate=999;
				?>
				<section class="list-courses">
					<div class="row">
						@if(isset($course))
						<?php
						$data=$course
						?>
						@elseif(isset($course_cate))
						<?php
						$data=$course_cate
						?>
						@endif
						@foreach($data as $key=>$value)
						<?php
					    $img= "public".$value->img_course;
					    $desc=$value->desc_course;
					    if (strlen($desc)>80) {
					    	$desc= substr($desc, 0,80) . '...</p>';
					    }
					    if ($id_cate!=$value->id_cate) {
					    	echo '<div class="col-lg-12" >
					    	<h2 class="title-block">'.$value->name.'</h2>
					    </div>';
					    $id_cate= $value->id_cate;
					    }
					    ?>
						<article class="course-item col-xs-6 col-md-4 col-lg-3">
							<div class="border_course">
								<div class="wrap-course-item">
									<div class="course-thumb">
										<a href="{{URL::to('/course/post/'.$value->id_course)}}" title="<?php echo $value->title_course ?>">
											<img style="width: 100%;height: 170px;" src="{{asset($img)}}" alt="{{$value->title_course}}">
										</a>
										<div class="timeCouter">
											<span class="time">18:00:00</span>
										</div>
									</div>
									<div class="view-content">
										<h3 class="course-title"><a href="{{URL::to('/course/post/'.$value->id_course)}}">{{$value->title_course}}</a></h3>
										<div class="wrap_desc">
											{!!$desc!!}
										</div>
										<br>
										<div class="user-rating">
											<div class="course-info">
												<span class="lession-count"><i class="fa fa-desktop"></i>55</span>
												<span class="student-count"><i class="fas fa-user-alt"></i>2271</span>
											</div>
											<span class="star-rating"><span style="width:90.0%"></span></span>
										</div>
									</div>
									<div class="badge">
										<span class="name_badge">Khóa mới</span>
									</div>
								</div>
							</div>
						</article>
						@endforeach
					</div>
				</section>
			</div>
		</div>
	</div>
		
@endsection