<div class="col-md-10 col-xs-offset-1">
  <div style="margin-bottom:5px;">
    <a href="index.php?controller=list_topic&act=add" class="btn btn-primary">Add</a>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách sinh viên</div>
    <div class="panel-body">
      <table cellpadding="5" class="table table-hover table-bordered">
        <tr>
          <th style="">STT</th>
          <th style="">Mã sinh viên</th>
          <th style="">Họ tên</th>
          <th style="">Email</th>
          <th style="">Xác nhận</th>
          <th style="">Đề tài</th>
        </tr>
      <?php
        $stt = 0;
        foreach($arr as $rows)
        {
          $stt++;
      ?>
        <tr>
          <td style="text-align:center"><?php echo $stt; ?></td>
          <td><?php echo $rows["pk_code_student_id"]; ?></td>
          <td><?php echo $rows["name"]; ?></td>
          <td><?php echo $rows["mail"]; ?></td>
          <td><?php echo $rows["replied"]==0 ? "Chưa xác nhận" : "Đã xác nhận" ?></td>
          <td><?php echo $rows["research_on"] ?></td>
        </tr>
      <?php } ?>
      </table>
    </div>
  </div>
</div>