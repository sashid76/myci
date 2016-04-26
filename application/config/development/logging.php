<?php

// Sample configuration for the logging library

$config = array(
    'audit' => array(
        'level' => 'INFO',
        'type' => 'file',
        'format' => "{date} - {level}: --> {message}",
        'file_path' => 'audit' // Use the default application/logs directory
    ),
    'simple' => array(
        'level' => 'INFO',
        'type' => 'file',
        'format' => "{date} - {level}: --> {message}",
        'file_path' => '' // Use the default application/logs directory
    ),
    'debug' => array(
        'level' => 'DEBUG',
        'type' => 'file',
        'format' => "{date} - {level}: --> {message}",
        'file_path' => '' // Use the default application/logs directory
    ),
    'just_critical' => array(
        'level' => 'CRITICAL',
        'type' => 'file',
        'format' => "{date} - {level}: --> {message}",
        'file_path' => 'critical' // Will save log files to application/logs/critical
    ),    
    'email_criticals' => array(
        'level' => 'CRITICAL',
        'type' => 'email',
        'format' => "{date} - {level}: --> {message}",
        'to' => 'sashi@aibd.org.my',
        'from' => 'root@aibd.org.my',
        'subject' => 'New critical logging message'
    )
);