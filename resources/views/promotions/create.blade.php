@extends('layouts.app')


@section('title', 'Add new promotion')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Add new promotion</h1>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-input @error('title') border-red-500 @enderror" value="{{ old('title') }}" required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="6" class="form-input @error('description') border-red-500 @enderror" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('promotions.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection