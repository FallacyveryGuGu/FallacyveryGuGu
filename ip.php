<?php
	if($_GET['ip']){
		$url = "https://be.fansmc.com/api/" . $_GET['ip'];
		$q = json_decode(file_get_contents($url));
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<base href="https://list.fansmc.com/">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>我的世界基岩版服务器查询</title>
		<link href="https://list.fansmc.com/list.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
			<h1><a href="/">我的世界基岩版服务器查询</a></h1>
			<div class="x">
				Minecraft是一款沙盒游戏，整个游戏没有剧情，玩家在游戏中自由建设和破坏，透过像积木一样来对元素进行组合与拼凑，轻而易举的就能制作出小木屋、城堡甚至城市，玩家可以通过自己创造的作品来体验上帝一般的感觉。在这款游戏里，不仅可以单人娱乐，还可以多人联机，玩家也可以安装一些模组来增加游戏趣味性。
			</div>	
			<div class="x"> 
				我的世界服务器查询，服务器状态查询，查询服务器滚动显示。
			</div>
			<div class="x">
				<form action="" method="get">
					<input type="text" class="form-control" name="ip" autocomplete="off" value="<?php echo $_GET['ip']; ?>" placeholder="IP地址">	
					<button type="submit" id="btn" class="btn btn-success">查询</button>
				</form>
			</div>
			<?php if($_GET['ip']){ ?>
			<div class="table-container">
				<table align="center">
					<thead>
						<tr>
							<th>Hostname</th>
							<th>在线人数</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $q->hostname; ?></td>
							<td><span class="badge"><?php echo $q->p . ' / ' . $q->mp; ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php } ?>
			<div class="x">
				<div class="bg">
					<h4>服务器查询API接口</h4>
					<input type="text" class="form-control" style="width: 240px;" value="https://be.fansmc.com/api/服务器地址:端口">
					<p><a href="https://be.fansmc.com/我的世界服务器查询网站源码.zip">点击下载网站源码</a></p>
				</div>
			</div>				
		</div>
	</body>
</html>