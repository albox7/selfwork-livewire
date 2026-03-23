<x-layout>

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<h1></h1>
			</div>
		</div>
		<div class="row row-gap-custom">			
			@foreach ($articles as $article)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="box h-100">
						<h4>{{ $article->title }}</h4>
						<p>{{ $article->article }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>

</x-layout>