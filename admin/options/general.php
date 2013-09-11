<?php
$options[] = array( "name" => "Geral",
						"sicon" => "advancedsettings.png",
                        "type" => "heading");


      $options[] = array( "name" => "Logo de sua Empresa",
                        "desc" => "Use sua pr&oacute;pria logo. Clique no bot&atilde;o 'Upload de Imagem' para selecionar e subir.",
                        "id" => $shortname."_clogo",
                        "std" => "$blogpath/library/images/logo.png",
                        "type" => "upload");
						
	$options[] = array( "name" => "Texto do Logo",
                        "desc" => "Se n&atilde;o tiver uma imagem de Logo esse texto vai aparecer.",
                        "id" => $shortname."_clogo_text",
                        "std" => "SimpleCorp",
                        "type" => "text");
	$options[] = array( "name" => "Cores do Tema",
                                    "id" => $shortname."_colorscheme",
                        "std" => "",
                                    "type" => "select",
                                    "options" => $colorschemes);					
	$options[] = array( "name" => "Favicon",
                        "desc" => "Use seu pr&oacute;prio favicon. Clique no bot&atilde;o 'Upload de Imagem' para selecionar e subir.",
                        "id" => $shortname."_custom_shortcut_favicon",
                        "std" => "",
                        "type" => "upload");
      $options[] = array( "name" => "Imagem de Cabe&ccedil;alho de P&aacute;gina Habilitada",
                              "desc" => "Deschecando isso as imagens de destaque para p&aacute;ginas s&atilde;o desativadas.",
                              "id" => $shortname."_showpageheader",
                              "std" => "1",
                              "type" => "checkbox");
      $options[] = array( "name" => "Imagem de Cabe&ccedil;alho de P&aacute;gina Padr&atilde;o",
                        "desc" => "Use sua pr&oacute;pria imagem. Clique no bot&atilde;o 'Upload de Imagem' para selecionar e subir. o tamanho deve ser 1000px x 200px.",
                        "id" => $shortname."_pageheaderurl",
                        "std" => "$blogpath/library/images/pageheader.jpg",
                        "type" => "upload");

?>