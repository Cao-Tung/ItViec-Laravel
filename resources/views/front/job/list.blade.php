<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ITviec.com</title>
	<base href="{{asset('')}}"></base>
	<link rel="stylesheet" href="itviec/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" href="itviec/assets/css/bootstrap-theme.css.map">
	<link rel="stylesheet" href="itviec/assets//css/bootstrap.css">
	<link rel="stylesheet" href="itviec/assets//css/bootstrap.css.map">
	<link rel="stylesheet" href="itviec/assets//font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="itviec/assets//font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="itviec/assets//css/bootstrap-toggle.css">

	<link rel="stylesheet" href="itviec/assets//css/style.css">
</head>

<body>
	<div id="header" class="container-fluid">
		<div id="content-header" class="container">
			<div class="row">
				<div class="col-md-2" id="logo">
					<img src="itviec/assets//image/logo.png">
				</div>
				<div class="col-md-10" id="top-menu">
					<ul>
						<li>
							<a href="#about">Nhà Tuyển Dụng</a>
						</li>
						<li>
							<div class="toggle btn btn-primary" data-toggle="toggle" style="margin-top:10px; width: 58px; height: 34px;">
								<input checked type="checkbox" data-toggle="toggle">
								<div class="toggle-group">
									<label class="btn btn-primary toggle-on">VN</label>
									<label class="btn btn-default active toggle-off">EN</label>
									<span class="toggle-handle btn btn-default"></span>
								</div>
							</div>
						</li>
						<li>
							<a href="#about">Đăng Nhập</a>
						</li>
						<li>
							<a href="#contact">Blog</a>
						</li>
						<li>
							<a href="#news">Công Ty IT Hàng Đầu</a>
						</li>
						<li>
							<a href="#home">Việc Làm IT</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-bell fa-3" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Phần nội dung chính -->
	<div id="content" class="container-fluid">
		<!-- Vùng tìm kiếm -->
		<div id="searching-area">
			<div class="container-fluid" id="content-searching">
				<div class="row">
					<!-- Vùng text tìm kiếm -->
					<div class="col-md-7 input-group" id="text-searching">
						<span class="input-group-addon" id="basic-addon1">
							<i class="fa fa-search fa-3" aria-hidden="true"></i>
						</span>
						<input id="text-area-searching" type="text" class="form-control" placeholder="Tìm kiếm theo kĩ năng, chức vụ, công ty" aria-describedby="basic-addon1">
					</div>
					<!-- Thành Phố -->
					<div class="col-md-3 form-group" id="city">
						<select class="form-control" id="sel1">
							<option>Hà Nội</option>
							<option>Hồ Chí Minh</option>
							<option>Đà Nẵng</option>
							<option>Hải Dương</option>
						</select>
					</div>
					<!-- Button -->
					<div class="col-md-2" id="btn-search">
						<button class="btn danger">Tìm Kiếm</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Phần nội dung chính của trang -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-9 list-jobs">
						<div id="title-list">
							<h1>{{$job_count}} việc làm IT tại Việt Nam cho bạn</h1>
						</div>


						<div id="jobs">
							<!-- List job -->
							@php $number=0; @endphp @foreach($jobs as $job)
							<div class="job container-fluid" id="job{{$number++}}">
								<div class="row job-content">
									<div class="col-md-2 img-company">
										<img src="itviec/assets//image/company.png" alt="">
									</div>
									<div class="col-md-10 job-description">
										<div class="job-body">
											<div class="title-job">
												<h2>
													<a href="#">{{$job->job}}</a>
												</h2>
												<div class="salary not-signed-in">
													<span class="salary-icon-stack">
														<i class="fa fa-usd" aria-hidden="true"></i>
													</span>
													<a class="popup-link view-salary" data-popup-id="sign_in" data-link-status="sign_in_tab" href="javascript:void(0)">Đăng nhập để xem mức lương
														<i class="fa fa-caret-right" aria-hidden="true"></i>
													</a>
												</div>
												<div class="description">
													<p>• Lương: {{$job->salary}}
														<br>• Địa điểm: {{$job->area}}</p>
												</div>
											</div>
										</div>
										<div class="job-bottom">
											<div class="tag-list">
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														Ruby on Rails
													</span>
												</a>
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														JavaScript
													</span>
												</a>
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														Ruby
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<div id="add">
							</div>
							<!-- Button -->
							<div id="show-more-wrapper">
								<div>
									<a id="show-more" class="more-jobs-link">Xem thêm việc làm </a>
								</div>
							</div>
						</div>
						{{--
						<div class="row">{{$jobs->links()}}</div> --}}

					</div>

					<div class="col-md-3" id="right-side">
						<div id="content-right">
							<div id="title-right">
								<h3>Nhà Tuyển Dụng Nổi bật</h3>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="clear">

	</div>


	<div class="footer">
		<div class="footer-content">
			<div class="footer-link">
				Liên hệ để đăng tin tuyển dụng tại Hồ Chí Minh: (+84) 977 460 519 - Hà Nội: (+84) 964 618 859 - Email: love@itviec.com

			</div>
			<div class="col-md-3 footer-links__col">
				<a class="footer-link" href="/vi">Trang Chủ</a>
				<a class="footer-link" href="/viec-lam-it">Việc Làm IT</a>
				<a target="_blank" class="footer-link" href="#">Về ITviec.com</a>
				<a target="_blank" class="footer-link" href="#">Quy chế hoạt động</a>
			</div>
			<div class="col-md-3 footer-links__col">
				<a target="_blank" class="footer-link" href="#">Quy định bảo mật</a>
				<a target="_blank" class="footer-link" href="#">Thoả thuận sử dụng</a>
				<a target="_blank" class="footer-link" href="#">Chính sách giải quyết khiếu nại</a>
				<span class="footer-link">Copyright © ITviec Ltd</span>
			</div>
			<div class="col-md-6 footer-links__col">
				<span class="footer-link">Địa chỉ: 60 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, Tp.HCM</span>
				<span class="footer-link">MST: 0312192258</span>
				<span class="footer-link">Điện thoại: 028.66811397</span>
				<div class="follow hidden-xs">
					<div class="social_icons">
						<a target="_blank" class="tw-icon" rel="nofollow" href="#"></a>
						<a target="_blank" class="fb-icon" rel="nofollow" href="#"></a>
						<a target="_blank" class="in-icon" rel="nofollow" href="#"></a>
						<a target="_blank" rel="publisher" class="gp-icon" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="itviec/assets//js/bootstrap.js"></script>
	<script type="text/javascript" src="itviec/assets//js/bootstrap.min.js"></script>
	<script type="text/javascript" src="itviec/assets//js/bootstrap-toggle.js"></script>
	<script type="text/javascript" src="itviec/assets//jquery-3.2.1.min.js"></script>
	
	<script>
		var num = 4;
		$(document).ready(function(){
			$("#show-more").click(function(){
				$.ajax({
					type: 'get',
					url: 'http://localhost:8000/get-job',
					data: {
						'offset': num
					},
	    			success: function(response) {
						show(response);
						num+=4;
	    			}
				});
			});
		});

		function show(response) {
			var jobs = response;
			var temp = $('#add');
			var html ="";
			var count = num;
			jobs.forEach(function(job) {
				html += `	<div class="job container-fluid" id="job`+count+`">
								<div class="row job-content">
									<div class="col-md-2 img-company">
										<img src="itviec/assets//image/company.png" alt="">
									</div>
									<div class="col-md-10 job-description">
										<div class="job-body">
											<div class="title-job">
												<h2>
													<a href="#">`+job.job+`</a>
												</h2>
												<div class="salary not-signed-in">
													<span class="salary-icon-stack">
														<i class="fa fa-usd" aria-hidden="true"></i>
													</span>
													<a class="popup-link view-salary" data-popup-id="sign_in" data-link-status="sign_in_tab" href="javascript:void(0)">Đăng nhập để xem mức lương
														<i class="fa fa-caret-right" aria-hidden="true"></i>
													</a>
												</div>
												<div class="description">
													<p>• Lương: `+job.salary+`
														<br>• Địa điểm: `+job.area+`</p>
												</div>
											</div>
										</div>
										<div class="job-bottom">
											<div class="tag-list">
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														Ruby on Rails
													</span>
												</a>
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														JavaScript
													</span>
												</a>
												<a class="job__skill ilabel" href="/viec-lam-it/ruby-on-rails">
													<span>
														Ruby
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>`;
							count++;
			});
			temp.append(html);
		}
	</script>
</body>

</html>