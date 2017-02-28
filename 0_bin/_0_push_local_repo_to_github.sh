#!/bin/bash

##ローカルで作ったレポジトリをgithubにpushする##

#git initした場合、もう一度init要らない
if [ ! -x ".git" ]; then
	#echo "01: git init"
	git init
fi

#addする
#echo "02: git add"
git add .

#commitする
#echo "03: git commit"
echo "Please input a summary for the commit:"
read summary
git commit -m "$summary"

#remoteのリポジトリを指定する
#echo "04: git remote add"
echo "Please input github username:"
read username
echo "Please input github repositoryname:"
read repositoryname
git remote add origin https://github.com/$username/$repositoryname

#pushする
#echo "05: git push"
git push origin master

if [ $? -ne 0 ]; then
	echo "PUSH ERROE!"
	exit 0;
else
	echo "DONE!"
fi
