<div class="col-md-10 col-xs-offset-1">
  <div style="margin-bottom:5px;">
    <a href="index.php?controller=lecture&act=add" class="btn btn-primary">Add</a>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách giảng viên</div>
    <div class="panel-body">
      <table cellpadding="5" class="table table-hover table-bordered">
        <tr>
          <th style="width:50px;">STT</th>
          <th style="width:120px;">Mã giảng viên</th>
          <th style="width:120px;">Họ tên</th>
          <th style="width:100px;">Đơn vị</th>
          <th style="width:100px;">Email</th>
        </tr>
      <?php
        $stt = 0;
        foreach($arr as $rows)
        {
          $stt++;
      ?>
        <tr>
          <td style="text-align:center"><?php echo $stt; ?></td>
          <td><?php echo $rows["pk_code_teacher_id"]; ?></td>
          <td><?php echo $rows["name"]; ?></td>
          <td><?php echo $rows["major"]; ?></td>
          <td><?php echo $rows["mail"]; ?></td>
        </tr>
      <?php } ?>
      </table>
    </div>
  </div>
</div>