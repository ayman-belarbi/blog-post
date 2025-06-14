<DOCUMENT filename="show.blade.php">
    @extends('layout.app')

    @section('title')
    Show
    @endsection

    @section('content')
    <div class="lg:mx-24 mx-5 transition-all duration-1000">
        <div class="border border-gray-300 rounded-lg">
            <div class="bg-gray-100 py-1 px-4 border-b border-gray-300">
                <p>Post Info</p>
            </div>
            <div class="py-1 px-4">
                <h2>Title: {{ $post->title }}</h2>
                <p>Description: {{ $post->description }}</p>
                <p>Category: {{ $post->category->name }}</p>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg mt-5">
            <div class="bg-gray-100 py-1 px-4 border-b border-gray-300">
                <p>Post Creator Info</p>
            </div>
            <div class="py-1 px-4">
                <h2>Name: {{ $post->posted_by }}</h2>
                <p>Created At: {{ $post->created_at }}</p>
            </div>
        </div>
    </div>
    @endsection
</DOCUMENT>