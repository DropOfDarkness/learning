## Learning Web Development and Git
This repository is documenting my history of learning both general web development through various languages and frameworks, as well as my first experience with git and github.

### Setup
Once you've cloned the repository using `git clone`, set up Laravel Sail using the following command:

    $ docker run --rm \
          -u "$(id -u):$(id -g)" \
          -v $(pwd):/opt \
          -w /opt \
          laravelsail/php81-composer:latest \
          composer install

Finally, to start the server, simply run:

    $ ./vendor/bin/sail up

It should then be possible to connect to the website on `localhost`.
