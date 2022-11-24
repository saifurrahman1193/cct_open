@echo off

echo .......................Stopping xampp........................
taskkill /F /IM chrome.exe /T > nul
taskkill /F /IM Firefox.exe /T > nul
taskkill /IM php.exe /F
taskkill /IM mysqld.exe /F
TIMEOUT /t 3 /nobreak
taskkill /IM xampp-control.exe /F
TIMEOUT /t 3 /nobreak
start /MIN C:\xampp\xampp_stop.exe
@REM start /MIN C:\xampp\xampp_start.exe
TIMEOUT /t 15 /nobreak

@echo:
@echo:
@echo:

echo .......................Starting xampp........................
start /MIN C:\xampp\xampp-control.exe
TIMEOUT /t 15 /nobreak

@echo:
@echo:
@echo:

echo .......................PIMS is being prpared to run........................

F:
cd F:\pims\softwares\cctl\cctl
start /MIN php artisan serve --host=116.193.218.190 --port=8000
TIMEOUT /t 5 /nobreak

@echo:
@echo:
@echo:

echo .......................PIMS is prepared. Strating in Firefox........................

TIMEOUT /t 3 /nobreak

start /MIN firefox 116.193.218.190:8000