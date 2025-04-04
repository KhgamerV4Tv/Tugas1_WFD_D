
@extends('layouts.app')

@section('title', 'Edit Promotion') 

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit</h1>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('promotions.update', $promotion) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-input @error('title') border-red-500 @enderror" value="{{ old('title', $promotion->title) }}" required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="6" class="form-input @error('description') border-red-500 @enderror" required>{{ old('description', $promotion->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="image" class="form-label">Image</label>
                    <div class="mb-2">
                        <img src="{{ Storage::url($promotion->image) }}" alt="{{ $promotion->title }}" class="w-40 h-auto rounded">
                    </div>
                    <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-sm text-gray-500 mt-1">Leave it blank if you don't want to change the image.</p>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('promotions.show', $promotion) }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection