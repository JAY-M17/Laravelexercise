<!-- Modal -->
<div class="modal fade" id="edit{{$assign->id}}" tabindex="-1" aria-labelledby="editBookLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE ASSIGNED BOOK</h5>
        </div>
        <div class="modal-body">
            <form action="{{url('authorsBook/'.$assign->id)}}" method="post">
                {{csrf_field()}}
                <label for="book">Select author</label>
                <select name="author" id="author" class="form-select">
                    <option value=""></option>
                    @foreach ($authors as $author)
                        @if ($author->id == $assign->author_id)
                            <option selected value="{{$author->id}}">{{$author->first_name . ' ' . $author->last_name}}</option>
                        @else
                            <option value="{{$author->id}}">{{$author->first_name . ' ' . $author->last_name}}</option>
                        @endif
                    @endforeach
                </select>
                <label for="book">Select book</label>
                <select name="book" id="book" class="form-select mb-2">
                    <option value=""></option>
                    @foreach ($books as $book)
                        @if ($book->id == $assign->book_id)
                            <option selected value="{{$book->id}}">{{$book->title}}</option>
                        @else
                            <option value="{{$book->id}}">{{$book->title}}</option>
                        @endif
                    @endforeach
                </select>
                <input type="hidden" name="_method" value="PUT">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>