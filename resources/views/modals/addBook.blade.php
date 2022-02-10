<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD NEW BOOK</h5>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                {{csrf_field()}}
                <label for="bookTitle">Enter book title</label>
                <input type="text" name="title" id="title" class="form-control form-control-sm mb-2">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>