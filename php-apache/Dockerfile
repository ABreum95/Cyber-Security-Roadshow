FROM php:apache

# MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# SSH
RUN apt update && apt install openssh-server -y
EXPOSE 22

# Set password for root user
RUN echo 'root:password' | chpasswd

# Start ssh with root login permitted
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/g' /etc/ssh/sshd_config
