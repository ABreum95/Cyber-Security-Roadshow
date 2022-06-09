FROM php:apache

# MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# SSH
RUN apt update && apt install openssh-server -y 
#EXPOSE 22

# User configuration
RUN useradd -ms /bin/bash alice
RUN useradd -ms /bin/bash bob
RUN echo 'root:password' | chpasswd
RUN echo 'alice:alice' | chpasswd
RUN echo 'bob:bob' | chpasswd

USER bob
WORKDIR /home/bob
RUN echo 'flag{reverse_shell}' > flag.txt

USER alice
WORKDIR /home/alice
#RUN echo 'wonder what might be inhere' > note.txt
RUN mkdir .ssh
RUN ssh-keygen -q -t rsa -N '' -f .ssh/id_rsa
RUN cat .ssh/id_rsa.pub > .ssh/authorized_keys
RUN chmod -R a+rx .
RUN echo 'flag{ssh_access}' > flag.txt
RUN chmod 600 flag.txt
USER root
WORKDIR /root
RUN echo 'flag{toor}' > flag.txt
# Start ssh with root login permitted
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/g' /etc/ssh/sshd_config
RUN sed -i 's/#PubkeyAuthentication yes/PubkeyAuthentication yes/g' /etc/ssh/sshd_config
# Copy webserver files. We need copy such that e.g. uploads are not persitent
WORKDIR /var/www/html
COPY ./content/ .

# Set permissions for /var/www/html/upload folder to allow file uploads and execution
RUN chmod -R 777 /var/www/html/obscured-uploads
