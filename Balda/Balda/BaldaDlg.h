// BaldaDlg.h : header file
//

#pragma once


// CBaldaDlg dialog
struct SETKA  
{
	//CStatic Static;
};
class CBaldaDlg : public CDialog
{
// Construction
public:
	CBaldaDlg(CWnd* pParent = NULL);	// standard constructor
	CStatic Static[101];
	CRgn rgnStatic[101];
	CRgn rgnButton[34];
	CEdit *Edit;
	CString String;
	CString String1;
	CListBox List1,List2;
	CBrush* m_pEditBkBrush;
	CBrush* StaticBrush;
	CButton*Button;
	CButton*Button1;
	NOTIFYICONDATA SysTrey;
	
	enum { IDD = IDD_BALDA_DIALOG };

	protected:
	virtual void DoDataExchange(CDataExchange* pDX);	// DDX/DDV support	
// Implementation
protected:
	HICON m_hIcon;

	// Generated message map functions
	virtual BOOL OnInitDialog();
	afx_msg void OnSysCommand(UINT nID, LPARAM lParam);
	afx_msg void OnPaint();
	afx_msg void OnLButtonUp(UINT nFlags,CPoint point);
	afx_msg void OnLButtonDown(UINT nFlags, CPoint point);
	afx_msg void OnMouseMove(UINT nFlags, CPoint point);
	afx_msg void Logic();
	afx_msg void AddText();
	afx_msg void Komp();
	afx_msg void Count();
	afx_msg HCURSOR OnQueryDragIcon();
	afx_msg void OnFon1();
	afx_msg void OnFon2();
	afx_msg void OnFon3();
	afx_msg void OnChek();
	afx_msg void OnChekEn();
	afx_msg void Language1();
	afx_msg void Language2();
	afx_msg void OnRButtonUp(UINT nFlags, CPoint point);
	afx_msg LRESULT OnIcon(WPARAM wp, LPARAM lp);
	afx_msg HBRUSH OnCtlColor(CDC* pDC, CWnd* pWnd, UINT nCtlColor);
	afx_msg void OnTimer(UINT);
	afx_msg void Exit();
	afx_msg void NewGame();
	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedButton1();
public:
	afx_msg void OnBnClickedButton2();
};
