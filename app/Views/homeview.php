<?= $this->extend('layout/base.php') ?>

<?= $this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php 
            if (session()->getFlashdata('status')){
                echo '<div class="alert alert-success">';
                echo '<h4>'.session()->getFlashdata('status').'</h4>';
                echo '</div>';
            }
            ?>
            <div class="card my-3 my-md-5">
                <div class="card-header">
                    <h3>add Employee data <a href="<?=base_url('addEmployee')?>" class="btn btn-success float-end">Add</a></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Salary</th>
                            <th>Designation</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach($employee as $row): ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['emp_name']?></td>
                            <td><?=$row['emp_email']?></td>
                            <td><?=$row['emp_salary']?></td>
                            <td><?=$row['designation']?></td>
                            <td><?=$row['city']?></td>
                            <td>
                                <a href="<?=base_url('update/'.$row['id'])?>" class="btn btn-secondary">Edit</a>
                                <a href="<?=base_url('delete/'.$row['id'])?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            
           
        </div>
    </div>
</div>
<?= $this->endSection() ?>