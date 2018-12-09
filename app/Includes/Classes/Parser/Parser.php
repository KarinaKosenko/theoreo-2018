<?php

namespace App\Includes\Classes\Parser;

abstract class Parser
{
    protected $params = [];
    protected $data = [];
    protected $stopPhases = [];
    protected $searchPhases = [];

    public function __construct(array $attributes = [])
    {
        $this->params = $attributes;
    }

    /**
     * @return mixed
     */
    public function getParam($key = '')
    {
        return $this->params[$key];
    }

    /*
     * Get data from source
     */
    abstract function getData();

    /*
     * Set stop phrases fo parser
     */
    public function setStopPhrases($phrases = [])
    {
        if (($phrases)) {
            $this->stopPhases = $phrases;
        }
    }

    /*
     * Set search phrases fo parser
     */
    public function setSearchPhrases($phrases = [])
    {
        if (($phrases)) {
            $this->searchPhases = $phrases;
        }
    }

    /*
     * Check stop phrases
     */
    public function checkStopPhrases($text = '')
    {
        foreach ($this->stopPhases as $phase) {
            if (strpos($text, $phase->value)) return true;
        }
        return false;
    }

    /*
     * Check search phrases
     */
    public function checkSearchPhrases($text = '')
    {
        foreach ($this->searchPhases as $phase) {

            if (strpos($text, $phase->value)) return true;
        }
        return false;
    }


}
