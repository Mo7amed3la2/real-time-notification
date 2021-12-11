<!DOCTYPE html>

<head>
    <title>Welcome to Blog </title>
</head>

<body>
    <h1>Welcome to Blog</h1>

    <script src="/ratchet/js/autobahn.js"></script>
    <script>
        var conn = new ab.Session('ws://localhost:8080',
            function() {
                conn.subscribe('Blog', function(topic, data) {
                    // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                    console.log('New Blog published to category "' + topic + '" : ' + data.title);
                });
            },
            function() {
                console.warn('WebSocket connection closed');
            }, {
                'skipSubprotocolCheck': true
            }
        );
    </script>
</body>

</html>