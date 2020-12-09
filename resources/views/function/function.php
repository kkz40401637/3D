<?php

    //  These function convert utc time to smt local ( yellhtut custom command )

    function ChangeUTCtoSMT($Date,$Region){

        $myDateTime = new DateTime($Date, new DateTimeZone('GMT'));
        $myDateTime->setTimezone(new DateTimeZone($Region));
        return $myDateTime->format('Y-m-d h:i:s');

    }

?>