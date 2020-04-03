#!/bin/bash -x
sleep 60
su - xbt -c "cd /xbt/bin && ./xbt_tracker > /dev/null 2>/dev/null &"