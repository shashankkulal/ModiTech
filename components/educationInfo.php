<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Educational Details</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li>
                    <a data-action="collapse" class="rotate-180"></a>
                </li>
                <li>
                    <a data-action="reload"></a>
                </li>
                <li>
                    <a data-action="close"></a>
                </li>
            </ul>
        </div>
        <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

    <div class="panel-body">
        <form>
            <h6>Secondary School (10th)</h6>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>10th School Name</label>
                        <input type="text" id="schName10" value="<?php echo $loginUserEdu['schName10']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Board Name</label>
                        <input type="text" id="schBoard10" value="<?php echo $loginUserEdu['schBoard10'];?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Max Marks</label>
                        <input type="text" id="max10" value="<?php echo $loginUserEdu['max10']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Obt. Marks</label>
                        <input type="text" id="obt10" value="<?php echo $loginUserEdu['obt10']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Passing Year</label>
                        <input type="text" id="year10" value="<?php echo $loginUserEdu['year10']; ?>" class="form-control">
                    </div>
                </div>
            </div>
            <hr>

            <h6>Senior Secondary School (12th)</h6>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>12th School Name</label>
                        <input type="text" id="schName12" value="<?php echo $loginUserEdu['schName12']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Board Name</label>
                        <input type="text" id="schBoard12" value="<?php echo $loginUserEdu['schBoard12'];?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Stream</label>
                        <select id="stream" class="form-control">
                            <option value="">select one</option>
                            <option value="Science">Science</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Arts">Arts</option>
						</select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Max Marks</label>
                        <input type="text" id="max12" value="<?php echo $loginUserEdu['max12']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Obt. Marks</label>
                        <input type="text" id="obt12" value="<?php echo $loginUserEdu['obt12']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Passing Year</label>
                        <input type="text" id="year12" value="<?php echo $loginUserEdu['year12']; ?>" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <h6>Graduation</h6>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>UG College Name</label>
                        <input type="text" id="clgnameug" value="<?php echo $loginUserEdu['clgnameug']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>University Name</label>
                        <input type="text" id="uninameug" value="<?php echo $loginUserEdu['uninameug'];?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Concentration (if any)</label>
                        <input type="text" id="conug" value="<?php echo $loginUserEdu['conug'];?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Max Marks</label>
                        <input type="text" id="maxug" value="<?php echo $loginUserEdu['maxug']; ?>" class="form-control" data-popup="tooltip" data-original-title="Sum of total marks of all sem/year.">
                    </div>
                    <div class="col-md-4">
                        <label>Obt. Marks</label>
                        <input type="text" id="obtug" value="<?php echo $loginUserEdu['obtug']; ?>" class="form-control" data-popup="tooltip" data-original-title="Sum of obtained marks of all sem/year.">
                    </div>
                    <div class="col-md-4">
                        <label>Passing Year</label>
                        <input type="text" id="yearug" value="<?php echo $loginUserEdu['yearug']; ?>" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <h6>Post Graduation</h6>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>PG College Name</label>
                        <input type="text" id="clgnamepg" value="<?php echo $loginUserEdu['clgnamepg']; ?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>University Name</label>
                        <input type="text" id="uninamepg" value="<?php echo $loginUserEdu['uninamepg'];?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Concentration (if any)</label>
                        <input type="text" id="conpg" value="<?php echo $loginUserEdu['conpg'];?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Max Marks</label>
                        <input type="text" id="maxpg" value="<?php echo $loginUserEdu['maxpg']; ?>" class="form-control" data-popup="tooltip" data-original-title="Sum of total marks of all sem/year.">
                    </div>
                    <div class="col-md-4">
                        <label>Obt. Marks</label>
                        <input type="text" id="obtpg" value="<?php echo $loginUserEdu['obtpg']; ?>" class="form-control" data-popup="tooltip" data-original-title="Sum of obtained marks of all sem/year.">
                    </div>
                    <div class="col-md-4">
                        <label>Passing Year</label>
                        <input type="text" id="yearpg" value="<?php echo $loginUserEdu['yearpg']; ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" id="addNewEducationField" class="btn btn-default"><i class="glyphicon glyphicon-plus position-right"></i> Add Other Qualifications</button>
            </div>



            <div class="text-right">
                <button type="button" onclick="saveEducationInformation()" class="btn btn-primary"><i class="glyphicon glyphicon-save position-right"></i> Save</button>
            </div>
        </form>
    </div>
</div>