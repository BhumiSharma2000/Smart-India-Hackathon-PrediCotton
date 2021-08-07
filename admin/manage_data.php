<?php include("header.php"); ?>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
        <div id="content" class="bg-container">
            <header class="head" style="margin-top: 70px">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            Manage Admin
                        </h4>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Admin</a>
                            </li>
                            <li class="breadcrumb-item active">Manage Admin</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <!-- editable data  table starts-->
                   
                    <div class="row">
                        <div class="col">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"> </i> Manage Data
                                </div>
                                <div class="card-body">
                                    <div class="m-t-35">
                                        
                                        <div class="m-t-25">
                                            <table id="example_demo" class="table table-hover table-bordered " >
                                                <thead>
                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Variety</th>
                                                    <th>Month</th>
                                                    <th class="hidden-xs">State</th>
                                                    <th class="hidden-xs">Action</th>
                                                </tr>
                                                <?php
                                                    include("connection.php");
                                                    $query="SELECT * FROM `tbl_data` WHERE active=1";
                                                    $result2 = mysqli_query($con,$query);
                                                    $seq=1;
                                                    while($value2 = mysqli_fetch_array($result2))
                                                    {
                                                ?>
                                                <tr>
                                                  <td><?php echo $seq;?></td>
                                                  <td><?php echo $value2['variety'];?></td>
                                                  <td><?php echo $value2['month'];?></td>
                                                  <td><?php echo $value2['state'];?></td>
                                                  
                                                  <td> 
                                                  <a class="btn btn-success btn-xs" href="edit3.php?id=<?php echo $value2['data_id'];?> " 
                                                    onclick="return confirm('Sure to Edit ?');">EDIT</a> &nbsp;&nbsp;
                                                  <a class="btn btn-danger btn-xs" href="delete3.php?del=<?php echo $value2['data_id'];?>" 
                                                    onclick="return confirm('Sure to Delete  ?');">DELETE</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $seq++;
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include("footer.php");?>