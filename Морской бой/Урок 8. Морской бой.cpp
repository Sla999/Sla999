// Урок 8. Морской бой.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <iostream>
#include <time.h>
#include <conio.h>
#include <Windows.h>
#include <stdlib.h>
using namespace std;
int chel(int a);
int comp();
int moepole(int e);
int komppole(int h);
int yslovie_comp(int z);
int yslovie_chel(int x);
int yslovie_moepole(int q);
int comp_popal(int i);
int peretasovka_korabley();
int xod_kompa();
int komp_popal_xodit();
int pred_comp();
const int m = 11;
const int n = 11;
char B[m][n]={{' ','A','B','C','D','E','F','J','H','I','K'},
			{'1','0','0','0','0','0','0','0','0','0','0'},
			{'2','0','0','0','0','0','0','0','0','0','0'},
			{'3','0','0','0','0','0','0','0','0','0','0'},
			{'4','0','0','0','0','0','0','0','0','0','0'},
			{'5','0','0','0','0','0','0','0','0','0','0'},
			{'6','0','0','0','0','0','0','0','0','0','0'},
			{'7','0','0','0','0','0','0','0','0','0','0'},
			{'8','0','0','0','0','0','0','0','0','0','0'},
			{'9','0','0','0','0','0','0','0','0','0','0'},
			{'10','0','0','0','0','0','0','0','0','0','0'}};//мое поле
char D[m][n]={{' ','A','B','C','D','E','F','J','H','I','K'},
			{'1','0','0','0','0','0','0','0','0','0','0'},
			{'2','0','0','0','0','0','0','0','0','0','0'},
			{'3','0','0','0','0','0','0','0','0','0','0'},
			{'4','0','0','0','0','0','0','0','0','0','0'},
			{'5','0','0','0','0','0','0','0','0','0','0'},
			{'6','0','0','0','0','0','0','0','0','0','0'},
			{'7','0','0','0','0','0','0','0','0','0','0'},
			{'8','0','0','0','0','0','0','0','0','0','0'},
			{'9','0','0','0','0','0','0','0','0','0','0'},
			{'10','0','0','0','0','0','0','0','0','0','0'}};//компа поле
int d,c,k,l;
void main()
{
	srand(time(NULL));
	int v=peretasovka_korabley();
	cout<<"\t\t\t\tMorskoy Boy\n\n";
	for (;;)
	{
		int xod1=yslovie_chel(10);
		int xod2=yslovie_comp(10);
	}
}
char A[m][n]={{' ','A','B','C','D','E','F','J','H','I','K'},
			{'1','1','0','0','0','0','0','2','2','0','0'},
			{'2','0','0','0','2','2','0','0','0','0','0'},
			{'3','0','0','0','0','0','0','0','0','1','0'},
			{'4','0','4','4','4','4','0','0','0','0','0'},
			{'5','0','0','0','0','0','0','0','0','1','0'},
			{'6','2','2','0','0','0','0','0','0','0','0'},
			{'7','0','0','0','0','0','0','0','0','0','0'},
			{'8','0','0','2','0','0','3','3','3','0','0'},
			{'9','0','0','0','0','0','0','0','0','0','1'},
			{'10','0','0','0','0','0','0','0','0','0','0'}};//мое размещение кораблей
int yslovie_chel(int x)
{
	if ((A[k][l]==' ')||(A[k][l]=='0'))
	{
		A[k][l]='*';// стеляет комп
		A[0][0]=' ';
		cout<<"Ya xojy:\n";
		char t;
		cin>>t>>d;
		switch(t)
		{
		case 'A':c=1;break;		
		case 'B':c=2;break;	
		case 'C':c=3;break;
		case 'D':c=4;break;
		case 'E':c=5;break;
		case 'F':c=6;break;
		case 'J':c=7;break;
		case 'H':c=8;break;
		case 'I':c=9;break;
		case 'K':c=10;break;
		}
		int p=chel(c);
	}
	if ((A[k][l]=='1')||(A[k][l]=='2')||(A[k][l]=='3')||(A[k][l]=='4'))
	{
		A[k][l]='#';// стеляет комп
		cout<<"KOMP POPAL !!!\n\n";
		int p=chel(c);
		cout<<"\n";
		int u=comp_popal(c);
		cout<<"Komp xodit:OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO\n";
		int j=komp_popal_xodit();
		/*int T=xod_kompa();*/
		/*int s=pred_comp();*/
		int y=yslovie_chel(c);
	}
	return 0;
}
int komp_popal_xodit()
{
	if (D[k+1][l]!='*')
	{
		
		int B=comp();

	}
	if (D[k][l+1]!='*')
	{
		int B=comp();		
	}
	if (D[k-1][l]!='*')
	{
		int B=comp();		
	}
	if (D[k][l-1]!='*')
	{
		int B=comp();		
	}
	return 0;
}
int chel(int a)
{		
	for (int k=0;k<m;k++)
	{
		for (int l=0;l<n;l++)
		{
			cout<<A[k][l]<<"  ";//мои корабли
		}
		cout<<"\t";		
		int ydar1=yslovie_moepole(k);
		cout<<"\n\n";		
	}
return 0;
}
int yslovie_moepole(int q)
{	
	B[d][c]='*';
	B[d][c]==B[m][n];
	int a=moepole(q);
	return 0;
}
int moepole(int e)
{	
	for (int d=e;d<m;d++)
	{
		for (int c=0;c<n;c++)
		{
			cout<<B[d][c]<<"  ";//мое поле			
		}
		break;
	}
	return 0;
}
int chel_popal(int o);
int chel_popal(int o)
{		
	for (int k=0;k<m;k++)
	{
		for (int l=0;l<n;l++)
		{
			cout<<A[k][l]<<"  ";//мои корабли
		}
		cout<<"\t";
		B[d][c]='#';
		B[d][c]==B[m][n];
		for (int d=k;d<m;d++)
		{
			for (int c=0;c<n;c++)
			{
				cout<<B[d][c]<<"  ";//мое поле			
			}
			break;
		}
		cout<<"\n\n";		
	}
	return 0;
}
char C[m][n]={{' ','A','B','C','D','E','F','J','H','I','K'},
			{'1','0','0','0','0','0','0','0','0','0','0'},
			{'2','0','0','0','0','0','0','0','0','0','0'},
			{'3','0','0','0','0','0','0','0','0','0','0'},
			{'4','0','0','0','0','0','0','0','0','0','0'},
			{'5','0','0','0','0','0','0','0','0','0','0'},
			{'6','0','0','0','0','0','0','0','0','0','0'},
			{'7','0','0','0','0','0','0','0','0','0','0'},
			{'8','0','0','0','0','0','0','0','0','0','0'},
			{'9','0','0','0','0','0','0','0','0','0','0'},
			{'10','0','0','0','0','0','0','0','0','0','0'}};//размещение кораблей компа
int peretasovka_korabley()
{
	srand(time(NULL));
	d=1;c=1 ;
	int q=rand()%2;
	int x=rand()%8;int y=rand()%5;
	int r=rand()%3;int z=rand()%4;
	if (q==1)
	{
		C[d][c+z]='2';C[d][c+1+z]='2';C[d][c+9-r]='2';C[d][c+8-r]='2';
		C[d+2][c+x]='4';C[d+3][c+x]='4';C[d+4][c+x]='4';C[d+5][c+x]='4';
		C[d+2][c+2+x]='2';C[d+3][c+2+x]='2';
		C[d+5][c+9]='1';
		C[d+7][c+5-y]='1'; C[d+7][c+7-y]='3';C[d+7][c+8-y]='3';C[d+7][c+9-y]='3';
		C[d+9][c+r]='3';C[d+9][c+1+r]='3';C[d+9][c+2+r]='3';
		C[d+9][c+6]='1';     C[d+9][c+9-q]='1';
	}
	else
	{
		C[d+z][c]='2';C[d+z][c+1]='2';
		C[d+r][c+4]='4';C[d+1+r][c+4]='4';C[d+2+r][c+4]='4';C[d+3+r][c+4]='4';
		C[d+3-z][c+9]='2';C[d+3-z][c+8]='2';
		C[d+5][c+1]='1';  C[d+5-y][c+6]='2';C[d+4-y][c+6]='2'; C[d+5][c+9]='1'; 
		C[d+7][c+3-z]='3';C[d+8][c+3-z]='3';C[d+9][c+3-z]='3';C[d+7][c+5]='1';
		C[d+9][c+5]='1';C[d+7+r][c+7]='3';C[d+7+r][c+8]='3';C[d+7+r][c+9]='3';
	}
	
	return 0;
}
int xod_kompa()
{
	k=rand()%10+1;l=rand()%10+1;	
	return 0;
}
int yslovie_comp(int z)
{
	C[d][c]==C[m][n];
	if(C[d][c]=='0')
	{
		C[d][c]='*';		
		cout<<"Komp xodit:\n";
		int t=xod_kompa();
		int g=pred_comp();
		int v=yslovie_chel(k);
	}
	if((C[d][c]=='1')||(C[d][c]=='2')||(C[d][c]=='3')||(C[d][c]=='4'))
	{
		C[d][c]='#';
		cout<<"TU POPAL !!!\n";////////////////////////////////////////////////////////////////////////////////////
		/*int s=comp(c);*/
		cout<<"\n";
		int g=chel_popal(c);
		cout<<"\n";
		cout<<"Ya xojy:\n";
		char t;
		cin>>t>>d;
		switch(t)
		{
		case 'A':c=1;break;		
		case 'B':c=2;break;	
		case 'C':c=3;break;
		case 'D':c=4;break;
		case 'E':c=5;break;
		case 'F':c=6;break;
		case 'J':c=7;break;
		case 'H':c=8;break;
		case 'I':c=9;break;
		case 'K':c=10;break;
		}
		/*int v=comp(c);*/
		int p=chel(c);
		int f=yslovie_comp(c);
		
	}
	return 0;
}
int pred_comp()
{
	if (D[k][l]=='*')
	{
		int a=xod_kompa();
		int B=pred_comp();		
	}
	if (D[k][l]=='#')
	{
		int a=xod_kompa();
		int B=pred_comp();
	}
	int u=comp();
	return 0;
}
int comp()
{	
	if (D[k][l]!='*')
	{	
		switch(l)
		{
		case 1:cout<<"A";break;		
		case 2:cout<<"B";break;	
		case 3:cout<<"C";break;
		case 4:cout<<"D";break;
		case 5:cout<<"E";break;
		case 6:cout<<"F";break;
		case 7:cout<<"J";break;
		case 8:cout<<"H";break;
		case 9:cout<<"I";break;
		case 10:cout<<"K";break;
		}
		cout<<"\n"<<k<<"\n";//комп стреляет
		for (int d=0;d<m;d++)
		{
			for (int c=0;c<n;c++)
			{
				cout<<C[d][c]<<"  ";
			}
			cout<<"\t";		
			int ydar2=komppole(d);
			cout<<"\n\n";		
		}
	}
	
	return 0;
}
int komppole(int h)
{
	D[k][l]='*';
	D[0][0]=' ';
	D[k][l]==D[m][n];
	for (int k=h;k<m;k++)
	{
		for (int l=0;l<n;l++)
		{
			cout<<D[k][l]<<"  ";//поле компа			
		}
		break;
	}
	return 0;
}

int comp_popal(int i)
{		
	for (int d=0;d<m;d++)
	{
		for (int c=0;c<n;c++)
		{
			cout<<C[d][c]<<"  ";
		}
		cout<<"\t";	
		D[k][l]='#';
		D[k][l]==D[m][n];
		for (int k=d;k<m;k++)
		{
			for (int l=0;l<n;l++)
			{
				cout<<D[k][l]<<"  ";//поле компа			
			}
			break;
		}
		cout<<"\n\n";		
	}
	return 0;
}

