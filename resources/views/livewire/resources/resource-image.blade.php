<div>

    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Gallery </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Images</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <section class="blog-section blog-post-11 page-content">
		<div class="container">

			<h1 class="entry-title"><a style="color: red" href="#">Image Gallery</a></h1>
			<p class="lead">our wonderful moments captured</p>
			<br>
			<div class="row blog-posts">
				@if($images)
				@foreach ($images as $item)
				<div class="col-md-4 col-sm-6">
					<div class="post-wrapper post-overlay">
						<div class="image-wrapper gradient-black">
							<img class="img-responsive"
							src="{{Storage::url($item->image)}}"
							 alt="image 00">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>{{$item->created_at}}</li>
								<li><a  wire:navigate href="/downloadable/images/{{ $item->id }}"> {{ Str::of($item->description)->words(10, '...') }}</a></li>
							</ul>
							<h3 class="entry-title text-white">
                                <a wire:navigate href="/downloadable/images/{{ $item->id }}">{{$item->title}}
								@php
									$total = 0;
								@endphp
								@if (count($item->imageVideo) > 0)

									@foreach ($item->imageVideo as $itemz)
									@php
										$total = $total + count($itemz['image'])
									@endphp
									@endforeach

                                    @endif
                                {{ - ($total)}}
							    </a>
							</h3>

						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper post-overlay -->
				</div> <!-- .col-md-4 -->

				@endforeach
				@endif

				{{-- <div class="pagination-block text-center">
					<div>
						@if ($images->hasPages())
							<nav role="navigation" aria-label="Pagination Navigation">
								<span>
									@if ($images->onFirstPage())
										<span>Previous</span>
									@else
										<button wire:click="previousPage" wire:loading.attr="disabled" rel="prev">Previous</button>
									@endif
								</span>

								<span>
									@if ($images->onLastPage())
										<span>Next</span>
									@else
										<button wire:click="nextPage" wire:loading.attr="disabled" rel="next">Next</button>
									@endif
								</span>
							</nav>
						@endif
					</div>
				</div> <!-- .btn-container --> --}}
			</div> <!-- .row -->
	{{ $images->onEachSide(1)->links('vendor.livewire.links') }}
		</div> <!-- .container -->

	</section> <!-- .portfolio-section -->
</div>
