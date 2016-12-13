@media print { body { width: 705px; } }

body {
	padding: 0px;
	margin: 0px;
}

A:link 		{ color: #666666; }
A:active 	{ color: #666666; }
A:visited 	{ color: #666666; }
A:hover 	{ color: #000000; }



div {
	FONT-SIZE			: <?= $MAIN_FONT_SIZE ?>;
	FONT-FAMILY			: <?= $MAIN_FONT_FAMILY ?>;
	line-height			: <?= $LINE_HEIGHT ?>;
}

td {
	FONT-SIZE			: <?= $MAIN_FONT_SIZE ?>;
	FONT-FAMILY			: <?= $MAIN_FONT_FAMILY ?>;
	line-height			: <?= $LINE_HEIGHT ?>;
}

h1 {
	FONT-SIZE			: 17px;
	COLOR				: #27aae1;
	margin-top			: 0px;
	font-weight			: normal;
}

h2 {
	FONT-SIZE			: 19px;
	COLOR				: #27aae1;
	margin				: 20px 0px 5px 0px;
	letter-spacing		: 2px;
}

h3 {
	FONT-SIZE			: 17px;
	COLOR				: #555555;
	margin				: 0px;
	font-weight			: bold;
}

p {
	MARGIN-TOP:0px;
	MARGIN-BOTTOM:15px;
	line-height			: <?= $LINE_HEIGHT ?>;
}

ul {
	MARGIN-LEFT			: 40px;
	MARGIN-TOP			: 0;
	MARGIN-BOTTOM		: 0;
	PADDING				: 0px;
	line-height			: <?= $LINE_HEIGHT ?>;
}

ol {
	MARGIN-LEFT			: 40px;
	MARGIN-TOP			: 0;
	MARGIN-BOTTOM		: 0;
	PADDING				: 0px;
	line-height			: <?= $LINE_HEIGHT ?>;
}

.li {
	margin-left: 10px;
}

table {
	padding: 0px;
}

img {
	display: block;
}

input {
	border-style: solid;
	border-width: 1px;
	border-color: black;
	font-size: 20px;
}

textarea {
	border-style: solid;
	border-width: 1px;
	border-color: black;
	font-size: 20px;
}
