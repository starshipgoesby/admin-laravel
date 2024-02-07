@extends('adminMaster')

@section('konten')
<header>
    <div class="main-container">
        <div class="nav">
            <div class="logo">
                <a href="">Mouziki</a>
            </div>
            <nav>
                <ul>
                    <li><a href=""> Blog</a></li>
                    <li><a href="/category">Edit Category</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="login-container">
    <div class="container mt-5">
        <h2>Post</h2>
        <a href="/addPost" class="btn btn-warning btn-sm">Add Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Filename</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->filename }}</td>
                    <td>
                        <a href="{{ url('/EditPost', $post->post_id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <a href="{{ url('/DeletePost', $post->post_id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection