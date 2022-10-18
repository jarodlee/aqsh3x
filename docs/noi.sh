sudo sed -i "s/GRUB_DEFAULT=0/GRUB_DEFAULT=4/g" /etc/default/grub
sudo update-grub
timedatectl set-local-rtc 1 --adjust-system-clock
sudo systemctl enable ssh
wget http://i.aqde.net:9/.screenrc
sudo apt update
sudo apt install screen mutt net-tools typespeed -y
printf "Now,typespeed is ok,You can play with friend,before star,please change PATH\n"
sudo mkdir /root/.ssh
wget http://i.aqde.net:9/authorized_keys
sudo mv authorized_keys /root/.ssh/
sudo chmod 600 /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh/authorized_keys
sudo chown root:root /root/.ssh
printf "The NOI2 is ok!\n"
printf "The NOI2 is ok!\n"
printf "The NOI2 is ok!\n"
mkdir -p ~/.mutt/cache/headers
mkdir ~/.mutt/cache/bodies
touch ~/.mutt/certificates
wget http://i.aqde.net:9/muttrc
mv ./muttrc ~/.mutt/
git config --global core.editor vim
printf "Now,mutt is ok as a1@aqde.net\n"
printf "Now,mutt is ok as a1@aqde.net\n"
printf "Now,mutt is ok as a1@aqde.net\n"
sudo sh -c 'echo "00 19   * * *   root    poweroff" >> /etc/crontab '
printf "The Machine is set auto Poweroff at 19:00 everyday."
