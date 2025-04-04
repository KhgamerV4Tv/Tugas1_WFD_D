@extends('layouts.app')

@section('title', $promotion->title . ' - JonoPromo')

@section('content')
    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
        <div class="md:flex">
            <div class="md:w-1/2">
            <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="object-cover w-full h-full">
            </div>
            <div class="p-6 md:w-1/2">
                <div class="flex items-start justify-between mb-4">
                    <h1 class="text-3xl font-bold">{{ $promotion->title }}</h1>
                    <div class="text-sm text-gray-500">
                        Date created: {{ $promotion->created_at->format('d M Y') }}
                    </div>
                </div>
                
                <div class="mb-6 prose max-w-none">
                    <p>{{ $promotion->description }}</p>
                </div>
                
                <div class="flex mt-8 space-x-3">
                    <a href="{{ route('promotions.edit', $promotion) }}" class="btn btn-primary">
                        Edit Promotion
                    </a>
                    
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus promosi ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                    <a href="{{ route('promotions.index') }}" class="btn btn-secondary">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection