
<div id="page-wrapper">
         <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Ticket Details</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  <div class="row">
<div  class="col-lg-12">

                 <div class="timeline-panel">
                   <?php // foreach ($incidents as  $incident): ?>
                                        <div class="timeline-heading">
                            <h4 class="timeline-title"><?= $title_incident ;  ?></h4>
                                            <p><small class="text-muted"><i class="fa fa-user"></i> By <b> <?= $fname_user ;  ?></b></small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?= $desc_incident;  ?></p>
                                        </div>
                                          <?php //  endforeach; ?>
                                    </div>
                                  </div>
                                </div>
                                <br />
                                  <div  class="row"><div  class="col-lg-12">
                               <?= form_open('c_response/createResponse'); ?>
                                   
                                      <div  class="form-group">
                                          <input type="hidden" name="hidden_incident"  value="   <?= $num_incident ; ?>">
                                      </div>
                                        <div class="form-group">
    <label for="formGroupExampleInput2">Answer</label>
    <textarea autofocus class="form-control" id="formGroupExampleInput2" placeholder=""  name="texta_answer"></textarea>
  </div>
    <button type="submit"  class="btn btn-info"><i class="fa fa-save"></i> Send</button>   <button type="reset" class="btn btn-info"><i class="fa fa-eraser"></i>  Reset</button>
                                    </form></div></div>


  </div>


<style type="text/css">
 .timeline-panel {
    float: left;
    position: relative;
    width: 100%;
    padding: 20px;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
</style>