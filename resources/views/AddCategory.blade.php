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
                    <li><a href="/">Edit Post</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="login-container">
    <div class="container mt-5">
        <form class="row g-3" action="process_form.php" method="post" enctype="multipart/form-data">
            <div class="col-12">
                <label for="title-post" class="form-label">Title</label>
                <input type="text" class="form-control" id="title-post" name="title-post" placeholder="Enter title" required>
            </div>
            <div class="col-12">
                <label for="category-post" class="form-label">Category</label>
                <select id="category-post" name="category-post" class="form-select" required>
                    <option value="">

                    </option>

                </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Description" id="description-post" name="description-post" style="height: 100px" required></textarea>
                <label for="description-post">Description</label>
            </div>

            <div class="col-12">
                <label for="title-post" class="form-label">URL</label>
                <input type="text" class="form-control" id="filename" name="filename" placeholder="Enter URL" required>
            </div>

            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>




@endsection