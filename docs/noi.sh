sudo vim /etc/default/grub
sudo update-grub
timedatectl set-local-rtc 1 --adjust-system-clock
sudo systemctl enable ssh
wget http://x.aqde.net:9/.screenrc
sudo mkdir /root/.ssh
wget http://x.aqde.net:9/authorized_keys
sudo mv authorized_keys /root/.ssh/
sudo chmod 600 /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh
printf "The NOI2 is ok!\n"
sudo apt install mutt -y
mkdir -p ~/.mutt/cache/headers
mkdir ~/.mutt/cache/bodies
touch ~/.mutt/certificates
wget http://x.aqde.net:9/muttrc
mv ./muttrc ~/.mutt/
printf "Now,mutt is ok as a1@aqde.net\n"
