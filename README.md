# Cyber-Security-Roadshow
Cyber Security Roadshow - Bachelor Project. Andreas and Christian

## To build docker:
sudo docker build -t ubuntuvuln

## To run docker:
sudo docker run --name test -p 8080:80 -p 22:22 ubuntuvuln

## To kill docker:
sudo docker rm -f test
