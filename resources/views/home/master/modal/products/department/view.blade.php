<div class="modal fade" id="view" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Supplier</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Code :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" id="code" name="code" readonly/>
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="name">Ref. Name * :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" id="ref_name" name="ref_name" readonly/>
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="company_name">Company Name :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" id="company_name" name="company_name" readonly/>
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="address">Address :</label>
                    
                        <div class="col-md-8 col-sm-8">
                            <textarea class="form-control" id="address" name="address" rows="2" readonly></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="phone1">Telephone No :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" id="phone1" name="phone1" readonly/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="phone1"></label>

                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" id="phone2" name="phone2" readonly/>
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="email">Email :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="email" id="email" name="email" readonly/>
                        </div>
                    </div>

                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control" id="select-required" name="status" readonly>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn width-100 btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>