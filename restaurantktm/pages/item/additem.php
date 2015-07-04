
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Add New Item</h4>
                                            </div>
                                            <div class="modal-body">
											
												<!-- Form starts here -->
												
												
                                                <form action="pages/item/confirm_add.php" method="post" role="form" enctype="multipart/form-data">
                                                    <div class="form-group required" id='modalrow1'>
                                                        <label>Name</label>
                                                        <input class="form-control" id="add_item_name"  name="item_name" required>
                                                        <p class="help-block">Enter the name of the item</p>
                                                    </div>
													<div class="form-group" id='modalrow2'>
                                                        <label>Selects Categories</label>
                                                        <select class="form-control" name="category_name" id="add_item_category">
                                                        <?php $sql3="SELECT * FROM tbl_category";
														$result3=mysql_query($sql3); 
														while($data3=mysql_fetch_assoc($result3)) {	?>
														<option><?php echo $data3['cat_name']; ?></option>
														<?php }	?>
                                                        </select>
                                                    </div>
													<div class="form-group" id='modalrow3'>
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="3" name="item_description" id="add_item_description"></textarea>
                                                    </div>
													<div class="form-group" id='modalrow4'>
                                                        <label>Choose image</label>
                                                        <input type="file" name="item_image" id="add_item_image">
														<img width="50" />
                                                    </div>
                                                    <div class="form-group" id='modalrow5'>
                                                        <label>Item Price</label>
                                                        <input class="form-control" name="item_price" type="number" min='1' id="add_item_price">
                                                        <p class="help-block">Enter the price of the item</p>
                                                    </div>
													
													<div class="form-group" id='modalrow6'>
                                                        <label>Featured</label>
                                                        <input type="checkbox" name="item_featured" id="add_item_featured">
                                                    </div>
													<div class="form-group" id='modalrow7'>
                                                        <label>Publish</label>
                                                        <input type="checkbox" name="item_publish" id="add_item_publish">
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="add"/>
                                            </div>
											</form>
                                        </div>
									    <!-- /.modal-content -->
										</div>
                                    <!-- /.modal-dialog -->
                                