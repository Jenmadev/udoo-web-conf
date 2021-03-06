#!/bin/bash

PID=`ps aux | grep "[a]pt update" |awk '{print $2}'`

if [ -z "$PID" ]; then
    echo "Starting APT Update"
    DEBIAN_FRONTEND=noninteractive nice -19 apt update && sync &
fi
