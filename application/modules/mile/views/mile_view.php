<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MileStone List</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
  <br>
       <div class="container">
              <div class="row">
                 
                      <div class="col-md-8"></div>
                          <div class="col-md-4">
                            <a href="<?php echo base_url();?>mile/logout">
                            Welcome &nbsp; <?php echo $this->session->userdata("Name")?> &nbsp; Logout</a>
                          </div>
                    
                     <div class="col-md-12">
                            <h1> Mile Stone List 
                                   <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                            </h1>
                     </div>
                     <table class="table table-bordered" id="mydata">
                            <thead>
                                   <tr>
                                          <th>Sl No. </th>
                                          <th>Milestone No.</th>
                                          <th>Milestone Name</th>
                                          <th>Active</th>
                                          <th style="text-align: right;">Actions</th>
                                   </tr>
                            </thead>
                            <tbody id="show_data"></tbody>
                     </table>
              </div>
       </div>
       <!-- MODAL ADD -->
       <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New MileStone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="mile_no" id="mile_no" class="form-control">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">MileStone Name</label>
                            <div class="col-md-10">
                              <input type="text" name="mile_name" id="mile_name" class="form-control" placeholder="Milstone Name">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

          <!-- MODAL EDIT -->
          <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Milestone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">MileStone No.</label>
                            <div class="col-md-10">
                              <input type="text" name="mile_no_edit" id="mile_no_edit" class="form-control" placeholder="Milestone No." readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Milestone Name</label>
                            <div class="col-md-10">
                              <input type="text" name="mile_name_edit" id="mile_name_edit" class="form-control" placeholder="Milestone Name">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
       
         <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete MileStone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="mile_no_delete" id="mile_no_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

      
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
 
       <script type="text/javascript">
               $(document).ready(function(){
                     show_milestone();
                      var count = 0;
                     $('#mydata').dataTable();

                     function show_milestone(){
                            $.ajax({
                                   type  : 'ajax',
                                   url   : '<?php echo site_url('mile/mile_data')?>',
                                   async : true,
                                   dataType : 'json',
                                   success : function(data){

                                   var html = '';
                                   var i;
                                          for(i=1; i<data.length; i++){
                                                 html += '<tr>'+
                                               
                                                '<td>'+ (count+i) +'</td>'+
                                                 '<td>'+data[i].MilestoneUID+'</td>'+
                                                 '<td>'+data[i].MilestoneName+'</td>'+
                                                 '<td>'+data[i].Active+'</td>'+
                                                 '<td style="text-align:right;">'+
                                                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-mile_no="'+data[i].MilestoneUID+'" data-mile_name="'+data[i].MilestoneName+'" data-active="'+data[i].Active+'">Edit</a>'+' '+
                                                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-mile_no="'+data[i].MilestoneUID+'">Delete</a>'+
                                                 '</td>'+
                                                 '</tr>';
                                          }
                                          $('#show_data').html(html);
                                          count = count + 1;
                                   }
                            });
                     }  

        //Save MileStone
        $('#btn_save').on('click',function(){
          //  var mileStoneNo = $('#mile_no').val();
            var mileStoneName = $('#mile_name').val();
           // var active       = $('#active').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('mile/save_mile')?>",
                dataType : "JSON",
                data : { MilestoneName :mileStoneName},
                success: function(data){
                  //console.log(data);

                  //  $('[name="mile_no"]').val("");
                    $('[name="MilestoneName"]').val("");
                   // $('[name="active"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_milestone();
                }
            });
            return false;
        });
                     

//get data form database to the model 
$('#show_data').on('click','.item_edit',function(){
           var MilestoneUID = $(this).data('mile_no');
            var MilestoneName = $(this).data('mile_name');
            $('#Modal_Edit').modal('show');
            $('[name="mile_no_edit"]').val(MilestoneUID);
            $('[name="mile_name_edit"]').val(MilestoneName);
        });
 

//update Milestone to database
$('#btn_update').on('click',function(){
            var MilestoneUID = $('#mile_no_edit').val();
            var MilestoneName = $('#mile_name_edit').val();
          
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('mile/mile_update')?>",
                dataType : "JSON",
                data : { MilestoneUID:MilestoneUID, MilestoneName:MilestoneName},
                success: function(data){
                  console.log(data);
                    $('[name="mile_no_edit"]').val();
                    $('[name="mile_name_edit"]').val("");
                   
                    $('#Modal_Edit').modal('hide');
                    show_milestone();
                }
            });
            return false;
        });

        //get data for delete Milsotone
        $('#show_data').on('click','.item_delete',function(){
            var MilestoneUID = $(this).data('mile_no');
             
            $('#Modal_Delete').modal('show');
            $('[name="mile_no_delete"]').val(MilestoneUID);
        });

          //delete milestone to database
          $('#btn_delete').on('click',function(){
            var MilestoneUID = $('#mile_no_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('mile/delete_mile')?>",
                dataType : "JSON",
                data : {MilestoneUID:MilestoneUID},
                success: function(data){
                    $('[name="mile_no_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_milestone();
                }
            });
            return false;
        });

      });
       
       </script>

</body>
</html>