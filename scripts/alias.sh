alias build-vortex='docker build -t vortex .'
alias run-vortex='docker run -d -it -p 8000:8000 --add-host=host.docker.internal:172.17.0.1 -v "$PWD/src":/var/www/html --name vortex vortex'
alias bash-vortex='docker exec -it vortex bash'
alias stop-vortex='docker stop vortex'