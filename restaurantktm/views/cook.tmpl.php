
    
	<div class="row">
    	<div class="col-lg-12">
            <h1 class=""></h1>
        </div>
    	<!-- /.col-lg-12 -->
    </div>
	<div id="page-wrappers">
	<div>
      <h1 class="page-header">Ordered Foods</h1>
      <div class="row placeholders">
        <div id = "orderNo_1" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">Order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 1</b>
								<button id="newOrder_1" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_1" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_1" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_1" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '1' ORDER BY order_id DESC" ;
																				
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
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
		
		<div id = "orderNo_2" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 2</b>
								<button id="newOrder_2" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_2" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_2" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_2" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '2' ORDER BY order_id DESC" ;
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
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
		
		<div id = "orderNo_3" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 3</b>
								<button id="newOrder_3" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_3" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_3" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_3" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '3' ORDER BY order_id DESC" ;
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
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
		
		<div id = "orderNo_4" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 4</b>
								<button id="newOrder_4" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_4" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_4" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_4" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '4' ORDER BY order_id DESC" ;
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
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
		
		<div id = "orderNo_5" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 5</b>
								<button id="newOrder_5" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_5" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_5" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_5" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '5' ORDER BY order_id DESC" ;
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
											</td>

                                        </tr>
										
										<?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
		
		<div id = "orderNo_6" class="col-xs-12 col-sm-6 placeholder">
          <div class="panel panel-default">
                        <div class="panel-heading">
						<button type="button" class="btn btn-default">
									<span class="badge">order</span>
								</button>
                            &nbsp;&nbsp;<b>Table No: 6</b>
								<button id="newOrder_6" type="button" class="btn btn-danger pull-right">
									New
								</button>
								<button id="started_6" type="button" class="btn btn-info pull-right hidden">
									Started
								</button>
								<button id="finished_6" type="button" class="btn btn-success pull-right hidden">
									Finished
								</button>
								<button id="close_6" type="button" class="btn btn-primary pull-right hidden">
									Close
								</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
									<thead>
										<td>S.N.</td>
										<td>Food</td>
										<td>Quantity</td>
										<td>Remark</td>
										
									</thead>
                                    <tbody>
									
									<?php 
										$query = "SELECT * FROM tbl_order  WHERE order_table_id = '6' ORDER BY order_id DESC" ;
										
										$data=mysql_query($query);
										
										$sn=1;
										
										while($row=mysql_fetch_assoc($data)) {
									?>
                                        <tr>
                                            <td><?php echo $sn++;?></td>
                                            <td><?php 
											$sql="SELECT * FROM tbl_items";
											$item=mysql_query($sql); 
				
											while($rowitem = mysql_fetch_assoc($item)){
											if($row['order_item_id'] ==  $rowitem['item_id']){
												echo $rowitem['item_name'];
												}
											}	?></td>
                                            <td><?php echo $row['order_item_qty'];?></td>
											<td><button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
												<button id="task_1" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
												<button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
											</td>

                                        </tr>
										
										<?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
        </div>
		
		
        
      </div>
   


