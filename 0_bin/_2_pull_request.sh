#!/bin/bash

##ローカルで修正したファイルをgithubにpush requestする##

#Git command continue or not
function GitContinue(){
    case $1 in
		y)
			return 1
			;;
		n)
			return 0
			;;
		*)
			echo "Please input 'y' or 'n' for git continue."
			read Y_N
			GitContinue $Y_N
			;;
	esac
}

#git add
git status
echo "01. git Add? (y/n)"
read add_Y_N
if GitContinue $add_Y_N; then
	echo "YOU QUITE ADD!"
	exit 0
else
	#echo "git add:"
	git add .
fi

#git commit
echo "02.git commit? (y/n)"
read commit_Y_N
if GitContinue $commit_Y_N; then
	echo "YOU QUITE commit!"
	exit 0
else
	#commitする
	echo "Please input a summary for the commit:"
	read summary
	git commit -m "$summary"
fi

#push
echo "03.git Push? (y/n)"
read push_Y_N

if GitContinue $push_Y_N; then
	echo "YOU QUITE PUSH!"
	exit 0
else	
	git branch
	echo "Please input the branch name for push:"
	read branch_name
	git push origin $branch_name
	
	if [ $? -ne 0 ]; then
		echo "PUSH ERROE!"
		exit 0
	else
		echo "Push Request Done!"
	fi
fi





