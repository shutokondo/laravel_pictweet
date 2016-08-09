@extends('layout')

@section('content')
	<div class="contents row">
		@forelse($tweets as $tweet)
			<div class="content_post" style="background-image: url({{$tweet->image}});">
				<div class="more">
					<span><img 'arrow_top.png'></span>
					<ul class="more_list">
  						<li>
							<a href="#">詳細</a>
  						</li>

							<li>
								<a href="#">編集</a>
					 		</li>
							<li>
								<a href="#">削除</a>
							</li>

					</ul>
				</div>

				<span class="name">
					<a href="#">
  						<span>投稿者</span>User Name
					</a>
				</span>
			</div>
		@empty
		@endforelse
	</div>
@endsection