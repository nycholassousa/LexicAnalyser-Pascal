<?php


class PascalLexer extends Lexer {

    public $token_classes = array(
		// = < > <> <= =< >= =>
		//Separated using "|"
        'Operador Relacional'          => array( 'pattern' => '/^(=|\<|\>|\<\>|\<=|=\<|\>=|=\>)/', 'delimiter' => true ),
		
		//Identifiers
		'Identificador'          => array( 'pattern' => '/^([a-zA-Z_][a-zA-Z0-9_]*)/' ),
		
		//Integer Numbers
		'Número Inteiro'      => array( 'pattern' => '/^([0-9]+)/' ),
		
		//Real Numbers
		'Número Real'  => array( 'pattern' => '/^([0-9]+\.[0-9]+([eE][+-]?[0-9]+)?)/' ),
		
		//Delimiter ; . : ( ) ,
		'Delimitador'   => array( 'pattern' => '/^(;|\.|\:|\(|\)|\,)/', 'delimiter' => true ),
		
		//Assign :=
		'Atribuição'      => array( 'pattern' => '/^(:=)/', 'delimiter' => true ),
		
		//Additive + =
        'Operador Aditivo'        => array( 'pattern' => '/^(\+|\-)/', 'delimiter' => true ),
		
		//Multiplicative * /
        'Operador Multiplicativo'    => array( 'pattern' => '/^(\*|\/)/', 'delimiter' => true ),
        
		//Comment { anything }
		'Comentário' => array( 'pattern' => '/^((\{|\(\*)(.*?)(\}|\*\)))/', 'visible' => false ),
		
        //Others
        'Colchete'    => array( 'pattern' => '/^(\[ | \])/', 'delimiter' => true ),                             // '['
        'Potenciação'  => array( 'pattern' => '/^(\^)/', 'delimiter' => true ),                             // '^'
        'Duplo Ponto'   => array( 'pattern' => '/^(\.\.)/', 'delimiter' => true ),                           // '..'
        'Hexadecimal'   => array( 'pattern' => '/^(\$[0-9a-fA-F]+)/' ),                                      // hexadecimal number
        'String'      => array( 'pattern' => '/^(\'(.*?)\')/' ),                                           // string
        'Blank'       => array( 'pattern' => '/^([\s\t])/', 'visible' => false, 'delimiter' => true ),    // space or \t
    );

    public $reserved = array('array', 'begin', 'case', 'const',
		'div', 'do', 'downto', 'else', 'end', 'file', 'for', 'function', 
		'goto', 'if', 'in', 'label', 'mod', 'nil', 'new', 'not', 'of', 
		'packed', 'procedure', 'program', 'record', 'repeat', 'set', 'then', 
		'to', 'type', 'until', 'var', 'while', 'with',
		
		"Operador Multiplicativo" => 'and', 
    );

}
