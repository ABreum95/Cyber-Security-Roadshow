FROM ubuntu/apache2

# Install sudo and openssh
RUN apt update && apt install openssh-server sudo -y 

# Set password for root user
RUN echo 'root:password' | chpasswd

# Start ssh with root login permitted
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/g' /etc/ssh/sshd_config
RUN service ssh start

# Listen on 22 default SSH
EXPOSE 22

WORKDIR /var/www/html
COPY ./html/ .

COPY script.sh script.sh
RUN chmod +x script.sh
CMD ["./script.sh"]

# RUN /usr/sbin/sshd -D
# Start the SSS deamon
# CMD ["/usr/sbin/sshd", "-D"]


