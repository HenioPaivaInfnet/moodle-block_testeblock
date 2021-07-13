<?php

$settings->add(new admin_setting_configcheckbox(
    'block_testblock/lastname',
    get_string('showlastname', 'block_testblock'),
    get_string('showlastnamedesc', 'block_testblock'),
    '1'
));