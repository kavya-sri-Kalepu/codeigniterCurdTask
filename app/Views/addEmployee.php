<?= $this->extend('layout/base.php') ?>

<?= $this->section('content')?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card my-3 my-md-5">
                <div class="card-header">
                    <h2>Add Employee
                    <a href="<?=base_url()?>" class="btn btn-primary float-end">Back</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form action="<?=base_url('employee-store')?>" method="POST">
                    <div class="row g-4">
                        <div class="col-md-6">
                          <div class="form-group">
                                <input type="text" name="emp_name" placeholder="Your Name" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <input type="Email" name="emp_email" placeholder="Your Email" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <input type="text" name="emp_salary" placeholder="Your salary" class="form-control">
                           </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                                <input type="text" name="designation" placeholder="Your designation" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <input type="text" name="city" placeholder="Your city" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                                <input type="submit" value="Add Employee" class="btn btn-warning">
                           </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>