This project has been made to show volumio controls and song status information for the polybar. With this set you can play the songs, stop, move to the next song, move to the previous song through the polybar. You can also see the current position of the song as a time and progress bar. Volumio REST Api is used for all operations.

The whole project was done via volumio.local address. If your computer cannot solve the volumio.local address, you must write the IP address for the volumio.local address "/ etc / hosts".

Requirements:
Php 5 or 7 with console version.
Material Desing Icons: https://github.com/google/material-design-icons/tree/master/iconfont

How to Install:

First, ping from the console, ping volumio.local. Make sure your Volumio has solved the ip address. Open the Polybar-config-items file and add the contents to your polybar config file. You can place the modules in any order.

The module order on my own computer is as follows:
Volume up and down - the current time of the song (in minutes) - artist - song title - the length of the song's time - the progress bar - the previous song - play and pause - the next song
