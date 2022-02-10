<div class="modal fade" id="del{{$author->id}}" tabindex="-1" aria-labelledby="deleteBookLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteBookLabel">DELETE AUTHOR</h5>
        </div>
        <div class="modal-body">
            <form action="{{url('/authors' . '/' . $author->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <p>Are you sure you want to delete <b>{{$author->first_name .' '. $author->last_name}}</b>?</p>
                <input type="hidden" name="id" id="id" value="{{$author->id}}" >
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
      </div>
    </div>
</div>