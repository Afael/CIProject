<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Student Record
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <?php
            echo form_open_multipart('student/add', 'role="form" class="form-horizontal"');
            ?>    
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-6">
                    NIK
                </label>
                <div class="col-sm-9">
                    <span class="input-icon">
                        <input type="text" placeholder="Your unique id" name="nim" class="form-control">
                        <i class="fa fa-hashtag" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Full Name
                </label>
                <div class="col-sm-9">
                    <span class="input-icon">
                        <input type="text" placeholder="Enter your full name" name="nama" class="form-control">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
            </div>
<!--            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Address
                </label>
                <div class="col-sm-9">
                    <span class="input-icon">
                        <input type="text" placeholder="Enter your full address" name="address" class="form-control">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Phone Number
                </label>
                <div class="col-sm-9">
                    <span class="input-icon">
                        <input type="text" placeholder="Enter your phone number" name="phone" class="form-control">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </span>
                </div>
            </div>-->
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Place/Date of Birth
                </label>
                <div class="col-sm-5">
                    <span class="input-icon">
                        <input type="text" placeholder="Enter your birthday" name="tempat_lahir" class="form-control">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-4">
                    <span class="input-icon">
                        <input type="date" placeholder="Choose gender" name="tanggal_lahir" class="form-control">
                        <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Gender
                </label>
                <div class="col-sm-9">
                    <span class="input-icon">
                        <?php
                        echo form_dropdown('gender', array('L' => 'Laki-laki', 'P' => 'Perempuan'), null, "class='form-control'");
                        ?>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    Photo
                </label>
                <div class="col-sm-9">
                    <input type="file" name="foto" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">

                </label>
                <div class="col-sm-1">
                    <span class="input-icon">
                        <button type="submit" name="submit" class="btn btn-success">
                            SIMPAN
                        </button>
                    </span>
                </div>
                <div class="col-sm-1">
                    <span class="input-icon">
                        <?php
                        echo anchor('student', 'Kembali', array('class' => 'btn btn-danger'));
                        ?>
                    </span>
                </div>
            </div>

            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>