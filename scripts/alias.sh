alias build-omegle='docker build -t omegle .'
alias run-omegle='docker run -d -it -p 8000:8000 --add-host=host.docker.internal:172.17.0.1 -v "$PWD/src":/var/www/html --name omegle omegle'
alias bash-omegle='docker exec -it omegle bash'
alias stop-omegle='docker stop omegle'