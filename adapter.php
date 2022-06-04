<?php

        require "layouts/header.php";
        require "layouts/footer.php";
        /* Este patrón de diseño se utiliza cuando un objeto no puede ser utilizando por un sistema y se debe
        generar un adaptador para poder usarlo. */

        interface RenderHTMLInterface{
            public function renderHeader();
            public function renderBody();
            public function renderFooter();
        }

        class TemplateHTML implements RenderHTMLInterface{
            public function renderHeader(){
                return "<html><body>";
            }
            public function renderBody(){
                return "Hello World";
            }
            public function renderFooter(){
                return "</body></html>";
            }
        }

        interface RenderPDFInterface{
            public function renderTop();
            public function renderMiddle();
            public function renderBottom();
        }

        class TemplatePDF implements RenderPDFInterface{
            public function renderTop(){
                return "This is the top of the PDF";
            }
            public function renderMiddle(){
                return "This is the middle of the PDF";
            }
            public function renderBottom(){
                return "This is the bottom of the PDF";
            }
        }

        //Adaptador
        class AdapterPDFaHTML implements RenderHTMLInterface{
            private $pdfTemplate;
            public function __construct(TemplatePDF $pdfTemplate){
                $this->pdfTemplate = $pdfTemplate;
            }

            public function renderHeader(){
                return $this->pdfTemplate->renderTop();
            }
            public function renderBody(){
                return $this->pdfTemplate->renderMiddle();
            }
            public function renderFooter(){
                return $this->pdfTemplate->renderBottom();
            }
        }

        $templatePDF = new TemplatePDF();
        $adapter = new AdapterPDFaHTML($templatePDF);

        echo $adapter->renderHeader();
        echo "<br>";
        echo $adapter->renderBody();
        echo "<br>";
        echo $adapter->renderFooter();