<?php

class BibliographicName
{
    public function parse($name)
    {
        list ($firstname, $lastname) = $this->splitName($name);

        return strtoupper(lastName).",".$firstName;
    }

    private function capitalize($name)
    {
        $blacklist = array('da', 'de', 'do', 'das', 'dos', 'e');

        if (! in_array($name, $blacklist)) {
            return ucfirst($name);
        }

        return $name;
    }
    private function splitName($name)
    {
        $suffixes = array('filho');

        $names= explode(' ',$name);
        $lastname = '';
        do {
            $lastname = ' '.array_pop($names);
        } while (in_array(trim($lastname), $suffixes));

        $firstName = '';
        foreach ($names as $name) {
            $firstname .= 
        }
        $firstname = implode(' ', $names);

        return array($names, trim($lastname));
    }
}
