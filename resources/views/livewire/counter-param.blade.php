<div>
	<h4 class="text-center {{ $good }}">
		Quanti anni dura un ciclo di attività del Sole?
	</h4>
	<div class="text-center mb-4">
		<div class="display-3 fw-bold {{ $good }}">{{ $count }}</div>
	</div>
	<div class="text-center">
		<button class="btn btn-dark" wire:click="decrement({{ $n }})">-</button>
		<button class="btn btn-dark" wire:click="increment({{ $n }})">+</button>
	</div>
</div>