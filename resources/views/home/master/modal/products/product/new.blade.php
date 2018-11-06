<div class="modal fade" id="new" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Product</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('product') }}" data-parsley-validate="true">
                    @csrf

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Department * :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control selectpicker" name="department_id" id="department_id">
                                <option value="">Select Department</option>
                                @foreach ($data['product'] as $product)
                                    <option value="{{ $product->department->id }}">{{ $product->department->code . ' - ' .$product->department->name }}</option>                                
                                @endforeach
                            </select>    
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Category * :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control selectpicker" name="category_id" id="category_id">
                            </select>    
                        </div>
                    </div>
            

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Supplier :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control selectpicker" name="supplier_id" id="supplier_id">
                                <option value="">Select Supplier</option>
                                @foreach ($data['supplier'] as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->code . ' - ' .$supplier->ref_name }}</option>                                
                                @endforeach
                            </select>    
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Name * :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control {{ $errors->add->has('name') ? ' parsley-error' : '' }}" value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Name" data-parsley-required="true"/>
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="address">Re-Order :</label>
                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="is_reorder" id="is_reorder" data-render="switchery" data-theme="grey" /> 
                            <label class="form-check-label">Enable Re-Order Option</label>
                        </div>
                    </div>

                    <div id="if-hide">
                        <hr>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="level">Re-Order Level :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" value="{{ old('level') }}" type="text" id="level" name="level" placeholder="level" />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="quantity">Re-Order Quantity :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" value="{{ old('quantity') }}" type="text" id="quantity" name="quantity" placeholder="quantity" />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="max">Re-Order Max :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" value="{{ old('max') }}" type="text" id="max" name="max" placeholder="max" />
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Unit * :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control selectpicker" name="unit_id" id="unit_id">
                                <option value="">Select Unit</option>
                                @foreach ($data['product'] as $product)
                                    <option value="{{ $product->unit->id }}">{{ $product->unit->name }}</option>                                
                                @endforeach
                            </select>    
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="address">Is Direct Sale :</label>
                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="is_direct_sale" data-render="switchery" data-theme="grey" /> 
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>
                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="status" data-render="switchery" data-theme="grey" checked /> 
                        </div>
                    </div>

                    {{-- <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control" id="select-required" name="status" data-parsley-required="true">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div> --}}

                    <div class="modal-footer">
                        <button type="button" class="btn width-100 btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="addSubLocation" class="btn width-100 btn-inverse">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>