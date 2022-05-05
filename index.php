<?php
	// lay 5 truyen dc update moi nhat
	require('Database/congcu.php');
	$query = "SELECT * FROM truyen";
	$truyens = layDuLieuTuDB($query);

	$tongSoTruyen = count($truyens);
	$tongSoTrang = (int)($tongSoTruyen / 10);
	if($tongSoTruyen - $tongSoTrang * 10 > 0){
		$tongSoTrang += 1;
	}

	$page = 0;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}

	$offset = $page * 10; 
	$query = "SELECT * FROM truyen LIMIT 10 OFFSET $offset";
	$truyens = layDuLieuTuDB($query);
?>

<?php
	require 'site.php';
	load_top();
	load_header();
	load_menu();
?>		
	<div id="main">
		<div id="left">
			<ul>
				<li>
				    <?php
						foreach($truyens as $truyen){
							echo "
								<li>
									<a href='chitiet2.php?id={$truyen['truyen_id']}'><img src='./img/bia/{$truyen['truyen_id']}.jpg'' ></a><br/>
									<h2><a href='chitiet2.php?id={$truyen['truyen_id']}' >{$truyen['truyen_ten']}</a><br/></h2>
									<tr><td>{$truyen['truyen_noidung']}</td></tr>										
								</li>
							";
						}
					?>					
				</li>
				<li>
				   <div class="pagination">
						<?php
							for($i = 0; $i < $tongSoTrang; $i++){
								$j = $i + 1;
								if($i == $page){
									echo "<a class='choice' href='{$_SERVER['PHP_SELF']}?page={$i}'>{$j}</a>";
								}
								else{
									echo "<a href='{$_SERVER['PHP_SELF']}?page={$i}'>{$j}</a>";
								}
							}
						?>
				    </div> 
				</li>
			</ul>
		</div>		
	</div>
    <?php
	   load_footer();
    ?>