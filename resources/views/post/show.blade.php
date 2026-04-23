<x-layout>
	@foreach ($books as $book)
		<div>
			<h2>{{ $book->title }}</h2>
			<div>
				{{ $book->text }}
			</div>
		</div>
	@endforeach
</x-layout>