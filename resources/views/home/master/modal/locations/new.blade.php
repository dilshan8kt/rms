<div class="modal fade" id="new" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Location</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="frmAdd" method="POST" action="{{ route('location') }}" data-parsley-validate="true">
                    @csrf
                    <input type="hidden" name="new_location" value="1">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="location_name">Location Name * :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control {{ $errors->add->has('name') ? ' parsley-error' : '' }}" value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Location Name" data-parsley-required="true" />
                            
                            @if ($errors->add->has('name'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5">
                                    <li class="parsley-required">{{ $errors->add->first('name') }}</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="description">Description :</label>
                        <div class="col-md-8 col-sm-8">
                            <textarea class="form-control {{ $errors->add->has('description') ? ' parsley-error' : '' }}" id="description" name="description" rows="2" placeholder="Description">{{ old('description') }}</textarea>
                            
                            @if ($errors->add->has('description'))
                                <ul class="parsley-errors-list filled" id="parsley-id-5">
                                    <li class="parsley-required">{{ $errors->add->first('description') }}</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="address">Is Order Location :</label>
                    
                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="is_order_location" data-render="switchery" data-theme="grey" /> 
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>

                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="status" data-render="switchery" data-theme="grey" checked /> 
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