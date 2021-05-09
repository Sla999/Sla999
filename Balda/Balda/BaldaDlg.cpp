// BaldaDlg.cpp : implementation file
//

#include "stdafx.h"
#include "Balda.h"
#include "BaldaDlg.h"

#ifdef _DEBUG
#define new DEBUG_NEW
#endif


// CAboutDlg dialog used for App About

class CAboutDlg : public CDialog
{
public:
	CAboutDlg();

// Dialog Data
	enum { IDD = IDD_ABOUTBOX };

	protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

// Implementation
protected:
	DECLARE_MESSAGE_MAP()
};

CAboutDlg::CAboutDlg() : CDialog(CAboutDlg::IDD)
{
}

void CAboutDlg::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}

BEGIN_MESSAGE_MAP(CAboutDlg, CDialog)
END_MESSAGE_MAP()


// CBaldaDlg dialog




CBaldaDlg::CBaldaDlg(CWnd* pParent /*=NULL*/)
	: CDialog(CBaldaDlg::IDD, pParent)
{
	m_hIcon = AfxGetApp()->LoadIcon(IDR_MAINFRAME);
	m_pEditBkBrush = new CBrush(RGB(0, 0, 0));
	StaticBrush= new CBrush(RGB(0,0,0));
}
int o=1;
void CBaldaDlg::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT1, String);
	DDX_Control(pDX,IDC_LIST1,List1);
	DDX_Control(pDX,IDC_LIST2,List2);
}

BEGIN_MESSAGE_MAP(CBaldaDlg, CDialog)
	ON_WM_SYSCOMMAND()
	ON_WM_PAINT()
	ON_WM_QUERYDRAGICON()
	ON_WM_LBUTTONUP()
	ON_WM_LBUTTONDOWN()
	ON_WM_RBUTTONUP()
	ON_WM_MOUSEMOVE()
	ON_WM_CTLCOLOR()/////////////////////////////////////////////////
	ON_COMMAND(ID_32773,Exit)
	ON_COMMAND(ID_GAME_EXIT,Exit)
	ON_COMMAND(ID_32776,OnFon1)
	ON_COMMAND(ID_32777,OnFon2)
	ON_COMMAND(ID_32778,OnFon3)
	ON_COMMAND(ID_32794,Language1)
	ON_COMMAND(ID_LANGUAGE_RUSSIAN,Language2)
	ON_COMMAND(ID_32798,OnChek)
	ON_COMMAND(ID_TOOLS_MOVINGLETERS,OnChekEn)
	ON_MESSAGE(WM_MYICONNOTIFY,OnIcon)
	ON_WM_TIMER()
	//}}AFX_MSG_MAP
	ON_BN_CLICKED(IDC_BUTTON1, &CBaldaDlg::OnBnClickedButton1)
	ON_BN_CLICKED(IDC_BUTTON2, &CBaldaDlg::OnBnClickedButton2)
END_MESSAGE_MAP()


// CBaldaDlg message handlers
CStatic move[33];

BOOL keyOff,keystatik;
int i,k;int T=31;
CString Leter[32]={"А","Б","В","Г","Д","Е","Ж","З","И","Й","К",
"Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц",
"Ч","Ш","Щ","Ъ","Ы","ь","Э","Ю","Я"};
int s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11,s12,s13,s14,s15,s16,s17,s18,s19;
BOOL CBaldaDlg::OnInitDialog()
{
	CDialog::OnInitDialog();

	// Add "About..." menu item to system menu.

	// IDM_ABOUTBOX must be in the system command range.
	ASSERT((IDM_ABOUTBOX & 0xFFF0) == IDM_ABOUTBOX);
	ASSERT(IDM_ABOUTBOX < 0xF000);

	CMenu* pSysMenu = GetSystemMenu(FALSE);
	if (pSysMenu != NULL)
	{
		CString strAboutMenu;
		strAboutMenu.LoadString(IDS_ABOUTBOX);
		if (!strAboutMenu.IsEmpty())
		{
			pSysMenu->AppendMenu(MF_SEPARATOR);
			pSysMenu->AppendMenu(MF_STRING, IDM_ABOUTBOX, strAboutMenu);
		}
	}

	// Set the icon for this dialog.  The framework does this automatically
	//  when the application's main window is not a dialog
	SetIcon(m_hIcon, TRUE);			// Set big icon
	SetIcon(m_hIcon, FALSE);		// Set small icon
	////////////////////////////////////////////////////////////////////////////
	NewGame();
	return TRUE;  // return TRUE  unless you set the focus to a control
}
void CBaldaDlg::NewGame()
{
	ModifyStyle(NULL,WS_MINIMIZEBOX,0);// минимизация диалога
	////////////////////////////////////////////////////////////////////////////
	Language2();
	//

	Edit=(CEdit*)GetDlgItem(IDC_EDIT1);
	String="                     Привет!";
	Edit->SetWindowText(String);
	////////////////////////////////////////////////////////////////////////////клетки
	int x1,x2,y1,y2;x1=204;x2=228;y1=90;y2=114;k=0;
	for (int j=0;j<=9;j++)
	{
		for (i=1;i<11;i++)
		{
			CRect rect(x1,y1,x2,y2);
			rgnStatic[i+k].CreateRectRgnIndirect(rect);//создание областей клеток 10 Х 10
			Static[i+k].Create("",WS_CHILD|WS_VISIBLE|WS_BORDER|SS_CENTER,rect,this);//создание клеток 10 Х 10
			//Static[1].SetIcon( ::LoadIcon(NULL, IDI_ERROR) );
			x1=x1+25;x2=x2+25;			
		}
		y1=y1+25;y2=y2+25;k=k+10;x1=204;x2=228;
	}	
	////////////////////////////////////////////////////////////////////////////создание областей кнопки
	x1=30,y1=359,x2=70,y2=399;//x1=50,x2=360,w=90,h=400;
	for (int i=1;i<=32;i++)
	{
		rgnButton[i].CreateEllipticRgn(x1,y1,x2,y2);
		move[i-1].Create(Leter[i-1],WS_CHILD|WS_BORDER,CRect(x1,y1,x1+15,y1+20),this);/////////Доделать
		if (i<=16)
		{
			x1=x1+38;x2=x2+38;
			if (i==16)
			{
				x1=30;x2=71;y1=399;y2=440;
			}
		}
		if (16<i)
		{
			x1=x1+38;x2=x2+38;
		}
	}

	keyOff=0;///////////////////////////////////////////////////////////////////keyOff
	Static[51].SetWindowText(Leter[10]);//К
	Static[52].SetWindowText(Leter[11]);//Л
	Static[53].SetWindowText(Leter[0]); //А
	Static[54].SetWindowText(Leter[2]); //В
	Static[55].SetWindowText(Leter[8]); //И
	Static[56].SetWindowText(Leter[0]); //А
	Static[57].SetWindowText(Leter[18]);//Т
	Static[58].SetWindowText(Leter[19]);//У
	Static[59].SetWindowText(Leter[16]);//Р
	Static[60].SetWindowText(Leter[0]); //А
	////////////////////////////////////////////////////////////////////////////
	s1=0,s2=0,s3=0,s4=0,s5=0,s6=0,s7=0,s8=0,s9=0,s10=0,s11=0,s12=0,s13=0,s14=0,
		s15=0,s16=0,s17=0,s18=0,s19=0;	
	SetTimer(ID_TIMER,1000,NULL); 
}
void CBaldaDlg::OnSysCommand(UINT nID, LPARAM lParam)
{
	if ((nID & 0xFFF0) == IDM_ABOUTBOX)
	{
		CAboutDlg dlgAbout;
		dlgAbout.DoModal();
	}
	else
	{
		CDialog::OnSysCommand(nID, lParam);
	}
}

HBRUSH CBaldaDlg::OnCtlColor(CDC* pDC, CWnd* pWnd, UINT nCtlColor) 
{
	switch (nCtlColor) 
	{
	case CTLCOLOR_LISTBOX:
		{
			pDC->SetTextColor(RGB(240, 0, 0));
			pDC->SetBkColor(RGB(0, 0, 0));
			return (HBRUSH)(m_pEditBkBrush->GetSafeHandle());
		}
	case CTLCOLOR_EDIT:
		{
			pDC->SetTextColor(RGB(240, 0, 0));
			pDC->SetBkColor(RGB(0, 0, 0));
			return (HBRUSH)(m_pEditBkBrush->GetSafeHandle());
		}
	case CTLCOLOR_STATIC:
		{
			pDC->SetTextColor(RGB(240, 0, 0));
			pDC->SetBkColor(RGB(0, 0, 0));
			return (HBRUSH)(StaticBrush->GetSafeHandle());
		}
	default:
		return (HBRUSH) CDialog::OnCtlColor(pDC, pWnd, nCtlColor);
	}
}
int chek=0,chek1=0;
void CBaldaDlg::OnChek()
{
	UpdateData(TRUE);
	CMenu Menu;
	Menu.LoadMenu(IDR_MENU1);//
	SetMenu(&Menu);	
	if (chek==0)
	{
		Menu.CheckMenuItem(ID_32798,MF_CHECKED |MF_BYCOMMAND);	
		chek1=0;
	}
	if (chek==1)
	{
		Menu.CheckMenuItem(ID_32798,MF_UNCHECKED |MF_BYCOMMAND);
		chek1=1;
	}
	chek=1-chek1;
}
int chekEn=0,chekEn1=0;
void CBaldaDlg::OnChekEn()
{UpdateData(TRUE);
	CMenu Menu;
	Menu.LoadMenu(IDR_MENU2);//
	SetMenu(&Menu);	
	if (chekEn==0)
	{
		Menu.CheckMenuItem(ID_TOOLS_MOVINGLETERS,MF_CHECKED |MF_BYCOMMAND);
		chekEn1=0;
	}
	if (chekEn==1)
	{
		Menu.CheckMenuItem(ID_TOOLS_MOVINGLETERS,MF_UNCHECKED |MF_BYCOMMAND);
		chekEn1=1;
	}
	chekEn=1-chekEn1;
	chek=chekEn;
}
int buk;int w;int m;int i1;int komtrue=0;int N=0;int MoveX=0,MoveY=0,NLet=0;
int z=0,z1;int butmove=0;
void CBaldaDlg::OnMouseMove(UINT nFlags, CPoint point)
{
	if(chek==1)
	{		
		CDialog::OnMouseMove(nFlags, point);
		if(butmove==0)
		{
			for (int n=1;n<=32;n++)
			{
				if(rgnButton[n].PtInRegion(point))
				{		
					z=n-1;
					keystatik=1;keyOff=0;	buk=1;m=n-1;					
					break;
				}
			}
		}		
		if (nFlags==MK_LBUTTON)
		{
			butmove=1;	
			move[z].ModifyStyle(NULL,WS_VISIBLE,1);			
			move[z].MoveWindow(point.x,point.y,18,20,1);
			RedrawWindow(NULL,&rgnButton[z+1],RDW_INVALIDATE | RDW_UPDATENOW  );
		}
		if(butmove==1)
		if (nFlags!=MK_LBUTTON)
		{
			move[z].DestroyWindow();	
				butmove=0;
				keystatik=1;
			for (int i=1;i<=100;i++)
			{
				if((keystatik==1)&&(rgnStatic[i].PtInRegion(point)))
				{	
					if ((i==s1)||(i==s2)||(i==s3)||(i==s4)||(i==s5)||
						(i==s6)||(i==s7)||(i==s8)||(i==s9)||(i==s10)||
						(i==s11)||(i==s12)||(i==s13)||(i==s14)||(i==s15)||
						(i==s16)||(i==s17)||(i==s18))
					{
						//AfxMessageBox("Нельзя ставить букву на букву!",MB_OK|MB_ICONSTOP);
						break;
					}
					if ((51<=i)&&(i<=60))
					{
						//AfxMessageBox("Нельзя ставить букву в этот ряд!",MB_OK|MB_ICONSTOP);
						break;
					}
					m=z+1;
					i1=i;/////////////////////////////////////////
					keystatik=0;komtrue=0;
					Logic();	
					if(N==0){Komp();}////////////////////////////////////////Komp
					break;
				}	//Komp();////////////////////////////////////////Komp
			}
		}
	}
}
void CBaldaDlg::OnLButtonDown(UINT nFlags,CPoint point)
{
	if(chek==1)
	{
		//D.Create("e",WS_CHILD|WS_VISIBLE|WS_BORDER,CRect(point.x+5,point.y-10,point.x+15,point.y+20),this);/////////Доделать
	}
		CDialog::OnLButtonDown(nFlags,point);
	if(chek==0)
	for (int n=1;n<=32;n++)
	{
		if(rgnButton[n].PtInRegion(point))
		{		
			keyOff=1;buk=0;
			RedrawWindow(NULL,&rgnButton[n],RDW_INVALIDATE | RDW_UPDATENOW  );
			break;
		}
	}
}


void CBaldaDlg::OnLButtonUp(UINT nFlags,CPoint point)
{
	if(chek==0)
	CDialog::OnLButtonUp(nFlags,point);
	for (int n=1;n<=32;n++)
	{	
		if(rgnButton[n].PtInRegion(point))
		{
			keystatik=1;keyOff=0;	buk=1;m=n-1;
			RedrawWindow(NULL,&rgnButton[n],RDW_INVALIDATE | RDW_UPDATENOW  );	
			
			break;
		}
	}
	for (int i=1;i<=100;i++)
	{
		
		if((keystatik==1)&&(rgnStatic[i].PtInRegion(point)))
		{	
			if ((i==s1)||(i==s2)||(i==s3)||(i==s4)||(i==s5)||
				(i==s6)||(i==s7)||(i==s8)||(i==s9)||(i==s10)||
				(i==s11)||(i==s12)||(i==s13)||(i==s14)||(i==s15)||
				(i==s16)||(i==s17)||(i==s18))
			{
				AfxMessageBox("Нельзя ставить букву на букву!",MB_OK|MB_ICONSTOP);
				break;
			}
			if ((51<=i)&&(i<=60))
			{
				AfxMessageBox("Нельзя ставить букву в этот ряд!",MB_OK|MB_ICONSTOP);
				break;
			}
			i1=i;/////////////////////////////////////////
			keystatik=0;komtrue=0;
			Logic();
			Sleep(2000);
			if(N==0){
				
				Komp();}////////////////////////////////////////Komp
			break;
		}	
	}	
}
int u;int ss1=0;int kom=0;
void CBaldaDlg::Logic()
{
	//if ((41<=i)&&(i<=50))
	if ((i1==41)||(i1==61))
	{
		if ((s19==1)&&(Leter[m]=="С")){String="Склад";s19=i1;AddText();}
	}
	if ((i1==43)||(i1==63))
	{
		if ((s1==0)&&(Leter[m]=="Н")){String="Клан";s1=i1;AddText();}
		if ((s2==0)&&(Leter[m]=="Д")){String="Клад";s2=i1;s19=1;AddText();}
		else if ((s15==0)&&(Leter[m]=="Д")){String="Лад";s15=i1;AddText();}
		
		//kom=1;
	}
	if ((i1==44)||(i1==64))
	{
		if ((s11==0)&&(Leter[m]=="А")){String="Лава";s11=i1;AddText();}
		else if ((ss1==0)&&(s14==0)&&(Leter[m]=="А")){String="Авиатур";s14=i1;ss1=1;AddText();}
		if ((s12==0)&&(Leter[m]=="Я")){String="Ява";s12=i1;AddText();}
		//kom=1;
	}
	if ((i1==45)||(i1==65))
	{
		if ((s13==0)&&(Leter[m]=="Н")){String="Нива";s13=i1;AddText();}
		//kom=1;
	}
	if ((i1==46)||(i1==66))
	{
		if ((s3==0)&&(Leter[m]=="К")){String="Кат";s3=i1;AddText();}
		if ((s16==0)&&(Leter[m]=="М")){String="Мат";s16=i1;AddText();}//kom=1;
	}
	if ((i1==47)||(i1==67))
	{
		if ((s8==0)&&(Leter[m]=="А")){String="Рута";s8=i1;AddText();}//kom=1;
	}
	if ((i1==48)||(i1==68))
	{
		if ((ss1==0)&&(s10==0)&&(Leter[m]=="Р")){String="Авиатур";s10=i1;ss1=1;AddText();}
		if ((s4==0)&&(Leter[m]=="Т")){String="Тур";s4=i1;AddText();}
		if ((s7==0)&&(Leter[m]=="Ш")){String="Шут";s7=i1;AddText();}
		if ((s9==0)&&(Leter[m]=="М")){String="Мур";s9=i1;AddText();}//kom=1;
	}
	if ((i1==49)||(i1==69))
	{
		if ((s5==0)&&(Leter[m]=="А")){String="Тура";s5=i1;AddText();}//kom=1;
	}
	if((i1==50)||(i1==70))
	{
		if ((s6==0)&&(Leter[m]=="Ш")){String="Шар";s6=i1;AddText();}//kom=1;
	}

	/*if (komtrue==0)
	{
		N=1;
		if(AfxMessageBox("Слово не известно,добавить в список?",MB_YESNO|MB_ICONQUESTION)== IDYES)
		{
			CString StrEdi;
			
			Edit->SetFocus();
			Edit->SetWindowText(Leter[m]);
			//Edit->SetWindowText(StrEdi);
			
			//AddText();N=0;
		
			
		}
		
	}*/
	//else{AfxMessageBox("Слово не известно или повторяется",MB_OK|MB_ICONQUESTION);}
	
}
int XCount,YCount;int len=0,lenK=0,len1=0,lenK1=0;CString StrLen;
void CBaldaDlg::AddText()
{	
	Static[i1].SetWindowText(Leter[m]);
	
	if (komtrue==0)
	{Edit->SetWindowText(String);///////////////////////////	
	KillTimer(ID_TIMER);T=31;SetTimer(ID_TIMER,1000,NULL);	
		XCount=130,YCount=25;
		len=strlen(String);	
		len1+=len;		
		if (len1<10){StrLen.Format("00%d",len1);}
		if (10<=len1){StrLen.Format("0%d",len1);}
		Count();
		List1.AddString(String);////////////////////////		
	}
	if (komtrue==1)
	{Edit->SetWindowText(String);///////////////////////////
		KillTimer(ID_TIMER);T=31;SetTimer(ID_TIMER,1000,NULL);
		XCount=470,YCount=25;	
		lenK=strlen(String);	
		lenK1+=lenK;
		if (lenK1<10){StrLen.Format("00%d",lenK1);}
		if (10<=lenK1){StrLen.Format("0%d",lenK1);}
		Count();
		List2.AddString(String);////////////////////////
		kom=1;
	}	
}

void CBaldaDlg::Count()
{		
	CClientDC CountText(this);
	CFont FontCount;
	COLORREF TextColor,FonText;
	TextColor = RGB(240, 0, 0);  // Красный цвет
	FonText = 0;//RGB(2, 147, 253);   // Белый цвет
	FontCount.CreateFont(36,0,0,0,FW_LIGHT,FALSE,FALSE,0,
		DEFAULT_CHARSET ,OUT_DEFAULT_PRECIS,
		CLIP_DEFAULT_PRECIS,DEFAULT_QUALITY ,
		DEFAULT_PITCH,"Arial");
	//CountText.SetBkMode(TRANSPARENT);
	CountText.SetBkColor(FonText);	// Установка цвета фона "под буквами"
	CountText.SetTextColor(TextColor);	// Установка цвета текста
	CountText.SelectObject(&FontCount);
	CountText.TextOut(XCount,YCount,StrLen);// //////////////////////////////////////////////////////
}
void CBaldaDlg::Komp()
{//Sleep(1000);
	SetTimer(ID_TIMER,1000,NULL);T=20;
	int u=0;komtrue=1;
	for (int i=1;i<=100;i++)
	{
		for (int m1=0;m1<=31;m1++)
		{
			if ((41<=i)&&(i<=50)||(61<=i)&&(i<=70))
			{
				if ((i!=s1)&&(i!=s2)&&(i!=s3)&&(i!=s4)&&(i!=s5)&&
					(i!=s6)&&(i!=s7)&&(i!=s8)&&(i!=s9)&&(i!=s10)&&
					(i!=s11)&&(i!=s12)&&(i!=s13)&&(i!=s14)&&(i!=s15)&&
					(i!=s16)&&(i!=s17)&&(i!=s18))
				{
					//u=1;//////////////////////////
					m=m1;
					//Leter[m];
					i1=i;
					//Sleep(200);
					Logic();
										
				}
			}
			if (kom==1)
			{
				
				break;
			}
			
		}
		if (kom==1)
		{
			kom=0;
			break;
		}
	}
}
void CBaldaDlg::OnFon1()
{
	UpdateWindow();
	o=1;
	RedrawWindow();
	OnPaint();
}
void CBaldaDlg::OnFon2()
{
	UpdateWindow();
	o=2;
	RedrawWindow();
	OnPaint();
}
void CBaldaDlg::OnFon3()
{
	UpdateWindow();
	o=3;
	RedrawWindow();
	OnPaint();
}

void CBaldaDlg::Language1()
{
	CMenu Menu,*pMenu;
	Menu.LoadMenu(IDR_MENU2);
	SetMenu(&Menu);
	Button=(CButton*)GetDlgItem(IDC_BUTTON1);
	Button->SetWindowText("Answer");
	Button1=(CButton*)GetDlgItem(IDC_BUTTON2);
	Button1->SetWindowText("Skip");
}
void CBaldaDlg::Language2()
{
	CMenu Menu,*pMenu;
	Menu.LoadMenu(IDR_MENU1);
	SetMenu(&Menu);
	Button=(CButton*)GetDlgItem(IDC_BUTTON1);
	Button->SetWindowText("Подсказка");
	Button1=(CButton*)GetDlgItem(IDC_BUTTON2);
	Button1->SetWindowText("Пропустить");
}
void CBaldaDlg::OnPaint()
{
	UpdateData();
	///////////////////////////////////////////////////////Шрифт Буквы
	CFont Font;
	Font.CreateFont(26,0,0,0,FW_LIGHT,FALSE,FALSE,0,
		DEFAULT_CHARSET ,OUT_DEFAULT_PRECIS,
		CLIP_DEFAULT_PRECIS,DEFAULT_QUALITY ,
		DEFAULT_PITCH,"Arial");
	CClientDC DC(this);
	DC.SelectObject(&Font);
	///////////////////////////////////////////////////////Цвет буквы
	COLORREF textColor,Color;
	textColor = RGB(240, 0, 0);  // Черный цвет
	Color = 0;//RGB(2, 147, 253);   // Белый цвет
	CBrush Brush;					 // кисть
	Brush.CreateSolidBrush(Color);	// Создание новой кисти
	///////////////////////////////////////////////////////Картинка
	CPaintDC pDC(this);	
	CDC view,FS;
	CBitmap picture;
	//picture.LoadBitmap(IDB_BITMAP2);
	switch(o)
	{
	case 1:picture.DeleteObject();
		picture.LoadBitmap(IDB_BITMAP2);
		break;
	case 2:picture.DeleteObject();
		picture.LoadBitmap(IDB_BITMAP6);
		break;
	case 3:picture.DeleteObject();
		picture.LoadBitmap(IDB_BITMAP7);
		break;
	////////////////////////////////////////////////////////////////////////////////////////////////
	}
	
	view.CreateCompatibleDC(&pDC);
	view.SelectObject(&picture);
	pDC.BitBlt(0,0,690,480,&view,0,0,SRCCOPY);
	///////////////////////////////////////////////////////Кнопка
	int x1=30,x2=360,w=70,h=400;//Координаты ButtonOff
	int x3=32,x4=360,w3=72,h4=402;//Координаты ButtonOn
	int LetX=40,LetY=364;//Координаты Буквы Off
	int LetX1=42,LetY1=364;//On
	k=0;
	CDC butt1,butt;
	CBitmap button1[33],button2[33];//ButtonOff,ButtonOn
	if(o==1)
	DC.SetBkColor(Color);	// Установка цвета фона "под буквами"
	DC.SetTextColor(textColor);	// Установка цвета текста
	DC.SetBkMode(TRANSPARENT);
	
	if(keyOff==0)///////////////////////////////ButtonOff
	{
		butt1.CreateCompatibleDC(&pDC);		
		for (int i=1;i<=32;i++)// Кнопки в два ряда
		{
			Leter[i-1];
			
			if (buk==0)
			{
				//move.Create(Leter[i-1],WS_CHILD|WS_VISIBLE|WS_BORDER,CRect(LetX,LetY,LetX+10,LetY+10),this);
				MoveX=LetX;MoveY=LetY;NLet=i-1;
				DC.TextOut(LetX,LetY,Leter[i-1]);// координаты буквы
				//move[NLet].SetWindowText(Leter[NLet]);
			}
			if (m==i-1)
			{
				//move[i-1].Create("",WS_CHILD|WS_VISIBLE|SS_LEFT,CRect(LetX,LetY,LetX+10,LetY+30),this);
				MoveX=LetX;MoveY=LetY;NLet=i-1;
				DC.TextOut(LetX,LetY,Leter[i-1]);// координаты буквы	2-ой заход
				//move[i-1].SetWindowText(Leter[i-1]);
			}			
			button2[i].DeleteObject();	
			button1[i].LoadBitmap(IDB_BITMAP3);			
			butt1.SelectObject(&button1[i]);
			pDC.BitBlt(x1,x2,w,h,&butt1,0,0,SRCPAINT);
			
			if (i<=16)
			{
				x1=x1+38;w=w+38;//смещение кнопок
				LetX=LetX+38;//смещение букв
				if (i==16)
				{
					x1=30;w=70;x2=400;h=440;LetX=40;LetY=404;
				}
			}
			if (16<i)
			{
				x1=x1+38;w=w+38;
				LetX=LetX+38;//смещение букв второй ряд
			}			
		}
		
	}
			//Static1->SetWindowText(Leter1);
	
	if (keyOff==1)////////////////////////////////ButtonOn
	{
		//DC.SetBkColor(Color);	// Установка цвета фона "под буквами"
		//DC.SetTextColor(textColor);	// Установка цвета текста	
		//DC.TextOut(27,364,"A");// координаты буквы
		//button1.DeleteObject();
		//Leter1="A";////////////////////////////////////////////////
		//DC.TextOut(39,362,Leter1);// координаты буквы
		butt.CreateCompatibleDC(&pDC);
		
		//DC.TextOut(LetX1,LetY1,Leter[w]);// координаты буквы
	
		for (int i=1;i<=32;i++)// Кнопки в два ряда
		{
			
			button1[i].DeleteObject();		
			button2[i].LoadBitmap(IDB_BITMAP4);
			butt.SelectObject(&button2[i]);
			pDC.BitBlt(x3,x4,w3,h4,&butt,0,0,SRCPAINT);
			if (i<=16)
			{
				x3=x3+38;w3=w3+38;
				LetX1=LetX1+38;//смещение букв
				if (i==16)
				{
					x3=32;w3=72;x4=400;h4=440;LetX1=40;LetY1=404;
				}
			}
			if (16<i)
			{
				x3=x3+38;w3=w3+38;
				LetX1=LetX1+38;//смещение букв второй ряд
			}
		}
		buk=0;
	}
	
	////////////////////////////////////////////////////
	if (IsIconic())
	{
		CPaintDC dc(this); // device context for painting

		SendMessage(WM_ICONERASEBKGND, reinterpret_cast<WPARAM>(dc.GetSafeHdc()), 0);

		// Center icon in client rectangle
		int cxIcon = GetSystemMetrics(SM_CXICON);
		int cyIcon = GetSystemMetrics(SM_CYICON);
		CRect rect;
		GetClientRect(&rect);
		int x = (rect.Width() - cxIcon + 1) / 2;
		int y = (rect.Height() - cyIcon + 1) / 2;

		// Draw the icon
		dc.DrawIcon(x, y, m_hIcon);
	}
	else
	{
		CDialog::OnPaint();
	}
}
void CBaldaDlg::OnRButtonUp(UINT nFlags,CPoint point)// События с окном
{
	ShowWindow(SW_HIDE);	// Исчезновение окна
	SysTrey.hWnd=m_hWnd;
	SysTrey.uID=NULL;
	SysTrey.uFlags= NIF_TIP | NIF_MESSAGE | NIF_ICON;
	SysTrey.uCallbackMessage=WM_MYICONNOTIFY;
	HICON hIcon;
	hIcon=AfxGetApp()->LoadIcon(IDR_MAINFRAME);// загрузка иконки
	SysTrey.hIcon=hIcon;
	strcpy(SysTrey.szTip,"Игра Балда");// ТулТип
	Shell_NotifyIcon(NIM_ADD,&SysTrey);// добавление иконки в систрей	
}
HCURSOR CBaldaDlg::OnQueryDragIcon()
{
	return static_cast<HCURSOR>(m_hIcon);
}
void CBaldaDlg::OnBnClickedButton1()
{
	len=0;lenK=0;len1=0;lenK1=0;
	KillTimer(ID_TIMER);T=31;SetTimer(ID_TIMER,1000,NULL);
	String="                     Привет!";
	komtrue=0;
	AddText();
	StrLen="000";
	Count();
	komtrue=1;
	AddText();
	StrLen="000";
	Count();
	Edit->SetWindowText(String);
		for (int y=1;y<100;y++)
		{
			if((y<=50)||(60<y))
			Static[y].SetWindowText("");
		}
	List1.ResetContent();
	List2.ResetContent();
	s1=0,s2=0,s3=0,s4=0,s5=0,s6=0,s7=0,s8=0,s9=0,s10=0,s11=0,s12=0,s13=0,s14=0,
		s15=0,s16=0,s17=0,s18=0,s19=0;
}

void CBaldaDlg::OnBnClickedButton2()
{
	
}
LRESULT CBaldaDlg::OnIcon(WPARAM wp, LPARAM lp)// реакция на иконку в трее
{
	if (lp==515) // = двойному щелчку LButton
	{
		ShowWindow(SW_NORMAL);// Показывание окна в нормальном виде
		SysTrey.hWnd=m_hWnd;
		SysTrey.uID=NULL;
		SysTrey.uFlags= NIF_TIP | NIF_MESSAGE | NIF_ICON;
		SysTrey.uCallbackMessage=WM_MYICONNOTIFY;
		SysTrey.hIcon=0;
		SysTrey.szTip[0] = 0x00;// ТУЛТИП
		Shell_NotifyIcon(NIM_DELETE,&SysTrey);// Удаление иконки
	}
	return 1;
}

void CBaldaDlg::OnTimer(UINT time)
{
	T--;
	CString Tim;
	if (10<=T)
	{
		Tim.Format("%d сек.",T);
	}
	if ((0<T)&&(T<10))
	{
		Tim.Format("0%d сек.",T);
	}
	if (T==0)
	{
		AfxMessageBox("Время закончилось!",MB_OK|MB_ICONSTOP);
		KillTimer(ID_TIMER);
	}
	CClientDC Time(this);
	CFont FontTime;
	COLORREF TimeColor,FonTime;
	TimeColor = RGB(240, 0, 0);  // Красный цвет
	FonTime = 0;//RGB(2, 147, 253);   // Белый цвет
	FontTime.CreateFont(30,0,0,0,FW_LIGHT,FALSE,FALSE,0,
		DEFAULT_CHARSET ,OUT_DEFAULT_PRECIS,
		CLIP_DEFAULT_PRECIS,DEFAULT_QUALITY ,
		DEFAULT_PITCH,"Arial");
	Time.SetBkColor(FonTime);	// Установка цвета фона "под буквами"
	Time.SetTextColor(TimeColor);	// Установка цвета текста
	Time.SelectObject(&FontTime);
	Time.TextOut(290,60,Tim);
}
void CBaldaDlg::Exit()
{
	OnOK();
}