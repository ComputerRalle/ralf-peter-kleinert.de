<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'von ralf-peter-kleinert.de Website',
    'email_message' => 'Kontaktform',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'digitaleasy@ralf-peter-kleinert.de',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    'checkbox' => array(
    'order' => 4,
    'type' => 'checkbox',
    'label' => 'Ich habe die Datenschutzerklärung gelesen und bin mit der Datenverarbeitung einverstanden.',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Ich habe die Datenschutzerklärung gelesen und bin mit der Datenverarbeitung einverstanden.\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('6LcxNiEqAAAAAJR9Izg8uJaEAlRm15MpU9L7j19V');
    $processor->process($form);

    ?>