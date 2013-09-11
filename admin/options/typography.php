<?php
    $options[] = array( "name" => "Tipografia",
    					"sicon" => "font.png",
						"type" => "heading");
						
	$options[] = array( "name" => "Fontes Customizadas",
					"desc" => "Esse tema usa Google Web Fonts para T&iacute;tulos. Preencha os campos abaixo com os detalhes das Fontes Google.",
					"id" => $shortname."_customfontsinfo",
					"std" => "",
					"type" => "info");
						
	$options[] = array( "name" => "Habilitar Google Font",
						"desc" => "By unchecking this the theme will use default font for headings, Arial.",
						"id" => $shortname."_customtypography",
						"std" => "1",
						"type" => "checkbox");
						
    $options[] = array( "name" => "Google Font Link",
                        "desc" => "Ex: &lt;link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'&gt;",
                        "id" => $shortname."_headingfontlink",
                        "std" => "&lt;link href='http://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic' rel='stylesheet' type='text/css'&gt;",
                        "type" => "textarea");

    $options[] = array( "name" => "Google Font Family",
                        "desc" => "Ex: font-family: 'Dosis', sans-serif",
                        "id" => $shortname."_headingfontface",
                        "std" => "font-family: 'Dosis', sans-serif",
                        "type" => "text");					

?>