<!-- Modal -->
<div class="modal fade" id="edit{{$book->id}}" tabindex="-1" aria-labelledby="editBookLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE BOOK</h5>
        </div>
        <div class="modal-body">
            <form action="{{url('books/'.$book->id)}}" method="post">
                {{csrf_field()}}
                <label for="bookTitle">Enter book title</label>
                <input type="text" name="title" id="title" value="{{$book->title}}" class="form-control form-control-sm mb-2">
                <input type="hidden" name="_method" value="PUT">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-success">Update</button>
            </form>
        </div>
      </div>
    </div>
</div>