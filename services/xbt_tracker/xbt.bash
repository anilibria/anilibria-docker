#!/bin/bash -x
sleep 60
su - xbt -c "cd /home/xbt/bin && ./xbt_tracker > /dev/null 2>/dev/null &"