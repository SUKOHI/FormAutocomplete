<?php namespace Sukohi\FormAutocomplete;

class FormAutocomplete {

    private $_selector = '';
    private $_source = [];

    public function __toString() {

        return '$(\''. $this->_selector .'\').autocomplete({source: '. json_encode($this->_source) .'});';

    }

    public function selector($selector) {

        $this->_selector = $selector;
        return $this;

    }

    public function source($source) {

        if(is_callable($source)) {

            $this->_source = $source();

        } else if(is_array($source)) {

            $this->_source = $source;

        }

        return $this;

    }

}