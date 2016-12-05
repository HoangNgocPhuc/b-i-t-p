<table class="table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Đơn vị</th>
          <th>Giảng viên</th>
        </tr>
      </thead>
      <tbody>
        <tr>
      		<td>1</td>
      		<td>Khoa CNTT</td>
          <td>
            <ul style="margin: 0; padding: 0; list-style: none;">
              <?php
                foreach ($arr_cntt as $row) {
                  # code...
              ?>
                <li style="margin: 0; padding: 0; "><span data-toggle="modal" href="<?php echo '#'.$row['pk_code_teacher_id'] ?>"><?php echo $row["name"] ?></span></li>
              <?php } ?>
            </ul>
          </td>
      	</tr>
 

        <tr>
          <td>1</td>
          <td>Khoa ĐTVT</td>
          <td>
            <ul style="margin: 0; padding: 0; list-style: none;">
              <?php
                foreach ($arr_dtvt as $row) {
                  # code...
              ?>
                <li style="margin: 0; padding: 0; "><span data-toggle="modal" href="<?php echo '#'.$row['pk_code_teacher_id'] ?>"><?php echo $row["name"] ?></span></li>
              <?php } ?>
            </ul>
          </td>
        </tr>     	
      </tbody>
    </table>

<?php
      foreach ($arr_cntt as $row) {
        # code...
    ?>
    <div id="<?php echo $row['pk_code_teacher_id'] ?>" class="modal fade" style="margin-top: 200px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Chi tiết</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">Mã giảng viên</div>
            <div class="col-md-8"><?php echo $row["pk_code_teacher_id"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Họ tên</div>
            <div class="col-md-8"><?php echo $row["name"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Đơn vị</div>
            <div class="col-md-8"><?php echo $row["major"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Mail</div>
            <div class="col-md-8"><?php echo $row["mail"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Chủ đề nghiên cứu</div>
            <div class="col-md-8"><?php echo $row["research_on"] ?></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <?php } ?>


  <?php
      foreach ($arr_dtvt as $row) {
        # code...
    ?>
    <div id="<?php echo $row['pk_code_teacher_id'] ?>" class="modal fade" style="margin-top: 200px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Chi tiết</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">Mã giảng viên</div>
            <div class="col-md-8"><?php echo $row["pk_code_teacher_id"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Họ tên</div>
            <div class="col-md-8"><?php echo $row["name"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Đơn vị</div>
            <div class="col-md-8"><?php echo $row["major"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Mail</div>
            <div class="col-md-8"><?php echo $row["mail"] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4">Chủ đề nghiên cứu</div>
            <div class="col-md-8"><?php echo $row["research_on"] ?></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <?php } ?>