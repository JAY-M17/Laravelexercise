@extends('layouts.body')
@section('content')
    <section class="py-5 container">
        <h3>Book Table</h3>
        <a href="home" class="btn btn-sm btn-secondary">back</a>
        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new book</a>
        <table class="table table-hover mt-2">
            <tr class="table-dark">
                <td>ID</td>
                <td>Title</td>
                <td>Configure</td>
            </tr>
            @if (count($books)>0)
                <?php $count=0; ?>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$count+=1}}</td>
                        <td>{{$book->title}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$book->id}}">Edit</a>
                            @include('modals.editBook')
                            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#del{{$book->id}}">Delete</a>
                            @include('modals.deleteBook')
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </section>
    @include('modals.addBook')
@endsection