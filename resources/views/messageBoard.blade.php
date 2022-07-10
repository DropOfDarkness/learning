<head>
    <title>learning</title>
    <link rel="stylesheet" href="/app.css" />
</head>

<body>

    <div class="boxed">
        <h2>Previous Message:</h2>
        <p id="messageArea">
            <?= $message ?>
        </p><br />
        <!--<h3>Enter Your Message:</h3>
        <textarea id="messageEntry" rows="7" cols="50"></textarea><br /> -->

        <!-- <h4>Password:</h4>
        <textarea id="pass" rows="1" cols="20"></textarea><br /> -->
        <form action="/submission">
            <label for="messageEntry">Enter Your Message:</label><br>
            <input type="text" id="messageEntry" name="messageEntry"><br>

            <input type="submit" value="Submit">
        </form>

        <!-- <button id="submitMessage">Submit</button> -->
    </div>
    
    <a id="back" href="/">Back</a>
</body>