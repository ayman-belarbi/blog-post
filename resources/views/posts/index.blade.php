<DOCUMENT filename="index.blade.php">
    @extends('layout.app')

    @section('title')
    Index
    @endsection

    @section('content')
    <div class="lg:mx-24 mx-5 transition-all duration-1000">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-8">
            <a href="{{ route('posts.create') }}"><button class="px-4 py-1 rounded-lg bg-slate-500 text-white hover:bg-slate-600 transition duration-1000 cursor-pointer">Create Post</button></a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200">
                <thead class="text-center">
                    <tr class="*:font-medium *:text-gray-900">
                        <th class="px-3 py-2 whitespace-nowrap">#</th>
                        <th class="px-3 py-2 whitespace-nowrap">Title</th>
                        <th class="px-3 py-2 whitespace-nowrap">Category</th>
                        <th class="px-3 py-2 whitespace-nowrap">Posted By</th>
                        <th class="px-3 py-2 whitespace-nowrap">Created at</th>
                        <th class="px-3 py-2 whitespace-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-center">
                    @foreach($posts as $post)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-3 whitespace-nowrap">{{ $post->id }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $post->title }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $post->category->name }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $post->posted_by }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $post->created_at }}</td>
                        <td class="px-3 py-3 whitespace-nowrap flex gap-5 justify-center">
                            <a href="{{ route('posts.show', $post->id) }}"><button class="px-4 py-1 rounded-lg bg-teal-600 text-white hover:bg-teal-700 transition duration-1000 cursor-pointer">View</button></a>
                            <a href="{{ route('posts.edit', $post->id) }}"><button class="px-4 py-1 rounded-lg bg-sky-600 text-white hover:bg-sky-700 transition duration-1000 cursor-pointer">Edit</button></a>
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-1 rounded-lg bg-red-600 text-white hover:bg-red-700 transition duration-1000 cursor-pointer" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</DOCUMENT>