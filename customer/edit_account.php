<h1 align="center">Edit Your Account</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Customer Name:</label>
        <input type="text" name="c_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Customer Email:</label>
        <input type="email" name="c_email" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Country:</label>
        <input type="text" name="c_country" class="form-control" required>
    </div>

    <div class="form-group">
        <label>City:</label>
        <input type="text" name="c_city" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Contact Number:</label>
        <input type="text" name="c_contact" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Address:</label>
        <input type="text" name="c_address" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Image:</label>
        <input type="file" name="c_image" class="form-control" required>
        <img src="customer_images/sushan.jpg" width="100px;" height="100px" class="img-responsive">
    </div>

    <div class="text-center">
        <button type="submit" name="update" class="btn btn-info btn-sm">
            <i class="fa fa-user-md"> </i> Update
        </button>
    </div>


</form>