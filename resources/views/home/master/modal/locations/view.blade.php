<div class="modal fade" id="view" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Location</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="frmAdd">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="location_name">Location Name * :</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" value="" type="text" id="name" readonly/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="description">Description :</label>
                        <div class="col-md-8 col-sm-8">
                            <textarea class="form-control" id="description" name="description" rows="2" readonly></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="address">Is Order Location :</label>
                    
                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="is_order_location" id="is_order_location" data-render="switchery" data-theme="grey" readonly/> 
                        </div>
                    </div>
                    
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label">Staus :</label>

                        <div class="col-md-8 col-sm-8">
                            <input type="checkbox" name="status" id="status" data-render="switchery" data-theme="grey" readonly/> 
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