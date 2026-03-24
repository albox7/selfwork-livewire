<div>
	<h4 class="text-center {{ $good }}">
		Quanti minuti impiega la luce dal Sole alla Terra?
	</h4>
	<div class="text-center mb-4">
		<div class="display-3 fw-bold {{ $good }}">{{ $count }}</div>
	</div>
	<div class="text-center">
		<button class="btn btn-dark" wire:click="decrement">-</button>
		<button class="btn btn-dark" wire:click="increment">+</button>
	</div>
</div>
