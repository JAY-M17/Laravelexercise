<!-- Modal -->
<div class="modal fade" id="assignBook" tabindex="-1" aria-labelledby="assignBookLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="assignBookLabel">ASSIGN NEW BOOK</h5>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                {{csrf_field()}}
                <label for="author">Select author</label>
                <select name="author" id="author" class="form-select">
                    <option value=""></option>
                    @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->first_name . ' ' . $author->last_name}}</option>
                    @endforeach
                </select>
                <label for="book">Select book</label>
                <select name="book" id="book" class="form-select mb-2">
                    <option value=""></option>
                    @foreach ($books as $book)
                        <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>