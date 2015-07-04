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
                                List of Users
                            </div>
                            <!-- /.panel-heading -->
							
                            <div class="panel-body">
                                <p>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModaladd">Add New User</button>
                                </p>
								
								<!-- Modal -->
                                <div class="modal fade" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<?php include "pages/users/add_user.php" ?>
								</div>
								<div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<?php include "pages/users/edit_user.php" ?>
								</div>
                                <!-- /.modal -->
								
                            <br/>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="item_dataTable">
                                    <thead>
                                        <tr>
                                            <th width = "5%">SN</th>
                                            <th width="25%">Full Name</th>
											<th>Username</th>
											<th>Password</th>
											<th>email</th>
											<th>User Category</th>
											<th>User Status</th>
											<th width = "5%">Edit</th>
                                            <th width = "5%">Delete</th>
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php
										$query="SELECT * FROM tbl_user ORDER BY user_id DESC";
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)){
											
										
									?>
                                    
                                        
										<tr data-row="<?php echo $row['user_id'];?>">
											<td><?php echo $sn++;?></td>
											<td><?php echo $row['user_fullname'];?></td>
											<td><?php echo $row['user_username'];?></td>
											<td><?php echo $row['user_password'];?></td>
											<td><?php echo $row['user_email'];?></td>
											<td><?php 
											$sql="SELECT * FROM tbl_user_cat";
											$category=mysql_query($sql); 
				
											while($rowcat=mysql_fetch_assoc($category)){
											if($row['user_cat_id'] ==  $rowcat['user_cat_id']){
												echo $rowcat['user_cat_name'];
												}
											}	?>
											</td>
											<td><?php if($row['user_status'] == 'A') echo "Active"; else echo "Inactive" ?></td>
											
											<td><button name="edit" data-record="<?php echo $row['user_id'];?>" type="button" id="userid_<?php echo $row['user_id'];?>" class="btn btn-info btn-circle" data-toggle="modal"  data-target="#myModaledit"><i class="fa fa-edit"></i>
											    </button>
											</td>
											<td>
											<a href="pages/users/confirm_delete.php?id=<?php echo $row['user_id']?>&&deleteme=yes" class="ico del btn btn-danger btn-circle" onclick="return confirm('Are You Sure to Delete ?');" /><i class="fa fa-times"></i></a>
                                               
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
			
			