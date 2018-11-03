<div class="modal modal-message fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure, you wanna delete this record?</h4>
            </div>
            <div class="modal-body">
                {{-- <h4><i class="fa fa-map-marker text-primary fa-fw"></i> GPS Navigation</h4> --}}
                <p>If you delete this reord you can't bring it back</p>
            </div>

            <form action="{{ route('location') }}" method="post">
                @method('delete')
                @csrf
                <input type="hidden" name="id" id="id">
            
                <div class="modal-footer">
                    <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn width-100 btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>