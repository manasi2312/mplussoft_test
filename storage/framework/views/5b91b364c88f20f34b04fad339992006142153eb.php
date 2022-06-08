<?php $__env->startSection('content'); ?>

</style>
<div id="content-container">
    <div class="pageheader">
        <div id="page-content">
            <div class="panel">

                <div class="panel-heading ">
                    <h3 class="panel-title">All Users

                    </h3>
                </div>


                <div class="panel-body">
                    <table class="table table-bordered col-md-12 col-sm-12" id="myTable" style="padding-right: 0px;
                    padding-left: 0px;" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Profile Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#myTable").dataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            ajax:"<?php echo e(config('app.baseURL')); ?>/user/allData/",
            "order":[
            [0,"asc"]
            ],
            "columns":[
            {
                "mData":"user_id"
            },{
                "mData":"name"
            },{
                "mData":"contact"
            },{
                "mData":"city"
            },{
                "mData":"email"
            },{  
                "targets":-1,
                "mData": "profile_image",
                "bSortable": false,
                "ilter":false,
                "mRender": function(data, type, row){
                    if(row.profile_image==null){
                        return "Image not Available";
                    }else{

                        return "<img src='<?php echo e(config('app.baseURL')); ?>/storage/app/"+row.profile_image+"' style='height:50px;'>";
                    }
                },

            },{
                "targets":-1,
                "mData": "is_active",
                "bSortable": false,
                "ilter":false,
                "mRender": function(data, type, row){
                    if(row.is_active==0){
                        return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/user/update/"+row.user_id+"><span style='padding-right: 30px;'>Edit</span></a><a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/user/delete/"+row.user_id+"><span style='padding-right: 30px;'>Delete</span></a>";
                    }else{
                        return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/user/update/"+row.user_id+"><span style='padding-right: 30px;'>Edit</span></a><a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/user/delete/"+row.user_id+"><span style='padding-right: 30px;'>Delete</span></a>";
                    }
                },

            }]
            
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\machine-test\resources\views/user/all.blade.php ENDPATH**/ ?>