<!DOCTYPE html>

<head>
    <title>Welcome to Home </title>
</head>

<body>
    <h1>Welcome to Home</h1>

    <script src="/ratchet/js/autobahn.js"></script>
    <script>
        var conn = new ab.Session('ws://org1.tamkeentechlab.com:8080',
            function() {
                conn.subscribe('Home', function(topic, data) {
                    // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                    console.log('New Home published to category "' + topic + '" : ' + data.title);
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