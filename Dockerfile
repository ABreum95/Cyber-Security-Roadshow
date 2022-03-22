FROM ubuntu/apache2

# Install sudo and openssh
RUN apt update && apt install openssh-server sudo -y 

# Install php
RUN sudo apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN sudo apt install -y php7.4 -y

# Set password for root user
RUN echo 'root:password' | chpasswd

# Start ssh with root login permitted
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/g' /etc/ssh/sshd_config
RUN service ssh start

# Listen on 22 default SSH
EXPOSE 22

WORKDIR /var/www/html
COPY ./webserver/ .
#RUN sudo chmod 777 ./*.php

# Set permissions for /var/www/html/upload folder to allow file uploads
RUN sudo chmod 777 /var/www/html/uploads

# For mulitple CMD commands. Edit script.sh to add more.
WORKDIR /tmp/
COPY script.sh script.sh
RUN chmod +x script.sh
CMD ["./script.sh"]


