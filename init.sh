#!/bin/bash

RED=$'\033[0;31m'
NC=$'\033[0m' # No Color
BREW=0 # Brew and Xcode installed?
XCODE=0

echo "Why you so lazy >.<"
sleep 1
echo "Good thing I was bored and wrote this script for ya."
sleep 1
echo "OK Let's get started."
sleep 1
echo -e "What is your GitHub repo path? (ie. dev foundation is '${RED}Fadyazmy/developersfoundation${NC}')"
echo "Make sure to include the username and slash"

read REPO

while true; do
    read -p "Using ${RED}https://github.com/$REPO.git${NC} Are you sure this is correct? " yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "I give up, run da script to try again."; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

# LOL FINALLY ACTUALLY RUNNING THE COMMANDS
# git remote rm origin
echo -e "Changing ${RED}https://github.com/$REPO.git${NC} to origin."
git remote set-url origin https://github.com/$REPO.git
echo -e "Init origin master"
git push -u origin master
echo -e "Setting up API remote for api sync"
git remote add api https://github.com/nobodyrandom/blank-bootstrap.git

echo "Alls well. Done init."

# Ask about installing brew
while true; do
    read -p "Would you like brew installed on MacOS? (It'll help us install php later) " yn
    case $yn in
        [Yy]* )
            echo "Please ensure Xcode is installed on your mac."
            echo "xcode-select --install";
            xcode-select --install;
            echo "/usr/bin/ruby -e $(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)";
            /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)";
            break;;
        [Nn]* ) echo "Great, we won't install it then."; break;;
        * ) echo "Please answer yes or no.";;
    esac
done

# Check if brew is installed
if [ `which brew | wc -m` != 0 ]; then
    # Brew is installed!
    BREW=1;
else
    # Brew is not installed
    echo "If you would like this script to install php, please install brew first."
fi

# Check if Xcode is installed
if [ `find /Applications -maxdepth 1 -name Xcode.app | wc -m` != 0 ]; then
    # Xcode is installed!
    XCODE=1;
else
    # Xcode is not installed
    echo "If you would like this script to install php, please install Xcode first."
fi

sleep 1

while [[ BREW -eq 1 && XCODE -eq 1 ]]; do
    read -p "Shall we install php on your Mac? " yn
    case $yn in
        [Yy]* ) echo "Future tip: If you run into problems, try updating Xcode Command Line Tools.";
            brew tap homebrew/dupes;
            brew tap homebrew/versions;
            brew tap homebrew/homebrew-php;
            brew install php70;
            break;;
        [Nn]* ) echo "Php will not be set up."; break;;
        * ) echo "Please answer yes or no.";;
    esac
done

sleep 1

while true; do
    read -p "Do you want to init composer as well? (php must be setup for this to work)" yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "Okay :("; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

php composer.phar update