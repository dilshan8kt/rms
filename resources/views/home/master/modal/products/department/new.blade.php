<div class="modal fade" id="new" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Department</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('department') }}" data-parsley-validate="true">
                    @csrf
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Name * :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control {{ $errors->add->has('name') ? ' parsley-error' : '' }}" value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Name" data-parsley-required="true"/>
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="description">Descripyion :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control {{ $errors->add->has('description') ? ' parsley-error' : '' }}" value="{{ old('description') }}" type="text" id="description" name="description" placeholder="Description" />
                            
                            @if ($errors->add->has('description'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5">
                                    <li class="parsley-required">{{ $errors->first('description') }}</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control" id="select-required" name="status" data-parsley-required="true">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn width-100 btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="addSubLocation" class="btn width-100 btn-inverse">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>