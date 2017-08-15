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
		'Comentário' => array( 'pattern' => '/^((\{|\(\*)(.*?)(\}|\*\)))/', 'invisible' => true ),
		
        //Others
        'LBRACKET'    => array( 'pattern' => '/^(\[)/', 'delimiter' => true ),                             // '['
        'RBRACKET'    => array( 'pattern' => '/^(\])/', 'delimiter' => true ),                             // ']'
        'CIRCUMFLEX'  => array( 'pattern' => '/^(\^)/', 'delimiter' => true ),                             // '^'
        'DOUBELDOT'   => array( 'pattern' => '/^(\.\.)/', 'delimiter' => true ),                           // '..'
        'HEXNUMBER'   => array( 'pattern' => '/^(\$[0-9a-fA-F]+)/' ),                                      // hexadecimal number
        'STRING'      => array( 'pattern' => '/^(\'(.*?)\')/' ),                                           // string
        'BLANK'       => array( 'pattern' => '/^([\s\t])/', 'invisible' => true, 'delimiter' => true ),    // space or \t
    );

    public $reserved = array('and', 'array', 'begin', 'case', 'const',
		'div', 'do', 'downto', 'else', 'end', 'file', 'for', 'function', 
		'goto', 'if', 'in', 'label', 'mod', 'nil', 'new', 'not', 'of', 
		'packed', 'procedure', 'program', 'record', 'repeat', 'set', 'then', 
		'to', 'type', 'until', 'var', 'while', 'with',
    );

}
