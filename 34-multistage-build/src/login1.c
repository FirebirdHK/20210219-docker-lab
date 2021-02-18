#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char user_ID[32];

void open_shell(){
	system("/bin/sh");
}

void login(){
	printf("what is your password?\n");
	char password[128];
	gets(password);
	while(strncmp(password,"\xde\xad\xbe\xef",4)!=0){
		printf("Login fail! Password ");
		printf(password);
		printf(" not match.\nWhiat is your password?\n");
		gets(password);
	}
	printf("Login success.");
	open_shell();
}

int main(){
	setbuf(stdout,NULL);
	printf("What is your user id?\n");
	gets(user_ID);
	printf("Hi ");
	printf(user_ID);
	printf(".\n");

	login();
	return 0;
}
