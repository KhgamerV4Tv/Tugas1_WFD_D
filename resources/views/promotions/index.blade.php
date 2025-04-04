@extends('layouts.app')

@section('title', 'Promo List')

@section('content')
    <h1 class="mb-6 text-3xl font-bold text-center text-gray-800">Promo List</h1>
    
    <div class="flex items-center justify-between mb-6">
    
    </div>
    
    <div class="container max-w-4xl mx-auto">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse($promotions as $promotion)
                <div class="overflow-hidden transition bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg">
                    <div class="h-40 overflow-hidden">
                    <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="object-cover w-full h-full">
                    </div>
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800 truncate">{{ $promotion->title }}</h2>
                        <p class="mb-4 text-sm text-gray-600 line-clamp-2">{{ Str::limit($promotion->description, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('promotions.show', $promotion) }}" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                More Detail
                            </a>
                            <span class="text-xs text-gray-500">
                                {{ $promotion->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 p-6 text-center border border-gray-200 rounded-lg bg-gray-50">
                    <p class="text-sm text-gray-500">No promotion found.</p>
                </div>
            @endforelse
        </div>
    </div>
    
    <div class="mt-8">
        {{ $promotions->links('pagination::tailwind') }}
    </div>
@endsection
