<div class="modal fade" id="del{{$assign->id}}" tabindex="-1" aria-labelledby="deleteBookLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteBookLabel">DELETE ASSIGNED BOOK</h5>
        </div>
        <div class="modal-body">
            <form action="{{url('/authorsBook' . '/' . $assign->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <p>Are you sure you want to delete <b></b>?</p>
                <input type="hidden" name="id" id="id" value="{{$assign->id}}" >
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
      </div>
    </div>
</div>