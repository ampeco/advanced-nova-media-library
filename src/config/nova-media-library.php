<?php

return [
    'enable-existing-media' => false,

    /*
     * When temporary url is used how many minutes should it expire for.
     */
    'default-temporary-url-expiration-minutes' => 5,

    /*
     * Temporary urls are enabled only for particular disk names.
     */
    'temporary_url_disk_names' => [
        's3'
    ]
];
