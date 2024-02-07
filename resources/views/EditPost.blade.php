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
                    <li><a href="/">Post</a></li>
                    <li><a href="/category">Edit Category</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="login-container">
    <div class="container mt-5">
        <h2>Edit Post</h2>
        <form method="post" action="">
        {{ csrf_field() }}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $editpost->title }}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>

                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"  value="" required>{{ $editpost->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="filename" class="form-label">Filename</label>
                <input type="text" class="form-control" id="filename" name="filename" value="{{ $editpost->filename }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>


@endsection