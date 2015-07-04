
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                                            </div>
                                            <div class="modal-body">
											
												<!-- Form starts here -->
												
												
                                                <form action="pages/users/confirm_edit.php" method="post" role="form" enctype="multipart/form-data">
													<input type="hidden" class="form-control" id="edit_user_id"  name="user_id" >
                                                    <div class="form-group required" id='modalrow1'>
                                                        <label>Full Name *</label>
                                                        <input class="form-control" id="edit_user_fullname"  name="user_fullname" required>
                                                        
                                                    </div>
													<div class="form-group required" id='modalrow1'>
                                                        <label>username *</label>
                                                        <input class="form-control" id="edit_user_username"  name="user_username" required>
                                                        
                                                    </div>
													<div class="form-group required" id='modalrow1'>
                                                        <label>password *</label>
                                                        <input class="form-control" id="edit_user_password"  name="user_password" required>
                                                        
                                                    </div>
													<div class="form-group required" id='modalrow1'>
                                                        <label>email *</label>
                                                        <input class="form-control" id="edit_user_email"  name="user_email" required>
                                                        
                                                    </div>
													<div class="form-group" id='modalrow2'>
                                                        <label>Selects User Categories</label>
                                                        <select class="form-control" name="user_cat_name" id="edit_user_cat">
                                                        <?php $sql3="SELECT * FROM tbl_user_cat";
														$result3=mysql_query($sql3); 
														while($data3=mysql_fetch_assoc($result3)) {	?>
														<option><?php echo $data3['user_cat_name']; ?></option>
														<?php }	?>
                                                        </select>
                                                    </div>
													
													<div class="form-group" id='modalrow7'>
                                                        <label>User Status</label>
                                                        <input type="checkbox" name="user_status" id="edit_user_status">
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="update"/>
                                            </div>
											</form>
                                        </div>
									    <!-- /.modal-content -->
										</div>
                                    <!-- /.modal-dialog -->
                                