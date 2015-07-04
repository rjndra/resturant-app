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
                List of Item
            </div>
            <!-- /.panel-heading -->
            
            <div class="panel-body">
                <p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModaladd">Add New Item</button>
                </p>
                
                <!-- Modal -->
                <div class="modal fade" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <?php include "pages/item/additem.php" ?>
                </div>
                <div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <?php include "pages/item/edititem.php" ?>
                </div>
                <!-- /.modal -->
                
            <br/>
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="viewitems">
                    <thead>
                        <tr>
                            <th width = "5%">SN</th>
                            <th width="25%">Item Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Featured</th>
                            <th>Publish</th>
                            <th width = "5%">Edit</th>
                            <th width = "5%">Delete</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        $query="SELECT * FROM tbl_items ORDER BY item_id DESC";
                        
                        $data=mysql_query($query);
                        
                        $sn=1;
                        
                        while($row=mysql_fetch_assoc($data)){
                    ?>
                    
                        
                        <tr data-row="<?php echo $row['item_id'];?>">
                            <td><?php echo $sn++;?></td>
                            <td><?php echo $row['item_name'];?></td>
                            <td><?php 
                            $sql="SELECT * FROM tbl_category";
                            $category=mysql_query($sql); 

                            while($rowcat=mysql_fetch_assoc($category)){
                            if($row['item_cat_id'] ==  $rowcat['cat_id']){
                                echo $rowcat['cat_name'];
                                }
                            }	?>
                            </td>
                            <td><?php echo $row['item_description']?></td>
                            <td><a href="#"><img src="images/items/<?php echo $row['item_image']?>" width="100" /></a></td>
                            <td><?php echo $row['item_price']?></td>
                            <td><a href="#"><?php echo $row['item_publish']?></a></td>
                            <td><a href="#"><?php echo $row['item_featured']?></a></td>
                            <td>
                            <button name="edit" data-record="<?php echo $row['item_id'];?>" type="button" id="itemid_<?php echo $row['item_id'];?>" class="btn btn-info btn-circle" data-toggle="modal"  data-target="#myModaledit"><i class="fa fa-edit"></i>
                                </button>
                            </td>
                            <td>
                            <a href="pages/item/confirm_delete.php?id=<?php echo $row['item_id']?>&&deleteme=yes" class="ico del btn btn-danger btn-circle" onclick="return confirm('Are You Sure to Delete ?');"><i class="fa fa-times"></i></a>
                               
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

