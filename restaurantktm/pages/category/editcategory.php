
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                                            </div>
                                            <div class="modal-body">
											
												<!-- Form starts here -->
												
												
                                                <form  action="pages/category/confirm_edit.php" method="post" role="form" enctype="multipart/form-data">
                                                   
                                                        <input type="hidden" class="form-control" id="edit_cat_id"  name="cat_id" >
                                                  
													<div class="form-group" id='modalrow1'>
                                                        <label>Name</label>
                                                        <input class="form-control" id="edit_cat_name"  name="cat_name" >
                                                        <p class="help-block">Enter the name of the category</p>
                                                    </div>
													
													<div class="form-group" id='modalrow2'>
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="3" name="cat_description" id="edit_cat_description"></textarea>
                                                    </div>
													<div class="form-group" id='modalrow3'>
                                                        <label>Choose image</label>
                                                        <input type="file" name="cat_image" id="edit_cat_image">
														<img width="50" />
                                                    </div>
													<div class="form-group" id='modalrow7'>
                                                        <label>Publish</label>
                                                        <input type="checkbox" name="cat_publish" id="edit_cat_publish">
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" id="cat_update" name="update" value="Save Changes"/>
												
                                            </div>
											</form>
                                        </div>
									    <!-- /.modal-content -->
										</div>
                                    <!-- /.modal-dialog -->
                                