<div class="col-md-8">
	<form method="post">
		<div class="row">
			<div class="col-md-4" style="text-align:left">Nhập chủ đề hướng nghiên cứu<br><span style="color: #999; font-size: 13px; text-align: center;">(Mỗi chủ đề ngăn nhau bởi dấu '.')</span></div>
			<div class="col-md-8">
				<div class="form-group">
	  				<input type="text" style="width: 100%" name="research_on" placeholder="Mỗi chủ để sẽ được cách nhau bởi một dấu '.'" value="<?php echo $arr['research_on'] ?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style="text-align:left">Lĩnh vực liên quan</div>
			<div class="col-md-8" style="text-align:left">
				<div class="form-group">
	  				<input type="checkbox" name="check[]" value="1" <?php echo strpos($arr["1"],"Cấu trúc cây")!==false ? "checked":""; ?>> Cấu trúc cây <br>
	  				<input type="checkbox" name="check[]" value="2" <?php echo strpos($arr["1"],"Tham khảo cách phân loại của ACM")!==false ? "checked":""; ?>> Tham khảo cách phân loại của ACM <br>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style="text-align:left"></div>
			<div class="col-md-8" style="text-align:left">
				<input type="submit" name="save" value="Lưu" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>