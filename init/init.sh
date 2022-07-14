#!/bin/bash
# Start ssh and apache
service ssh start
apache2ctl -D FOREGROUND
