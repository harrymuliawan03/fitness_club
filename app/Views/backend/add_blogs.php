<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Add Blogs here</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('Blogs/index');  ?>" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleInputName1">Heading</label>
                  <input type="text" class="form-control text-light" id="exampleInputName1" name="title" placeholder="Heading">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('title')){ echo $form_error->getError('title'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label>Image</label>
                  <input type="file" name="img" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info text-light" disabled placeholder="Upload Image">
                    <button type="button" class="btn btn-primary file-upload-browse">Upload</button>
                    <span class="input-group-append">
                    </span>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Date</label>
                  <input type="datetime-local" class="form-control" name="date" value=""/>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('date')){ echo $form_error->getError('date'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" cols="50"></textarea>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('description')){ echo $form_error->getError('description'); }?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">In-Detail</label>
                  <textarea class="form-control" id="details" name="details" rows="3" cols="100"></textarea>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('detail')){ echo $form_error->getError('detail'); }?></div>
                </div>
                <div class="col-md-3 offset-md-4">
                  <button type="submit" class="btn btn-primary me-2 mt-4">Add</button>
                  <a href="<?= base_url('blogs/view_blog');  ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
