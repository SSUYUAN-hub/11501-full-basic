<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>程式基礎概念-變數、資料型態、運算子</title>
	<style>
		body {
			background: linear-gradient(135deg, #0f2027, #2c5364 80%);
			min-height: 100vh;
			margin: 0;
			font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
			color: #e0e0e0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		.container {
			background: rgba(30, 40, 60, 0.85);
			border-radius: 18px;
			box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
			padding: 32px 40px;
			border: 1.5px solid rgba(255,255,255,0.08);
			min-width: 320px;
		}
		h1 {
			color: #00ffe7;
			text-shadow: 0 0 12px #00ffe7cc, 0 2px 8px #232526;
			font-size: 2rem;
			margin-bottom: 24px;
			letter-spacing: 2px;
			text-align: center;
		}
		.output {
			font-size: 1.1rem;
			margin-bottom: 24px;
			line-height: 1.7;
			word-break: break-all;
		}
		.back-btn {
			display: block;
			margin: 0 auto;
			padding: 10px 28px;
			background: linear-gradient(90deg, #232526 60%, #00ffe7 100%);
			color: #232526;
			border: none;
			border-radius: 8px;
			font-size: 1.1rem;
			cursor: pointer;
			box-shadow: 0 2px 8px #00ffe733;
			transition: background 0.3s, color 0.3s, box-shadow 0.2s;
		}
		.back-btn:hover {
			background: linear-gradient(90deg, #00ffe7 0%, #232526 100%);
			color: #00ffe7;
			box-shadow: 0 0 24px #00ffe7cc;
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
		btn.addEventListener('mousemove', e => {
			const rect = btn.getBoundingClientRect();
			const x = e.clientX - rect.left;
			const y = e.clientY - rect.top;
			btn.style.boxShadow = `0 0 24px 6px #00ffe7cc, 0 0 0 0 #fff0`;
			btn.style.background = `radial-gradient(circle at ${x}px ${y}px, #00ffe7 40%, #232526 100%)`;
		});
		btn.addEventListener('mouseleave', () => {
			btn.style.boxShadow = '';
			btn.style.background = '';
		});
	</script>
</body>
</html>