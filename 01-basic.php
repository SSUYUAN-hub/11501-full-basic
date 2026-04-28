<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>程式基礎概念-變數、資料型態、運算子</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			background: linear-gradient(135deg, #f8f9fa 0%, #e8f4f8 100%);
			min-height: 100vh;
			font-family: 'Segoe UI', 'Roboto', 'Noto Sans TC', Arial, sans-serif;
			color: #2c3e50;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 40px 20px;
		}
		.container {
			background: rgba(255, 255, 255, 0.95);
			border-radius: 16px;
			box-shadow: 0 10px 40px rgba(0, 144, 218, 0.15);
			padding: 40px;
			border: 2px solid #e0f2f7;
			min-width: 320px;
			max-width: 600px;
			backdrop-filter: blur(10px);
		}
		h1 {
			color: #0090da;
			font-size: 1.8rem;
			margin-bottom: 30px;
			letter-spacing: 0.5px;
			text-align: center;
			font-weight: 600;
		}
		.output {
			font-size: 1.05rem;
			margin-bottom: 30px;
			line-height: 1.8;
			word-break: break-all;
			background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
			padding: 20px;
			border-radius: 10px;
			border-left: 4px solid #0090da;
			color: #1a3a52;
		}
		.back-btn {
			display: block;
			margin: 0 auto;
			padding: 12px 32px;
			background: linear-gradient(135deg, #0090da 0%, #00b4d8 100%);
			color: #fff;
			border: none;
			border-radius: 10px;
			font-size: 1rem;
			cursor: pointer;
			box-shadow: 0 4px 15px rgba(0, 144, 218, 0.3);
			transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			font-weight: 500;
		}
		.back-btn:hover {
			transform: translateY(-3px);
			box-shadow: 0 8px 25px rgba(0, 144, 218, 0.5);
			background: linear-gradient(135deg, #00b4d8 0%, #00d4ff 100%);
		}
		.back-btn:active {
			transform: translateY(-1px);
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>程式基礎概念-變數、資料型態、運算子</h1>
		<div class="output">
			<?php
			$A=10;
			$B=50;
			echo '$A=' . $A;
			echo '<br>';
			echo '$B=' . $B . '<br>';
			echo '交換後：<br>';
			$temp=$A;
			$A=$B;
			$B=$temp;
			echo '$A的新值=' . $A;
			echo '<br>';
			echo '$B的新值=' . $B;
			?>
		</div>
		<button class="back-btn" onclick="history.back()">返回上一頁</button>
	</div>
	<script>
		// 返回按鈕 hover 動畫
		const btn = document.querySelector('.back-btn');
		if (btn) {
			btn.addEventListener('mouseenter', () => {
				btn.style.boxShadow = '0 8px 25px rgba(0, 144, 218, 0.5)';
			});
			btn.addEventListener('mouseleave', () => {
				btn.style.boxShadow = '0 4px 15px rgba(0, 144, 218, 0.3)';
			});
		}
	</script>
</body>
</html>