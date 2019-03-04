#!/bin/bash


	echo " "
	echo "GIT PUSH - ERIC RODRIGUES"
	echo "Programa para a automatização de upload GIT"
	echo " "

 	echo -e "Digite seu user.name"
 	read user
 	echo " "

 	echo -e "Digite seu user.email"
 	read email
 	echo " "

	sudo git config --global user.name "$user"
	sudo git config --global user.email "$email"

	sudo git init
	echo " "

	echo -e "Digite a URL do projeto"
	read url
	echo " "

	sudo git remote add origin $url
	echo " "

	sudo git add --all *
	echo " "

	sudo git commit -m "Initial commit"
	echo " "

	sudo git push -u origin master
	echo " "
