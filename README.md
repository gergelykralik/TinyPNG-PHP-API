TinyPNG PHP API
===============

#Usage:

    $api = new TinyPNG('API_Key_Here');
    $result = $api->shrink('/path/to/to/file.png');

    $result contains the call result.
    If succeeded you will find the output key in the JSON, othervise the error key and the message key will be set.