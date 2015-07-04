
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Add New User Category</h4>
                                            </div>
                                            <div class="modal-body">
											
												<!-- Form starts here -->
												
												
                                                <form action="pages/usercategory/confirm_add.php" method="post" role="form">
                                                    <div class="form-group" id='modalrow1'>
                                                        <label>Category Type</label>
                                                        <input class="form-control" id="add_user_cat_type"  name="user_cat_type" >
                                                        <p class="help-block">Enter the type of the user category</p>
                                                    </div>
													<div class="form-group" id='modalrow3'>
                                                        <label>User Category Name</label>
                                                        <input class="form-control" name="user_cat_name" id="add_user_cat_name">
                                                    </div>
													
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                                                <input type="submit" class="btn btn-primary" name="add" />
                                            </div>
											</form>
                                        </div>
									    <!-- /.modal-content -->
									</div>
                                    <!-- /.modal-dialog -->
                                