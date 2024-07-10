<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--标题-->
		<title>短链生成 - 在线网址缩短服务</title>
		<!--介绍、关键词的放置处（SEO优化）-->
		<meta name="description" content="PPIP SHORT URL">
		<meta name="keyword" content="PPIP SHORT URL,ShortLink,Link,链接缩短,短网址">
		<!--引入 CSS 文件-->
		<link type="text/css" rel="stylesheet" href=<?php echo ".".$ConfigMain["Theme"]."/asset/css/main.css";?>>
	</head>
	<body>
		<div class="wrap">
			<!--网页显示标题-->
			<div class="meta">
				<h2 class="title"><?php echo htmlspecialchars($LanguageV1["h1_index"]); ?></h2>
				<h3 class="description"><?php echo htmlspecialchars($ThemeUserGet["text.small"]); ?></h3>
			</div>
			<br>
			<br>
			<!--链接显示区-->
			<div class="link-area">
			<form method="POST" action="">
				<input type="text" name="original_url" id="url" placeholder="<?php echo htmlspecialchars($LanguageV1["CC-original_url_index"]); ?>" required>
				<input type="submit" id="submit" value="<?php echo htmlspecialchars($LanguageV1["Create-submit_index"]); ?>">
				
				<br>
				<br>
				
				<input type="text" name="password" id="password" placeholder="<?php echo htmlspecialchars($LanguageV1["CC-password_index"]); ?>">
				
				<br>
				<br>
				
				<input type="text" name="diy_url" id="diy_url" placeholder="<?php echo htmlspecialchars($LanguageV1["CC-diy_url_index"]); ?>">
				
				<br>
				<br>
			</form>

			</div>
			<div class="footer">
				<?php echo $ThemeUserGet["HTML.Footer"];?>
			</div>
		</div>
		<!--嵌入 JS 代码-->
		<script>
			shorturl.oncopy = function() {
													Swal.fire({
														allowOutsideClick:false,
														type:'success',
														title: 'Successful replication!',
														showConfirmButton: false,
														timer: 3000
													});
												};
		</script>
		<!--引入 JS 文件-->
		<script type="text/javascript" src=<?php echo ".".$ConfigMain["Theme"]."/asset/js/app.js";?>></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	</body>

</html>