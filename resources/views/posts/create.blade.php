@extends('layout.app')

@section('title')
Create
@endsection

@section('content')
<div class="lg:mx-24 mx-5 transition-all duration-1000">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label class="block">Title</label>
            <input name="title" type="text" value="{{ old('title') }}" class="border-2 w-full rounded py-1 px-2 text-sm text-gray-600 outline-none border-slate-700">
        </div>
        <div class="mb-3">
            <label class="block">Description</label>
            <textarea name="description" class="border-2 w-full rounded py-1 px-2 text-sm text-gray-600 outline-none border-slate-700">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="block">Category</label>
            <select name="category_id" class="border-2 w-full rounded py-1 px-2 text-sm text-gray-600 outline-none border-slate-700">
                <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select a category</option>
                <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>Technology</option>
                <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>Lifestyle</option>
                <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>Education</option>
                <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>Travel</option>
            </select>
        </div>
        <div class="mb-5">
            <label class="block">Post Creator</label>
            <input name="posted_by" type="text" value="{{ old('posted_by') }}" class="border-2 w-full rounded py-1 px-2 text-sm text-gray-600 outline-none border-slate-700">
        </div>
        <button type="submit" class="px-4 py-1 rounded-lg bg-slate-600 text-white hover:bg-slate-700 transition duration-1000 cursor-pointer">Submit</button>
    </form>
</div>
@endsection