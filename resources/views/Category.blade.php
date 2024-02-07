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
        <h2>Category</h2>
        <a href="/addCategory" class="btn btn-warning btn-sm">Add Category</a>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <!-- Edit button (replace # with actual edit page URL) -->
                        <button type="button" class="btn btn-warning btn-sm">
                            Edit Category
                        </button>
                        <!-- Delete button (replace # with actual delete page URL) -->
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




@endsection