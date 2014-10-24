<?php
    class LoremGenerator {

        // Properties
	   private $generator;
       private $paragraphs;
    
        // Constructor
        function __construct($numberOfParas) {
            $this->generator = new Badcow\LoremIpsum\Generator();
            $this->setParagraphs($numberOfParas);
        }

        // Getters / Setters
        public function setParagraphs($numberOfParas) {
            $this->paragraphs = $this->generator->getParagraphs($numberOfParas);
        }
        public function getParagraphs() {
            return (implode('<p>', $this->paragraphs));
        }
    }