<section class="content">
   <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Jobs</h3>

        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
		  <div class="col-md-12">
				<div class="col-md-6">
				 <div class="form-group">
					  <label for="exampleInputEmail1">Job Title</label>
					  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Job Title">
					</div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
					<label>Category</label>
					<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
					  <option >--Select Category--</option>
					  <option value ='1'>Chemical</option>
					  <option value ='2'>IT Sector</option>
					  <option value ='3'>Services Base</option>
					 
					</select>
				  </div>
				</div>
        	</div>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
					  <label for="exampleInputFile">Image </label>
					  <input type="file" id="exampleInputFile">  
					</div>
				</div>
		    </div>
			<div class="col-md-12">
			   <div class="box-body pad">
             
                    <textarea  name="editor1">  
                    </textarea>
		      </div>
			</div>
			<div class="col-md-12">
			  <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
			  <div class="col-md-6">
                
              </div>
			</div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
      <!-- /.box -->

     
      <!-- /.row -->

    <div>
</div></section>
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'editor1' );
</script>