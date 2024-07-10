
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--标题-->
		<title><?php echo $LanguageV1["title_index"]; ?> - <?php echo $LanguageV2["title_i"]; ?></title>
		<!--介绍、关键词的放置处（SEO优化）-->
		<meta name="description" content="PPIP SHORT URL">
		<meta name="keyword" content="PPIP SHORT URL,ShortLink,Link,链接缩短,短网址">
		<!--引入 CSS 文件-->
		<link type="text/css" rel="stylesheet" href=<?php echo "..".$ConfigMain["Theme"]."/asset/css/main.css";?>>
	</head>
	<body>
		<div class="wrap">
			<!--网页显示标题-->
			<div class="meta">
				<h2 class="title"><?php echo $LanguageV2["h1_i"]; ?></h2>
			</div>
			<br>
			<br>
			<!--链接显示区-->
			<div class="link-area">
			<form method="POST" action="">
				<input type="password" name="password" id="password" placeholder="<?php echo htmlspecialchars($LanguageV2["V-password_i"]); ?>" required>
				<input type="submit" id="submit" value="<?php echo htmlspecialchars($LanguageV2["V-submit_i"]); ?>">
				
				
				<br>
				<br>
			</form>

			</div>
			<div class="footer">
				<?php echo $ThemeUserGet["HTML.Footer"];?>
			</div>
		</div>
		<!--嵌入 JS 代码-->
		<!--引入 JS 文件-->
		<script type="text/javascript" src=<?php echo "..".$ConfigMain["Theme"]."/asset/js/app.js";?>></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	</body>

</html>