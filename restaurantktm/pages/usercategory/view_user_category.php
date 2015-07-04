				<div class="row">
                    <div class="col-lg-12">
                        <h1 class=""></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List of User Category
                            </div>
                            <!-- /.panel-heading -->
							
                            <div class="panel-body">
                                <p>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModaladd">Add New User Category</button>
                                </p>
								
								<!-- Modal -->
                                <div class="modal fade" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<?php include "pages/usercategory/add_user_category.php" ?>
								</div>
								<div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<?php include "pages/usercategory/edit_user_category.php" ?>
								</div>
                                <!-- /.modal -->
								
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width = "5%">SN</th>
                                            <th width="25%">User Category Type</th>
											<th width="25%">User Category Name</th>
											<th width = "5%">Edit</th>
                                            <th width = "5%">Delete</th>
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php
										$query="SELECT * FROM tbl_user_cat ORDER BY user_cat_id DESC";
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)){
											
										
									?>
                                    
                                        
										<tr data-row="<?php echo $row['cat_id'];?>">
											<td><?php echo $sn++;?></td>
											<td><?php echo $row['user_cat_type'];?></td>
											<td><?php echo $row['user_cat_name']?></td>
											<td><button name="edit" data-record="<?php echo $row['user_cat_id'];?>" type="button" id="usercatid_<?php echo $row['user_cat_id'];?>" class="btn btn-info btn-circle" data-toggle="modal"  data-target="#myModaledit"><i class="fa fa-edit"></i>
											    </button>
											</td>
											<td>
											<a href="pages/usercategory/confirm_delete.php?id=<?php echo $row['user_cat_id']?>&&deleteme=yes" class="ico del btn btn-danger btn-circle" onclick="return confirm('Are You Sure to Delete ?');"><i class="fa fa-times"></i></a>
                                               
											</td>
										</tr>
						
                                        
										  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
			
			