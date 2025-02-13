<br><br>
<div class="container rounded shadow">

    <form action="/create-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\tugas\resources\views/createData.blade.php ENDPATH**/ ?>