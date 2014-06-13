<?php

return array(

    'token'    => null, // Must be set

    'options' => array(
        "max_batch_size"    => null, // the max batch size Mixpanel will accept is 50, (default 50)
        "max_queue_size"    => null, // the max num of items to hold in memory before flushing (default 1000)
        "debug"             => null, // enable/disable debug mode (default false)
        "consumer"          => null, // which consumer to use (default "curl")
        "host"              => null, // the host name for api calls (default "api.mixpanel.com")
        "events_endpoint"   => null, // host relative endpoint for events (default "/track")
        "people_endpoint"   => null, // host relative endpoint for people updates (default "/engage")
        "use_ssl"           => null, // use ssl when available (default true)
        "error_callback"    => null // callback to use on consumption failures (default null)
        ),
    
    );