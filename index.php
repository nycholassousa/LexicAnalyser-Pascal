<?php

require 'lexer.php';
require 'analyzer/pascal.php';

$lexer = new PascalLexer();

if (isset($_POST['code']) && $_POST['code'] !== '') {
	$lexer->analyze($_POST['code']);
	$output = $lexer->get_result();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Analisar Léxico - Pascal</title>
		<link rel="stylesheet" href="css/codemirror.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="js/codemirror.min.js" type="text/javascript"></script>
		<script src="js/main.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div class="wrapper">
		<h1>Analisar Léxico - Pascal</h1>
		
			<p>A informação retorna da seguinte maneira: "<code>[<span class="string">linha</span>:
			<span class="string">coluna</span>] Token: <span class="string">valor</span> 
			Classificação: <span class="string">class_id</span></code>".</p>
			<div class="main clearfix">
			<div class="box left">
				<form method="post" action="index.php">
					<textarea id="code" name="code"><?php echo (isset($_POST['code']) && $_POST['code'] !== '') ? $_POST['code'] : '
program teste; {programa exemplo}
var
	valor1: integer;
	valor2: real;
begin
	valor1 := 10;
	valor2 := valor1 and 1.1;
end.
						 '; ?></textarea>
					<div class="clearfix"><input type="submit" value="Gerar Tabela com Análise Léxica" class="right"></div>
				</form>
			</div>
				<div class="box right" id="re">
					<div class="result">
						<table>
<?php

if (isset($output)) {
	foreach ($output as $line) {
		echo '                            <tr><td>[' . ($line['row'] + 1) . ':' . ($line['col'] + 1) . ']</td>';
		echo ($line['t_value'] !== '') ? "<td>Token: <b>{$line['t_value']}</b></td>" : '<td></td>';
		echo "<td>Classificação: <em>{$line['t_type']}</em></td></tr>\n";
		}
} else {
	echo 'Aqui estará a saída após a análise';
}

?>
						</table>
					</div>
				</div>
			</div>
			<p><a href="https://github.com/nycholassousa/pascal_analyzer">GitHub</a></p>
		</div>
	</body>
</html>