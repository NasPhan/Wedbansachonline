<!-- CENTER : START-->


<?php 
    if(isset($_SESSION["user"])){
            $tenus = $_SESSION['user'];		
			$query2 = "SELECT * FROM user WHERE user.username='".$tenus."'";
			$user = layDuLieuTuDB($query2);
	  }
?>


        <div id="menu">
		
		<ul class="menu1">
			<li><a href="index.php">Trang Chủ</a></li>
			<li><a href="">Thể Loại</a>
				<ul class="menu2">
					<li><a href="phanloai.php?id=1">Phiêu Lưu</a></li>
					<li><a href="phanloai.php?id=2">Học Đường</a></li>
					<li><a href="phanloai.php?id=3">Kinh Dị</a></li>
					<li><a href="phanloai.php?id=4">Khoa Học</a></li>
					<li><a href="phanloai.php?id=5">Trinh Thám</a></li>
					<li><a href="phanloai.php?id=6">Xuyên Không</a></li>
				</ul>
			</li>
			<li><a href="">Quốc Gia</a>
				<ul class="menu2">
					<li><a href="phannuoc.php?id=1">Nhật Bản</a></li>
					<li><a href="phannuoc.php?id=2">Hàn Quốc</a></li>
					<li><a href="phannuoc.php?id=3">Mỹ</a></li>
					<li><a href="phannuoc.php?id=4">Việt Nam</a></li>
				</ul>
			</li>
			<li><a href="truyentg.php?id=1">Truyện Con Trai</a></li>
			<li><a href="truyentg.php?id=0">Truyện Con Gái</a></li>
			
			<?php if ( isset($_SESSION["user"])) { ?> 
				<li><a href=""><?php echo $_SESSION["user"]; ?></a>
				    <ul class="menu2"> 
					<li><?php $file=$user[0]['user_id'];
							echo " <a href='tutruyen.php?id=$file'>Tủ Truyện</a>"; ?>
					</li>
					<li><a href="thoat.php">Thoát</a></li>
				</ul>
			<?php } else { ?>
				<li><a href="">Tài Khoản</a>
				<ul class="menu2"> 
					<li><a href="dangnhap.php">Đăng Nhập</a></li>
					<li><a href="dangki.php">Đăng Ký</a></li>
				</ul>
				<?php } ?>
			</li>
		</ul>
	</div>
            <!-- MENU : END-->