
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                                            </div>
                                            <div class="modal-body">
											
												<!-- Form starts here -->
												
												
                                                <form  action="pages/usercategory/confirm_edit.php" method="post" role="form" enctype="multipart/form-data">
                                                   
                                                        <input type="hidden" class="form-control" id="edit_user_cat_id"  name="user_cat_id" >
                                                  
													<div class="form-group" id='modalrow1'>
                                                        <label>Type</label>
                                                        <input class="form-control" id="edit_user_cat_type"  name="user_cat_type" >
                                                        <p class="help-block">Enter the Type of the User Category</p>
                                                    </div>
													
													<div class="form-group" id='modalrow1'>
                                                        <label>Name</label>
                                                        <input class="form-control" id="edit_user_cat_name"  name="user_cat_name" >
                                                        <p class="help-block">Enter the Name of the user category</p>
                                                    </div>
													                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" id="user_cat_update" name="update" value="Save Changes"/>
												
                                            </div>
											</form>
                                        </div>
									    <!-- /.modal-content -->
										</div>
                                    <!-- /.modal-dialog -->
                                