#!/bin/bash
# forceMulticraftStart.sh

ps cax | grep "multicraft" > /dev/null
if [ $? -eq 0 ]; then
  echo "Multicraft is already running."
else
  /home/dragonsdoom/ddservers/./bin/multicraft -v start
  echo "Starting Multicraft.. If multicraft does not start, Wait 5 minutes and reload this page!"
fi