@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success mb-2">Crea Post</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>
                        <a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a>
                    </td>
                    <td><span class="badge badge-pill badge-{{ $post->category->color }}">{{ $post->category->label }}</span>
                   </td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                        <form
                                    action="{{ route('admin.posts.destroy', $post->id) }}"
                                    method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger"
                                        type="submit">Delete
                                    </button>
                      </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4">
                        <h1 class="text-center">Non ci sono Posts</h1>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection