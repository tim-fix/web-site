<x-layout>
	@foreach ($flights as $flight)
		<div>
			<h2>{{ $flight->title }}</h2>
			<div>
				{{ $flight->text }}
			</div>
		</div>
	@endforeach
</x-layout>
