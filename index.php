<html> 
	<head>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" type="image/ico" href="image/logo.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/ab99e84824.js"></script>
		<script src="js/test.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/test.css">
		<title>Calculator</title>
	</head>
	<body>
		<div id="calculator">
			<center><h2><span style="color: #20b2aa;">CA</span><span style="color: #ffa500;">LC</span><span style="color: #f08080;">UL</span><span style="color: #7d93e0;">AT</span><span style="color: #9477af;">OR</span></h2></center>
			<div id="result">
				<div id="history">
					<p id="history-value"></p>
				</div>
				<div id="output">
					<p id="output-value">0</p>
				</div>
			</div>
			<div id="keyboard" >
				<button class="operator" id="clear">C</button>
				<button class="operator" id="backspace"><i class="fas fa-backspace"></i></button>
				<button class="operator" id="%">%</button>
				<button class="operator" id="/">&#247;</button>
				<button class="number" id="7">7</button>
				<button class="number" id="8">8</button>
				<button class="number" id="9">9</button>
				<button class="operator" id="*">&times;</button>
				<button class="number" id="4">4</button>
				<button class="number" id="5">5</button>
				<button class="number" id="6">6</button>
				<button class="operator" id="-">-</button>
				<button class="number" id="1">1</button>
				<button class="number" id="2">2</button>
				<button class="number" id="3">3</button>
				<button class="operator" id="+">+</button>
				<button class="empty" id="empty" onclick="copy();"><i class="fas fa-copy"></i></button>
				<button class="number" id="0">0</button>
				<button class="empty" id="empty"></button>
				<button class="operator" id="=">=</button>
				<center><p style="font-family: 'monospace';">&copy;Designed By <a href="https://adityapandey.me/" target="_blank" style="text-decoration: none;">Aditya Pandey</a></p></center>
			</div>


		</div>
		<script src="js/script.js"></script>
	</body>
</html>
