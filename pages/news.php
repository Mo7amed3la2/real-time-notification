<!DOCTYPE html>

<head>
    <title>Welcome to News </title>
</head>

<body>
    <h1>Welcome to News</h1>

    <script src="https://org1.tamkeentechlab.com/js/autobahn.js"></script>
    <script>
        var conn = new ab.Session('ws://org1.tamkeentechlab.com:8080',
            function() {
                conn.subscribe('News', function(topic, data) {
                    // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                    console.log('New News published to category "' + topic + '" : ' + data.title);
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