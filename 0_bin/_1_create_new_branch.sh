#!/bin/bash
	
#create a new branch for pull request

echo "You need a branch for pull request."
echo "Please input a new branch name:"
read branchName
echo "Are you sure to create branch: "$branchName"?(y/n)"
read create_Y_N
case $create_Y_N in
	y) #create a new branch
		git branch $branchName	
		echo "Do you want to switch to "$branchName"?(y/n)"
		read switch_Y_N
		case $switch_Y_N in
			y) #switch to new branch
				git checkout $branchName
				git branch
				exit
				;;
			n) #delete branch or not
				echo "Delete "$branchName?"(y/n)"
				read delete_Y_N
				case $delete_Y_N in
					y)
						git branch -d $branchName
						git branch
						exit
						;;
					*)
						git branch
						exit
						;;
				esac
				;;
			*)
				git branch
				exit
				;;
		esac
		;;
	*)
		git branch
		exit
		;;
esac
