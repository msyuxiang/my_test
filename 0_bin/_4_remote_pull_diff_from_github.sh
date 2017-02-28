#!/bin/bash

##remoteでgithubからリポジトリをプルする##

#pullする
echo "Are you sure to pull?(y/n)"
read pull_Y_N
case $pull_Y_N in
	y) 
		git pull origin master
		if [ $? -ne 0 ]; then
			echo "PULL ERROE!"
		else
			echo "Pull Done!"
		fi
		exit
		;;
		
	*)
		echo "YOU QUITE PULL!"
		exit
		;;
esac


