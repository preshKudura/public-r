<div>
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2> News  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <section class="blog-section blog-post-01 page-content">
		<div class="container">

			<div class="row">
				<div class="col-md-8 blog-posts">
		@if (!empty($posts))
			@foreach ($posts as $item)

					<div class="post-wrapper post-split clearfix">
						<div class="image-wrapper">
							<img class="img-responsive"
							src="{{Storage::url($item->image)}}"
							alt="blog image">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>{{$item->author->name}}</li>
								<li>{{$item->published_at->diffForHumans()}}</li>

								<li><a href="#">{{$item->getReadingTime()}} minutes read</a></li>
							</ul>
							@foreach ($item->categories as $cat)
								<a class="badge badge-pill " style="background: {{$cat->bg_color}}; color:{{$cat->text_color}}" href="#">
									{{$cat->title}}
								</a>
								@endforeach
							<h3 class="entry-title"><a  wire:navigate href="/news/posts/{{$item->slug}}">{{$item->title}}</a></h3>
							<div class="entry-content">
								<p>
									{!!$item->getExcept()!!}
								</p>
							</div> <!-- .entry-content -->
							<a class="btn btn-main" wire:navigate href="/news/posts/{{$item->slug}}">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper split-post -->



			@endforeach

		@else

					<div class="col-md-8 blog-posts">
						<p class="lead">No News yet</p>
					</div>
		@endif
					{{-- <div class="pagination-block text-center">
						<ul>
							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div> <!-- .btn-container --> --}}
					{{$posts->links('vendor.livewire.links')}}
				</div> <!-- .col-md-8 -->


				<div class="col-md-4 sidebar">
					<div class="widget widget-search">
						<h3 class="widget-title">Search</h3>
						<form>
							<input class="form-control" type="search" name="search-box" id="search-box" placeholder="Search ..">
							<button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .widget widget-search -->

					<div class="widget widget-recent-posts">
						<h3 class="widget-title">Recent Posts</h3>
						<ul class="img-list">
							@if ($recentPosts)
							@foreach ($recentPosts as $item)
								<li class="clearfix">
								<img class="img-responsive"
								src="{{Storage::url($item->image)}}"  alt="post thumbnail">
								<div class="content-wrapper">
									<h4>
										<a  wire:navigate href="/news/posts/{{$item->slug}}">{{$item->title}} </a>
									</h4>
									<p>{{$item->published_at->diffForHumans()}}</p>
								</div> <!-- .content-wrapper -->
							</li>
							@endforeach
							@else
								<small>No post yet</small>
							@endif


						</ul>
					</div><!-- .widget widget-recent-posts -->

					<div class="widget widget-tags">
						<h3 class="widget-title">Popular Tags</h3>
						<ul>
							@if ($categories)
								@foreach ($categories as $item)
								<li><a href="#">{{$item->title}}</a></li>

								@endforeach
							@else
								<small>No category yet</small>
							@endif

						</ul>
					</div> <!-- .widget widget-tags -->

					<div class="widget widget-social-links">
						<h3 class="widget-title">Follow us</h3>
						<ul>

						<li class="facebook-link"><a href="https://web.facebook.com/NIPROFFICIALPAGE?mibextid=LQQJ4d&_rdc=1&_rdr"><i class="fab fa-facebook "></i></a></li>
                        <li class="twitter-link"><a href="https://twitter.com/niprofficial"><i class="fab fa-twitter "></i></a></li>
                        <li class="twitter-link"><a href="https://www.linkedin.com/in/nigerian-institute-of-public-relations-7600b5a5/"><i class="fab fa-linkedin "></i></a></li>
                        <li class="google-plus-link"><a href="https://www.instagram.com/niprofficial/"><i class="fab fa-instagram "></i></a></li>
                        <li class="youtube-link"><a href="https://www.youtube.com/@niprofficial"><i class="fab fa-youtube "></i></a></li>
                        <li style="background: black"><a href="https://www.tiktok.com/@niprofficial"><i class="fab fa-tiktok "></i></a></li>
						</ul>
					</div> <!-- .widget widget-social-links -->

					<div class="widget widget-gallery">
						<h3 class="widget-title">Photo Gallery</h3>
						<ul class="list-inline photo-gallery clearfix">
							@if ($gallery)
							@php
								$count = 0;
							@endphp
								@foreach ($gallery as $item)
								@if ($count <= 9)

									@foreach ($item->image as $index =>  $img)
									@php
										$count = $count + $index;
									@endphp
									<li><a class="gallery-img" href="#"><img class="img-responsive" src="{{Storage::url($img)}}" alt="gallery photo"></a></li>
									@endforeach
								@endif
								@endforeach
							@else
								<small>No content yet</small>
							@endif

						</ul> <!-- .footer-social -->
					</div> <!-- .widget widget-gallery -->


				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->

</div>
