<div>

	<div class="row mb-5">
		<div class="col-4">
			<input class="form-control" type="text" wire:model.live="search" placeholder="Cerca un articolo...">
		</div>
	</div>

	<div class="row row-gap-custom">
		@foreach ($articles as $article)
			<div class="col-12 col-md-6 col-lg-4">
				<div class="box accent h-100">
					<h4>{{ $article->title }}</h4>
					{{-- <p>{{ $article->article }}</p> --}}
				</div>
			</div>
		@endforeach
	</div>
	
</div>
